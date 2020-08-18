
$(document).ready(function() {
  $('.leftMenu a').each(function() {
    if ('http://promothod'+$(this).attr('href') == window.location.href)
    {
      $(this).addClass('active');
    }
    if($(".leftMenu a").hasClass("active")){
      $('.nav__dropdown-menu').addClass('disactive');
    }
  });
  $('#doubleact').click(function(){
    if($(".leftMenu .nav__wrap").hasClass("show")){
      $('.leftMenu .nav__wrap').removeClass('show');
      $('.leftMenu').css('display', 'none');
      $('.leftMenu .nav__wrap').css('display', 'none');
      $('.content_text').css('margin-top', 'unset');
    }else{
     $('.leftMenu .nav__wrap').addClass('show');
     $('.leftMenu').css('display', 'block');
     $('.leftMenu .nav__wrap').css('display', 'block');
     $('.nav').css('position', 'unset');
   }

 });
  function scrollToTop() {
    var scroll = $window.scrollTop();
    var $backToTop2 = $("#doubleact");
    if (scroll >= 70) {
      $backToTop2.addClass("shows");
    } else {
      $backToTop2.removeClass("shows");
    }
  }

  $('#doubleact').on('click',function(){
    $('html, body').animate({scrollTop: 0}, 1350, "easeInOutQuint");
    return false;
  });
});
