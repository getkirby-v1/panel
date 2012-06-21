<?php

/*
 * Author: Riccardo Mori <http://morrick.me>
 */

l::set(array(
  
  // global 
  'ok' => 'Ok',
  'cancel' => 'Cancelar',
  'nochanges' => 'No se ha hecho ningún cambio',

  // header
  'header.títle' => 'Kirby',
  'header.logout' => 'Desconexión',
  
  // subheader
  'subheader.home' => 'Inicio',  
  'subheader.site' => 'Tu Sitio',
  'subheader.info' => 'Información',

  // tabs
  'tabs.overview' => 'Vista general',
  'tabs.info' => 'Editar información',
  'tabs.content' => 'Contenido',
  'tabs.files' => 'Archivos',
  'tabs.options' => 'URL',
  'tabs.preview' => 'Vista previa',
  
  // dashboard
  'dashboard.edit' => 'Editar',
  'dashboard.content' => 'Contenido',
  'dashboard.content.empty' => 'Esta página no tiene contenido',
  'dashboard.files' => 'Archivos',
  'dashboard.template' => 'Plantilla',
  'dashboard.stats.images' => 'Imágenes', 
  'dashboard.stats.videos' => 'Videos', 
  'dashboard.stats.docs' => 'Documentos', 
  'dashboard.stats.sound' => 'Sonido', 
  'dashboard.stats.others' => 'Otros', 

  // home
  'home.siteinfo' => 'Información del sitio',
  'home.edit' => 'Editar',
  'home.warning.title' => '¡Por favor soluciona primero el problema!',
  'home.warning.permissions.title' => 'Permisos',
  'home.warning.permissions.text' => 'Los permisos del directorio de contenido no han sido establecidos correctamente. Por favor, cambia los permisos de todas las carpetas a <strong>0755</strong> y de todos los archivos a <strong>0666</strong>',
  'home.warning.blueprints.title' => 'Modelos',
  'home.warning.blueprints.text' => 'No hay modelos disponibles para las plantillas siguientes <br /> Para más información acerca de<a href="http://getkirby.com/docs/panel/blueprints">como instalar modelos para tus plantillas</a>',
  'home.warning.thumbs.title' => 'Miniaturas',
  'home.warning.thumbs.text' => 'Por favor añade un directorio <strong>thumbs</strong> al directorio raíz de tu sitio y cambia sus permisos a <strong>0755</strong>',
  
  // siteinfo
  'siteinfo.button' => 'Guardar',
  'siteinfo.errors.title' => 'Por favor añade un título',
  'siteinfo.errors.permissions' => '<strong>content/site.txt</strong> no tiene autorización de escritura. <br />Por favor cambia los permisos del directorio e inténtalo de nuevo.',
  
  // content form 
  'content.save' => 'Guardar',
  'content.previous' => 'Anterior',
  'content.next' => 'Siguiente',
  'content.invisible' => 'invisible',
  
  // no content available
  'nocontent.title' => 'Sin contenido',
  'nocontent.text' => 'No hay contenidos disponibles en esta página.',
    
  // pages
  'pages.title' => 'Páginas visibles',
  'pages.title.home' => 'Páginas',
  'pages.home' => 'Página principal',
  'pages.sort' => 'Ordenar',
  'pages.add' => 'Añadir',
  'pages.delete' => 'Suprimir',
  'pages.invisible' => 'Subpáginas invisibles',
  'pages.invisible.home' => 'Páginas invisibles',
  'pages.no.visible' => 'Aún no hay páginas visibles',
  'pages.no.invisible' => 'Aún no hay páginas invisibles',
  'pages.moved' => 'La página ha sido movida',
  'pages.sorted' => 'Las páginas han sido ordenadas',
  'pages.show.more' => 'mostrar más',
  'pages.show.less' => 'mostrar menos',
  'pages.errors.notfound' => 'No se ha encontrado la página solicitada',
  'pages.errors.move' => 'No se ha podido mover la página',
  'pages.errors.sort' => 'No se han podido ordenar todas las páginas',
  'pages.errors.nosort' => 'No hay nada que ordenar',

  // no subpages allowed
  'nopages.title' => 'Subpáginas',
  'nopages.text' => 'Esta página no debería tener subpáginas',  
  
  // add page
  'pages.add.title' => 'Añadir una página nueva',
  'pages.add.label.title' => 'Título',
  'pages.add.label.url' => 'URL',
  'pages.add.label.template' => 'Plantilla',
  'pages.add.button' => 'Guardar',
  'pages.add.errors.title' => 'Por favor añade un título',
  'pages.add.errors.url' => 'Por favor añade una URL a tu página',
  'pages.add.errors.characters' => 'Por favor utiliza solo los siguientes carácteres a-z, 0-9, _, - para las URL',
  'pages.add.errors.exists' => 'Ya existe una página con esa url',
  'pages.add.errors.permissions' => 'No se ha podido crear el directorio',
  'pages.add.success' => 'La página ha sido creada',

  // update page
  'pages.update.errors' => 'Please fill out all fields correctly',
      
  // delete page  
  'pages.delete.title' => 'Borrar esta página',
  'pages.delete.button' => 'Borrar',
  'pages.delete.errors.homepage' => 'No se puede borrar la página principal',
  'pages.delete.errors.errorpage' => 'No se puede borrar la página de error',
  'pages.delete.errors.subpages' => 'Esta página tiene subpáginas. Por favor bórralas primero.',
  'pages.delete.errors.permissions' => 'No se ha podido borrar la página',
  'pages.delete.success' => 'La página ha sido borrada',

  // options
  'options.url' => 'URL',
  'options.button' => 'Guardar',
  'options.home.url' => 'URL',
  'options.home.text' => 'No se puede cambiar la URL de la página principal',
  'options.error.text' => 'No se puede cambiar la URL de la página de error',
  'options.errors.homepage' => 'No se puede cambiar la URL de la página principal',
  'options.errors.errorpage' => 'No se puede cambiar la URL de la página de error',
  'options.errors.characters' => 'Por favor usa solo los siguientes carácteres a-z, 0-9, _, -',
  'options.errors.permissions' => 'No se puede mover el directorio de contenido',
  'options.errors.exists' => 'La nueva URL ya existe',
  'options.errors.move' => 'No se puede mover el directorio de contenido',

  // files
  'files.title' => 'Archivos',
  'files.upload' => 'Subir un archivo nuevo',
  'files.edit' => 'Editar',
  'files.replace' => 'Sustituir',
  'files.delete' => 'Borrar',
  'files.empty' => 'Ningún archivo hasta ahora',

  'nofiles.title' => 'Ningún archivo',
  'nofiles.text' => 'Esta página no debería tener archivos',
  
  // delete file
  'files.delete.title' => 'Borrar este archivo',
  'files.delete.button' => 'Borrar',
  'files.delete.errors.notfound' => 'No se ha podido encontrar el archivo',
  'files.delete.errors.permissions' => 'No se ha podido borrar el archivo',
  'files.delete.success' => 'El archivo ha sido eliminado',

  // edit file
  'files.edit.title' => 'Editar archivo',
  'files.edit.filename' => 'Nombre del archivo (sin extensión)',
  'files.edit.button' => 'Guardar',
  'files.edit.errors.filename' => 'Please enter a valid filename',
  'files.edit.errors.notfound' => 'No se ha podido encontrar el archivo',
  'files.edit.errors.exists' => 'El nuevo nombre ya existe',
  'files.edit.errors.permissions' => 'No se ha podido renombrar el archivo',
  'files.edit.success' => 'Se ha guardado el archivo',

  // replace file
  'files.replace.title' => 'Sustituir este archivo',
  'files.replace.file' => 'Archivo',
  'files.replace.choose' => 'Por favor elige un archivo nuevo desde tu ordenador…',
  'files.replace.button' => 'Sustituir',
  'files.replace.errors.notfound' => 'No se ha podido encontrar el archivo',
  'files.replace.success' => 'Se ha sustituido el archivo',

  // upload file
  'files.upload.title' => 'Subir un archivo nuevo',
  'files.upload.choose' => 'Por favor elige un archivo desde tu ordenador…',
  'files.upload.button' => 'Subir archivo',
      
  // login  
  'login.button' => 'Conexión',
  'login.username' => 'Nombre de usuario',
  'login.password' => 'Contraseña',
  'login.error' => 'Nombre de usuario o contraseña incorrectos',
  'login.success' => 'Estás conectado',
  'login.error.browser.title' => 'Estás utilizando una versión antigua de tu navegador',
  'login.error.browser.text' => 'Por favor actualiza a la versión más reciente de Chrome, Firefox, Safari o Internet Explorer.',
  
  // upload
  'upload.errors.missing-file' => 'No se ha encontrado el archivo',
  'upload.errors.file-exists' => 'El archivo ya existe y no puede ser reemplazado',
  'upload.errors.invalid-upload' => 'Fallo en la carga del archivo',
  'upload.errors.too-big' => 'El archivo es demasiado grande',
  'upload.errors.invalid-file' => 'El sistema no soporta este formato de archivo',
  'upload.errors.move-error' => 'No se ha podido cargar el archivo en el servidor',
  'upload.success' => 'La carga del archivo ha terminado',

  // writer
  'writer.errors.permissions' => 'El archivo no tiene autorización de escritura',
  'writer.errors.write' => 'No se han podido añadir los datos',
  'writer.success' => 'El archivo ha sido guardado',
  
));