<?php

l::set(array(
  
  // global 
  'ok' => 'Zatwierdź',
  'cancel' => 'Zrezygnuj',
  'nochanges' => 'Brak zmian',

  // header
  'header.title' => 'Kirby',
  'header.logout' => 'Wyloguj', 
  
  // subheader
  'subheader.home' => 'Home',  
  'subheader.site' => 'Twoja Strona',
  'subheader.info' => 'Informacja',

  // tabs
  'tabs.overview' => 'Opis',
  'tabs.info' => 'Edycja Informacji',
  'tabs.content' => 'Treść',
  'tabs.files' => 'Pliki',
  'tabs.options' => 'URL',
  'tabs.preview' => 'Podgląd',
  
  // dashboard
  'dashboard.edit' => 'Edycja',
  'dashboard.content' => 'Treść',
  'dashboard.content.empty' => 'Ta strona nie ma zawartości',
  'dashboard.files' => 'Pliki',
  'dashboard.template' => 'Szablon',
  'dashboard.stats.images' => 'Zdjęcia', 
  'dashboard.stats.videos' => 'Wideo', 
  'dashboard.stats.docs' => 'Dokumenty', 
  'dashboard.stats.sound' => 'Audio', 
  'dashboard.stats.others' => 'Inne', 

  // home
  'home.siteinfo' => 'Informacja o stronie',
  'home.edit' => 'Edytuj',
  'home.warning.title' => 'Proszę najpierw naprawić!',
  'home.warning.permissions.title' => 'Uprawnienia',
  'home.warning.permissions.text' => 'Uprawnienia w folderze content są niewłaściwe. Proszę zmienić uprawnienia do wszystkich folderów na <strong>0755</strong> i wszystkich plików na <strong>0666</strong>',
  'home.warning.blueprints.title' => 'Szkice szablonów',
  'home.warning.blueprints.text' => 'Nie masz zapisanych szkiców dla następujących szablonów<br /> Przeczytaj więcej o tym <a href="http://getkirby.com/docs/panel/blueprints">jak zainstalować szkice szablonów</a>',
  'home.warning.thumbs.title' => 'Miniaturki',
  'home.warning.thumbs.text' => 'Proszę dodać folder <strong>thumbs</strong> do głównego katalogu strony i zmienić uprawnienia na <strong>0755</strong>',
  
  // siteinfo
  'siteinfo.button' => 'Zapisz',
  'siteinfo.errors.title' => 'Proszę podaj tytuł strony',
  'siteinfo.errors.permissions' => '<strong>content/site.txt</strong> jest tylko do odczytu. <br />Proszę zmienić uprawnienia tego pliku i spróbować ponownie.',
  
  // content form 
  'content.save' => 'Zapisz',
  'content.previous' => 'Poprzedni',
  'content.next' => 'Następny',
  'content.invisible' => 'ukryty',
  
  // no content available
  'nocontent.title' => 'Brak zawartości',
  'nocontent.text' => 'Ta strona nie ma jeszcze zawartości.',
    
  // pages
  'pages.title' => 'Podstrony widoczne',
  'pages.title.home' => 'Strony widoczne',
  'pages.home' => 'Strona główna',
  'pages.sort' => 'Sortuj',
  'pages.add' => 'Dodaj',
  'pages.delete' => 'Usuń',
  'pages.invisible' => 'Podstrony ukryte',
  'pages.invisible.home' => 'Strony ukryte',
  'pages.no.visible' => 'Nie masz jeszcze widocznych stron',
  'pages.no.invisible' => 'Nie masz jeszcze ukrytych stron',
  'pages.moved' => 'Strona została przeniesiona',
  'pages.sorted' => 'Kolejność strony została zmieniona',
  'pages.show.more' => 'pokaż więcej',
  'pages.show.less' => 'pokaż mniej',
  'pages.errors.notfound' => 'Nie można znaleźć strony',
  'pages.errors.move' => 'Strona nie może być przeniesiona',
  'pages.errors.sort' => 'Kolejność niektórych stron nie może być zmieniana',
  'pages.errors.nosort' => 'Nie ma nic do zmiany kolejności',

  // no subpages allowed
  'nopages.title' => 'Podstrony',
  'nopages.text' => 'Ta strona nie może mieć podstron',  
  
  // add page
  'pages.add.title' => 'Dodaj nową stronę',
  'pages.add.label.title' => 'Tytuł',
  'pages.add.label.url' => 'Adres url',
  'pages.add.label.template' => 'Szablon',
  'pages.add.button' => 'Dodaj',
  'pages.add.errors.title' => 'Proszę dodać tytuł strony',
  'pages.add.errors.url' => 'Proszę dodać adres url do strony',
  'pages.add.errors.characters' => 'Proszę używać tylko następujących znaków a-z, 0-9, _, - w URL',
  'pages.add.errors.exists' => 'Strona z tym adresem url już istnieje',
  'pages.add.errors.permissions' => 'Nie można utworzyć folderu',
  'pages.add.success' => 'Strona została dodana',

  // update page
  'pages.update.errors' => 'Proszę poprawnie wypełnić wszystkie pola',
    
  // delete page  
  'pages.delete.title' => 'Usuń stronę',
  'pages.delete.button' => 'Usuń',
  'pages.delete.errors.homepage' => 'Nie można usunąć głównej strony',
  'pages.delete.errors.errorpage' => 'Nie można usunąć strony błędów (page 404)',
  'pages.delete.errors.subpages' => 'Ta strona ma podstrony. Proszę usunąć je najpierw.',
  'pages.delete.errors.permissions' => 'Strona nie może być usunięta',
  'pages.delete.success' => 'Strona została usunięta',

  // options
  'options.url' => 'Adres url',
  'options.button' => 'Zapisz',
  'options.home.url' => 'Adres url',
  'options.home.text' => 'Nie możesz zmienić adresu url strony głównej',
  'options.error.text' => 'Nie możesz zmienić adresu url strony do obsługi błędów',
  'options.errors.homepage' => 'Nie możesz zmienić adresu url strony głównej',
  'options.errors.errorpage' => 'Nie możesz zmienić adresu url strony do obsługi błędów',
  'options.errors.characters' => 'Proszę używać tylko znaków a-z, 0-9, _, -',
  'options.errors.permissions' => 'Folder content nie może być przeniesiony',
  'options.errors.exists' => 'Wprowadzony adres url już istnieje',
  'options.errors.move' => 'Folder content nie może być przeniesiony',

  // files
  'files.title' => 'Pliki',
  'files.upload' => 'Dodaj nowy plik',
  'files.edit' => 'Edytuj',
  'files.replace' => 'Zamień',
  'files.delete' => 'Usuń',
  'files.empty' => 'Brak jeszcze plików',

  'nofiles.title' => 'Brak plików',
  'nofiles.text' => 'Ta strona nie może mieć plików',
  
  // delete file
  'files.delete.title' => 'Usuń ten plik',
  'files.delete.button' => 'Usuń',
  'files.delete.errors.notfound' => 'Nie można znaleźć pliku',
  'files.delete.errors.permissions' => 'Nie można usunąć pliku',
  'files.delete.success' => 'Plik został usunięty',

  // edit file
  'files.edit.title' => 'Edycja pliku',
  'files.edit.filename' => 'Nazwa pliku (bez rozszerzenia)',
  'files.edit.button' => 'Zapisz',
  'files.edit.errors.filename' => 'Proszę wprowadź poprawną nazwę pliku',
  'files.edit.errors.notfound' => 'Nie można znaleźć pliku',
  'files.edit.errors.exists' => 'Wprowadzona nazwa już istnieje',
  'files.edit.errors.permissions' => 'Nie można zmienić nazwy pliku',
  'files.edit.success' => 'Zmiany pliku zostały zapisane',

  // replace file
  'files.replace.title' => 'Zamień ten plik',
  'files.replace.file' => 'Plik',
  'files.replace.choose' => 'Proszę wybierz nowy plik z komputera …',
  'files.replace.button' => 'Zamień',
  'files.replace.errors.notfound' => 'Nie można znaleźć pliku',
  'files.replace.success' => 'Plik został zamieniony',

  // upload file
  'files.upload.title' => 'Dodaj nowy plik',
  'files.upload.choose' => 'Proszę wybierz plik z komputera …',
  'files.upload.button' => 'Dodaj',
      
  // login  
  'login.button' => 'Zaloguj',
  'login.username' => 'Login',
  'login.password' => 'Hasło',
  'login.error' => 'Nieprawidłowy login albo hasło',
  'login.success' => 'Zalogowano',
  'login.error.browser.title' => 'Używasz starszej przeglądarki internetowej',
  'login.error.browser.text' => 'Proszę uaktualnij swoją przeglądarkę do ostatniej wersji Google Chrome, Firefox, Safari albo Internet Explorer.',
  
  // upload
  'upload.errors.missing-file' => 'Plik nie został znaleziony',
  'upload.errors.file-exists' => 'Plik już istnieje i nie może być nadpisany',
  'upload.errors.invalid-upload' => 'Dodawanie pliku nie powiodło się',
  'upload.errors.too-big' => 'Plik jest zbyt duży',
  'upload.errors.invalid-file' => 'Ten typ pliku nie jest dozwolony',
  'upload.errors.move-error' => 'Nie można zmienić lokalizacji pliku na serwerze',
  'upload.success' => 'Plik został dodany',

  // writer
  'writer.errors.permissions' => 'Ten plik nie może być nadpisany',
  'writer.errors.write' => 'Nie można dodać danych',
  'writer.success' => 'Plik został zmieniony',
  
  // form buttons
  'form.buttons.h1' => 'h1',
  'form.buttons.h2' => 'h2',
  'form.buttons.h3' => 'h3',
  'form.buttons.bold' => 'pogrubiony',
  'form.buttons.bold.sample' => 'tekst pogrubiony',
  'form.buttons.italic' => 'pochyły',
  'form.buttons.italic.sample' => 'tekst pochyły',
  'form.buttons.link' => 'link',
  'form.buttons.email' => 'email',

  'form.overlay.link.title' => 'Dodaj Link',
  'form.overlay.link.link' => 'Link',
  'form.overlay.link.text' => 'Tekst linku (opcjonalny)',
  'form.overlay.link.button' => 'Dodaj link',

  'form.overlay.email.title' => 'Dodaj email',
  'form.overlay.email.link' => 'Adres email',
  'form.overlay.email.text' => 'Tekst linku (opcjonalny)',
  'form.overlay.email.button' => 'Dodaj email',
  
));
