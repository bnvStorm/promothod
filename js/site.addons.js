
 $(document).ready(function() {
    $('.leftMenu a').each(function() {
        if ('http://promothod'+$(this).attr('href') == window.location.href)
        {
            $(this).addClass('active');
        }
      if($(".leftMenu a").hasClass("active")){
		$('.nav__dropdown-menu').addClass('disactive');
	}
		$('#doubleact').click(function(){
			// $('html, body').animate({scrollTop: 0}, 1350, "easeInOutQuint");
      		if($(".leftMenu nav").hasClass("show")){
				$('.leftMenu nav').removeClass('show');
				$('.leftMenu').css('display', 'none');
				$('.content_text').css('margin-top', 'unset');

    // return false;
			}else{
			$('.leftMenu nav').addClass('show');
			$('.leftMenu').css('display', 'block');
			$('.nav').css('position', 'unset');
			}

		});
   	// 	arrowTop.onclick = function() {
    //   window.scrollTo(pageXOffset, 0);
    //   // после scrollTo возникнет событие "scroll", так что стрелка автоматически скроется

    // };

	// collapse show
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
