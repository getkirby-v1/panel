<?php
  
/*
 * Author: Dávid Bóta <http://kukac7.hu> 
 */ 

l::set(array(
  
  // global 
  'ok' => 'Ok',
  'cancel' => 'Mégsem',
  'nochanges' => 'Nem változott semmi',
  
  // header
  'header.title' => 'Kirby',
  'header.logout' => 'Kijelentkezés', 
  
  // subheader
  'subheader.home' => 'Főoldal',  
  'subheader.site' => 'Honlapod',
  'subheader.info' => 'Infó',
  
  // tabs
  'tabs.overview' => 'Áttekintés',
  'tabs.info' => 'Infó szerkesztése',
  'tabs.content' => 'Tartalom',
  'tabs.files' => 'Fájlok',
  'tabs.options' => 'URL',
  'tabs.preview' => 'Előnézet',
  
  // dashboard
  'dashboard.edit' => 'Szerkeszt',
  'dashboard.content' => 'Tartalom',
  'dashboard.content.empty' => 'Az oldalon nincs tartalom',
  'dashboard.files' => 'Fájlok',
  'dashboard.template' => 'Sablon',
  'dashboard.stats.images' => 'Képek', 
  'dashboard.stats.videos' => 'Videók', 
  'dashboard.stats.docs' => 'Dokomentumok', 
  'dashboard.stats.sound' => 'Hangok', 
  'dashboard.stats.others' => 'Egyebek', 
  
  // home
  'home.siteinfo' => 'Honlap infó',
  'home.edit' => 'Szerkeszt',
  'home.warning.title' => 'Kérlek először javítsd!',
  'home.warning.permissions.title' => 'Jogosultságok',
  'home.warning.permissions.text' => 'A tartalmi könyvtár jogosultsága nincs beállítva. Kérlek változtasd meg a jogosultságot az összes mappán <strong>0755</strong>-re és az összes fájlon <strong>0666</strong>-ra',
  'home.warning.blueprints.title' => 'Blueprint-ek',
  'home.warning.blueprints.text' => 'A sablonon nincsenek elérhető blueprint-ek<br /> Olvass utána, <a href="http://getkirby.com/docs/panel/blueprints">hogy kell a blueprint-et telepíteni a sablonodba</a>',
  'home.warning.thumbs.title' => 'Bélyegképek',
  'home.warning.thumbs.text' => 'Kérlek add hozzá a <strong>thumbs</strong> könyvtárat a honlapod fő könyvtárához és állítsd a jogosultságot <strong>0755</strong>-re',
  
  // siteinfo
  'siteinfo.button' => 'Mentés',
  'siteinfo.errors.title' => 'Kérlek adj meg egy címet',
  'siteinfo.errors.permissions' => '<strong>content/site.txt</strong> nem írható. <br />Kérlek változtasd meg a jogosultságot és próbáld újra.',
  
  // content form 
  'content.save' => 'Mentés',
  'content.previous' => 'Előző',
  'content.next' => 'Következő',
  'content.invisible' => 'láthatatlan',
  
  // no content available
  'nocontent.title' => 'Nincs tartalom',
  'nocontent.text' => 'Nincs elérhető tartalom ezen az oldalon.',
  
  // pages
  'pages.title' => 'Látható aloldalak',
  'pages.title.home' => 'Látható oldalak',
  'pages.home' => 'Főoldal',
  'pages.sort' => 'Rendezés',
  'pages.add' => 'Hozzáad',
  'pages.delete' => 'Eltávolítás',
  'pages.invisible' => 'Láthatatlan aloldalak',
  'pages.invisible.home' => 'Láthatatlan oldalak',
  'pages.no.visible' => 'Nincsenek még látható oldalak',
  'pages.no.invisible' => 'Nincsenek még láthatatlan oldalak',
  'pages.moved' => 'Az oldal áthelyezve',
  'pages.sorted' => 'Az oldalak rendezve',
  'pages.show.more' => 'többet mutat',
  'pages.show.less' => 'kevesebbet mutat',
  'pages.errors.notfound' => 'Az oldal nem található',
  'pages.errors.move' => 'Az oldalt nem lehet áthelyezni',
  'pages.errors.sort' => 'Nincs minden oldal rendezve',
  'pages.errors.nosort' => 'Nincs semmi rendezve',
  
  // no subpages allowed
  'nopages.title' => 'Aloldalak',
  'nopages.text' => 'Ennek az oldalnak állítólag nincs aloldala',  
  
  // add page
  'pages.add.title' => 'Új oldal hozzáadása',
  'pages.add.label.title' => 'Cím',
  'pages.add.label.url' => 'URL',
  'pages.add.label.template' => 'Sablon',
  'pages.add.button' => 'Mentés',
  'pages.add.errors.title' => 'Kérlek add meg a címet',
  'pages.add.errors.url' => 'Kérlek add meg az oldal URL-jét',
  'pages.add.errors.characters' => 'Kérlek csak a-z, 0-9, _, - karaktereket adj meg URL-nek',
  'pages.add.errors.exists' => 'Az oldal ezzel az URL-lel már létezik',
  'pages.add.errors.permissions' => 'A könyvtár nem hozható létre',
  'pages.add.success' => 'Az oldal létrehozva',
  
  // update page
  'pages.update.errors' => 'Kérlek az összes mezőt helyesen töltsd ki',
  
  // delete page  
  'pages.delete.title' => 'Az oldal törlése',
  'pages.delete.button' => 'Törlés',
  'pages.delete.errors.homepage' => 'Nem törölheted a főoldalt',
  'pages.delete.errors.errorpage' => 'Nem törölheted a hiba oldalt',
  'pages.delete.errors.subpages' => 'Kérlek először az aloldalt töröld.',
  'pages.delete.errors.permissions' => 'Az oldalt nem sikerült eltávolítani',
  'pages.delete.success' => 'Az oldal törölve',
  
  // options
  'options.url' => 'URL',
  'options.button' => 'Mentés',
  'options.home.url' => 'URL',
  'options.home.text' => 'A főoldal URL-jét nem változtathatod meg',
  'options.error.text' => 'A hiba oldal URL-jét nem változtathatod meg',
  'options.errors.homepage' => 'Nem változtathatod meg a főoldal URL-jét',
  'options.errors.errorpage' => 'Nem változtathatod meg a hiba oldal URL-jét',
  'options.errors.characters' => 'Kérlek csak a-z, 0-9, _, - karaktereket használd',
  'options.errors.permissions' => 'A könyvtár tartalma nem mozgatható',
  'options.errors.exists' => 'Az új URL már létezik',
  'options.errors.move' => 'A könyvtár tartalma nem mozgatható',
  
  // files
  'files.title' => 'Fájlok',
  'files.upload' => 'Új fájl feltöltése',
  'files.edit' => 'Szerkeszt',
  'files.replace' => 'Cserél',
  'files.delete' => 'Törlés',
  'files.empty' => 'Nincs még fájl',
  
  'nofiles.title' => 'Nincs fájl',
  'nofiles.text' => 'Ennek az oldalnak állítólag nincs fájlja',
  
  // delete file
  'files.delete.title' => 'A fájl törlése',
  'files.delete.button' => 'Törlés',
  'files.delete.errors.notfound' => 'A fájl nem található',
  'files.delete.errors.permissions' => 'A fájlt nem lehet törölni',
  'files.delete.success' => 'A fájl törölve',
  
  // edit file
  'files.edit.title' => 'A fájl szerkesztése',
  'files.edit.filename' => 'Fájlnév (kiterjesztés nélkül)',
  'files.edit.button' => 'Mentés',
  'files.edit.errors.filename' => 'Please enter a valid filename',
  'files.edit.errors.notfound' => 'A fájl nem található',
  'files.edit.errors.exists' => 'Az új név már létezik',
  'files.edit.errors.permissions' => 'A fájlt nem lehet átnevezni',
  'files.edit.success' => 'A fájl mentve',
  
  // replace file
  'files.replace.title' => 'Fájl cseréje',
  'files.replace.file' => 'Fájl',
  'files.replace.choose' => 'Kérlek válassz új fájlt a számítógépről…',
  'files.replace.button' => 'Cserél',
  'files.replace.errors.notfound' => 'A fájl nem található',
  'files.replace.success' => 'A fájl cserélve',
  
  // upload file
  'files.upload.title' => 'Új fájl feltöltése',
  'files.upload.choose' => 'Kérlek válassz egy fájlt a számítógépről…',
  'files.upload.button' => 'Feltöltés',
    
  // login  
  'login.button' => 'Belépés',
  'login.username' => 'Felhasználónév',
  'login.password' => 'Jelszó',
  'login.error' => 'Érvénytelen felhasználónév vagy jelszó',
  'login.success' => 'Bejelentkezve',
  'login.error.browser.title' => 'Elavult böngészőt használsz',
  'login.error.browser.text' => 'Kérlek frissítsd a legfrissebb verzióra a Google Chrome-ot, a Firefox-ot, a Safari-t vagy az Internet Explorer-t.',
  
  // upload
  'upload.errors.missing-file' => 'A fájl nem található',
  'upload.errors.file-exists' => 'A fájl létezik és nem lehet felülírni',
  'upload.errors.invalid-upload' => 'A feltöltés nem sikerült',
  'upload.errors.too-big' => 'A fájl túl nagy',
  'upload.errors.invalid-file' => 'A fájltípus nem engedélyezett',
  'upload.errors.move-error' => 'A fájlt nem lehet mozgatni a szerverre',
  'upload.success' => 'A fájl feltöltve',
  
  // writer
  'writer.errors.permissions' => 'A fájl nem írható',
  'writer.errors.write' => 'Az adat nem adható hozzá',
  'writer.success' => 'A fájl elmentve',
  
  // form buttons
  'form.buttons.h1' => 'h1',
  'form.buttons.h2' => 'h2',
  'form.buttons.h3' => 'h3',
  'form.buttons.bold' => 'félkövér',
  'form.buttons.bold.sample' => 'félkövér szöveg',
  'form.buttons.italic' => 'dölt',
  'form.buttons.italic.sample' => 'dölt szöveg',
  'form.buttons.link' => 'link',
  'form.buttons.email' => 'email',
  
  'form.overlay.link.title' => 'Link beillesztése',
  'form.overlay.link.link' => 'Link',
  'form.overlay.link.text' => 'Link szöveg (opcionális)',
  'form.overlay.link.button' => 'Link beillesztése',
  
  'form.overlay.email.title' => 'Email beillesztése',
  'form.overlay.email.link' => 'Email cím',
  'form.overlay.email.text' => 'Link szöveg (opcionális)',
  'form.overlay.email.button' => 'Email beillesztése',
  
));