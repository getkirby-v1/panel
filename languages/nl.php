<?php

/* 
 * author: Nils Hendriks <http://www.nirusu.me>
 * updated: Jesper van Haaren <http://jesper.co>
 */

l::set(array(
  
  // global 
  'ok' => 'Ok',
  'cancel' => 'Annuleer',
  'nochanges' => 'Er zijn geen wijzigingen',

  // header
  'header.title' => 'Kirby',
  'header.logout' => 'Uitloggen', 
  
  // subheader
  'subheader.home' => 'Home',  
  'subheader.site' => 'Uw Site',
  'subheader.info' => 'Info',

  // tabs
  'tabs.overview' => 'Overzicht',
  'tabs.info' => 'Bewerk Info',
  'tabs.content' => 'Inhoud',
  'tabs.files' => 'Bestanden',
  'tabs.options' => 'URL',
  'tabs.preview' => 'Voorvertoning',
  
  // dashboard
  'dashboard.edit' => 'Bewerk',
  'dashboard.content' => 'Inhoud',
  'dashboard.content.empty' => 'Deze pagina heeft geen inhoud',
  'dashboard.files' => 'Bestanden',
  'dashboard.template' => 'Sjabloon',
  'dashboard.stats.images' => 'Afbeeldingen', 
  'dashboard.stats.videos' => 'Video\'s', 
  'dashboard.stats.docs' => 'Documenten', 
  'dashboard.stats.sound' => 'Geluid', 
  'dashboard.stats.others' => 'Anders', 

  // home
  'home.siteinfo' => 'Site info',
  'home.edit' => 'Bewerk',
  'home.warning.title' => 'AUB eerst aanpassen!',
  'home.warning.permissions.title' => 'Bevoegdheden',
  'home.warning.permissions.text' => 'De bevoegdheden in uw content map zijn niet juist toegekend. Verander alstublieft de bevoegdheden voor alle mappen naar  <strong>0755</strong> en voor alle bestanden naar <strong>0666</strong>',
  'home.warning.blueprints.title' => 'Blauwdrukken',
  'home.warning.blueprints.text' => 'Er zijn geen blauwdrukken aanwezig voor de volgende sjablonen<br /> Lees meer over <a href="http://getkirby.com/docs/panel/blueprints">how to install blueprints for your templates</a>',
  'home.warning.thumbs.title' => 'Thumbnails',
  'home.warning.thumbs.text' => 'Voeg een <strong>thumbs</strong> map toe in de hoofd map van uw site en verander de bevoegdheden ervan naar <strong>0755</strong>',
  
  // siteinfo
  'siteinfo.button' => 'Bewaar',
  'siteinfo.errors.title' => 'AUB een titel toevoegen',
  'siteinfo.errors.permissions' => '<strong>content/site.txt</strong> is niet schrijfbaar. <br />Verander AUB de bevoegdheden en probeer nog eens.',
  
  // content form 
  'content.save' => 'Bewaar',
  'content.previous' => 'Vorige',
  'content.next' => 'Volgende',
  'content.invisible' => 'onzichtbare',
  
  // no content available
  'nocontent.title' => 'Geen Inhoud',
  'nocontent.text' => 'Er is geen inhoud voor deze pagina aanwezig.',
    
  // pages
  'pages.title' => 'Zichtbare pagina\'s',
  'pages.title.home' => 'Pagina\'s',
  'pages.home' => 'Home',
  'pages.sort' => 'Sorteer',
  'pages.add' => 'Voeg toe',
  'pages.delete' => 'Verwijder',
  'pages.invisible' => 'Onzichtbare subpagina\'s',
  'pages.invisible.home' => 'Onzichtbare pagina\'s',
  'pages.no.visible' => 'Geen zichtbare pagina\'s tot nu toe',
  'pages.no.invisible' => 'Geen onzichtbare pagina\'s tot nu toe',
  'pages.moved' => 'De pagina is verplaatst',
  'pages.sorted' => 'De paginas zijn gesorteerd',
  'pages.show.more' => 'Toon meer',
  'pages.show.less' => 'Toon minder',
  'pages.errors.notfound' => 'De pagina kon niet worden gevonden',
  'pages.errors.move' => 'De pagina kon niet worden verplaatst',
  'pages.errors.sort' => 'Niet alle pagina\'s konden worden gesorteerd',
  'pages.errors.nosort' => 'Er is niets om te sorteren',

  // no subpages allowed
  'nopages.title' => 'Subpagina\'s',
  'nopages.text' => 'Deze pagina mag geen subpagina\'s hebben',  
  
  // add page
  'pages.add.title' => 'Voeg een nieuwe pagina toe',
  'pages.add.label.title' => 'Titel',
  'pages.add.label.url' => 'URL',
  'pages.add.label.template' => 'Sjabloon',
  'pages.add.button' => 'Bewaar',
  'pages.add.errors.title' => 'AUB een titel toevoegen',
  'pages.add.errors.url' => 'AUB een URL voor uw pagina toevoegen',
  'pages.add.errors.characters' => 'Gebruik alstublieft alleen de volgende karakters a-z, 0-9, _, - voor de URL',
  'pages.add.errors.exists' => 'Een pagina met die url bestaat al',
  'pages.add.errors.permissions' => 'De map kon niet worden gemaakt',
  'pages.add.success' => 'De pagina is gemaakt',

  // update page
  'pages.update.errors' => 'Vul AUB alle velden correct in',
    
  // delete page  
  'pages.delete.title' => 'Verwijder deze pagina',
  'pages.delete.button' => 'Verwijder',
  'pages.delete.errors.homepage' => 'De homepage kan niet worden verwijderd',
  'pages.delete.errors.errorpage' => 'De foutmelding pagina kan niet worden verwijderd',
  'pages.delete.errors.subpages' => 'Deze pagina heeft subpagina\'s. AUB deze eerst verwijderen.',
  'pages.delete.errors.permissions' => 'De pagina kon niet worden verwijderd',
  'pages.delete.success' => 'De pagina is verwijderd',

  // options
  'options.url' => 'URL',
  'options.button' => 'Bewaar',
  'options.home.url' => 'URL',
  'options.home.text' => 'De URL van de homepage kan niet worden aagepast',
  'options.error.text' => 'De URL van de foutmelding pagina kan niet worden aagepast',
  'options.errors.homepage' => 'De URL van de homepage kan niet worden aagepast',
  'options.errors.errorpage' => 'De URL van de foutmelding pagina kan niet worden aagepast',
  'options.errors.characters' => 'Gebruik alstublieft alleen de volgende karakters a-z, 0-9, _, -',
  'options.errors.permissions' => 'De content map kan niet worden verplaatst',
  'options.errors.exists' => 'De nieuwe URL bestaat al',
  'options.errors.move' => 'De content map kan niet worden verplaatst',

  // files
  'files.title' => 'Bestanden',
  'files.upload' => 'Upload een nieuw bestand',
  'files.edit' => 'Bewerk',
  'files.replace' => 'Vervang',
  'files.delete' => 'Verwijder',
  'files.empty' => 'Geen bestanden tot nu toe',

  'nofiles.title' => 'Geen Bestanden',
  'nofiles.text' => 'Deze pagina mag geen bestanden hebben',
  
  // delete file
  'files.delete.title' => 'Verwijder dit bestand',
  'files.delete.button' => 'Verwijder',
  'files.delete.errors.notfound' => 'Het bestand kon niet worden gevonden',
  'files.delete.errors.permissions' => 'Het bestand kon niet worden verwijderd',
  'files.delete.success' => 'Het bestand is verwijderd',

  // edit file
  'files.edit.title' => 'Bewerk Bestand',
  'files.edit.filename' => 'Bestansnaam (zonder extensie)',
  'files.edit.button' => 'Bewaar',
  'files.edit.errors.filename' => 'Vul AUB een geldige bestandsnaam in',
  'files.edit.errors.notfound' => 'Het bestand kon niet worden gevonden',
  'files.edit.errors.exists' => 'De nieuwe naam bestaat al',
  'files.edit.errors.permissions' => 'Het bestand kon niet worden hernoemd',
  'files.edit.success' => 'Het bestand is bewaard',

  // replace file
  'files.replace.title' => 'Vervang dit bestand',
  'files.replace.file' => 'Bestand',
  'files.replace.choose' => 'AUB een nieuw bestand kiezen van uw computer…',
  'files.replace.button' => 'Vervang',
  'files.replace.errors.notfound' => 'Het bestand kon niet worden gevonden',
  'files.replace.success' => 'Het bestand is vervangen',

  // upload file
  'files.upload.title' => 'Upload een nieuw bestand',
  'files.upload.choose' => 'AUB een nieuw bestand kiezen van uw computer…',
  'files.upload.button' => 'Upload',
      
  // login  
  'login.button' => 'Inloggen',
  'login.username' => 'Gebruikersnaam',
  'login.password' => 'Wachtwoord',
  'login.error' => 'Ongeldige gebruikersnaam of wachtwoord',
  'login.success' => 'U bent ingelogd',
  'login.error.browser.title' => 'U gebruikt een ouderwetse browser',
  'login.error.browser.text' => 'AUB upgraden naar de meest recente versie van Google Chrome, Firefox, Safari or Internet Explorer.',
  
  // upload
  'upload.errors.missing-file' => 'Het bestand kon niet worden gevonden',
  'upload.errors.file-exists' => 'Het bestand bestaat en kan niet worden overschreven',
  'upload.errors.invalid-upload' => 'De upload is niet gelukt',
  'upload.errors.too-big' => 'Het bestand is te groot',
  'upload.errors.invalid-file' => 'Het bestandstype is niet toegestaan',
  'upload.errors.move-error' => 'Het bestand kon niet worden verplaatst naar de server',
  'upload.success' => 'Het bestand is geupload',

  // writer
  'writer.errors.permissions' => 'Het bestand is niet schrijfbaar',
  'writer.errors.write' => 'De gegevens konden niet worden toegevoegd',
  'writer.success' => 'Het bestand is bewaard',

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

  'form.overlay.link.title' => 'Voeg link toe',
  'form.overlay.link.link' => 'Link',
  'form.overlay.link.text' => 'Link Tekst (optioneel)',
  'form.overlay.link.button' => 'Voeg link toe',

  'form.overlay.email.title' => 'Voeg email toe',
  'form.overlay.email.link' => 'Email Adres',
  'form.overlay.email.text' => 'Link Tekst (optioneel)',
  'form.overlay.email.button' => 'Voeg email toe',
    
));