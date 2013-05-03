<?php

/*
* Author: Jonathan Baptistella - @jonabaptistella
* 
*/

l::set(array(

  // global 
  'ok' => 'Ok',
  'cancel' => 'Avbryt',
  'nochanges' => 'Ingenting var endret',

  // header
  'header.title' => 'Kirby',
  'header.logout' => 'Logg ut', 

  // subheader
  'subheader.home' => 'Hjem',  
  'subheader.site' => 'Din side',
  'subheader.info' => 'Info',

  // tabs
  'tabs.overview' => 'Oversikt',
  'tabs.info' => 'Redigere Info',
  'tabs.content' => 'Innhold',
  'tabs.files' => 'Filer',
  'tabs.options' => 'URL',
  'tabs.preview' => 'Forhåndsvisning',

  // dashboard
  'dashboard.edit' => 'Redigere',
  'dashboard.content' => 'Innhold',
  'dashboard.content.empty' => 'Denne siden har ikke noe innhold',
  'dashboard.files' => 'Filer',
  'dashboard.template' => 'Layoutmal',
  'dashboard.stats.images' => 'Bilder', 
  'dashboard.stats.videos' => 'Videoer', 
  'dashboard.stats.docs' => 'Dokumenter', 
  'dashboard.stats.sound' => 'Musikk', 
  'dashboard.stats.others' => 'Andre', 

  // home
  'home.siteinfo' => 'Side info',
  'home.edit' => 'Redigere',
  'home.warning.title' => 'Fix dette først!',
  'home.warning.permissions.title' => 'Rettigheter',
  'home.warning.permissions.text' => 'Rettighetene i mappen "Content" er ikke riktige. Sett  alle mapperettigheter til <strong>0755</strong> og <strong>0666</strong> for alle filer',
  'home.warning.blueprints.title' => 'Blueprints',
  'home.warning.blueprints.text' => 'Det mangler "blueprint" for disse layoutmalene<br /> Les mer <a href="http://getkirby.com/docs/panel/blueprints">om hvordan lage "blueprint"</a>',
  'home.warning.thumbs.title' => 'Thumbnails',
  'home.warning.thumbs.text' => 'Opprett en mappe med navn <strong>thumbs</strong> i "root" mappen for websiden og gi den rettighetene til <strong>0755</strong>',

  // siteinfo
  'siteinfo.button' => 'Lagre',
  'siteinfo.errors.title' => 'Tittel manger',
  'siteinfo.errors.permissions' => '<strong>content/site.txt</strong> har ikke skriverettigheter. <br />Endre rettigheter og forsøk igjen.',

  // content form 
  'content.save' => 'Lagre',
  'content.previous' => 'Forrige',
  'content.next' => 'Neste',
  'content.invisible' => 'usynlig',

  // no content available
  'nocontent.title' => 'Ikke noe innhold',
  'nocontent.text' => 'Det er ikke noe innhold for denne siden tilgjengelig.',

  // pages
  'pages.title' => 'Synlige undersider',
  'pages.title.home' => 'Synlige sider',
  'pages.home' => 'Hjem',
  'pages.sort' => 'Sorter',
  'pages.add' => 'Legg til',
  'pages.delete' => 'Slett',
  'pages.invisible' => 'Usynlige undersider',
  'pages.invisible.home' => 'Usynlige sider',
  'pages.no.visible' => 'Ingen synlige sider',
  'pages.no.invisible' => 'Ingen usynlige sider',
  'pages.moved' => 'Siden har blitt flyttet',
  'pages.sorted' => 'Sidene er sortert',
  'pages.show.more' => 'vis mer',
  'pages.show.less' => 'vis mindre',
  'pages.errors.notfound' => 'Siden ble ikke funnet',
  'pages.errors.move' => 'Siden kan ikke bli flyttet',
  'pages.errors.sort' => 'Ikke alle siden kunne bli sortert',
  'pages.errors.nosort' => 'Det er ingenting å sortere',

  // no subpages allowed
  'nopages.title' => 'Undersider',
  'nopages.text' => 'Denne siden kan ikke ha undersider',  

  // add page
  'pages.add.title' => 'Legg til ny side',
  'pages.add.label.title' => 'Tittel',
  'pages.add.label.url' => 'URL',
  'pages.add.label.template' => 'Layoutmal',
  'pages.add.button' => 'Large',
  'pages.add.errors.title' => 'Tittel mangler',
  'pages.add.errors.url' => 'Please add a URL for your page',
  'pages.add.errors.characters' => 'Tillatte bokstaver og tegn er a-z, 0-9, _, - for URLen',
  'pages.add.errors.exists' => 'En side har allerede den URLen',
  'pages.add.errors.permissions' => 'Mappen kan ikke opprettes',
  'pages.add.success' => 'Siden er laget',

  // update page
  'pages.update.errors' => 'Vennligst fyll ut alle feltene korrekt',

  // delete page  
  'pages.delete.title' => 'Slett denne siden',
  'pages.delete.button' => 'Slett',
  'pages.delete.errors.homepage' => 'Du kan ikke slette "hjem" siden',
  'pages.delete.errors.errorpage' => 'Du kan ikke slette "error" siden',
  'pages.delete.errors.subpages' => 'Denne siden har undersider. Slett diss først.',
  'pages.delete.errors.permissions' => 'Siden kunne ikke bli slettet',
  'pages.delete.success' => 'Siden er slettet',

  // options
  'options.url' => 'URL',
  'options.button' => 'Lagre',
  'options.home.url' => 'URL',
  'options.home.text' => 'Du kan ikke endre URL for "hjem" siden',
  'options.error.text' => 'Du kan ikke endre URL for "error" siden',
  'options.errors.homepage' => 'Du kan ikke endre URL for "hjem" siden',
  'options.errors.errorpage' => 'Du kan ikke endre URL for "error" siden',
  'options.errors.characters' => 'Kun bruk tillatte tegn og bokstaver som er a-z, 0-9, _, -',
  'options.errors.permissions' => 'Mappen "content" kan ikke flyttes',
  'options.errors.exists' => 'The new URL already exists',
  'options.errors.move' => 'Mappen "content" kan ikke flyttes',

  // files
  'files.title' => 'Filer',
  'files.upload' => 'Last opp en ny fil',
  'files.edit' => 'Redigere',
  'files.replace' => 'Erstatt',
  'files.delete' => 'Slett',
  'files.empty' => 'Ingen filer',

  'nofiles.title' => 'Ingen filer',
  'nofiles.text' => 'Denne siden kan ikke bruke filer',

  // delete file
  'files.delete.title' => 'Slett denne filen',
  'files.delete.button' => 'Slett',
  'files.delete.errors.notfound' => 'Filen ble ikke funnet',
  'files.delete.errors.permissions' => 'Filen kunne ikke slettes',
  'files.delete.success' => 'Filen er slettet',

  // edit file
  'files.edit.title' => 'Redigere filen',
  'files.edit.filename' => 'Filnavn (uten filtype i enden)',
  'files.edit.button' => 'Lagre',
  'files.edit.errors.filename' => 'Vennligst skriv inn et gyldig filnavn',
  'files.edit.errors.notfound' => 'Filen ble ikke funnet',
  'files.edit.errors.exists' => 'Det nye navnet finnes allerede',
  'files.edit.errors.permissions' => 'Filen kunne ikke endre navn',
  'files.edit.success' => 'Filen er lagret',

  // replace file
  'files.replace.title' => 'Erstatte denne filen',
  'files.replace.file' => 'Fil',
  'files.replace.choose' => 'Velg en ny fil fra PCen din ...',
  'files.replace.button' => 'Erstatt',
  'files.replace.errors.notfound' => 'Filen ble ikke funnet',
  'files.replace.success' => 'Filen er nå erstattet',

  // upload file
  'files.upload.title' => 'Last opp en ny fil',
  'files.upload.choose' => 'Velg en fil fra PCen din ...',
  'files.upload.button' => 'Last opp',

  // login  
  'login.button' => 'Logg inn',
  'login.username' => 'Brukernavn',
  'login.password' => 'Passord',
  'login.error' => 'Ugyldig brukernavn eller passord',
  'login.success' => 'Du er nå logget inn! :)',
  'login.error.browser.title' => 'Du bruker en gammel nettleser',
  'login.error.browser.text' => 'Vennligst oppgrader til den nyeste versjonen av Google Chrome, Firefox, Safari eller Internet Explorer.',

  // upload
  'upload.errors.missing-file' => 'Filen har ikke blitt funnet',
  'upload.errors.file-exists' => 'Filen finnes, og kan ikke overskrives',
  'upload.errors.invalid-upload' => 'Opplastingen feilet',
  'upload.errors.too-big' => 'Filen er for stor',
  'upload.errors.invalid-file' => 'Filtypen er ikke tillatt',
  'upload.errors.move-error' => 'Filen kunne ikke flyttes til serveren',
  'upload.success' => 'Filen er lastet opp',

  // writer
  'writer.errors.permissions' => 'Filen har ikke skriverettigheter',
  'writer.errors.write' => 'Dataene ble ikke lagt til',
  'writer.success' => 'Filen er lagret',

  // form buttons
  'form.buttons.h1' => 'h1',
  'form.buttons.h2' => 'h2',
  'form.buttons.h3' => 'h3',
  'form.buttons.bold' => 'fet',
  'form.buttons.bold.sample' => 'fet text',
  'form.buttons.italic' => 'kursiv',
  'form.buttons.italic.sample' => 'kursiv text',
  'form.buttons.link' => 'link',
  'form.buttons.email' => 'e-post',

  'form.overlay.link.title' => 'Sett inn Link',
  'form.overlay.link.link' => 'Link',
  'form.overlay.link.text' => 'Link Tekst (valgfri)',
  'form.overlay.link.button' => 'Sett inn Link',

  'form.overlay.email.title' => 'Sett inn e-post',
  'form.overlay.email.link' => 'E-post adresse',
  'form.overlay.email.text' => 'Link Tekst (valgfri)',
  'form.overlay.email.button' => 'Sett inn e-post',

));
