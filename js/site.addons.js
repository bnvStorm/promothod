
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
});
// // путь в урле
//   var pathname  = window.location.pathname;
//   $(document).ready(function(){
//    // все ссылки из бокового меню
//    var links = $('.leftMenu a');
//    // links.parents().siblings('i').click()
//    // цикл обработки ссылок
//    for (var i = links.length - 1; i >= 0; i--) {
//     // проверка на совпадение урла и ссылки
//     if (links[i].pathname === pathname) {
//      // кликнуть по иконке в ближайшем родителе
//      $(links[i]).parents().siblings('i').click()
//     }
    
//    }
//   });