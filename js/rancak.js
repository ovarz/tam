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



$(document).ready(function(){
  "use strict";
  nav_toggle();
  nav_sub_toggle();
  back_to_top();
  custom_password();
});