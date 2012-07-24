<?php

/* 
 * Author: Lauri Liimatta <http://lauriliimatta.com>
 */

l::set(array(
  
  // global 
  'ok' => 'Ok',
  'cancel' => 'Peruuta',
  'nochanges' => 'Ei muutoksia',

  // header
  'header.title' => 'Kirby',
  'header.logout' => 'Kirjaudu ulos', 
  
  // subheader
  'subheader.home' => 'Etusivu',  
  'subheader.site' => 'Sivustosi',
  'subheader.info' => 'Tiedot',

  // tabs
  'tabs.overview' => 'Päänäkymä',
  'tabs.info' => 'Muokkaa tietoja',
  'tabs.content' => 'Sisältö',
  'tabs.files' => 'Tiedostot',
  'tabs.options' => 'Osoite',
  'tabs.preview' => 'Esikatselu',
  
  // dashboard
  'dashboard.edit' => 'Muokkaa',
  'dashboard.content' => 'Sisältö',
  'dashboard.content.empty' => 'Tällä sivulla ei ole sisältöä',
  'dashboard.files' => 'Tiedostot',
  'dashboard.template' => 'Sivupohja',
  'dashboard.stats.images' => 'Kuvat', 
  'dashboard.stats.videos' => 'Videot', 
  'dashboard.stats.docs' => 'Dokumentit', 
  'dashboard.stats.sound' => 'Äänet', 
  'dashboard.stats.others' => 'Muut', 

  // home
  'home.siteinfo' => 'Sivuston tiedot',
  'home.edit' => 'Muokkaa',
  'home.warning.title' => 'Korjaa tämä ensin!',
  'home.warning.permissions.title' => 'Oikeudet',
  'home.warning.permissions.text' => 'Content-hakemiston kirjoitusoikeuksia ei ole asetettu oikealla tavalla. Vaihda kaikkien hakemistojen kirjoitusoikeuksiksi <strong>0755</strong> ja tiedostojen kirjoitusoikeuksiksi <strong>0666</strong>',
  'home.warning.blueprints.title' => 'Suunnitelmat',
  'home.warning.blueprints.text' => 'Seuraaville sivupohjille ei ole saatavilla suunnitelmia<br /> Lue lisää <a href="http://getkirby.com/docs/panel/blueprints">suunnitelmien asentamisesta</a>',
  'home.warning.thumbs.title' => 'Näytekuvat',
  'home.warning.thumbs.text' => 'Lisää hakemisto <strong>thumbs</strong> sivustosi päähakemistoon ja vaihda sen kirjoitusoikeudeksi <strong>0755</strong>',
  
  // siteinfo
  'siteinfo.button' => 'Tallenna',
  'siteinfo.errors.title' => 'Lisää otsikko',
  'siteinfo.errors.permissions' => '<strong>content/site.txt</strong> -tiedostoon ei ole kirjoitusoikeuksia. <br />Muuta oikeudet ja yritä uudelleen.',
  
  // content form 
  'content.save' => 'Tallenna',
  'content.previous' => 'Edellinen',
  'content.next' => 'Seuraava',
  'content.invisible' => 'näkymätön',
  
  // no content available
  'nocontent.title' => 'Ei sisältöä',
  'nocontent.text' => 'Sisältöä ei ole saatavissa tälle sivulle.',
    
  // pages
  'pages.title' => 'Näkyvät alasivut',
  'pages.title.home' => 'Näkyvät sivut',
  'pages.home' => 'Etusivu',
  'pages.sort' => 'Järjestä',
  'pages.add' => 'Lisää',
  'pages.delete' => 'Poista',
  'pages.invisible' => 'Näkymättömät alasivut',
  'pages.invisible.home' => 'Näkymättömät sivut',
  'pages.no.visible' => 'Ei näkyviä sivuja vielä',
  'pages.no.invisible' => 'Ei näkymättömiä sivuja vielä',
  'pages.moved' => 'Sivu on siirretty',
  'pages.sorted' => 'Sivut on järjestelty uudelleen',
  'pages.show.more' => 'näytä lisää',
  'pages.show.less' => 'näytä vähemmän',
  'pages.errors.notfound' => 'Sivua ei löydetty',
  'pages.errors.move' => 'Sivua ei voitu siirtää',
  'pages.errors.sort' => 'Kaikkia sivuja ei voitu järjestää uudelleen',
  'pages.errors.nosort' => 'Ei järjestettäviä sivuja',

  // no subpages allowed
  'nopages.title' => 'Alasivut',
  'nopages.text' => 'Alasivut eivät ole käytössä tällä sivulla',  
  
  // add page
  'pages.add.title' => 'Lisää uusi sivu',
  'pages.add.label.title' => 'Otsikko',
  'pages.add.label.url' => 'Osoite',
  'pages.add.label.template' => 'Sivupohja',
  'pages.add.button' => 'Tallenna',
  'pages.add.errors.title' => 'Lisää otsikko',
  'pages.add.errors.url' => 'Lisää sivullesi osoite',
  'pages.add.errors.characters' => 'Käytä vain seuraavia merkkejä osoitteessasi: a-z, 0-9, _, -',
  'pages.add.errors.exists' => 'Sivu valitsemallasi osoitteella on jo olemassa',
  'pages.add.errors.permissions' => 'Hakemiston luominen epäonnistui',
  'pages.add.success' => 'Sivu on luotu',

  // update page
  'pages.update.errors' => 'Täytä kaikki kohdat oikeassa muodossa',
    
  // delete page  
  'pages.delete.title' => 'Poista tämä sivu',
  'pages.delete.button' => 'Poista',
  'pages.delete.errors.homepage' => 'Etusivun poistaminen ei ole mahdollista',
  'pages.delete.errors.errorpage' => 'Error-sivun poistaminen ei ole mahdollista',
  'pages.delete.errors.subpages' => 'Tällä sivulla on alasivuja. Poista ne ensin.',
  'pages.delete.errors.permissions' => 'Sivun poistaminen epäonnistui',
  'pages.delete.success' => 'Sivu on poistettu',

  // options
  'options.url' => 'Osoite',
  'options.button' => 'Tallenna',
  'options.home.url' => 'Osoite',
  'options.home.text' => 'Etusivun osoitteen muuttaminen ei ole mahdollista',
  'options.error.text' => 'Error-sivun osoitteen muuttaminen ei ole mahdollista',
  'options.errors.homepage' => 'Etusivun osoitteen muuttaminen ei ole mahdollista',
  'options.errors.errorpage' => 'Error-sivun osoitteen muuttaminen ei ole mahdollista',
  'options.errors.characters' => 'Käytä vain seuraavia merkkejä: a-z, 0-9, _, -',
  'options.errors.permissions' => 'Content-hakemistoa ei voida siirtää',
  'options.errors.exists' => 'Valitsemasi osoite on jo käytössä',
  'options.errors.move' => 'Content-hakemistoa ei voida siirtää',

  // files
  'files.title' => 'Tiedostot',
  'files.upload' => 'Lisää uusi tiedosto',
  'files.edit' => 'Muokkaa',
  'files.replace' => 'Korvaa',
  'files.delete' => 'Poista',
  'files.empty' => 'Ei tiedostoja',

  'nofiles.title' => 'Ei tiedostoja',
  'nofiles.text' => 'Tälle sivulle ei voi lisätä tiedostoja',
  
  // delete file
  'files.delete.title' => 'Poista tämä tiedosto',
  'files.delete.button' => 'Poista',
  'files.delete.errors.notfound' => 'Tiedostoa ei löytynyt',
  'files.delete.errors.permissions' => 'Tiedostoa ei voitu poistaa',
  'files.delete.success' => 'Tiedosto on poistettu',

  // edit file
  'files.edit.title' => 'Muokkaa tiedostoa',
  'files.edit.filename' => 'Tiedoston nimi (ilman tiedostopäätettä)',
  'files.edit.button' => 'Tallenna',
  'files.edit.errors.filename' => 'Syötä sopiva tiedostonimi',
  'files.edit.errors.notfound' => 'Tiedostoa ei löydetty',
  'files.edit.errors.exists' => 'Valitsemasi nimi on jo käytössä',
  'files.edit.errors.permissions' => 'Tiedostoa ei voitu nimetä uudelleen',
  'files.edit.success' => 'Tiedosto on tallennettu',

  // replace file
  'files.replace.title' => 'Korvaa tämä tiedosto',
  'files.replace.file' => 'Tiedosto',
  'files.replace.choose' => 'Valitse tiedosto tietokoneeltasi...',
  'files.replace.button' => 'Korvaa',
  'files.replace.errors.notfound' => 'Tiedostoa ei löytynyt',
  'files.replace.success' => 'Tiedosto on korvattu',

  // upload file
  'files.upload.title' => 'Lisää uusi tiedosto',
  'files.upload.choose' => 'Valitse tiedosto tietokoneeltasi...',
  'files.upload.button' => 'Siirrä',
      
  // login  
  'login.button' => 'Kirjaudu',
  'login.username' => 'Käyttäjänimi',
  'login.password' => 'Salasana',
  'login.error' => 'Väärä käyttäjänimi tai salasana',
  'login.success' => 'Olet kirjautunut sisään',
  'login.error.browser.title' => 'Sinulla on käytössä vanha selainversio',
  'login.error.browser.text' => 'Päivitä selaimesi (Google Chrome, Firefox, Safari tai Internet Explorer) uusimpaan versioon.',
  
  // upload
  'upload.errors.missing-file' => 'Tiedostoa ei löydetty',
  'upload.errors.file-exists' => 'Tiedosto on jo olemassa, joten sitä ei voitu korvata',
  'upload.errors.invalid-upload' => 'Siirto epäonnistui',
  'upload.errors.too-big' => 'Siirtämäsi tiedosto on liian suuri',
  'upload.errors.invalid-file' => 'Tiedoston tyyppi ei ole sallittu',
  'upload.errors.move-error' => 'Tiedostoa ei voitu siirtää palvelimelle',
  'upload.success' => 'Tiedosto on siirretty',

  // writer
  'writer.errors.permissions' => 'Tiedostoon ei ole kirjoitusoikeuksia',
  'writer.errors.write' => 'Tietoja ei voitu lisätä',
  'writer.success' => 'Tiedosto on tallennettu',
  
  // form buttons
  'form.buttons.h1' => 'h1',
  'form.buttons.h2' => 'h2',
  'form.buttons.h3' => 'h3',
  'form.buttons.bold' => 'lihavoi',
  'form.buttons.bold.sample' => 'lihavoitu teksti',
  'form.buttons.italic' => 'kursivoitu',
  'form.buttons.italic.sample' => 'kursivoitu teksti',
  'form.buttons.link' => 'linkki',
  'form.buttons.email' => 'sähköposti',

  'form.overlay.link.title' => 'Lisää linkki',
  'form.overlay.link.link' => 'Linkki',
  'form.overlay.link.text' => 'Linkin teksti (ei pakollinen)',
  'form.overlay.link.button' => 'Lisää linkki',

  'form.overlay.email.title' => 'Lisää sähköposti',
  'form.overlay.email.link' => 'Sähköpostiosoite',
  'form.overlay.email.text' => 'Linkin teksti (ei pakollinen)',
  'form.overlay.email.button' => 'Lisää sähköposti',
  
));

?>