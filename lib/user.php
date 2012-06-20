<?php

// direct access protection
if(!defined('KIRBY')) die('Direct access is not allowed');

class user extends obj {

  function __construct() {
    if($user = $this->checkAuth()) {
      $this->_ = $user;
    } 
  }
  
	function checkAuth() {

    $token = cookie::get('auth');
    if(empty($token)) return false;
				
		$user = s::get($token, false);

    if(empty($user)) return false;

    $account = self::load($user['username']);
    
    if(empty($account) || empty($user['username'])) return false;
            
    $account['token'] = $token;

    return $account;

	}

  function isLoggedIn() {
    return ($this->token && cookie::get('auth') && $this->token == cookie::get('auth')) ? true : false;
  }
	
	function login() {
			
    s::restart();

		$password = get('password');
		$username = get('username');
    
    if(empty($username) || empty($password)) return array(
			'status' => 'error',
			'msg'    => l::get('login.error')
		);

    $account = self::load($username);
    
    if(!$account) return array(
			'status' => 'error',
			'msg'    => l::get('login.error')
		);    
    
    // check for matching usernames
    if(str::lower($account['username']) != str::lower($username)) return array(
			'status' => 'error',
			'msg'    => l::get('login.error')
		);    
    
    // check for a matching password
    if(!self::checkPassword($account, $password)) return array(
			'status' => 'error',
			'msg'    => l::get('login.error')
		);

    // generate a random token
    $token = str::random();
        
    // add the username. 
    // It's only the key of the array so far. 
    $account['token'] = $token;
    
    // store the token in the cookie
    // and the user data in the session    
    cookie::set('auth', $token, 60*60*24);    		
		s::set($token, $account);
    
    // assign the user data to this obj
    $this->_ = $account;
		
		return array(
			'status' => 'success',
			'msg' => l::get('login.success')
		);
							
	}

	static function checkPassword($user, $password) {
    
    // check for empty passwords    
    if(empty($password) || empty($user['password'])) return false;

    // get the encryption
    $encryption = a::get($user, 'encrypt', false);
        
    // handle the different 
    // encryption types        
    switch($encryption) {
      // sha1 encoded
      case 'sha1':
        return (sha1($password) == $user['password']) ? true : false;
        break;
      // md5 encoded
      case 'md5':
        return (md5($password) == $user['password']) ? true : false;
        break;
      // plain passwords
      default:
        return ($password == $user['password']) ? true : false;
        break;    
    }    
    
    // we should never get here
    // but let's make sure
    return false;

	}
	
	function logout() {
    
    // overwrite the token      
    $token = str::random();
    // the cookie is valid for 24 hours
    cookie::set('auth', $token, 60*60*24);
    
    // restart the session    
    s::restart();
    
    // go to the homepage
    go(url());

	}

  static function load($username) {

    // check for an existing user account file
    $file = c::get('root.site') . '/' . c::get('panel.folder') . '/accounts/' . $username . '.php';
    
    if(!file_exists($file)) return false;
    
    // load the account credentials    
    content::start();
    require($file);
    $account = content::end(true);
    $account = spyc_load($account);

    if(!is_array($account)) return false;

    // check for required fields
    $missing = a::missing($account, array('username', 'password'));
    
    if(!empty($missing)) return false;
    
    return $account;
  
  }

}