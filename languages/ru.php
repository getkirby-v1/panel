<?php

/*
 * Author: Vadim Makeev <http://pepelsbey.net>
 */

l::set(array(
  
  // global 
  'ok' => 'Готово',
  'cancel' => 'Отменить',
  'nochanges' => 'Ничего не из',

  // header
  'header.title' => 'Кирби',
  'header.logout' => 'Выйти', 
  
  // subheader
  'subheader.home' => 'Главная',  
  'subheader.site' => 'Ваш сайт',
  'subheader.info' => 'Информация',

  // tabs
  'tabs.overview' => 'Обзор',
  'tabs.info' => 'Редактировать',
  'tabs.content' => 'Содержимое',
  'tabs.files' => 'Файлы',
  'tabs.options' => 'Ссылка',
  'tabs.preview' => 'Просмотр',
  
  // dashboard
  'dashboard.edit' => 'Редактировать',
  'dashboard.content' => 'Содержимое',
  'dashboard.content.empty' => 'У страницы нет содержимого',
  'dashboard.files' => 'Файлы',
  'dashboard.template' => 'Шаблон',
  'dashboard.stats.images' => 'Изображения', 
  'dashboard.stats.videos' => 'Видео', 
  'dashboard.stats.docs' => 'Документы', 
  'dashboard.stats.sound' => 'Аудио', 
  'dashboard.stats.others' => 'Другие', 

  // home
  'home.siteinfo' => 'Информация о сайте',
  'home.edit' => 'Редактировать',
  'home.warning.title' => 'Сначала исправьте ошибки!',
  'home.warning.permissions.title' => 'Права доступа',
  'home.warning.permissions.text' => 'Права доступа в папке с содержимым не установлены правильно. Пожалуйста, имените права для всех папок на <strong>0755</strong> и для всех файлов на <strong>0666</strong>',
  'home.warning.blueprints.title' => 'Структура',
  'home.warning.blueprints.text' => 'Следующие шаблоны не имеют файлов структуры<br /> Читайте подробнее <a href="http://getkirby.com/docs/panel/blueprints">об описании структуры ваших шаблонов</a>',
  'home.warning.thumbs.title' => 'Миниатюры',
  'home.warning.thumbs.text' => 'Пожалуйста, добавьте папку <strong>thumbs</strong> в главную папку с установкой и поменяйте её права доступа на <strong>0755</strong>',
  
  // siteinfo
  'siteinfo.button' => 'Сохранить',
  'siteinfo.errors.title' => 'Добавьте заголовок',
  'siteinfo.errors.permissions' => 'Файл <strong>content/site.txt</strong> закрыт для записи.<br />Пожалуйста, измените права доступа к нему и попробуте ещё раз.',
  
  // content form 
  'content.save' => 'Сохранить',
  'content.previous' => 'Предыдущий',
  'content.next' => 'Следующий',
  'content.invisible' => 'невидимый',
  
  // no content available
  'nocontent.title' => 'Содержимого нет',
  'nocontent.text' => 'Для этой страницы нет содержимого.',
    
  // pages
  'pages.title' => 'Видимые подстраницы',
  'pages.title.home' => 'Видимые страницы',
  'pages.home' => 'Главная',
  'pages.sort' => 'Упорядочить',
  'pages.add' => 'Добавить',
  'pages.delete' => 'Удалить',
  'pages.invisible' => 'Невидимые подстраницы',
  'pages.invisible.home' => 'Невидимые страницы',
  'pages.no.visible' => 'Видимых страниц пока нет',
  'pages.no.invisible' => 'Невидимых страниц пока нет',
  'pages.moved' => 'Страница перемещена',
  'pages.sorted' => 'Страницы отсортированы',
  'pages.show.more' => 'развернуть',
  'pages.show.less' => 'свернуть',
  'pages.errors.notfound' => 'Страница не найдена',
  'pages.errors.move' => 'Страница не может быть перемещена',
  'pages.errors.sort' => 'Не все страницы могут быть упорядочены',
  'pages.errors.nosort' => 'Нечего упорядочивать',

  // no subpages allowed
  'nopages.title' => 'Подстраницы',
  'nopages.text' => 'У этой страницы не должно быть подстраниц',
  
  // add page
  'pages.add.title' => 'Добавление новой страницы',
  'pages.add.label.title' => 'Заголовок',
  'pages.add.label.url' => 'Адрес',
  'pages.add.label.template' => 'Шаблон',
  'pages.add.button' => 'Сохранить',
  'pages.add.errors.title' => 'Добавьте заголовок',
  'pages.add.errors.url' => 'Добавьте адрес для вашей страницы',
  'pages.add.errors.characters' => 'Используюте только следующие символы для адреса: a-z, 0-9, _, -',
  'pages.add.errors.exists' => 'Страница с таким адресом уже существует',
  'pages.add.errors.permissions' => 'Папка не может быть создана',
  'pages.add.success' => 'Страница создана',

  // update page
  'pages.update.errors' => 'Пожалуйста, заполните все поля правильно',
    
  // delete page  
  'pages.delete.title' => 'Удалить страницу',
  'pages.delete.button' => 'Удалить',
  'pages.delete.errors.homepage' => 'Вы не можете удалить главную страницу',
  'pages.delete.errors.errorpage' => 'Вы не можете удалить страницу ошибки',
  'pages.delete.errors.subpages' => 'У этой страницы есть подстраницы, удалите сначала их',
  'pages.delete.errors.permissions' => 'Страница не может быть удалена',
  'pages.delete.success' => 'Страница удалена',

  // options
  'options.url' => 'Ссылка',
  'options.button' => 'Сохранить',
  'options.home.url' => 'URL',
  'options.home.text' => 'Вы не можете изменить адрес главной страницы',
  'options.error.text' => 'Вы не можете изменить адрес страницы ошибки',
  'options.errors.homepage' => 'Вы не можете изменить адрес главной страницы',
  'options.errors.errorpage' => 'Вы не можете изменить адрес страницы ошибки',
  'options.errors.characters' => 'Пожалуйста, используте только следующие символы: a-z, 0-9, _, -',
  'options.errors.permissions' => 'Папка с содержимым не может быть перемещена',
  'options.errors.exists' => 'Такой адрес уже существует',
  'options.errors.move' => 'Папка с содержимым не может быть перемещена',

  // files
  'files.title' => 'Файлы',
  'files.upload' => 'Загрузить новый файл',
  'files.edit' => 'Редактировать',
  'files.replace' => 'Заменить',
  'files.delete' => 'Удалить',
  'files.empty' => 'Файлов пока нет',

  'nofiles.title' => 'Файлов нет',
  'nofiles.text' => 'У этой страницы не должно быть файлов',
  
  // delete file
  'files.delete.title' => 'Удалить этот файл',
  'files.delete.button' => 'Удалить',
  'files.delete.errors.notfound' => 'Файл не может быть найден',
  'files.delete.errors.permissions' => 'Файл не может быть удалён',
  'files.delete.success' => 'Файл удалён',

  // edit file
  'files.edit.title' => 'Редактировать файл',
  'files.edit.filename' => 'Имя файла (без расширения)',
  'files.edit.button' => 'Сохранить',
  'files.edit.errors.filename' => 'Введите корректное имя файла',
  'files.edit.errors.notfound' => 'Файл не найден',
  'files.edit.errors.exists' => 'Новое имя уже существует',
  'files.edit.errors.permissions' => 'Файл не может быть переименован',
  'files.edit.success' => 'Файл сохранён',

  // replace file
  'files.replace.title' => 'Заменить этот файл',
  'files.replace.file' => 'Файл',
  'files.replace.choose' => 'Выберите новый файл с компьютера…',
  'files.replace.button' => 'Заменить',
  'files.replace.errors.notfound' => 'Файл не найден',
  'files.replace.success' => 'Файл заменён',

  // upload file
  'files.upload.title' => 'Загрузить новый файл',
  'files.upload.choose' => 'Выберите файл с компьютера…',
  'files.upload.button' => 'Загрузить',
      
  // login  
  'login.button' => 'Войти',
  'login.username' => 'Логин',
  'login.password' => 'Пароль',
  'login.error' => 'Неверный логин или пароль',
  'login.success' => 'Вы удачно вошли',
  'login.error.browser.title' => 'Вы используете старый браузер',
  'login.error.browser.text' => 'Пожалуйста, обновитесь до последней версии Google Chrome, Firefox, Safari или Internet Explorer.',
  
  // upload
  'upload.errors.missing-file' => 'Файл не найден',
  'upload.errors.file-exists' => 'Файл уже существует и не может быть перезаписан',
  'upload.errors.invalid-upload' => 'Загрузка не удалась',
  'upload.errors.too-big' => 'Файл слишком большой',
  'upload.errors.invalid-file' => 'Тип файла не разрешён',
  'upload.errors.move-error' => 'Файл не может быть перемещён на сервер',
  'upload.success' => 'Файл загружен',

  // writer
  'writer.errors.permissions' => 'Файл закрыт для записи',
  'writer.errors.write' => 'Данные не могут быть добавлены',
  'writer.success' => 'Файл сохранён',
  
  // form buttons
  'form.buttons.h1' => 'h1',
  'form.buttons.h2' => 'h2',
  'form.buttons.h3' => 'h3',
  'form.buttons.bold' => 'полужирный',
  'form.buttons.bold.sample' => 'полужирный текст',
  'form.buttons.italic' => 'курсив',
  'form.buttons.italic.sample' => 'курсивный текст',
  'form.buttons.link' => 'ссылка',
  'form.buttons.email' => 'эл. почта',

  'form.overlay.link.title' => 'Вставить ссылку',
  'form.overlay.link.link' => 'Ссылка',
  'form.overlay.link.text' => 'Текст ссылки (необязательно)',
  'form.overlay.link.button' => 'Вставить ссылку',

  'form.overlay.email.title' => 'Вставить эл. почту',
  'form.overlay.email.link' => 'Адрес эл. почты',
  'form.overlay.email.text' => 'Текст ссылки (необязательно)',
  'form.overlay.email.button' => 'Вставить эл. почту',
  
));