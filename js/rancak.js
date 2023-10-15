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



$(document).ready(function(){
  "use strict";
  nav_sub_toggle();
  back_to_top();
});