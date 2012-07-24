<?php

/* 
 * author: Seitenwerk & Parlak <http://seitenwerk.at>
 */

l::set(array(
  
  // global 
  'ok' => 'Tamam',
  'cancel' => 'yarida birakmak',
  'nochanges' => 'degismez',

  // header
  'header.title' => 'Kirby',
  'header.logout' => 'cikis', 
  
  // subheader
  'subheader.home' => 'anasayfa',  
  'subheader.site' => 'sayfaniz',
  'subheader.info' => 'info',

  // tabs
  'tabs.overview' => 'özet',
  'tabs.info' => 'info uyarlamak',
  'tabs.content' => 'icerik',
  'tabs.files' => 'dosyalar',
  'tabs.options' => 'URL',
  'tabs.preview' => 'gelecek program',

  // dashboard
  'dashboard.edit' => 'uyarlamak',
  'dashboard.content' => 'icerik',
  'dashboard.content.empty' => 'bos',
  'dashboard.files' => 'dosyalar',
  'dashboard.template' => 'tasari',
  'dashboard.stats.images' => 'resimler', 
  'dashboard.stats.videos' => 'videolar', 
  'dashboard.stats.docs' => 'belgeler', 
  'dashboard.stats.sound' => 'ses', 
  'dashboard.stats.others' => 'baska', 

  // home
  'home.siteinfo' => 'sayfa info',
  'home.edit' => 'uyarlamak',
  'home.warning.title' => 'lüften önce onarmak!',
  'home.warning.permissions.title' => 'giris izni',
  'home.warning.permissions.text' => 'giris izniniz yok. Lütfen giris izniniz bütün dosyalari icin degistirin. <br />Lütfen bütün dosyalarnizi degistirin icin <strong>0755</strong> ve dosya´incindeki klasör´de icin <strong>0666</strong>',
  'home.warning.blueprints.title' => 'Blueprints',
  'home.warning.blueprints.text' => 'Bu Templates daha Blueprints yapilmamistir.<br /><a href="http://getkirby.com/docs/panel/blueprints">dosyayi okuyun nasil blueprints ayarlanir…</a>',
  'home.warning.thumbs.title' => 'Thumbnails dosya yönetim icin',
  'home.warning.thumbs.text' => 'Lütfen yeni bir <strong>thumbs</strong> dosya sayfaniz´in anadosyasi icinde yerlestirin ve
  kullanici hakkini <strong>0755</strong> yapirlandirin.',

  // siteinfo
  'siteinfo.button' => 'kayit',
  'siteinfo.errors.title' => 'Lütfen ünvaniniz girin',
  'siteinfo.errors.permissions' => '<strong>content/site.txt</strong> yazilmaz <br />Lütfen giris iziniz degistirin',

  // content form 
  'content.save' => 'kayit',
  'content.previous' => 'geri',
  'content.next' => 'ilerle',
  'content.invisible' => 'görünmez',
  
  // no content available
  'nocontent.title' => 'icerisiz',
  'nocontent.text' => 'bu sayfa icerisiz',
    
  // pages
  'pages.title' => 'alt sayfa icerikli',
  'pages.title.home' => 'sayfa icerikli',
  'pages.home' => 'basla sayfasi',
  'pages.sort' => 'ayirmak',
  'pages.add' => 'yeni sayfa',
  'pages.delete' => 'sil',
  'pages.invisible' => 'alt sayfa görünmez',
  'pages.invisible.home' => 'sayfa görünmez',
  'pages.no.visible' => 'daha icerikli sayfa yok',
  'pages.no.invisible' => 'daha görünmez sayfa yok',
  'pages.moved' => 'bu sayfa ertelendi',
  'pages.sorted' => 'sayfalar ayikla',
  'pages.show.more' => 'fazla göster',
  'pages.show.less' => 'az göster',
  'pages.errors.notfound' => 'sayfa bulunamadi',
  'pages.errors.move' => 'sayfa ertelenmiyor',
  'pages.errors.sort' => 'bütün sayfalar ayiklamiyor',
  'pages.errors.nosort' => 'ayiklanamaz',

  // no subpages allowed
  'nopages.title' => 'alt sayfa',
  'nopages.text' => 'bu sayfaya alt sayfa eklenemez',  
  
  // add page
  'pages.add.title' => 'yeni sayfa ekle',
  'pages.add.label.title' => 'ünvan',
  'pages.add.label.url' => 'URL',
  'pages.add.label.template' => 'Template',
  'pages.add.button' => 'kayit',
  'pages.add.errors.title' => 'Lütfen bir ünvan girin',
  'pages.add.errors.url' => 'Lütfen bir URL girin',
  'pages.add.errors.characters' => 'URL icin sadece a-z, 0-9, _, - kullanin',
  'pages.add.errors.exists' => 'bu sayfa URL icin uygun',
  'pages.add.errors.permissions' => 'listeyi yapamasin',
  'pages.add.success' => 'sayfaya izin var',

  // update page
  'pages.update.errors' => 'Lütfen bosluklari dogru doldurunuz.',
    
  // delete page  
  'pages.delete.title' => 'sayfayi sil',
  'pages.delete.button' => 'sil',
  'pages.delete.errors.homepage' => 'Homepage silinmiyor',
  'pages.delete.errors.errorpage' => 'yanlis sayfasi silinmiyor',
  'pages.delete.errors.subpages' => 'Bu sayfanin alt sayfasi var. Lütfen önce silin',
  'pages.delete.errors.permissions' => 'sayfa silinmiyor',
  'pages.delete.success' => 'sayfa silinmis',
      
  // options
  'options.url' => 'URL',
  'options.button' => 'kayit',
  'options.home.url' => 'URL',
  'options.home.text' => 'Homepage´in URL degistiremesin',
  'options.error.text' => 'URL´deki yanlis sayfayi degistiremesin',
  'options.errors.homepage' => 'Homepage´ in URL sayfasi degistiremesin',
  'options.errors.errorpage' => 'yanlis sayfanin URL degistiremesin',
  'options.errors.characters' => 'lütfen sadece sembolu takip edin: a-z, 0-9, _, -',
  'options.errors.permissions' => 'dosya bu iceriklerle degismesin',
  'options.errors.exists' => 'yeni URL var',
  'options.errors.move' => 'iceriklerle dosya ertelenemes',

  // files
  'files.title' => 'dosyalar',
  'files.upload' => 'dosyalari indir',
  'files.edit' => 'dosylarai düzenlemek',
  'files.replace' => 'degistirmek',
  'files.delete' => 'sil',
  'files.empty' => 'bu sayfa icin dosya inmedi',

  'nofiles.title' => 'dosya yok',
  'nofiles.text' => 'bu sayfa icin dosya görünmez',
  
  // delete file
  'files.delete.title' => 'dosyayi sil',
  'files.delete.button' => 'sil',
  'files.delete.errors.notfound' => 'dosya bulunmadi',
  'files.delete.errors.permissions' => 'dosya silinmiyor',
  'files.delete.success' => 'dosya silindi',

  // edit file
  'files.edit.title' => 'dosya düzenlemek',
  'files.edit.filename' => 'dosya ismi (ilavesiz)',
  'files.edit.button' => 'kayit',
  'files.edit.errors.filename' => 'Please enter a valid filename',
  'files.edit.errors.notfound' => 'dosya bulunmadi',
  'files.edit.errors.exists' => 'dosya ismi var',
  'files.edit.errors.permissions' => 'dosya ismi degismez',
  'files.edit.success' => 'dosya kayitli',

  // replace file
  'files.replace.title' => 'dosyayi degis',
  'files.replace.file' => 'dosya',
  'files.replace.choose' => 'bilgisayari´niza bir dosya bulun',
  'files.replace.button' => 'degismek',
  'files.replace.errors.notfound' => 'dosya bulunmadi',
  'files.replace.success' => 'dosya degisti',

  // upload file
  'files.upload.title' => 'yeni dosya indir',
  'files.upload.choose' => 'lütfen bilgisayarinizdan bir dosya acin',
  'files.upload.button' => 'indir',
      
  // login  
  'login.button' => 'kayit',
  'login.username' => 'kullanici isim',
  'login.password' => 'sifre',
  'login.error' => 'giris izini yok',
  'login.success' => 'simdi kayit oldun',
  'login.error.browser.title' => 'eski Browser kullaniyorsunuz',
  'login.error.browser.text' => 'lütfen Google Chrome, Firefox, Safari veya Internet Explorer güncellestirin.',
  
  // upload
  'upload.errors.missing-file' => 'dosya bulunamadi',
  'upload.errors.file-exists' => 'dosya var',
  'upload.errors.invalid-upload' => 'upload´a hata var',
  'upload.errors.too-big' => 'dosya cok büyük',
  'upload.errors.invalid-file' => 'dosya tipi büyük',
  'upload.errors.move-error' => 'dosya server´e indirilemez',
  'upload.success' => 'dosya indirildi',

  // writer
  'writer.errors.permissions' => 'dosya yazlamaz',
  'writer.errors.write' => 'veriler kayitlanamaz',
  'writer.success' => 'veriler kayitlanmadi',

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
  'form.overlay.link.button' => 'Inser Link',

  'form.overlay.email.title' => 'Insert Email',
  'form.overlay.email.link' => 'Email Address',
  'form.overlay.email.text' => 'Link Text (optional)',
  'form.overlay.email.button' => 'Inser Email',
  
));