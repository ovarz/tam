function ClosePopup(){
  $('.open-sticky').removeClass('show-sticky');
  $('.rancak-popup').fadeOut('fast');
}



function nav_toggle(){
  $('.header-menu-toggle').click(function(){
	$('body').toggleClass('nav-clicked');
    return false;
  });	
}



function nav_sub_toggle(){
  $('.nav-parent').click(function(){
	$(this).toggleClass('nav-open');
	$(this).parent().find('.nav-sub').slideToggle('fast');
    return false;
  });	
}



function back_to_top(){
  $('#btt').click(function(){
	$('body,html').scrollTop(0);
    return false;
  });	
}



function custom_password(){
  $('.form-toggle-password').click(function(){
    if($(this).is('.show-pass')){
     $(this).removeClass('show-pass').addClass('hide-pass');
     $(this).parent().find(".form-box-field").attr("type","text");
    }else{
     $(this).removeClass('hide-pass').addClass('show-pass');
     $(this).parent().find(".form-box-field").attr("type","password");
    }
  });
}



function open_popup(){
  "use strict";
  $('.open-popup').click(function(){
    var get_id = $(this).attr('title');
	$('.open-popup[title=' + get_id +']').toggleClass('show-popup');
	$('.open-popup').not('.open-popup[title=' + get_id +']').removeClass('show-popup');
    $('#popup-' + get_id).fadeToggle('fast');
    $('.rancak-popup').not('#popup-' + get_id).fadeOut('fast');
	return false;
  });	
}



$(document).ready(function(){
  "use strict";
  nav_toggle();
  nav_sub_toggle();
  back_to_top();
  custom_password();
  open_popup();
});