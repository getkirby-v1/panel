<?php

/* 
 * author: Techatat Jaturuntanont
 */

l::set(array(
  
  // global 
  'ok' => 'Ok',
  'cancel' => 'ยกเลิก',
  'nochanges' => 'ไม่เปลี่ยนแปลง',

  // header
  'header.title' => 'Kirby',
  'header.logout' => 'Logout', 
  
  // subheader
  'subheader.home' => 'หน้าหลัก',  
  'subheader.site' => 'เว็บไซต์ของคุณ',
  'subheader.info' => 'ข้อมูล',

  // tabs
  'tabs.overview' => 'ภาพรวม',
  'tabs.info' => 'แก้ไขข้อมูล',
  'tabs.content' => 'เนื้อหา',
  'tabs.files' => 'ไฟล์',
  'tabs.options' => 'URL',
  'tabs.preview' => 'พรีวิว',
  
  // dashboard
  'dashboard.edit' => 'แก้ไข',
  'dashboard.content' => 'เนื้อหา',
  'dashboard.content.empty' => 'ไม่พบเนื้อหา',
  'dashboard.files' => 'ไฟล์',
  'dashboard.template' => 'เทมเพลท',
  'dashboard.stats.images' => 'รูปภาพ', 
  'dashboard.stats.videos' => 'วีดีโอ', 
  'dashboard.stats.docs' => 'เอกสาร', 
  'dashboard.stats.sound' => 'ไฟล์เสียง', 
  'dashboard.stats.others' => 'อื่นๆ', 

  // home
  'home.siteinfo' => 'ข้อมูลเว็บไซต์',
  'home.edit' => 'แก้ไข',
  'home.warning.title' => 'โปรดทำการแก้ไข!',
  'home.warning.permissions.title' => 'อนุญาต',
  'home.warning.permissions.text' => 'ต้องตั้งค่าในการบันทึกแฟ้มข้อมูลให้เป็น <strong>0755</strong> และไฟล์อื่นๆให้เป็น <strong>0666</strong>',
  'home.warning.blueprints.title' => 'blueprints',
  'home.warning.blueprints.text' => 'ไม่มี blueprints สำหรับเทมเพลทนี้<br /> อ่านข้อมูลเพิ่มเติม <a href="http://getkirby.com/docs/panel/blueprints">การติดตั้ง blueprints สำหรับเทมเพลทนี้</a>',
  'home.warning.thumbs.title' => 'Thumbnails',
  'home.warning.thumbs.text' => 'โปรดเพิ่ม <strong>thumbs</strong> directory ในแฟ้มข้อมูลหลักของการติดตั้งและเปลี่ยนค่าการบันทึกให้เป็นแบบ <strong>0755</strong>',
  
  // siteinfo
  'siteinfo.button' => 'บันทึก',
  'siteinfo.errors.title' => 'กรุณาใส่ Title',
  'siteinfo.errors.permissions' => '<strong>content/site.txt</strong> ไม่สามารถเขียนข้อมูลทับได้ <br />โปรดตั้งค่าการเข้าถึงข้อมูลใหม่',
  
  // content form 
  'content.save' => 'บันทึก',
  'content.previous' => 'ก่อนหน้า',
  'content.next' => 'ถัดไป',
  'content.invisible' => 'ไม่ปรากฏ',
  
  // no content available
  'nocontent.title' => 'ไม่พบเนื้อหา',
  'nocontent.text' => 'ไม่พบเนื้อหาในหน้านี้',
    
  // pages
  'pages.title' => 'แสดงหน้าเพจย่อย',
  'pages.title.home' => 'แสดงหน้าหลัก',
  'pages.home' => 'หน้าหลัก',
  'pages.sort' => 'จัดเรียง',
  'pages.add' => 'เพิ่ม',
  'pages.delete' => 'ย้ายออก',
  'pages.invisible' => 'ไม่แสดงหน้าเพจย่อย',
  'pages.invisible.home' => 'ไม่แสดงหน้าหลัก',
  'pages.no.visible' => 'ไม่พบหน้าที่ถูกแสดง',
  'pages.no.invisible' => 'ไม่พบหน้าที่ถูกซ่อน',
  'pages.moved' => 'หน้านี้ถูกย้ายแล้ว',
  'pages.sorted' => 'หน้านี้ถูกจัดเรียงใหม่แล้ว',
  'pages.show.more' => 'แสดงผลเพิ่มเติม',
  'pages.show.less' => 'แสดงผลลดลง',
  'pages.errors.notfound' => 'ไม่พบหน้าเพจดังกล่าว',
  'pages.errors.move' => 'ไม่สามารถย้ายหน้านี้ได้',
  'pages.errors.sort' => 'ไม่สามารถจัดเรียงหน้าเพจทั้งหมด',
  'pages.errors.nosort' => 'ไม่เปลี่ยนแปลง',

  // no subpages allowed
  'nopages.title' => 'หน้าเพจย่อย',
  'nopages.text' => 'ไม่สามารถสร้างหน้าเพจย่อยได้',  
  
  // add page
  'pages.add.title' => 'เพิ่มหน้าใหม่',
  'pages.add.label.title' => 'Title',
  'pages.add.label.url' => 'URL',
  'pages.add.label.template' => 'เทมเพลท',
  'pages.add.button' => 'บันทึก',
  'pages.add.errors.title' => 'กรุณาใส่ Title',
  'pages.add.errors.url' => 'กรุณาใส่ URL ให้กับหน้าเพจ',
  'pages.add.errors.characters' => 'อนุญาตให้ใช้ได้แต่ a-z, 0-9, _, - for the URL',
  'pages.add.errors.exists' => 'มีหน้าเพจที่มี URL นี้อยู่แล้ว',
  'pages.add.errors.permissions' => 'ไม่สามารถสร้างแฟ้มข้อมูลได้',
  'pages.add.success' => 'หน้าเพจถูกสร้างแล้ว',

  // update page
  'pages.update.errors' => 'กรุณากรอกข้อมูลให้ถูกต้องครบถ้วน',
    
  // delete page  
  'pages.delete.title' => 'ลบหน้านี้',
  'pages.delete.button' => 'ลบ',
  'pages.delete.errors.homepage' => 'ไม่สามารถลบหน้าหลักได้',
  'pages.delete.errors.errorpage' => 'ไม่สามารถลบหน้าที่ผิดพลาดได้',
  'pages.delete.errors.subpages' => 'ทำการลบหน้าเพจย่อยก่อนจึงจะลบหน้านี้ได้',
  'pages.delete.errors.permissions' => 'ไม่สามารถลบหน้านี้ได้',
  'pages.delete.success' => 'หน้านี้ถูกลบแล้ว',

  // options
  'options.url' => 'URL',
  'options.button' => 'บันทึก',
  'options.home.url' => 'URL',
  'options.home.text' => 'ไม่สามารถเปลี่ยน URL ของหน้าหลักได้',
  'options.error.text' => 'ไม่สามารถเปลี่ยน URL ของหน้าเพจที่ผิดพลาดได้',
  'options.errors.homepage' => 'ไม่สามารถเปลี่ยน URL ของหน้าหลักได้',
  'options.errors.errorpage' => 'ไม่สามารถเปลี่ยน URL ของหน้าเพจที่ผิดพลาดได้',
  'options.errors.characters' => 'อนุญาตให้ใช้ได้แต่ a-z, 0-9, _, -',
  'options.errors.permissions' => 'ไม่สามารถย้ายแฟ้มข้อมูลนี้ได้',
  'options.errors.exists' => 'มี URL นี้อยู่แล้ว',
  'options.errors.move' => 'ไม่สามารถย้ายแฟ้มข้อมูลนี้ได้',

  // files
  'files.title' => 'ไฟล์',
  'files.upload' => 'อัพโหลดไฟล์ใหม่',
  'files.edit' => 'แก้ไข',
  'files.replace' => 'แทนที่',
  'files.delete' => 'ลบ',
  'files.empty' => 'ไม่พบไฟล์',

  'nofiles.title' => 'ไม่พบไฟล์',
  'nofiles.text' => 'ไม่ควรจะมีไฟล์ในหน้านี้',
  
  // delete file
  'files.delete.title' => 'ลบไฟล์นี้',
  'files.delete.button' => 'ลบ',
  'files.delete.errors.notfound' => 'ไม่พบไฟล์ดังกล่าว',
  'files.delete.errors.permissions' => 'ไม่สามารถลบไฟล์นี้ได้',
  'files.delete.success' => 'ไฟล์นี้ถูกลบแล้ว',

  // edit file
  'files.edit.title' => 'แก้ไขไฟล์',
  'files.edit.filename' => 'ชื่อไฟล์ (ไม่ต้องใส่นามสกุล)',
  'files.edit.button' => 'บันทึก',
  'files.edit.errors.filename' => 'โปรดใส่ชื่อไฟล์',
  'files.edit.errors.notfound' => 'ไม่พบไฟล์ดังกล่าว',
  'files.edit.errors.exists' => 'มีไฟล์ชื่อนี้อยู่แล้ว',
  'files.edit.errors.permissions' => 'ไม่สามารถเปลี่ยนชื่อไฟล์ได้',
  'files.edit.success' => 'ไฟล์ได้รับการบันทึกแล้ว',

  // replace file
  'files.replace.title' => 'แทนที่ไฟล์นี้',
  'files.replace.file' => 'ไฟล์',
  'files.replace.choose' => 'กรุณาเลือกไฟลใหม่์จากคอมพิวเตอร์ของคุณ',
  'files.replace.button' => 'แทนที่',
  'files.replace.errors.notfound' => 'ไม่พบไฟล์ดังกล่าว',
  'files.replace.success' => 'ไฟล์ได้ถูกแทนที่',

  // upload file
  'files.upload.title' => 'อัพโหลดไฟล์ใหม่',
  'files.upload.choose' => 'กรุณาเลือกไฟล์จากคอมพิวเตอร์ของคุณ',
  'files.upload.button' => 'อัพโหลด',
      
  // login  
  'login.button' => 'Login',
  'login.username' => 'Username',
  'login.password' => 'Password',
  'login.error' => 'Username หรือ Password ไม่ถูกต้อง',
  'login.success' => 'คุณได้ทำการล็อคอินเรียบร้อย',
  'login.error.browser.title' => 'ไม่สามารถแสดงบนเบราว์เซอร์เวอร์ชั่นเก่า',
  'login.error.browser.text' => 'กรุณาอัพเดทเวอร์ชั่นล่าสุดของ Google Chrome, Firefox, Safari or Internet Explorer.',
  
  // upload
  'upload.errors.missing-file' => 'ไม่พบไฟล์ดังกล่าว',
  'upload.errors.file-exists' => 'ไม่สามารถบันทึกซ้ำไฟล์ที่มีอยู่แล้วได้',
  'upload.errors.invalid-upload' => 'การอัพโหลดล้มเหลว',
  'upload.errors.too-big' => 'ขนาดของไฟล์ใหญ่เกินไป',
  'upload.errors.invalid-file' => 'ประเภทของไฟล์ไม่ถูกต้อง',
  'upload.errors.move-error' => 'ไม่สามารถย้ายไฟล์มาที่เซิฟเวอร์ได้',
  'upload.success' => 'ไฟล์ถูกอัพโหลดแล้ว',

  // writer
  'writer.errors.permissions' => 'ไฟล์นี้ไม่สามารถบันทึกซ้ำได้',
  'writer.errors.write' => 'ไม่สามารถเพิ่มข้อมูลได้',
  'writer.success' => 'ไฟล์ถูกบันทึกเรียบร้อย',
  
  // form buttons
  'form.buttons.h1' => 'h1',
  'form.buttons.h2' => 'h2',
  'form.buttons.h3' => 'h3',
  'form.buttons.bold' => 'ตัวหนา',
  'form.buttons.bold.sample' => 'ตัวอักษรหนา',
  'form.buttons.italic' => 'ตัวเอียง',
  'form.buttons.italic.sample' => 'ตัวอักษรเอียง',
  'form.buttons.link' => 'ลิงก์',
  'form.buttons.email' => 'อีเมล',

  'form.overlay.link.title' => 'ใส่ลิงก์่',
  'form.overlay.link.link' => 'ลิงก์',
  'form.overlay.link.text' => 'ลิงก์ตัวอักษร (เพิ่มเติม)',
  'form.overlay.link.button' => 'ใส่ลิงก์',

  'form.overlay.email.title' => 'ใส่อีเมล',
  'form.overlay.email.link' => 'ที่อยู่อีเมล',
  'form.overlay.email.text' => 'ลิงก์ตัวอักษร (เพิ่มเติม)',
  'form.overlay.email.button' => 'ใส่อีเมล',
  
));