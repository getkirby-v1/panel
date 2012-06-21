<?php

/*
 * Author: Riccardo Mori <http://morrick.me>
 */

l::set(array(
  
  // global 
  'ok' => 'Ok',
  'cancel' => 'Annulla',
  'nochanges' => 'Nessuna modifica effettuata',

  // header
  'header.title' => 'Kirby',
  'header.logout' => 'Logout', 
  
  // subheader
  'subheader.home' => 'Home',  
  'subheader.site' => 'Il tuo Sito',
  'subheader.info' => 'Info',

  // tabs
  'tabs.overview' => 'Vista generale',
  'tabs.info' => 'Modifica Informazioni',
  'tabs.content' => 'Contenuto',
  'tabs.files' => 'File',
  'tabs.options' => 'URL',
  'tabs.preview' => 'Anteprima',
  
  // dashboard
  'dashboard.edit' => 'Modifica',
  'dashboard.content' => 'Contenuto',
  'dashboard.content.empty' => 'Questa pagina è priva di contenuto',
  'dashboard.files' => 'File',
  'dashboard.template' => 'Modello',
  'dashboard.stats.images' => 'Immagini', 
  'dashboard.stats.videos' => 'Video', 
  'dashboard.stats.docs' => 'Documenti', 
  'dashboard.stats.sound' => 'Audio', 
  'dashboard.stats.others' => 'Altro', 

  // home
  'home.siteinfo' => 'Informazioni sul Sito',
  'home.edit' => 'Modifica',
  'home.warning.title' => 'È necessario anzitutto risolvere il problema',
  'home.warning.permissions.title' => 'Permessi',
  'home.warning.permissions.text' => 'I permessi nella directory dei contenuti non sono impostati correttamente. Imposta i permessi di tutte le cartelle su <strong>0755</strong> e di tutti i file su <strong>0666</strong>',
  'home.warning.blueprints.title' => 'Schemi',
  'home.warning.blueprints.text' => 'Non vi sono schemi disponibili per i seguenti modelli<br /> Maggiori informazioni su <a href="http://getkirby.com/docs/panel/blueprints">come installare gli schemi per i modelli</a>',
  'home.warning.thumbs.title' => 'Miniature',
  'home.warning.thumbs.text' => 'Aggiungi una directory <strong>thumbs</strong> alla directory principale del tuo sito e imposta i relativi permessi su <strong>0755</strong>',
  
  // siteinfo
  'siteinfo.button' => 'Registra',
  'siteinfo.errors.title' => 'Aggiungere un titolo',
  'siteinfo.errors.permissions' => '<strong>content/site.txt</strong> non ha accesso in scrittura. <br />Modifica i permessi e riprova.',
  
  // content form 
  'content.save' => 'Registra',
  'content.previous' => 'Precedente',
  'content.next' => 'Successivo',
  'content.invisible' => 'invisibile',
  
  // no content available
  'nocontent.title' => 'Nessun Contenuto',
  'nocontent.text' => 'Non vi è alcun contenuto disponibile per questa pagina.',
    
  // pages
  'pages.title' => 'Pagine visibili',
  'pages.title.home' => 'Pagine',
  'pages.home' => 'Home',
  'pages.sort' => 'Ordina',
  'pages.add' => 'Aggiungi',
  'pages.delete' => 'Elimina',
  'pages.invisible' => 'Sottopagine invisibili',
  'pages.invisible.home' => 'Pagine invisibili',
  'pages.no.visible' => 'Non sono ancora presenti pagine visibili',
  'pages.no.invisible' => 'Non sono ancora presenti pagine invisibili',
  'pages.moved' => 'La pagina è stata spostata',
  'pages.sorted' => 'Le pagine sono state ordinate',
  'pages.show.more' => 'mostra di più',
  'pages.show.less' => 'mostra meno',
  'pages.errors.notfound' => 'Non è stato possibile trovare la pagina',
  'pages.errors.move' => 'Non è stato possibile spostare la pagina',
  'pages.errors.sort' => 'Non è stato possibile ordinare tutte le pagine',
  'pages.errors.nosort' => 'Non vi è nulla da ordinare',

  // no subpages allowed
  'nopages.title' => 'Sottopagine',
  'nopages.text' => 'Questa pagina non dovrebbe avere sottopagine',  
  
  // add page
  'pages.add.title' => 'Aggiungi nuova pagina',
  'pages.add.label.title' => 'Titolo',
  'pages.add.label.url' => 'URL',
  'pages.add.label.template' => 'Modello',
  'pages.add.button' => 'Registra',
  'pages.add.errors.title' => 'Aggiungere un titolo',
  'pages.add.errors.url' => 'Aggiungere un URL alla pagina',
  'pages.add.errors.characters' => 'Utilizzare solamente i seguenti caratteri a-z, 0-9, _, - per l\'URL',
  'pages.add.errors.exists' => 'Esiste già una pagina con questo URL',
  'pages.add.errors.permissions' => 'Non è stato possibile creare la directory',
  'pages.add.success' => 'La pagina è stata creata',

  // update page
  'pages.update.errors' => 'Please fill out all fields correctly',
    
  // delete page  
  'pages.delete.title' => 'Elimina pagina',
  'pages.delete.button' => 'Elimina',
  'pages.delete.errors.homepage' => 'Non è possibile eliminare la homepage',
  'pages.delete.errors.errorpage' => 'Non è possibile eliminare la pagina di errore',
  'pages.delete.errors.subpages' => 'Questa pagina contiene sottopagine. È necessario eliminarle per prime.',
  'pages.delete.errors.permissions' => 'Non è stato possibile eliminare la pagina',
  'pages.delete.success' => 'La pagina è stata eliminata',

  // options
  'options.url' => 'URL',
  'options.button' => 'Registra',
  'options.home.url' => 'URL',
  'options.home.text' => 'Non è possibile modificare l\'URL della homepage',
  'options.error.text' => 'Non è possibile modificare l\'URL della pagina di errore',
  'options.errors.homepage' => 'Non è possibile modificare l\'URL della homepage',
  'options.errors.errorpage' => 'Non è possibile modificare l\'URL della pagina di errore',
  'options.errors.characters' => 'Utilizzare solamente i seguenti caratteri a-z, 0-9, _, -',
  'options.errors.permissions' => 'La directory dei contenuti non può essere spostata',
  'options.errors.exists' => 'Il nuovo URL esiste già',
  'options.errors.move' => 'La directory dei contenuti non può essere spostata',

  // files
  'files.title' => 'File',
  'files.upload' => 'Carica un nuovo file',
  'files.edit' => 'Modifica',
  'files.replace' => 'Sostituisci',
  'files.delete' => 'Elimina',
  'files.empty' => 'Non vi sono ancora file presenti',

  'nofiles.title' => 'Nessun File',
  'nofiles.text' => 'Questa pagina non dovrebbe avere dei file',
  
  // delete file
  'files.delete.title' => 'Elimina file',
  'files.delete.button' => 'Elimina',
  'files.delete.errors.notfound' => 'Non è stato possibile trovare il file',
  'files.delete.errors.permissions' => 'Non è stato possibile eliminare il file',
  'files.delete.success' => 'Il file è stato eliminato',

  // edit file
  'files.edit.title' => 'Modifica file',
  'files.edit.filename' => 'Nome del file (senza estensione)',
  'files.edit.button' => 'Registra',
  'files.edit.errors.filename' => 'Please enter a valid filename',
  'files.edit.errors.notfound' => 'Non è stato possibile trovare il file',
  'files.edit.errors.exists' => 'Il nuovo nome esiste già',
  'files.edit.errors.permissions' => 'Non è stato possibile rinominare il file',
  'files.edit.success' => 'Il file è stato registrato',

  // replace file
  'files.replace.title' => 'Sostituisci file',
  'files.replace.file' => 'File',
  'files.replace.choose' => 'Scegliere un nuovo file dal computer…',
  'files.replace.button' => 'Sostituisci',
  'files.replace.errors.notfound' => 'Non è stato possibile trovare il file',
  'files.replace.success' => 'Il file è stato sostituito',

  // upload file
  'files.upload.title' => 'Carica un nuovo file',
  'files.upload.choose' => 'Scegliere un nuovo file dal computer…',
  'files.upload.button' => 'Carica',
      
  // login  
  'login.button' => 'Login',
  'login.username' => 'Nome utente',
  'login.password' => 'Password',
  'login.error' => 'Nome utente o password non validi',
  'login.success' => 'Login effettuato',
  'login.error.browser.title' => 'Browser datato',
  'login.error.browser.text' => 'Aggiornare alla versione più recente di Google Chrome, Firefox, Safari o Internet Explorer.',
  
  // upload
  'upload.errors.missing-file' => 'Non è stato possibile trovare il file',
  'upload.errors.file-exists' => 'Il file esiste e non può essere sovrascritto',
  'upload.errors.invalid-upload' => 'Caricamento file non riuscito',
  'upload.errors.too-big' => 'Il file è troppo grande',
  'upload.errors.invalid-file' => 'Questo tipo di file non è permesso',
  'upload.errors.move-error' => 'Non è stato possibile caricare il file sul server',
  'upload.success' => 'Il file è stato caricato',

  // writer
  'writer.errors.permissions' => 'Accesso in scrittura non consentito',
  'writer.errors.write' => 'Non è stato possibile aggiungere i dati',
  'writer.success' => 'Il file è stato registrato',

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