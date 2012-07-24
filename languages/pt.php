<?php

/*
 * Author: Felipe Coelho Kussik <http://seufelipe.com.br>
 * 
 */
 
l::set(array(
  
  // global 
  'ok' => 'Ok',
  'cancel' => 'Cancelar',
  'nochanges' => 'Nada mudou',

  // header
  'header.title' => 'Kirby',
  'header.logout' => 'Sair', 
  
  // subheader
  'subheader.home' => 'Capa',  
  'subheader.site' => 'Seu site',
  'subheader.info' => 'Info',

  // tabs
  'tabs.overview' => 'Geral',
  'tabs.info' => 'Editar informações',
  'tabs.content' => 'Conteúdo',
  'tabs.files' => 'Arquivos',
  'tabs.options' => 'URL',
  'tabs.preview' => 'Visualizar',
  
  // dashboard
  'dashboard.edit' => 'Editar',
  'dashboard.content' => 'Conteúdo',
  'dashboard.content.empty' => 'Esta página não tem conteúdo',
  'dashboard.files' => 'Arquivos',
  'dashboard.template' => 'Modelo',
  'dashboard.stats.images' => 'Imagens', 
  'dashboard.stats.videos' => 'Vídeos', 
  'dashboard.stats.docs' => 'Docs', 
  'dashboard.stats.sound' => 'Som', 
  'dashboard.stats.others' => 'Outros', 

  // home
  'home.siteinfo' => 'Informações do site',
  'home.edit' => 'Editar',
  'home.warning.title' => 'Por favor, corrija primeiro!',
  'home.warning.permissions.title' => 'Permissões',
  'home.warning.permissions.text' => 'As permissões da sua pasta de conteúdo não estão corretas. Por favor, altere as permissões de todas as pastas para <strong>0755</strong> e para todos os arquivos para <strong>0666</strong>',
  'home.warning.blueprints.title' => 'Projetos',
  'home.warning.blueprints.text' => 'Não existem projetos disponíveis para estes modelos<br /> Leia mais sobre <a href="http://getkirby.com/docs/panel/blueprints">como definir projetos para os seus modelos</a>',
  'home.warning.thumbs.title' => 'Miniaturas',
  'home.warning.thumbs.text' => 'Por favor, adicione a pasta <strong>thumbs</strong> na pasta principal do seu site e altere suas permissões para <strong>0755</strong>',
  
  // siteinfo
  'siteinfo.button' => 'Salvar',
  'siteinfo.errors.title' => 'Por favor, adicione um título',
  'siteinfo.errors.permissions' => '<strong>content/site.txt</strong> não é gravável. <br />Por favor, altere as permissões e tente outra vez.',
  
  // content form 
  'content.save' => 'Salvar',
  'content.previous' => 'Anterior',
  'content.next' => 'Próximo',
  'content.invisible' => 'invisível',
  
  // no content available
  'nocontent.title' => 'Nenhum conteúdo',
  'nocontent.text' => 'Esta página não tem conteúdo disponível.',
    
  // pages
  'pages.title' => 'Páginas invisíveis',
  'pages.title.home' => 'Páginas visíveis',
  'pages.home' => 'Capa',
  'pages.sort' => 'Ordenar',
  'pages.add' => 'Adicionar',
  'pages.delete' => 'Remover',
  'pages.invisible' => 'Subpáginas invisíveis',
  'pages.invisible.home' => 'Páginas invisíveis',
  'pages.no.visible' => 'Nenhuma página visível até agora',
  'pages.no.invisible' => 'Nenhuma página invisível até agora',
  'pages.moved' => 'A página foi movida',
  'pages.sorted' => 'As páginas foram ordenadas',
  'pages.show.more' => 'mostrar mais',
  'pages.show.less' => 'mostrar menos',
  'pages.errors.notfound' => 'A página não foi encontrada',
  'pages.errors.move' => 'A página não pôde ser movida',
  'pages.errors.sort' => 'Nem todas as páginas puderam ser ordenadas',
  'pages.errors.nosort' => 'Não existe nada para ordenar',

  // no subpages allowed
  'nopages.title' => 'Subpáginas',
  'nopages.text' => 'Esta página não deveria ter subpáginas',  
  
  // add page
  'pages.add.title' => 'Adicionar nova página',
  'pages.add.label.title' => 'Título',
  'pages.add.label.url' => 'URL',
  'pages.add.label.template' => 'Modelo',
  'pages.add.button' => 'Salvar',
  'pages.add.errors.title' => 'Por favor, adicione um título',
  'pages.add.errors.url' => 'Por favor, adicione uma URL para a sua página',
  'pages.add.errors.characters' => 'Por favor, use apenas os seguintes caracteres a-z, 0-9, _, - para a URL',
  'pages.add.errors.exists' => 'Já existe uma página com essa URL',
  'pages.add.errors.permissions' => 'A pasta não pode ser criada',
  'pages.add.success' => 'A página foi criada',

  // update page
  'pages.update.errors' => 'Por favor, preencha todos os campos corretamente',
    
  // delete page  
  'pages.delete.title' => 'Excluir esta página',
  'pages.delete.button' => 'Excluir',
  'pages.delete.errors.homepage' => 'Você não pode excluir a página inicial',
  'pages.delete.errors.errorpage' => 'Você não pode excluir a página de erro',
  'pages.delete.errors.subpages' => 'Esta página tem subpáginas. Por favor, exclua-as antes.',
  'pages.delete.errors.permissions' => 'A página não pôde ser removida',
  'pages.delete.success' => 'A página foi removida',

  // options
  'options.url' => 'URL',
  'options.button' => 'Salvar',
  'options.home.url' => 'URL',
  'options.home.text' => 'Você não pode mudar a URL da página inicial',
  'options.error.text' => 'Você não pode mudar a URL da página de erro',
  'options.errors.homepage' => 'Você não pode mudar a URL da página inicial',
  'options.errors.errorpage' => 'Você não pode mudar a URL da página de erro',
  'options.errors.characters' => 'Por favor, use apenas os seguintes caracteres a-z, 0-9, _, -',
  'options.errors.permissions' => 'A pasta de conteúdo não pode ser movida',
  'options.errors.exists' => 'A nova URL já existe',
  'options.errors.move' => 'A pasta de conteúdo não pode ser movida',

  // files
  'files.title' => 'Arquivos',
  'files.upload' => 'Subir um novo arquivo',
  'files.edit' => 'Editar',
  'files.replace' => 'Substituir',
  'files.delete' => 'Excluir',
  'files.empty' => 'Nenhum arquivo até agora',

  'nofiles.title' => 'Nenhum arquivo',
  'nofiles.text' => 'Esta página não deveria ter arquivos',
  
  // delete file
  'files.delete.title' => 'Excluir este arquivo',
  'files.delete.button' => 'Excluir',
  'files.delete.errors.notfound' => 'O arquivo não foi encontrado',
  'files.delete.errors.permissions' => 'O arquivo não pôde ser excluído',
  'files.delete.success' => 'O arquivo foi excluído',

  // edit file
  'files.edit.title' => 'Editar arquivo',
  'files.edit.filename' => 'Nome do arquivo (sem a extensão)',
  'files.edit.button' => 'Salvar',
  'files.edit.errors.filename' => 'Por favor, entre um nome válido para o arquivo',
  'files.edit.errors.notfound' => 'O arquivo não foi encontrado',
  'files.edit.errors.exists' => 'O novo nome já existe',
  'files.edit.errors.permissions' => 'O arquivo não pôde ser renomeado',
  'files.edit.success' => 'O arquivo foi salvo',

  // replace file
  'files.replace.title' => 'Substituir este arquivo',
  'files.replace.file' => 'Arquivo',
  'files.replace.choose' => 'Por favor, escolha um novo arquivo do seu computador…',
  'files.replace.button' => 'Substituir',
  'files.replace.errors.notfound' => 'O arquivo não pôde ser encontrado',
  'files.replace.success' => 'O arquivo foi substituído',

  // upload file
  'files.upload.title' => 'Subir um novo arquivo',
  'files.upload.choose' => 'Por favor, escolha um arquivo do seu computador…',
  'files.upload.button' => 'Upload',
      
  // login  
  'login.button' => 'Login',
  'login.username' => 'Nome de usuário',
  'login.password' => 'Senha',
  'login.error' => 'Nome de usuário ou senha incorretos',
  'login.success' => 'Você está logado',
  'login.error.browser.title' => 'Você está usando um navegador antigo',
  'login.error.browser.text' => 'Por favor, atualize para a última versão do Google Chrome, Firefox, Safari ou Internet Explorer.',
  
  // upload
  'upload.errors.missing-file' => 'O arquivo não foi encontrado',
  'upload.errors.file-exists' => 'O arquivo existe e não pode ser sobrescrito',
  'upload.errors.invalid-upload' => 'O upload falhou',
  'upload.errors.too-big' => 'O arquivo é muito grande',
  'upload.errors.invalid-file' => 'Este tipo de arquivo não é permitido',
  'upload.errors.move-error' => 'O arquivo não pôde ser movido para o servidor',
  'upload.success' => 'O arquivo foi carregado',

  // writer
  'writer.errors.permissions' => 'O arquivo não é gravável',
  'writer.errors.write' => 'Os dados não puderam ser adicionados',
  'writer.success' => 'O arquivo foi salvo',
  
  // form buttons
  'form.buttons.h1' => 'h1',
  'form.buttons.h2' => 'h2',
  'form.buttons.h3' => 'h3',
  'form.buttons.bold' => 'negrito',
  'form.buttons.bold.sample' => 'texto em negrito',
  'form.buttons.italic' => 'itálico',
  'form.buttons.italic.sample' => 'texto em itálico',
  'form.buttons.link' => 'link',
  'form.buttons.email' => 'email',

  'form.overlay.link.title' => 'Inserir link',
  'form.overlay.link.link' => 'Link',
  'form.overlay.link.text' => 'Texto do link (opcional)',
  'form.overlay.link.button' => 'Inserir link',

  'form.overlay.email.title' => 'Inserir email',
  'form.overlay.email.link' => 'Endereço do email',
  'form.overlay.email.text' => 'Texto do link (opcional)',
  'form.overlay.email.button' => 'Inserir email',
  
));

?>