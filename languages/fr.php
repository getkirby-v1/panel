<?php

/* 
 * author: Loubna Aggoun <http://www.laggoun.com>
 */

l::set(array(

  // global 
  'ok' => 'Ok',
  'cancel' => 'Annuler',
  'nochanges' => 'Rien n\'a changé',

  // header
  'header.title' => 'Kirby',
  'header.logout' => 'Déconnexion', 

  // subheader
  'subheader.home' => 'Accueil',  
  'subheader.site' => 'Votre site',
  'subheader.info' => 'Informations',

  // tabs
  'tabs.overview' => 'Vue d\'ensemble',
  'tabs.info' => 'Éditer vos informations',
  'tabs.content' => 'Contenu',
  'tabs.files' => 'Fichiers',
  'tabs.options' => 'URL',
  'tabs.preview' => 'Aperçu',

  // dashboard
  'dashboard.edit' => 'Éditer',
  'dashboard.content' => 'Contenu',
  'dashboard.content.empty' => 'Cette page ne possède aucun contenu',
  'dashboard.files' => 'Fichiers',
  'dashboard.template' => 'Modèle',
  'dashboard.stats.images' => 'Images', 
  'dashboard.stats.videos' => 'Vidéos', 
  'dashboard.stats.docs' => 'Documents', 
  'dashboard.stats.sound' => 'Audio', 
  'dashboard.stats.others' => 'Autre', 

  // home
  'home.siteinfo' => 'Informations sur le site',
  'home.edit' => 'Éditer',
  'home.warning.title' => 'Veuillez corriger le problème d\'abord !',
  'home.warning.permissions.title' => 'Permissions',
  'home.warning.permissions.text' => 'Les permissions du dossier de contenu ne sont pas correctement paramétrées. Veuillez changer les permissions de tous les dossier en <strong>0755</strong> et celles de tous les fichiers en <strong>0666</strong>',
  'home.warning.blueprints.title' => 'Fichiers de strucutre',
  'home.warning.blueprints.text' => 'Aucun fichier de structure n\'est disponible pour le modèle suivant<br /> En savoir plus à propos <a href="http://getkirby.com/docs/panel/blueprints">de l\'installation de fichiers de structure pour vos modèles</a>',
  'home.warning.thumbs.title' => 'Vignettes',
  'home.warning.thumbs.text' => 'Ajoutez s\'il-vous-plaît un dossier <strong>thumbs</strong> dans le dossier principal de votre site et changer ses permissions en <strong>0755</strong>',

  // siteinfo
  'siteinfo.button' => 'Enregistrer',
  'siteinfo.errors.title' => 'Veuillez ajouter un titre',
  'siteinfo.errors.permissions' => '<strong>content/site.txt</strong> n\'est pas modifiable. <br />Changez ses permissions puis essayez à nouveau.',

  // content form 
  'content.save' => 'Enregistrer',
  'content.previous' => 'Précédent',
  'content.next' => 'Suivant',
  'content.invisible' => 'invisible',

  // no content available
  'nocontent.title' => 'Aucun contenu',
  'nocontent.text' => 'Il n\'y a aucun contenu disponible pour cette page',

  // pages
  'pages.title' => 'Pages visibles',
  'pages.title.home' => 'Pages',
  'pages.home' => 'Accueil',
  'pages.sort' => 'Trier',
  'pages.add' => 'Ajouter',
  'pages.delete' => 'Supprimer',
  'pages.invisible' => 'Sous-pages invisibles',
  'pages.invisible.home' => 'Pages invisibles',
  'pages.no.visible' => 'Aucune page visible pour le moment',
  'pages.no.invisible' => 'Aucune page invisible pour le moment',
  'pages.moved' => 'La page a été déplacée',
  'pages.sorted' => 'Les pages ont été triées',
  'pages.show.more' => 'En montrer plus',
  'pages.show.less' => 'En montrer moins',
  'pages.errors.notfound' => 'Cette page n\'a pas pu être trouvée',
  'pages.errors.move' => 'Cette page n\'a pas pu être déplacée',
  'pages.errors.sort' => 'Toutes les pages n\'ont pas pu être triées',
  'pages.errors.nosort' => 'Il n\'y a rien à trier',

  // no subpages allowed
  'nopages.title' => 'Sous-pages',
  'nopages.text' => 'Cette page n\'est pas censée avoir des sous-pages',  

  // add page
  'pages.add.title' => 'Ajouter une nouvelle page',
  'pages.add.label.title' => 'Titre',
  'pages.add.label.url' => 'URL',
  'pages.add.label.template' => 'Modèle',
  'pages.add.button' => 'Enregistrer',
  'pages.add.errors.title' => 'Ajoutez un titre',
  'pages.add.errors.url' => 'Ajoutez une URL pour votre page',
  'pages.add.errors.characters' => 'Veuillez vous limiter aux caractères a-z, 0-9, _, - pour votre URL',
  'pages.add.errors.exists' => 'Une page avec cette URL existe déjà',
  'pages.add.errors.permissions' => 'Ce dossier n\'a pas pu être créé',
  'pages.add.success' => 'La page a été créée',

  // update page
  'pages.update.errors' => 'Veuillez remplir correctement tous les champs',

  // delete page  
  'pages.delete.title' => 'Supprimer cette page',
  'pages.delete.button' => 'Supprimer',
  'pages.delete.errors.homepage' => 'Vous ne pouvez pas supprimer la page d\'accueil',
  'pages.delete.errors.errorpage' => 'Vous ne pouvez pas supprimer la page d\'erreur',
  'pages.delete.errors.subpages' => 'Cette page possède des sous-pages, supprimez-les d\'abord.',
  'pages.delete.errors.permissions' => 'La page n\'a pas pu être supprimée',
  'pages.delete.success' => 'La page a été supprimée',

  // options
  'options.url' => 'URL',
  'options.button' => 'Enregistrer',
  'options.home.url' => 'URL',
  'options.home.text' => 'Vous ne pouvez pas changer l\'URL de la page d\'accueil',
  'options.error.text' => 'Vous ne pouvez pas changer l\'URL de la page d\'erreur',
  'options.errors.homepage' => 'Vous ne pouvez pas changer l\'URL de la page d\'acceuil',
  'options.errors.errorpage' => 'Vous ne pouvez pas changer l\'URL de la page d\'erreur',
  'options.errors.characters' => 'Veuillez vous limiter aux caractères a-z, 0-9, _, -',
  'options.errors.permissions' => 'Le dossier de contenu ne peut être déplacé',
  'options.errors.exists' => 'La nouvelle URL existe déjà',
  'options.errors.move' => 'Le dossier de contenu ne peut être déplacé',

  // files
  'files.title' => 'Fichier',
  'files.upload' => 'Télécharger un nouveau fichier',
  'files.edit' => 'Éditer',
  'files.replace' => 'Remplacer',
  'files.delete' => 'Supprimer',
  'files.empty' => 'Aucun fichier pour le moment',

  'nofiles.title' => 'Aucun fichier',
  'nofiles.text' => 'Cette page n\'est pas censée contenir des fichiers',

  // delete file
  'files.delete.title' => 'Supprimer le fichier',
  'files.delete.button' => 'Supprimer',
  'files.delete.errors.notfound' => 'Le fichier n\'a pas pu être trouvé',
  'files.delete.errors.permissions' => 'Le fichier n\'a pas pu être supprimé',
  'files.delete.success' => 'Le fichier a été supprimé',

  // edit file
  'files.edit.title' => 'Éditer le fichier',
  'files.edit.filename' => 'Nom du fichier (sans l\'extension)',
  'files.edit.button' => 'Enregistrer',
  'files.edit.errors.filename' => 'Veuillez entrer un nom valide',
  'files.edit.errors.notfound' => 'Le fichier n\'a pas pu être trouvé',
  'files.edit.errors.exists' => 'Le nouveau nom existe déjà',
  'files.edit.errors.permissions' => 'Le fichier n\'a pas pu être renommé',
  'files.edit.success' => 'Le fichier a été enregistré',

  // replace file
  'files.replace.title' => 'Remplacer le fichier',
  'files.replace.file' => 'Fichier',
  'files.replace.choose' => 'Veuillez choisir un nouveau fichier sur votre ordinateur',
  'files.replace.button' => 'Remplacer',
  'files.replace.errors.notfound' => 'Le fichier n\'a pas pu être trouvé',
  'files.replace.success' => 'Le fichier a été remplacé',

  // upload file
  'files.upload.title' => 'Télécharger un nouveau fichier',
  'files.upload.choose' => 'Veuillez choisir un fichier sur votre ordinateur',
  'files.upload.button' => 'Télécharger',

  // login  
  'login.button' => 'Connexion',
  'login.username' => 'Nom d\'utilisateur',
  'login.password' => 'Mot de passe',
  'login.error' => 'Nom d\'utilisateur ou mot de passe incorrects',
  'login.success' => 'Vous êtes maintenant connecté',
  'login.error.browser.title' => 'Vous utilisez un navigateur trop ancien',
  'login.error.browser.text' => 'Veuillez utiliser la dernière version de Google Chrome, Firefox, Safari ou Internet Explorer.',

  // upload
  'upload.errors.missing-file' => 'Le fichier n\'a pas pu être trouvé',
  'upload.errors.file-exists' => 'Le fichier existe et n\'est pas inscriptible',
  'upload.errors.invalid-upload' => 'Le téléchargement a échoué',
  'upload.errors.too-big' => 'Le fichier est trop gros',
  'upload.errors.invalid-file' => 'Ce type de fichier n\'est pas autorisé',
  'upload.errors.move-error' => 'Le fichier n\'a pas pu être déplacé vers le serveur',
  'upload.success' => 'Le fichier a été téléchargé',

  // writer
  'writer.errors.permissions' => 'Le fichier n\'est pas inscriptible',
  'writer.errors.write' => 'Les données n\'ont pas pu être ajoutées',
  'writer.success' => 'Le fichier a été sauvegardé',

  // form buttons
  'form.buttons.h1' => 'h1',
  'form.buttons.h2' => 'h2',
  'form.buttons.h3' => 'h3',
  'form.buttons.bold' => 'gras',
  'form.buttons.bold.sample' => 'texte gras',
  'form.buttons.italic' => 'italique',
  'form.buttons.italic.sample' => 'texte italique',
  'form.buttons.link' => 'lien',
  'form.buttons.email' => 'email',

  'form.overlay.link.title' => 'Insérer un lien',
  'form.overlay.link.link' => 'Lien',
  'form.overlay.link.text' => 'Texte du lien (optionnel)',
  'form.overlay.link.button' => 'Insérer le lien',

  'form.overlay.email.title' => 'Insérer une adresse email',
  'form.overlay.email.link' => 'Adresse email',
  'form.overlay.email.text' => 'Texte du lien (optionnel)',
  'form.overlay.email.button' => 'Insérer l\'adresse email',
  
));

?>