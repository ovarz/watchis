function ClosePopup(){
  $('.open-sticky').removeClass('show-sticky');
  $('.rancak-popup').slideUp('fast');
};



function all_scroll(){
  "use strict";	

  $(window).scroll(function(){
    var scroll_position = $(window).scrollTop();

    if(scroll_position >= 1){
      $('#btt').css("display","flex");	
    }

    else{
      $('#btt').hide();
    }
  });  
};



function back_to_top(){
  "use strict";
  $('#btt').click(function(){
	$('body,html').scrollTop(0);
    return false;
  });	
};



function open_sticky(){
  "use strict";
  $('.open-sticky').click(function(){
    var get_id = $(this).attr('title');
	$('.open-sticky[title=' + get_id +']').toggleClass('show-sticky');
	$('.open-sticky').not('.open-sticky[title=' + get_id +']').removeClass('show-sticky');
    $('#popup-' + get_id).slideToggle('fast');
    $('.rancak-popup').not('#popup-' + get_id).slideUp('fast');
    return false;
  });	
};



function close_menu(){
  "use strict";
  $('.menu-main').click(function(){
    ClosePopup()
  });	
};



$(document).ready(function(){
  "use strict";
  all_scroll();
  back_to_top();
  open_sticky();
  close_menu();
});