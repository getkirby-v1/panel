<?php

l::set(array(
  
  // global 
  'ok' => 'Ok',
  'cancel' => 'Annuller',
  'nochanges' => 'Ingen ændringer',

  // header
  'header.title' => 'Kirby',
  'header.logout' => 'Log ud', 
  
  // subheader
  'subheader.home' => 'Hjem',  
  'subheader.site' => 'Din Hjemmeside',
  'subheader.info' => 'Info',

  // tabs
  'tabs.overview' => 'Overblik',
  'tabs.info' => 'Rediger Info',
  'tabs.content' => 'Indhold',
  'tabs.files' => 'Filer',
  'tabs.options' => 'URL',
  'tabs.preview' => 'Preview',
  
  // dashboard
  'dashboard.edit' => 'Rediger',
  'dashboard.content' => 'Indhold',
  'dashboard.content.empty' => 'Denne side har intet indhold',
  'dashboard.files' => 'Filer',
  'dashboard.template' => 'Skabelon',
  'dashboard.stats.images' => 'Billeder', 
  'dashboard.stats.videos' => 'Videoer', 
  'dashboard.stats.docs' => 'Dokumenter', 
  'dashboard.stats.sound' => 'Lyd', 
  'dashboard.stats.others' => 'Andet', 

  // home
  'home.siteinfo' => 'Hjemmeside-info',
  'home.edit' => 'Rediger',
  'home.warning.title' => 'Fiks først!',
  'home.warning.permissions.title' => 'Rettigheder',
  'home.warning.permissions.text' => 'Rettighederne i din content mappe er ikke sat ordentligt op. Ændr venligst alle mapperettigheder til <strong>0755</strong> og alle filrettigheder til <strong>0666</strong>',
  'home.warning.blueprints.title' => 'Blueprints',
  'home.warning.blueprints.text' => 'Der er ingen blueprints tilgængelig for følgende skabeloner (templates)<br />Læs mere om <a href="http://getkirby.com/docs/panel/blueprints">hvordan du installerer blueprints for hver af dine skabeloner (templates)</a>',
  'home.warning.thumbs.title' => 'Thumbnails',
  'home.warning.thumbs.text' => 'Opret venligst en <strong>thumbs</strong> mappe i roden på din installation og sæt dens indstillinger til <strong>0755</strong>',
  
  // siteinfo
  'siteinfo.button' => 'Gem',
  'siteinfo.errors.title' => 'Tilføj venligst en titel',
  'siteinfo.errors.permissions' => 'Kan ikke skrive til <strong>content/site.txt</strong>.<br />Ændr venligst filens rettigheder og prøv igen.',
  
  // content form 
  'content.save' => 'Gem',
  'content.previous' => 'Forrige',
  'content.next' => 'Næste',
  'content.invisible' => 'usynlig',
  
  // no content available
  'nocontent.title' => 'Intet indhold',
  'nocontent.text' => 'Der er intet indhold tilgængeligt for denne side.',
    
  // pages
  'pages.title' => 'Synlige undersider',
  'pages.title.home' => 'Synlige sider',
  'pages.home' => 'Hjem',
  'pages.sort' => 'Sortér',
  'pages.add' => 'Tilføj',
  'pages.delete' => 'Fjern',
  'pages.invisible' => 'Usynlige undersider',
  'pages.invisible.home' => 'Usynlige sider',
  'pages.no.visible' => 'Ingen synlige sider indtil videre',
  'pages.no.invisible' => 'Ingen usynlige sider indtil videre',
  'pages.moved' => 'Siden er blevet flyttet',
  'pages.sorted' => 'Siderne er nu blevet sorteret',
  'pages.show.more' => 'vis mindre',
  'pages.show.less' => 'vis mere',
  'pages.errors.notfound' => 'Siden kunne ikke findes',
  'pages.errors.move' => 'Siden kunne ikke flyttes',
  'pages.errors.sort' => 'Ikke alle sider kunne sorteres',
  'pages.errors.nosort' => 'Der er intet at sortere',

  // no subpages allowed
  'nopages.title' => 'Undersider',
  'nopages.text' => 'Denne side bør ikke have undersider',  
  
  // add page
  'pages.add.title' => 'Tilføj ny side',
  'pages.add.label.title' => 'Titel',
  'pages.add.label.url' => 'URL',
  'pages.add.label.template' => 'Skabelon',
  'pages.add.button' => 'Gem',
  'pages.add.errors.title' => 'Tilføj venligst en titel',
  'pages.add.errors.url' => 'Giv venligst din side en URL',
  'pages.add.errors.characters' => 'Brug venligst kun følgende tegn i din URL: a-z, 0-9, _, -',
  'pages.add.errors.exists' => 'Der eksisterer allerede en side med denne URL',
  'pages.add.errors.permissions' => 'Mappen kunne ikke oprettes',
  'pages.add.success' => 'Siden er oprettet',

  // update page
  'pages.update.errors' => 'Udfyld venligst alle felter korrekt',
    
  // delete page  
  'pages.delete.title' => 'Slet denne side',
  'pages.delete.button' => 'Slet',
  'pages.delete.errors.homepage' => 'Du kan ikke slette Home siden',
  'pages.delete.errors.errorpage' => 'Du kan ikke slette Error siden',
  'pages.delete.errors.subpages' => 'Denne side har undersider. Slet venligst dem først.',
  'pages.delete.errors.permissions' => 'Siden kunne ikke slettes',
  'pages.delete.success' => 'Siden er slettet',

  // options
  'options.url' => 'URL',
  'options.button' => 'Gem',
  'options.home.url' => 'URL',
  'options.home.text' => 'Du kan ikke ændre Home sidens URL',
  'options.error.text' => 'Du kan ikke ændre Error sidens URL',
  'options.errors.homepage' => 'Du kan ikke ændre Home sidens URL',
  'options.errors.errorpage' => 'Du kan ikke ændre Error sidens URL',
  'options.errors.characters' => 'Benyt venligst kun følgende tegn: a-z, 0-9, _, -',
  'options.errors.permissions' => 'Indholdsmappen (content) kan ikke flyttes',
  'options.errors.exists' => 'Den nye URL eksisterer allerede',
  'options.errors.move' => 'Indholdsmappen (content) kan ikke flyttes',

  // files
  'files.title' => 'Filer',
  'files.upload' => 'Upload ny file',
  'files.edit' => 'Rediger',
  'files.replace' => 'Erstat',
  'files.delete' => 'Slet',
  'files.empty' => 'Der er ingen filer endnu',

  'nofiles.title' => 'Ingen filer',
  'nofiles.text' => 'Denne side bør ikke have filer',
  
  // delete file
  'files.delete.title' => 'Slet denne fil',
  'files.delete.button' => 'Slet',
  'files.delete.errors.notfound' => 'Filen kunne ikke findes',
  'files.delete.errors.permissions' => 'Filen kunne ikke slettes',
  'files.delete.success' => 'Filen er slettet',

  // edit file
  'files.edit.title' => 'Rediger fil',
  'files.edit.filename' => 'Filnavn (uden suffix)',
  'files.edit.button' => 'Gem',
  'files.edit.errors.filename' => 'Vælg venligst et gyldigt filnavn',
  'files.edit.errors.notfound' => 'Filen kunne ikke findes',
  'files.edit.errors.exists' => 'Det nye navn eksisterer allerede',
  'files.edit.errors.permissions' => 'Filen kunne ikke omdøbes',
  'files.edit.success' => 'Filen er gemt',

  // replace file
  'files.replace.title' => 'Erstat denne fil',
  'files.replace.file' => 'Fil',
  'files.replace.choose' => 'Vælg venligst en ny fil fra din computer…',
  'files.replace.button' => 'Erstat',
  'files.replace.errors.notfound' => 'Filen kunne ikke findes',
  'files.replace.success' => 'Filen er nu erstattet',

  // upload file
  'files.upload.title' => 'Upload en ny fil',
  'files.upload.choose' => 'Vælg venligst en fil fra din computer…',
  'files.upload.button' => 'Upload',
      
  // login  
  'login.button' => 'Login',
  'login.username' => 'Brugernavn',
  'login.password' => 'Kodeord',
  'login.error' => 'Ugyldigt brugernavn eller kodeord',
  'login.success' => 'Du er nu logget ind',
  'login.error.browser.title' => 'Du anvender en lettet antikveret browser',
  'login.error.browser.text' => 'Opgradér venligst til den seneste version af enten Google Chrome, Firefox, Safari eller Internet Explorer.',
  
  // upload
  'upload.errors.missing-file' => 'Filen kunne ikke findes',
  'upload.errors.file-exists' => 'Filen eksisterer men kan ikke overskrives',
  'upload.errors.invalid-upload' => 'Dit forsøg på at uploade gik galt',
  'upload.errors.too-big' => 'Filen er for stor',
  'upload.errors.invalid-file' => 'Denne type fil er ikke tilladt',
  'upload.errors.move-error' => 'Filen kunne ikke flyttes til serveren',
  'upload.success' => 'Filen er nu oploadet',

  // writer
  'writer.errors.permissions' => 'Filen er ikke skrivbar',
  'writer.errors.write' => 'Data kunne ikke tilføjes',
  'writer.success' => 'Filen er gemt',
  
  // form buttons
  'form.buttons.h1' => 'h1',
  'form.buttons.h2' => 'h2',
  'form.buttons.h3' => 'h3',
  'form.buttons.bold' => 'fed',
  'form.buttons.bold.sample' => 'fed tekst',
  'form.buttons.italic' => 'kursiv',
  'form.buttons.italic.sample' => 'kursiv tekst',
  'form.buttons.link' => 'link',
  'form.buttons.email' => 'email',

  'form.overlay.link.title' => 'Indsæt Link',
  'form.overlay.link.link' => 'Link',
  'form.overlay.link.text' => 'Link Tekst (valgfri)',
  'form.overlay.link.button' => 'Indsæt Link',

  'form.overlay.email.title' => 'Indsæt Email',
  'form.overlay.email.link' => 'Email Adresse',
  'form.overlay.email.text' => 'Link Tekst (valgfri)',
  'form.overlay.email.button' => 'Indsæt Email',
  
));
