<?php

/* 
 * author: Fahri Özkaramanlı <http://fahrio.com>
 */

l::set(array(
  
  // global 
  'ok' => 'Tamam',
  'cancel' => 'Vazgeç',
  'nochanges' => 'Hiçbir değişiklik olmadı',

  // header
  'header.title' => 'Kirby',
  'header.logout' => 'Çıkış', 
  
  // subheader
  'subheader.home' => 'Ana Sayfa',
  'subheader.site' => 'Web Siteniz',
  'subheader.info' => 'Bilgiler',

  // tabs
  'tabs.overview' => 'Özet',
  'tabs.info' => 'Bilgileri düzenle',
  'tabs.content' => 'İçerik',
  'tabs.files' => 'Dosyalar',
  'tabs.options' => 'URL',
  'tabs.preview' => 'Önizleme',

  // dashboard
  'dashboard.edit' => 'Düzenle',
  'dashboard.content' => 'İçerik',
  'dashboard.content.empty' => 'Bu sayfanın içeriği yok',
  'dashboard.files' => 'Dosyalar',
  'dashboard.template' => 'Şablon',
  'dashboard.stats.images' => 'Görseller', 
  'dashboard.stats.videos' => 'Videolar', 
  'dashboard.stats.docs' => 'Belgeler', 
  'dashboard.stats.sound' => 'Ses', 
  'dashboard.stats.others' => 'Diğer', 

  // home
  'home.siteinfo' => 'Site bilgileri',
  'home.edit' => 'Düzenle',
  'home.warning.title' => 'Lüften önce aşağıdaki sorunları giderin!',
  'home.warning.permissions.title' => 'Dosya izinleri',
  'home.warning.permissions.text' => 'Content dizini için izinlerinizi değiştirmeniz gerekiyor. Lütfen tüm dizinlerin erişim izinlerini <strong>0755</strong> ve tüm dosyaların erişim izninlerini <strong>0666</strong> olarak değiştirin.',
  'home.warning.blueprints.title' => 'Sayfa Planları',
  'home.warning.blueprints.text' => 'Bu şablonlar için henüz planlar oluşturulmamış.<br /><a href="http://getkirby.com/docs/panel/blueprints"> Sayfa planları ile ilgili bilgi almak için tıklayın.</a>',
  'home.warning.thumbs.title' => 'Küçültülmüş görseller "Thumbnails"',
  'home.warning.thumbs.text' => 'Lütfen sitenizin en üst dizinine <strong>thumbs</strong> adında yeni bir dizin yaratın ve erişim iznini <strong>0755</strong> olarak ayarlayın.',

  // siteinfo
  'siteinfo.button' => 'Kaydet',
  'siteinfo.errors.title' => 'Lütfen başlık girin',
  'siteinfo.errors.permissions' => '<strong>content/site.txt</strong> üzerine yazılamıyor. <br />Lütfen erişim iznini değiştirerek tekrar deneyin.',

  // content form 
  'content.save' => 'Kaydet',
  'content.previous' => 'Önceki',
  'content.next' => 'Sonraki',
  'content.invisible' => 'saklı',
  
  // no content available
  'nocontent.title' => 'İçerik yok',
  'nocontent.text' => 'Bu sayfa için içerik yok.',
    
  // pages
  'pages.title' => 'Görünür alt sayfalar',
  'pages.title.home' => 'Görünür sayfalar',
  'pages.home' => 'Ana sayfa',
  'pages.sort' => 'Sırala',
  'pages.add' => 'Yeni Sayfa',
  'pages.delete' => 'Sil',
  'pages.invisible' => 'Saklı alt sayfalar',
  'pages.invisible.home' => 'Saklı sayfalar',
  'pages.no.visible' => 'Henüz görünür sayfa yok',
  'pages.no.invisible' => 'Henüz saklı sayfa yok',
  'pages.moved' => 'Sayfa taşındı',
  'pages.sorted' => 'Sayfalar sıralandı',
  'pages.show.more' => 'daha fazla göster',
  'pages.show.less' => 'daha az göster',
  'pages.errors.notfound' => 'Sayfa bulunamadı',
  'pages.errors.move' => 'Sayfa taşınamadı',
  'pages.errors.sort' => 'Bütün sayfalar sıralanamıyor',
  'pages.errors.nosort' => 'Sıralanacak birşey yok',

  // no subpages allowed
  'nopages.title' => 'Alt sayfalar',
  'nopages.text' => 'Bu sayfaya alt sayfa eklenemez',
  
  // add page
  'pages.add.title' => 'Yeni sayfa ekle',
  'pages.add.label.title' => 'Başlık',
  'pages.add.label.url' => 'URL',
  'pages.add.label.template' => 'Şablon',
  'pages.add.button' => 'Kaydet',
  'pages.add.errors.title' => 'Lütfen bir başlık girin',
  'pages.add.errors.url' => 'Lütfen bir URL girin',
  'pages.add.errors.characters' => 'URL icin sadece a-z, 0-9, _, - kullanabilirsiniz',
  'pages.add.errors.exists' => 'Aynı URL ile başka bir sayfa mevcut',
  'pages.add.errors.permissions' => 'Dizin yaratılamadı',
  'pages.add.success' => 'Sayfaya oluşturuldu',

  // update page
  'pages.update.errors' => 'Lütfen bütün alanları doğru bir şekilde doldurunuz.',
    
  // delete page  
  'pages.delete.title' => 'Sayfayı sil',
  'pages.delete.button' => 'Sil',
  'pages.delete.errors.homepage' => 'Ana sayfayı silemezsiniz',
  'pages.delete.errors.errorpage' => 'Hata sayfasını silemezsiniz',
  'pages.delete.errors.subpages' => 'Bu sayfanin alt sayfaları var. Lütfen önce alt sayfaları silin.',
  'pages.delete.errors.permissions' => 'Sayfa silinemiyor',
  'pages.delete.success' => 'Sayfa silindi',
      
  // options
  'options.url' => 'URL',
  'options.button' => 'Kaydet',
  'options.home.url' => 'URL',
  'options.home.text' => 'Ana sayfaya ait URL degistirilemez',
  'options.error.text' => 'Hata sayfasına ait URL degistirilemez',
  'options.errors.homepage' => 'Ana sayfaya ait URL degistirilemez',
  'options.errors.errorpage' => 'Hata sayfasına ait URL degistirilemez',
  'options.errors.characters' => 'Lütfen sadece a-z, 0-9, _, - karakterlerini kullanın',
  'options.errors.permissions' => 'İçerik dizini taşınamaz',
  'options.errors.exists' => 'yeni URL daha önce oluşturulmuş',
  'options.errors.move' => 'İçerik dizini taşınamaz',

  // files
  'files.title' => 'Dosyalar',
  'files.upload' => 'Yeni dosya yükle',
  'files.edit' => 'Düzenle',
  'files.replace' => 'Değiştir',
  'files.delete' => 'Sil',
  'files.empty' => 'Henüz dosya yok',

  'nofiles.title' => 'Dosya yok',
  'nofiles.text' => 'Bu sayfaya dosya yüklenemez',
  
  // delete file
  'files.delete.title' => 'Dosyayı sil',
  'files.delete.button' => 'Sil',
  'files.delete.errors.notfound' => 'Dosya bulunamadı',
  'files.delete.errors.permissions' => 'Dosya silinemedi',
  'files.delete.success' => 'Dosya silindi',

  // edit file
  'files.edit.title' => 'Dosyayı Düzenle',
  'files.edit.filename' => 'Dosya adı (uzantısız)',
  'files.edit.button' => 'Kaydet',
  'files.edit.errors.filename' => 'Lütfen geçerli bir dosya adı girin',
  'files.edit.errors.notfound' => 'Dosya bulunamadı',
  'files.edit.errors.exists' => 'Bu isimde başka bir dosya mevcut',
  'files.edit.errors.permissions' => 'Dosya ismi degiştirilemedi',
  'files.edit.success' => 'Dosya kaydedildi',

  // replace file
  'files.replace.title' => 'Dosyayı degiştir',
  'files.replace.file' => 'Dosya',
  'files.replace.choose' => 'Yeni bir dosya seçin…',
  'files.replace.button' => 'Değiştir',
  'files.replace.errors.notfound' => 'Dosya bulunmadı',
  'files.replace.success' => 'Dosya değiştirildi',

  // upload file
  'files.upload.title' => 'Yeni dosya yükle',
  'files.upload.choose' => 'Yeni bir dosya seçin…',
  'files.upload.button' => 'Yükle',
      
  // login  
  'login.button' => 'Giriş',
  'login.username' => 'Kullanıcı adı',
  'login.password' => 'Parola',
  'login.error' => 'Yanlış kullanıcı adı veya parola',
  'login.success' => 'Diriş yapıldı',
  'login.error.browser.title' => 'Eski bir tarayıcı kullanıyorsunuz',
  'login.error.browser.text' => 'Lütfen Google Chrome, Firefox, Safari veya Internet Explorer tarayıcılarının güncel bir sürümünü yükleyin.',
  
  // upload
  'upload.errors.missing-file' => 'Dosya bulunamadı',
  'upload.errors.file-exists' => 'Dosya mevcut ve üzerine yazılamıyor',
  'upload.errors.invalid-upload' => 'Yükleme başarısız',
  'upload.errors.too-big' => 'Dosya çok büyük',
  'upload.errors.invalid-file' => 'Bu dosya türünü yükleyemezsiniz',
  'upload.errors.move-error' => 'Dosya sunucuya taşınamadı',
  'upload.success' => 'Dosya yüklendi',

  // writer
  'writer.errors.permissions' => 'Dosya üzerine yazılamıyor',
  'writer.errors.write' => 'Veriler eklenemedi',
  'writer.success' => 'Dosya kaydedildi',

  // form buttons
  'form.buttons.h1' => 'h1',
  'form.buttons.h2' => 'h2',
  'form.buttons.h3' => 'h3',
  'form.buttons.bold' => 'koyu',
  'form.buttons.bold.sample' => 'koyu metin',
  'form.buttons.italic' => 'italik',
  'form.buttons.italic.sample' => 'italik metin',
  'form.buttons.link' => 'bağlantı',
  'form.buttons.email' => 'eposta',

  'form.overlay.link.title' => 'Bağlantı Ekle',
  'form.overlay.link.link' => 'Bağlantı',
  'form.overlay.link.text' => 'Bağlantı Metni (opsiyonel)',
  'form.overlay.link.button' => 'Bağlantı Girin',

  'form.overlay.email.title' => 'Eposta Girin',
  'form.overlay.email.link' => 'Eposta Adresi',
  'form.overlay.email.text' => 'Bağlantı Metni (opsiyonel)',
  'form.overlay.email.button' => 'Eposta Girin',
  
));