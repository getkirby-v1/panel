var panel = {

  init : function() {

    $('.growl').click(function() {
      $(this).remove();
    });
  
    $('form').submit(function() {
      $(this).addClass('loading');
    });

    $('.form-buttons').formbuttons();

    $('.overlay').not('.hide').find('input').first().focus();

    var sort = $('.subpages.sortable ul');
  
    if(sort.length) {
      sort.sortable({ 
        axis: 'y',
        scroll: true,
        connectWith: sort,
        receive : function(e, ui) {
    
          var visibleList    = $('.subpages .visible')
          var countVisible   = visibleList.find('li').not('.empty').length;
          var invisibleList  = $('.subpages .invisible')
          var countInvisible = invisibleList.find('li').not('.empty').length;
    
          if(countVisible == 0) {
            visibleList.find('.empty').removeClass('hide');
          } else {
            visibleList.find('.empty').addClass('hide');
          }
    
          if(countInvisible == 0) {
            invisibleList.find('.empty').removeClass('hide');
          } else {
            invisibleList.find('.empty').addClass('hide');
          }
    
          if(ui.sender.hasClass('visible')) {
            ui.item.find('input').attr('name', 'invisible[]');
          } else {
            ui.item.find('input').attr('name', 'visible[]');
          }
        }
      }).disableSelection();
    }
  
    if($('.files').length) {
      $('.files a[rel=image]').fancybox({
        padding: 20,
        cyclic: true,
        overlayOpacity: 0.9,
        overlayColor: '#000',
        showCloseButton : false,
        changeSpeed : 0, 
        changeFade : 0,
        speedOut : 200
      });
    }
    
    $('.subpages a.more').click(function() {
  
      var a = $(this);
  
      switch(a.attr('href')) {
        case '#more-visible':
          $('.subpages ul.visible li.more').show();
          a.text(a.attr('data-less')).attr('href', '#less-visible');
          a.addClass('less');
          break;
        case '#more-invisible':
          $('.subpages ul.invisible li.more').show();
          a.text(a.attr('data-less')).attr('href', '#less-invisible');
          a.addClass('less');
          break;
        case '#less-visible':
          $('.subpages ul.visible li.more').hide();
          a.text(a.attr('data-more')).attr('href', '#more-visible');
          a.removeClass('less');
          break;
        case '#less-invisible':
          $('.subpages ul.invisible li.more').hide();
          a.text(a.attr('data-more')).attr('href', '#more-invisible');
          a.removeClass('less');
          break;
      }
          
      return false;
      
    });
        
  }, 
  
  overlay : {
    open : function(element) {
    
      $('.overlay').hide();
      var elem = $(element);
      
      if(!elem.length) return false;
          
      var blocker = $('<div class="overlay-blocker"></div>').css({
        top: 0, right: 0, bottom: 0, left: 0,
        width: "100%", height: "100%",
        position: "fixed",
        zIndex: 1999,
        background: '#fff',
        opacity: .9
      });
    
      $('body').append(blocker);

      elem.show();
      elem.find('input:first').focus();
    
    }, 
    close : function() {
      $('.overlay').hide();
      $('.overlay-blocker').remove();
    }
  }
    
};

$(function() {
  panel.init();
});

(function($) {

  $.formbuttons = function(bar) {
  
    var $this = this;
    
    $this.bar  = $(bar);
    $this.init = function() {
            
      $this.area = $this.bar.next('textarea').first();
            
      $this.bar.find('a[rel=tag]').click(function() {      
        var button = $(this);
        var open   = button.attr('data-tag-open');
        var close  = button.attr('data-tag-close');
        var sample = button.attr('data-tag-sample');

        $this.tag(open, close, sample);
        return false;
      });  
      
      $this.bar.find('a[rel=overlay]').click(function() {
        var button  = $(this);
        var id      = button.attr('href');
        var overlay = $(id);
        
        overlay.data('area', $this.area);
        overlay.data('callback', function() {
          $this.link(overlay);
        });
                        
        panel.overlay.open(overlay);
        return false;
      });
                            
    };
  
    $this.tag = function(open, close, sample) {
  
      var area = this.area[0];
  
      if(!sample) sample = '';
      if(!close)  close  = '';
  
      // IE
      if(document.selection) {
  
        var selection = document.selection.createRange().text;
        if(!selection) selection = sample;
  
        area.focus();
        
        document.selection.createRange().text = open + selection + close;
    
      // Moz + Webkit
      } else if(area.selectionStart || area.selectionStart == '0') {
  
        var start  = area.selectionStart;
        var end    = area.selectionEnd;
        var scroll = area.scrollTop;
        var value  = area.value; 
        var text   = value.substring(start, end);
  
        if(!text) text = sample;
  
        var tag = open + text + close;
  
        area.value = value.substring(0, start) + tag + value.substring(end, value.length);
        area.focus();
    
        var cursor = start + tag.length;
  
        area.selectionStart = cursor;
        area.selectionEnd   = cursor;
        area.scrollTop      = scroll;
    
      } 
  
    };
  
    $this.insert = function(text) {
      
      var area = this.area[0];
  
      // IE
      if(document.selection && !window.opera) {
  
        area.focus();
        selection = document.selection.createRange();
        selection.text = text;
  
      // Moz + Webkit
      } else if (area.selectionStart || area.selectionStart == '0') {
  
        var start = area.selectionStart;
        var end   = area.selectionEnd;
        var value = area.value;
  
        area.value = value.substring(0, start) + text + value.substring(end, value.length);
        area.focus();
  
      } else {
  
        area.value += text;
        area.focus();
  
      }
  
    };
    
    $this.link = function(modal) {
      var tag  = modal.attr('data-tag');
    
	  if (tag == 'link' || tag == 'email') {
        var linkField = modal.find('input[name=link]');
        var textField = modal.find('input[name=text]');
      
        var link = $.trim(linkField.val());     
        var text = $.trim(textField.val());     

        linkField.val('');
        textField.val('');

        if(!link.length) return this.insert('');
        
        if(!text.length || text == link) {
          return this.insert('<' + link + '>');
        } else {
          return this.insert('(' + tag + ': ' + link + ' text: ' + text + ')');
        }
	  } else if (tag == 'youtube' || tag == 'vimeo') {
		var widthField = modal.find('input[name=width]');
        var heightField = modal.find('input[name=height]');
		var linkField = modal.find('input[name=link]');
        
        var width = $.trim(widthField.val());     
        var height = $.trim(heightField.val());    
        var videolink = $.trim(linkField.val()); 
		
		// Link Validation
        if(!videolink.length) return this.insert('');
		
		var youtubeRegex = /^(?:https?:\/\/)?(?:www\.)?youtube\.com\/watch\?(?=.*v=((\w|-){11}))(?:\S+)?$/;
		if (!videolink.match(youtubeRegex) && tag == 'youtube') return this.insert('');
		
		var vimeoRegex = /^(?:https?:\/\/)?(?:www\.)?vimeo\.com\/(clip\:)?(\d+).*$/;
		if (!videolink.match(vimeoRegex) && tag == 'vimeo') return this.insert('');
        
		// Width & Height Validation
	    var intRegex = /^\d{0,4}/;
	    
	    var insertLink = '(' + tag + ': ' + videolink;
	    if (width.length) {
          if (intRegex.test(width)) {
	        insertLink = insertLink + ' width: ' + width;
		  }
	    }
	    if (height.length) {
		  if (intRegex.test(height)) {
	        insertLink = insertLink + ' height: ' + height;
		  }
	    }
	    insertLink = insertLink + ')'
        
		// Reset inputs
        widthField.val('');
        heightField.val('');
        linkField.val('');
	  
        return this.insert(insertLink);
		
	  } else if (tag == 'image') {
		  
        var imageField = modal.find('select[name=image]');
        var widthField = modal.find('input[name=width]');
        var heightField = modal.find('input[name=height]');
        var altField = modal.find('input[name=alt]');
        var linkField = modal.find('input[name=link]');
        var classField = modal.find('input[name=class]');
      
        var image = $.trim(imageField.val());  
        var width = $.trim(widthField.val());  
        var height = $.trim(heightField.val());  
        var alt = $.trim(altField.val());  
        var imagelink = $.trim(linkField.val());  
        var imageclass = $.trim(classField.val());  
        
		if(!image.length || image == '0') return this.insert('');
		
		var intRegex = /^\d{0,4}/;
	    
	    var insertLink = '(' + tag + ': ' + image;
	    if (width.length) {
          if (intRegex.test(width)) {
	        insertLink = insertLink + ' width: ' + width;
		  }
	    }
	    if (height.length) {
		  if (intRegex.test(height)) {
	        insertLink = insertLink + ' height: ' + height;
		  }
	    }
	    if (alt.length) {
		  if (intRegex.test(alt)) {
	        insertLink = insertLink + ' alt: ' + alt;
		  }
	    }
	    if (imagelink.length) {
		  if (intRegex.test(imagelink)) {
	        insertLink = insertLink + ' link: ' + imagelink;
		  }
	    }
	    if (imageclass.length) {
		  if (intRegex.test(imageclass)) {
	        insertLink = insertLink + ' class: ' + imageclass;
		  }
	    }
	    insertLink = insertLink + ')'
        
		// Reset inputs
        imageField.val('0');
        widthField.val('');
        heightField.val('');
        altField.val('');
        linkField.val('');
        classField.val('');
	  
        return this.insert(insertLink);
	  }
    };
    
    $this.init();
  
  }

  $.fn.formbuttons = function(options) {
        
    $('.form-overlay').each(function() {
      var overlay = $(this);

      overlay.find('input[type=submit]').click(function() {
                
        if($(this).is('.cancel') == false) {
          overlay.data('callback')();
        }

        panel.overlay.close();
        overlay.data('area').focus();
        return false;

      });
      
    });

    return this.each(function() {
      if(undefined == $(this).data('formbuttons')) {
        var plugin = new $.formbuttons(this, options);
        $(this).data('formbuttons', plugin);
      }
    });

  }
  
})(jQuery);  
