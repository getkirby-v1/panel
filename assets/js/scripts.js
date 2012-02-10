$(function() {

  $('.growl').click(function() {
    $(this).remove();
  });

  $('form').submit(function() {
    $(this).addClass('loading');
  });
  
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
    
});