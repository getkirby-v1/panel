<?php

class me {

	function loggedIn() {
		return s::get('logged_in', false);
	}
	
	function login() {
			
		s::set('logged_in', false);		

    $accounts = spyc_load_file(c::get('root.site') . '/admin/accounts.php');
		$password = get('password');
		$username = get('username');

		if(!array_key_exists($username, $accounts)) return array(
			'status' => 'error',
			'msg'    => 'Invalid username'
		);
    
    // get the user data
    $user = $accounts[$username];

		if($password != a::get($user, 'pw')) return array(
			'status' => 'error',
			'msg'    => 'Invalid username or password'
		);
		
		s::set('logged_in', true);
		
		return array(
			'status' => 'success',
			'msg' => 'Yay!'
		);
							
	}
	
	function logout() {
		s::set('logged_in', false);		
    go(url());
	}

}

?>