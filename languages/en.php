<?php

l::set(array(
  
  // global 
  'ok' => 'Ok',
  'cancel' => 'Cancel',
  'nochanges' => 'Nothing has changed',

  // header
  'header.title' => 'Kirby',
  'header.logout' => 'Logout', 
  
  // subheader
  'subheader.home' => 'Home',  
  'subheader.site' => 'Your Site',
  'subheader.info' => 'Info',

  // tabs
  'tabs.overview' => 'Overview',
  'tabs.info' => 'Edit Info',
  'tabs.content' => 'Content',
  'tabs.files' => 'Files',
  'tabs.options' => 'URL',
  'tabs.preview' => 'Preview',
  
  // dashboard
  'dashboard.edit' => 'Edit',
  'dashboard.content' => 'Content',
  'dashboard.content.empty' => 'This page has no content',
  'dashboard.files' => 'Files',
  'dashboard.template' => 'Template',
  'dashboard.stats.images' => 'Images', 
  'dashboard.stats.videos' => 'Videos', 
  'dashboard.stats.docs' => 'Docs', 
  'dashboard.stats.sound' => 'Sound', 
  'dashboard.stats.others' => 'Others', 

  // home
  'home.siteinfo' => 'Site info',
  'home.edit' => 'Edit',
  'home.warning.title' => 'Please fix first!',
  'home.warning.permissions.title' => 'Permissions',
  'home.warning.permissions.text' => 'The permissions in your content directory are not set properly. Please change the permissions for all folders to <strong>0755</strong> and for all files to <strong>0666</strong>',
  'home.warning.blueprints.title' => 'Blueprints',
  'home.warning.blueprints.text' => 'There are no blueprints available for the following templates<br /> Read more about <a href="http://getkirby.com/docs/panel/blueprints">how to install blueprints for your templates</a>',
  'home.warning.thumbs.title' => 'Thumbnails',
  'home.warning.thumbs.text' => 'Please add a <strong>thumbs</strong> directory to the main directory of your installation and change its permissions to <strong>0755</strong>',
  
  // siteinfo
  'siteinfo.button' => 'Save',
  'siteinfo.errors.title' => 'Please add a title',
  'siteinfo.errors.permissions' => '<strong>content/site.txt</strong> is not writable. <br />Please change its permissions and try again.',
  
  // content form 
  'content.save' => 'Save',
  'content.previous' => 'Previous',
  'content.next' => 'Next',
  'content.invisible' => 'invisible',
  
  // no content available
  'nocontent.title' => 'No Content',
  'nocontent.text' => 'There\'s no content for this page available.',
    
  // pages
  'pages.title' => 'Visible subpages',
  'pages.title.home' => 'Visible pages',
  'pages.home' => 'Home',
  'pages.sort' => 'Sort',
  'pages.add' => 'Add',
  'pages.delete' => 'Remove',
  'pages.invisible' => 'Invisible subpages',
  'pages.invisible.home' => 'Invisible pages',
  'pages.no.visible' => 'No visible pages so far',
  'pages.no.invisible' => 'No invisible pages so far',
  'pages.moved' => 'The page has been moved',
  'pages.sorted' => 'The pages have been sorted',
  'pages.show.more' => 'show more',
  'pages.show.less' => 'show less',
  'pages.errors.notfound' => 'The page could not be found',
  'pages.errors.move' => 'The page could not be moved',
  'pages.errors.sort' => 'Not all pages could be sorted',
  'pages.errors.nosort' => 'There\'s nothing to sort',

  // no subpages allowed
  'nopages.title' => 'Subpages',
  'nopages.text' => 'This page is not supposed to have subpages',  
  
  // add page
  'pages.add.title' => 'Add a new page',
  'pages.add.label.title' => 'Title',
  'pages.add.label.url' => 'URL',
  'pages.add.label.template' => 'Template',
  'pages.add.button' => 'Save',
  'pages.add.errors.title' => 'Please add a title',
  'pages.add.errors.url' => 'Please add a URL for your page',
  'pages.add.errors.characters' => 'Please only use the following characters a-z, 0-9, _, - for the URL',
  'pages.add.errors.exists' => 'A page with that url already exists',
  'pages.add.errors.permissions' => 'The directory could not be created',
  'pages.add.success' => 'The page has been created',

  // update page
  'pages.update.errors' => 'Please fill out all fields correctly',
    
  // delete page  
  'pages.delete.title' => 'Delete this page',
  'pages.delete.button' => 'Delete',
  'pages.delete.errors.homepage' => 'You cannot delete the homepage',
  'pages.delete.errors.errorpage' => 'You cannot delete the error page',
  'pages.delete.errors.subpages' => 'This page has subpages. Please delete them first.',
  'pages.delete.errors.permissions' => 'The page could not be removed',
  'pages.delete.success' => 'The page has been removed',

  // options
  'options.url' => 'URL',
  'options.button' => 'Save',
  'options.home.url' => 'URL',
  'options.home.text' => 'You cannot change the URL of the homepage',
  'options.error.text' => 'You cannot change the URL of the error page',
  'options.errors.homepage' => 'You cannot change the URL of the homepage',
  'options.errors.errorpage' => 'You cannot change the URL of the error page',
  'options.errors.characters' => 'Please only use the following characters a-z, 0-9, _, -',
  'options.errors.permissions' => 'The content directory cannot be moved',
  'options.errors.exists' => 'The new URL already exists',
  'options.errors.move' => 'The content directory cannot be moved',

  // files
  'files.title' => 'Files',
  'files.upload' => 'Upload a new file',
  'files.edit' => 'Edit',
  'files.replace' => 'Replace',
  'files.delete' => 'Delete',
  'files.empty' => 'No files so far',

  'nofiles.title' => 'No Files',
  'nofiles.text' => 'This page is not supposed to have files',
  
  // delete file
  'files.delete.title' => 'Delete this file',
  'files.delete.button' => 'Delete',
  'files.delete.errors.notfound' => 'The file could not be found',
  'files.delete.errors.permissions' => 'The file could not be deleted',
  'files.delete.success' => 'The file has been deleted',

  // edit file
  'files.edit.title' => 'Edit file',
  'files.edit.filename' => 'Filename (without extension)',
  'files.edit.button' => 'Save',
  'files.edit.errors.filename' => 'Please enter a valid filename',
  'files.edit.errors.notfound' => 'The file could not be found',
  'files.edit.errors.exists' => 'The new name already exists',
  'files.edit.errors.permissions' => 'The file could not be renamed',
  'files.edit.success' => 'The file has been saved',

  // replace file
  'files.replace.title' => 'Replace this file',
  'files.replace.file' => 'File',
  'files.replace.choose' => 'Please choose a new file from your computer…',
  'files.replace.button' => 'Replace',
  'files.replace.errors.notfound' => 'The file could not be found',
  'files.replace.success' => 'The file has been replaced',

  // upload file
  'files.upload.title' => 'Upload a new file',
  'files.upload.choose' => 'Please choose a file from your computer…',
  'files.upload.button' => 'Upload',
      
  // login  
  'login.button' => 'Login',
  'login.username' => 'Username',
  'login.password' => 'Password',
  'login.error' => 'Invalid username or password',
  'login.success' => 'You have been logged in',
  'login.error.browser.title' => 'You are using an old browser',
  'login.error.browser.text' => 'Please upgrade to the latest version of Google Chrome, Firefox, Safari or Internet Explorer.',
  
  // upload
  'upload.errors.missing-file' => 'The file has not been found',
  'upload.errors.file-exists' => 'The file exists and cannot be overwritten',
  'upload.errors.invalid-upload' => 'The upload failed',
  'upload.errors.too-big' => 'The file is too big',
  'upload.errors.invalid-file' => 'The file type is not allowed',
  'upload.errors.move-error' => 'The file could not be moved to the server',
  'upload.success' => 'The file has been uploaded',

  // writer
  'writer.errors.permissions' => 'The file is not writable',
  'writer.errors.write' => 'The data could not be added',
  'writer.success' => 'The file has been saved',
  
  // form buttons
  'form.buttons.h1' => 'h1',
  'form.buttons.h2' => 'h2',
  'form.buttons.h3' => 'h3',
  'form.buttons.bold' => 'bold',
  'form.buttons.bold.sample' => 'bold text',
  'form.buttons.italic' => 'italic',
  'form.buttons.italic.sample' => 'italic text',
  'form.buttons.link' => 'link',
  'form.buttons.email' => 'email',

  'form.overlay.link.title' => 'Insert Link',
  'form.overlay.link.link' => 'Link',
  'form.overlay.link.text' => 'Link Text (optional)',
  'form.overlay.link.button' => 'Insert Link',

  'form.overlay.email.title' => 'Insert Email',
  'form.overlay.email.link' => 'Email Address',
  'form.overlay.email.text' => 'Link Text (optional)',
  'form.overlay.email.button' => 'Insert Email',
  
));