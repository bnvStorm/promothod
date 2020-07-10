
 $(document).ready(function() {
    $('.leftMenu a').each(function() {
        if ('http://promothod'+$(this).attr('href') == window.location.href)
        {
            $(this).addClass('active');
        }
      if($(".leftMenu a").hasClass("active")){
		$('.nav__dropdown-menu').addClass('disactive');
	}
		$('#double').click(function(){
      		if($(".leftMenu nav").hasClass("show")){
				$('.leftMenu nav').removeClass('show');
				$('.leftMenu').css('display', 'none');
			}else{
			$('.leftMenu nav').addClass('show');
			$('.leftMenu').css('display', 'block');
			$('.nav').css('position', 'unset');
			}
		});
	// collapse show
    });
});
