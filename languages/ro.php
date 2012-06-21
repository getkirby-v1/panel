<?php

/* 
 * author: Seitenwerk <http://seitenwerk.at> & CIUCIU <http://ciuciu.at>
 */

l::set(array(
  
  // global 
  'ok' => 'Ok',
  'cancel' => 'Anulează',
  'nochanges' => 'Nu a fost schimbat nimic',

  // header
  'header.title' => 'Kirby',
  'header.logout' => 'Deconectează', 
  
  // subheader
  'subheader.home' => 'Acasă',  
  'subheader.site' => 'Pagina ta',
  'subheader.info' => 'Informaţii',

  // tabs
  'tabs.overview' => 'Ansamblu',
  'tabs.info' => 'Editează Informaţiile',
  'tabs.content' => 'Conţinut',
  'tabs.files' => 'Documente',
  'tabs.options' => 'URL',
  'tabs.preview' => 'Previzionare',

  // dashboard
  'dashboard.edit' => 'Editează',
  'dashboard.content' => 'Conţinut',
  'dashboard.content.empty' => 'Această pagină nu are conţinut',
  'dashboard.files' => 'Documente',
  'dashboard.template' => 'Model',
  'dashboard.stats.images' => 'Poze', 
  'dashboard.stats.videos' => 'Videouri', 
  'dashboard.stats.docs' => 'Documente', 
  'dashboard.stats.sound' => 'Audio', 
  'dashboard.stats.others' => 'Diverse', 

  // home
  'home.siteinfo' => 'Informaţii pagină',
  'home.edit' => 'Editează',
  'home.warning.title' => 'Vă rugăm să eliminaţi eroarea întâi',
  'home.warning.permissions.title' => 'Permisiuni',
  'home.warning.permissions.text' => 'Permisiunile din registrul de conţinut nu sunt setate corect. Vă rugăm să scimbaţi permisiunile pentru toate dosarele în <strong>0755</strong> şi pentru toate fişierele în <strong>0666</strong>',
  'home.warning.blueprints.title' => 'Blueprints',
  'home.warning.blueprints.text' => 'Nu există blueprints disponibile pentru modelele următoares<br /> Citeşte mai multe despre <a href="http://getkirby.com/docs/panel/blueprints">cum să instezi blueprints pentru modele</a>',
  'home.warning.thumbs.title' => 'Thumbnails',
  'home.warning.thumbs.text' => 'Vă rugăm să adăugaţi un <strong>thumbs</strong> folder in directorul principal al site-ului dvs. şi să modificaţi permisiunile în <strong>0755</strong>',
  
  // siteinfo
  'siteinfo.button' => 'Salvează',
  'siteinfo.errors.title' => 'Vă rugăm să adăugaţi un titlu',
  'siteinfo.errors.permissions' => '<strong>content/site.txt</strong> nu este editabil. <br />Vă rugăm să schimbaţi permisiunile şi să încercaţi din nou.',
  
  // content form 
  'content.save' => 'Salvează',
  'content.previous' => 'Înapoi',
  'content.next' => 'Înainte',
  'content.invisible' => 'Invizibil',
  
  // no content available
  'nocontent.title' => 'Nici un conţinut',
  'nocontent.text' => 'Nu există conţinut pentru această pagină.',
    
  // pages
  'pages.title' => 'Pagini vizibile',
  'pages.title.home' => 'Pagini',
  'pages.home' => 'Acasă',
  'pages.sort' => 'Sortează',
  'pages.add' => 'Adaugă',
  'pages.delete' => 'Şterge',
  'pages.invisible' => 'Subpagini invizibile',
  'pages.invisible.home' => 'Pagini invizibile',
  'pages.no.visible' => 'Nici o pagină vizibilă până acum',
  'pages.no.invisible' => 'Nici o pagină invizibilă până acum',
  'pages.moved' => 'Pagina a fost mutată',
  'pages.sorted' => 'Pagina a fost sortată',
  'pages.show.more' => 'Arată mai mult',
  'pages.show.less' => 'Arată mai puţin',
  'pages.errors.notfound' => 'Pagina nu a putut fi găsită',
  'pages.errors.move' => 'Pagina nu a putut fi mutată',
  'pages.errors.sort' => 'Nu toate paginile au putut fi sortate',
  'pages.errors.nosort' => 'Nu e nimic de sortat',

  // no subpages allowed
  'nopages.title' => 'Subpagini',
  'nopages.text' => 'Această pagină nu ar trebui să aibă subpagini',  
  
  // add page
  'pages.add.title' => 'Adaugă o pagină nouă',
  'pages.add.label.title' => 'Titlu',
  'pages.add.label.url' => 'URL',
  'pages.add.label.template' => 'Model',
  'pages.add.button' => 'Salvează',
  'pages.add.errors.title' => 'Vă rugăm să adăugaţi un titlu',
  'pages.add.errors.url' => 'Vă rugăm să adăugaţi o adresă URL pentru pagina dvs.',
  'pages.add.errors.characters' => 'Vă rugăm să folosiţi numai următoarele caractere a-z, 0-9, _, - pentru adresa URL',
  'pages.add.errors.exists' => 'O pagina cu această adresă URL există deja',
  'pages.add.errors.permissions' => 'Folderul nu a putut fi creat',
  'pages.add.success' => 'Pagina a fost creată',

  // update page
  'pages.update.errors' => 'Please fill out all fields correctly',
      
  // delete page  
  'pages.delete.title' => 'Şterge această pagină',
  'pages.delete.button' => 'Şterge',
  'pages.delete.errors.homepage' => 'Nu puteţi şterge pagina de start',
  'pages.delete.errors.errorpage' => 'Nu puteţi şterge pagina de eroare',
  'pages.delete.errors.subpages' => 'Această pagină are subpagini. Vă rugăm să le ştergeţi mai întâi.',
  'pages.delete.errors.permissions' => 'Pagina nu a putut fi eliminată',
  'pages.delete.success' => 'Pagina a fost eliminată',

  // options
  'options.url' => 'URL',
  'options.button' => 'Salvează',
  'options.home.url' => 'URL',
  'options.home.text' => 'Nu puteţi schimba URL-ul de pagina de start',
  'options.error.text' => 'Nu puteţi schimba URL-ul paginii de eroare',
  'options.errors.homepage' => 'Nu puteţi schimba URL-ul de pagina de start',
  'options.errors.errorpage' => 'Nu puteţi schimba URL-ul paginii de eroare',
  'options.errors.characters' => 'Vă rugăm să folosiţi numai următoarele caractere a-z, 0-9, _, -',
  'options.errors.permissions' => 'Folderul de conţinut nu poate fi mutat',
  'options.errors.exists' => 'Noua adresă URL există deja',
  'options.errors.move' => 'Folderul de conţinut nu poate fi mutat',

  // files
  'files.title' => 'Fişiere',
  'files.upload' => 'Încărcaţi un fişier nou',
  'files.edit' => 'Editează',
  'files.replace' => 'înlocuieşte',
  'files.delete' => 'Şterge',
  'files.empty' => 'Nici un fişier până acum',

  'nofiles.title' => 'Nici un fişier',
  'nofiles.text' => 'Această pagină nu ar trebui să aibă fişiere',
  
  // delete file
  'files.delete.title' => 'Ştergeţi acest fişier',
  'files.delete.button' => 'Şterge',
  'files.delete.errors.notfound' => 'Fişierul nu a putut fi găsit',
  'files.delete.errors.permissions' => 'Fişierul nu a putut fi şters',
  'files.delete.success' => 'Fişierul a fost şters',

  // edit file
  'files.edit.title' => 'Editare fişier',
  'files.edit.filename' => 'Numele fisierului (fara extensie)',
  'files.edit.button' => 'Salvează',
  'files.edit.errors.filename' => 'Please enter a valid filename',
  'files.edit.errors.notfound' => 'Fişierul nu a putut fi găsit',
  'files.edit.errors.exists' => 'Noul nume există deja',
  'files.edit.errors.permissions' => 'Fişierul nu a putut fi redenumit',
  'files.edit.success' => 'Fişierul a fost salvat',

  // replace file
  'files.replace.title' => 'Înlocuiţi acest fişier',
  'files.replace.file' => 'Fişier',
  'files.replace.choose' => 'Vă rugăm să alegeţi un fişier nou din computer...',
  'files.replace.button' => 'Înlocuieşte',
  'files.replace.errors.notfound' => 'Fişierul nu a putut fi găsit',
  'files.replace.success' => 'Fişierul a fost înlocuit',

  // upload file
  'files.upload.title' => 'Încărcaţi un fişier nou',
  'files.upload.choose' => 'Vă rugăm să alegeţi un fişier nou din computer...',
  'files.upload.button' => 'Încarcă',
      
  // login  
  'login.button' => 'Autentificare',
  'login.username' => 'Nume',
  'login.password' => 'Parolă',
  'login.error' => 'Numele sau parola incorectă',
  'login.success' => 'Aţi fost conectat',
  'login.error.browser.title' => 'Folosiţi un browser vechi',
  'login.error.browser.text' => 'Vă rugăm să faceţi upgrade la ultima versiune de la Google Chrome, Firefox, Safari or Internet Explorer.',
  
  // upload
  'upload.errors.missing-file' => 'Fişierul nu a fost găsit',
  'upload.errors.file-exists' => 'Fişierul există şi nu poate fi suprascris',
  'upload.errors.invalid-upload' => 'Încărcarea a eşuat',
  'upload.errors.too-big' => 'Fişierul este prea mare',
  'upload.errors.invalid-file' => 'Acest tip de fişier nu este permis',
  'upload.errors.move-error' => 'Fişierul nu a putut fi mutat pe server',
  'upload.success' => 'Fişierul a fost încărcat',

  // writer
  'writer.errors.permissions' => 'Fişierul nu poate fi scris',
  'writer.errors.write' => 'Datele nu au putut fi adăugate',
  'writer.success' => 'Fişierul a fost salvat',
  
));