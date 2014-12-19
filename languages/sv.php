<?php

l::set(array(
  
  // global 
  'ok' => 'Ok',
  'cancel' => 'Avbryt',
  'nochanges' => 'Ingen ändring',

  // header
  'header.title' => 'Kirby',
  'header.logout' => 'Logga ut', 
  
  // subheader
  'subheader.home' => 'Hem',  
  'subheader.site' => 'Er Sajt',
  'subheader.info' => 'Infomation',

  // tabs
  'tabs.overview' => 'Översikt',
  'tabs.info' => 'Redigera infomation',
  'tabs.content' => 'Innehåll',
  'tabs.files' => 'Filer',
  'tabs.options' => 'URL',
  'tabs.preview' => 'Förhandsgranskning',
  
  // dashboard
  'dashboard.edit' => 'Ändra',
  'dashboard.content' => 'Innehåll',
  'dashboard.content.empty' => 'Denna sida har inget innehåll',
  'dashboard.files' => 'Filer',
  'dashboard.template' => 'Mallar',
  'dashboard.stats.images' => 'Bilder', 
  'dashboard.stats.videos' => 'Video', 
  'dashboard.stats.docs' => 'Dokument', 
  'dashboard.stats.sound' => 'Ljud', 
  'dashboard.stats.others' => 'Annat', 

  // home
  'home.siteinfo' => 'Sajt infomation',
  'home.edit' => 'Ändra',
  'home.warning.title' => 'Vänligen åtgärda!',
  'home.warning.permissions.title' => 'Rättigheter',
  'home.warning.permissions.text' => 'Felaktiga rättigheter på <pre>content</pre> mappen. Var vänlig och ändra dem till <pre>0755</pre> för mapparna och till <pre>0666</pre> för filerna',
  'home.warning.blueprints.title' => 'Strukturer för innehåll',
  'home.warning.blueprints.text' => 'Det saknas Strukturer för innehåll för följande mappar<br /> <a href="http://getkirby.com/docs/panel/blueprints">Mer om strukturer för innehåll</a>',
  'home.warning.thumbs.title' => 'Tumnaglar',
  'home.warning.thumbs.text' => 'Vänligen skapa en mapp med namnet <pre>thumbs</pre> där din installation finns och sätt rättigheterna till <pre>0755</pre>',
  
  // siteinfo
  'siteinfo.button' => 'Spara',
  'siteinfo.errors.title' => 'Lägg till en titel',
  'siteinfo.errors.permissions' => 'Det går inte att skriva i <pre>content/site.txt</pre>, vänligen ändra dem till <pre>0755</pre>',
  
  // content form 
  'content.save' => 'Spara',
  'content.previous' => 'Föregående',
  'content.next' => 'Nästa',
  'content.invisible' => 'osynlig',
  
  // no content available
  'nocontent.title' => 'Ingen innehåll',
  'nocontent.text' => 'Det är inget innehåll på denna sida',
    
  // pages
  'pages.title' => 'Synliga undersidor',
  'pages.title.home' => 'Synliga sidor',
  'pages.home' => 'Hem',
  'pages.sort' => 'Sortera',
  'pages.add' => 'Lägg till',
  'pages.delete' => 'Ta bort',
  'pages.invisible' => 'Osynliga undersidor',
  'pages.invisible.home' => 'Osynliga sidor',
  'pages.no.visible' => 'Inga synliga sidor än så länge',
  'pages.no.invisible' => 'Inga osynliga sidor än så länge',
  'pages.moved' => 'Sidan har flyttats',
  'pages.sorted' => 'Sidan har omsorterats',
  'pages.show.more' => 'visa mer',
  'pages.show.less' => 'visa mindre',
  'pages.errors.notfound' => 'Sidan kunde inte hittas',
  'pages.errors.move' => 'Sidan kunde inte flyttas',
  'pages.errors.sort' => 'Alla sidor kunde inte sorteras',
  'pages.errors.nosort' => 'Det finns inget att sortera',

  // no subpages allowed
  'nopages.title' => 'Undersidor',
  'nopages.text' => 'Denna sida ska inte ha några undersidor',  
  
  // add page
  'pages.add.title' => 'Lägg till en ny sida',
  'pages.add.label.title' => 'Titel',
  'pages.add.label.url' => 'URL',
  'pages.add.label.template' => 'Mall',
  'pages.add.button' => 'Spara',
  'pages.add.errors.title' => 'Lägg till en titel',
  'pages.add.errors.url' => 'En URL krävs',
  'pages.add.errors.characters' => 'Andvänd endast dessa tecken a-z, 0-9, _, - i URLen',
  'pages.add.errors.exists' => 'En annan sida har redan den URLen',
  'pages.add.errors.permissions' => 'Mappen kunde inte skapas',
  'pages.add.success' => 'Sidan har skapats',

  // update page
  'pages.update.errors' => 'Vänligen fyll i alla fält enligt instruktionerna',
    
  // delete page  
  'pages.delete.title' => 'Ta bort sidan',
  'pages.delete.button' => 'Ta bort',
  'pages.delete.errors.homepage' => 'Det är omöjligt att ta bort hemsidan',
  'pages.delete.errors.errorpage' => 'Det är omöjligt att ta bort felmeddelandet',
  'pages.delete.errors.subpages' => 'Sidan har undersidor, de måste tas bort först.',
  'pages.delete.errors.permissions' => 'Kunde inte ta bort sidan',
  'pages.delete.success' => 'Sidan är borttagen',

  // options
  'options.url' => 'URL',
  'options.button' => 'Spara',
  'options.home.url' => 'URL',
  'options.home.text' => 'Det är omöjligt att ändra URLen till hemsidan',
  'options.error.text' => 'Det är omöjligt att ändra URLen till felmeddelandet',
  'options.errors.homepage' => 'Det är omöjligt att ändra URLen till hemsidan',
  'options.errors.errorpage' => 'Det är omöjligt att ändra URLen till felmeddelandet',
  'options.errors.characters' => 'Andvänd endast dessa tecken a-z, 0-9, _, -',
  'options.errors.permissions' => 'Rättigheter för att göra detta saknas',
  'options.errors.exists' => 'Den nya URLen finns redan',
  'options.errors.move' => 'Mappen <pre>content</pre> kan inte flyttas',

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
  'files.upload.title' => 'Ladda upp en fil',
  'files.upload.choose' => 'Välj en fil att ladda up…',
  'files.upload.button' => 'Ladda upp',
      
  // login  
  'login.button' => 'Logga in',
  'login.username' => 'Användarnamn',
  'login.password' => 'Lösenord',
  'login.error' => 'Inkorrekt användarnamn eller lösenord',
  'login.success' => 'Inloggningen lyckades',
  'login.error.browser.title' => 'Du använder en föråldrad webbläsare',
  'login.error.browser.text' => 'Vänligen uppgradera till senaste versionen av Google Chrome, Firefox, Safari eller Internet Explorer.',
  
  // upload
  'upload.errors.missing-file' => 'Filen saknas',
  'upload.errors.file-exists' => 'Det går inte att skriva över befintlig fil med samma namn',
  'upload.errors.invalid-upload' => 'Uppladdningen misslyckades',
  'upload.errors.too-big' => 'För stor fil',
  'upload.errors.invalid-file' => 'Otillåten filtyp',
  'upload.errors.move-error' => 'Det gick inte att flytta filen till sin destination på servern',
  'upload.success' => 'Uppladdningen lyckades!',

  // writer
  'writer.errors.permissions' => 'Går inte att skriva till filen',
  'writer.errors.write' => 'Misslyckades med att skriva data',
  'writer.success' => 'Filen sparades',
  
  // form buttons
  'form.buttons.h1' => 'h1',
  'form.buttons.h2' => 'h2',
  'form.buttons.h3' => 'h3',
  'form.buttons.bold' => 'fet',
  'form.buttons.bold.sample' => 'fet text',
  'form.buttons.italic' => 'kursiv',
  'form.buttons.italic.sample' => 'kursiv text',
  'form.buttons.link' => 'länk',
  'form.buttons.email' => 'epost',

  'form.overlay.link.title' => 'Infoga länk',
  'form.overlay.link.link' => 'Länk',
  'form.overlay.link.text' => 'Länktext (valfri)',
  'form.overlay.link.button' => 'Infoga',

  'form.overlay.email.title' => 'Infoga Epost',
  'form.overlay.email.link' => 'Epost adress',
  'form.overlay.email.text' => 'Länktext (valfri)',
  'form.overlay.email.button' => 'Infoga',
  
));
