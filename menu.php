<?php 
$cat = explode('/', $_SERVER['REQUEST_URI']);
$cat = $cat[1];
switch ($cat) {
	case 'otkhody':
	echo "
	<div class='nav nav--side nav--side-sticky-left leftMenu lnav'>
	<div class='nav__holder'>
	<div class='nav__container container'>

	<div class='flex-parent'>
	<!-- Navbar -->
	<nav id='navbar-collapse' class='nav__wrap collapse navbar-collapse'>
	<ul class='nav__menu'>
	<li class='nav__dropdown'>
	<a href='/otkhody/avtomobili-i-oborudovanie/' >
	Автомобили и оборудование						</a>
	
	
	</li>	
	<li class='nav__dropdown'>
	
	<a href='/otkhody/akkumulyatory/' >
	Аккумуляторы						</a>
	</li>	
	<!--<li class='nav__dropdown'>		
	<a href='/otkhody/arkhivy-na-bumazhnykh-nositelyakh/' >
	Архивы на бумажных носителях						</a>
	</li>	-->
	<li class='nav__dropdown'>
	<a href='/otkhody/ballony-atsetilenovye-gazovye-kislorodnye-i-dr/' >
	Баллоны ацетиленовые, газовые, кислородные и др.)						</a>
	</li>	
	<li class='nav__dropdown'>
	<a href='/otkhody/bumaga-karton/' >
	Бумага, картон						</a>
	</li>	
	<li class='nav__dropdown'>		
	<a href='/otkhody/bytovaya-tekhnika-i-mebel/' >
	Бытовая техника и мебель						</a>
	</li>	
	<li class='nav__dropdown'>
	<a href='/otkhody/lakokrasochnye-materialy/' >
	Лакокрасочные материалы						</a>
	</li>	
	<li class='nav__dropdown'>
	<a href='/otkhody/lom-i-pyl-abrazivnykh-materialov/' >
	Лом и пыль абразивных материалов						</a>
	</li>	
	<li class='nav__dropdown'>
	<a href='/otkhody/medotkhody/' >
	Медицинские отходы						</a>
	</li>	
	<li class='nav__dropdown'>	
	<a href='/otkhody/meditsinskoe-oborudovanie/' >
	Медицинское оборудование						</a></li>	
	<li class='nav__dropdown'>	
	<a href='/otkhody/ogarki-svarochnykh-elektrodov/' >
	Огарки сварочных электродов						</a></li>	
	
	<li class='nav__dropdown'>	<a href='/otkhody/orgtekhnika-elektronnaya-tekhnika/' >
	Оргтехника, электронная техника						</a></li>	
	
	<li class='nav__dropdown'>	<a href='/otkhody/plastik-polimery/' >
	Пластик, полимеры						</a></li>	
	
	<li class='nav__dropdown'>	<a href='/otkhody/produkty-pitaniya-prosrochennye/' >
	Продукты питания просроченные						</a></li>	
	
	<li class='nav__dropdown'>	<a href='/otkhody/otkhody-drevesiny/' >
	Отходы древесины						</a></li>	
	
	<li class='nav__dropdown'>	
	<a href='/otkhody/neftesoderzhashchie-otkhody/' >
	Нефтесодержащие отходы		</a>	
	<!--<i class='ui-arrow-down nav__dropdown-trigger' role='button' aria-haspopup='true' aria-expanded='false'></i>
	<ul class='nav__dropdown-menu'>
	<li><a href='/otkhody/neftesoderzhashchie-otkhody/otrabotannye-masla/'>Отработанные масла</a></li>
	<li><a href='/otkhody/neftesoderzhashchie-otkhody/promaslennaya-vetosh/'>Промасленная ветошь</a></li>
	<li><a href='/otkhody/neftesoderzhashchie-otkhody/filtry-avtomobilnye/'>Фильтры автомобильные</a></li>
	<li><a href='/otkhody/neftesoderzhashchie-otkhody/nefteshlam/' >Нефтешлам</a></li>
	<li><a href='/otkhody/neftesoderzhashchie-otkhody/zamazuchennyy-grunt/'>Замазученный грунт</a></li>
	<li><a href='/otkhody/neftesoderzhashchie-otkhody/vodomaslyanye-emulsii/'>Водомасляные эмульсии</a></li>
	<li><a href='/otkhody/neftesoderzhashchie-otkhody/otkhody-nefteuloviteley/'>Отходы нефтеуловителей<li></a></li>
	</ul>-->
	</li>
	<li class='nav__dropdown'><a href='/otkhody/sredstva-individualnoy-zashchity/' >
	Средства индивидуальной защиты</a></li>
	<li class='nav__dropdown'><a href='/otkhody/pyl-i-shlam-aspiratsionnykh-ustanovok/' >
	Пыль и шлам аспирационных установок</a></li>	
	
	<li class='nav__dropdown'><a href='/otkhody/tamozhennye-otkhody/' >
	Таможенные отходы</a></li>	
	
	<li class='nav__dropdown'><a href='/otkhody/tara-i-upakovka/' >
	Тара и упаковка</a></li>	
	
	<li class='nav__dropdown'><a href='/otkhody/khimicheskie-otkhody/' >
	Химические отходы</a></li>	


	<li class='nav__dropdown'>
	<a href='/otkhody/otkhody-reziny/' >
	Отходы резины</a>
	<i class='ui-arrow-down nav__dropdown-trigger' role='button' aria-haspopup='true' aria-expanded='false'></i>
	<ul class='nav__dropdown-menu'>
	<li><a href='/otkhody/otkhody-reziny/shiny-avtomobilnye/' >Шины автомобильные</a></li>
	<li><a href='/otkhody/otkhody-reziny/konveyernaya-lenta-privodnye-remni-rezinovye-detali/'>Конвейерная лента, приводные ремни, резиновые детали</a></li>									
	</ul> 
	</li>	
	<li class='nav__dropdown'>
	<a href='/otkhody/otkhody-soderzhashchie-pkhd-i-soz/' >
	Отходы содержащие <br> ПХД и СОЗ</a>
	<i class='ui-arrow-down nav__dropdown-trigger' role='button' aria-haspopup='true' aria-expanded='false'></i>
	<ul class='nav__dropdown-menu'>
	<!--<li><a href='/otkhody/otkhody-soderzhashchie-pkhd-i-soz/pkhd-soderzhashchee-maslo/' >ПХД-содержащее масло</a></li>-->
	<li><a href='/otkhody/otkhody-soderzhashchie-pkhd-i-soz/pkhd-zagryaznennoe-oborudovanie/' >ПХД-загрязненное оборудование</a>	</li>								
	</ul> 
	</li>


	<li class='nav__dropdown'>
	<a href='/otkhody/rtutsoderzhashchie-otkhody/' >
	Ртутьсодержащие отходы</a>
	<!--<i class='ui-arrow-down nav__dropdown-trigger' role='button' aria-haspopup='true' aria-expanded='false'></i>
	<ul class='nav__dropdown-menu'>
	<li>
	<a href='/otkhody/rtutsoderzhashchie-otkhody/rtutsoderzhashchie-lampy/' >Ртутьсодержащие лампы</a>
	</li>
	<li>
	<a href='/otkhody/rtutsoderzhashchie-otkhody/rtutsoderzhashchie-pribory/' >Ртутьсодержащие приборы</a>
	</li>
	<li>
	<a href='/otkhody/rtutsoderzhashchie-otkhody/rtut-metallicheskaya/' >Ртуть металлическая</a>
	</li>
	<li>
	<a href='/otkhody/rtutsoderzhashchie-otkhody/grunt-zagryaznennyy-rtutyu/' >Грунт, загрязненный ртутью</a>
	</li>									
	</ul> -->
	</li>
	<!-- end menu -->
	</nav> <!-- end nav-wrap -->	

	</div> <!-- end flex-parent -->
	</div> <!-- end container -->

	</div>
	<div class='widget_weather'>
		<div id='8f5983801733c5a9908c0bac42ca7f43' class=' wwidget ww-informers-box-854753'><p class='ww-informers-box-854754'><a href='https://world-weather.ru/pogoda/kazakhstan/karaganda/'>world-weather.ru</a><br><a href='https://world-weather.ru/pogoda/russia/lipetsk/'>https://world-weather.ru/pogoda/russia/lipetsk/</a></p></div><script async type='text/javascript' charset='utf-8' src='https://world-weather.ru/wwinformer.php?userid=8f5983801733c5a9908c0bac42ca7f43'></script><style>.ww-informers-box-854754{-webkit-animation-name:ww-informers54;animation-name:ww-informers54;-webkit-animation-duration:1.5s;animation-duration:1.5s;white-space:nowrap;overflow:hidden;-o-text-overflow:ellipsis;text-overflow:ellipsis;font-size:12px;font-family:Arial;line-height:18px;text-align:center}@-webkit-keyframes ww-informers54{0%,80%{opacity:0}100%{opacity:1}}@keyframes ww-informers54{0%,80%{opacity:0}100%{opacity:1}}</style>
<iframe style='width:100%;border:0;overflow:hidden;background-color:transparent;height:272px' scrolling='no' src='https://fortrader.org/informers/getInformer?st=30&cat=7&title=%D0%9A%D1%83%D1%80%D1%81%D1%8B%20%D0%B2%D0%B0%D0%BB%D1%8E%D1%82%20%D0%A6%D0%91%20%D0%A0%D0%A4&texts=%7B%22toolTitle%22%3A%22%D0%92%D0%B0%D0%BB%D1%8E%D1%82%D0%B0%22%2C%22todayCourse%22%3A%22%22%7D&mult=1&showGetBtn=0&hideHeader=0&hideDate=0&w=0&codes=1&colors=titleTextColor%3Dfff%2CtitleBackgroundColor%3D128968%2CsymbolTextColor%3Dffffff%2CtableTextColor%3Dffffff%2CprofitTextColor%3D89bb50%2CprofitBackgroundColor%3Deaf7e1%2ClossTextColor%3Dff1616%2ClossBackgroundColor%3Df6e1e1%2CborderTdColor%3Db3b1b1%2CtableBorderColor%3Db3b1b1%2CtrBackgroundColor%3D128968%2CdataTextColor%3Dffffff%2CdataBackgroundColor%3D128968%2CinformerLinkTextColor%3Dffffff%2CinformerLinkBackgroundColor%3Df1f1f1&items=2%2C21%2C30%2C11111&columns=&toCur=27'></iframe>
	</div>
	</div> <!-- end navigation -->							
	";
	break;
	case 'o-nas':
	echo "				<div class='nav nav--side nav--side-sticky-left leftMenu lnav'>
	<div class='nav__holder'>
	<div class='nav__container container'>

	<div class='flex-parent'>
	<!-- Navbar -->
	<nav id='navbar-collapse' class='nav__wrap collapse navbar-collapse'>
	<ul class='nav__menu'>
	<li class='nav__dropdown'>
	<a href='/o-nas/gruppa-specialistov/' >
	Группа специалистов						</a>
	
	</li>												
	<!--<li class='nav__dropdown'>
	<a href='/o-nas/novosti/' >
	Новости						</a>
	
	</li>			-->
											
	<li class='nav__dropdown'>
	<a href='/o-nas/videos/'>Видео</a>
	<!--<i class='ui-arrow-down nav__dropdown-trigger' role='button' aria-haspopup='true' aria-expanded='false'></i>
	<ul class='nav__dropdown-menu'>
	<li><a href='/o-nas/multimedia/video/' >Видеоматериалы</a></li>
	<li><a href='/o-nas/multimedia/fotomaterialy/' >Фотоматериалы</a></li>
	</ul>-->
	</li>						
	<li class='nav__dropdown'>
	
	<li class='nav__dropdown'>
	<a href='/o-nas/nashi-partnery/' >
	Наши партнеры						</a>		</li>	
	
	<li class='nav__dropdown'>
	<a href='/o-nas/razreshitelnye-dokumenty/' >
	Разрешительные документы						</a>		</li>	
	
	<li class='nav__dropdown'>
	<a href='/o-nas/interesnye-proekty/' >
	Уникальные проекты						</a>		</li>	
	
	<!-- <li class='nav__dropdown'>
	<a href='/o-nas/otzyvy/' >
	Отзывы						</a>		</li>	
	
	<li class='nav__dropdown'>
	<a href='/o-nas/vakansii/' >
	Вакансии						</a>		</li>-->	
	

	</ul> <!-- end menu -->
	</nav> <!-- end nav-wrap -->	

	</div> <!-- end flex-parent -->
	</div> <!-- end container -->

	</div>
	<div class='widget_weather'>
		<div id='8f5983801733c5a9908c0bac42ca7f43' class=' wwidget ww-informers-box-854753'><p class='ww-informers-box-854754'><a href='https://world-weather.ru/pogoda/kazakhstan/karaganda/'>world-weather.ru</a><br><a href='https://world-weather.ru/pogoda/russia/lipetsk/'>https://world-weather.ru/pogoda/russia/lipetsk/</a></p></div><script async type='text/javascript' charset='utf-8' src='https://world-weather.ru/wwinformer.php?userid=8f5983801733c5a9908c0bac42ca7f43'></script><style>.ww-informers-box-854754{-webkit-animation-name:ww-informers54;animation-name:ww-informers54;-webkit-animation-duration:1.5s;animation-duration:1.5s;white-space:nowrap;overflow:hidden;-o-text-overflow:ellipsis;text-overflow:ellipsis;font-size:12px;font-family:Arial;line-height:18px;text-align:center}@-webkit-keyframes ww-informers54{0%,80%{opacity:0}100%{opacity:1}}@keyframes ww-informers54{0%,80%{opacity:0}100%{opacity:1}}</style>
<iframe style='width:100%;border:0;overflow:hidden;background-color:transparent;height:272px' scrolling='no' src='https://fortrader.org/informers/getInformer?st=30&cat=7&title=%D0%9A%D1%83%D1%80%D1%81%D1%8B%20%D0%B2%D0%B0%D0%BB%D1%8E%D1%82%20%D0%A6%D0%91%20%D0%A0%D0%A4&texts=%7B%22toolTitle%22%3A%22%D0%92%D0%B0%D0%BB%D1%8E%D1%82%D0%B0%22%2C%22todayCourse%22%3A%22%22%7D&mult=1&showGetBtn=0&hideHeader=0&hideDate=0&w=0&codes=1&colors=titleTextColor%3Dfff%2CtitleBackgroundColor%3D128968%2CsymbolTextColor%3Dffffff%2CtableTextColor%3Dffffff%2CprofitTextColor%3D89bb50%2CprofitBackgroundColor%3Deaf7e1%2ClossTextColor%3Dff1616%2ClossBackgroundColor%3Df6e1e1%2CborderTdColor%3Db3b1b1%2CtableBorderColor%3Db3b1b1%2CtrBackgroundColor%3D128968%2CdataTextColor%3Dffffff%2CdataBackgroundColor%3D128968%2CinformerLinkTextColor%3Dffffff%2CinformerLinkBackgroundColor%3Df1f1f1&items=2%2C21%2C30%2C11111&columns=&toCur=27'></iframe>
	</div>
	</div> 
	";
	break;
	case 'uslugi':
	echo "	<div class='nav nav--side nav--side-sticky-left leftMenu lnav'>
	<div class='nav__holder'>
	<div class='nav__container container'>

	<div class='flex-parent'>
	<!-- Navbar -->
	<nav id='navbar-collapse' class='nav__wrap collapse navbar-collapse'>
	<ul class='nav__menu'>
	<li class='nav__dropdown'>							
	<a href='/uslugi/priem-otkhodov/' >Прием отходов</a>
	<!--// <i class='ui-arrow-down nav__dropdown-trigger' role='button' aria-haspopup='true' aria-expanded='false'></i>
	// <ul class='nav__dropdown-menu'>
	// <li>
	// <a href='/uslugi/priem-otkhodov/priem-plastika-pet-i-pvd.php' >Прием пластика ПЭТ и ПВД</a>
	// </li>	
	// </ul>-->	
	</li>	
	<li class='nav__dropdown'>										
	<a href='/uslugi/vremennoe-khranenie-otkhodov/' >Временное хранение <br> отходов</a>
	<!--<i class='ui-arrow-down nav__dropdown-trigger' role='button' aria-haspopup='true' aria-expanded='false'></i>
	<ul class='nav__dropdown-menu'>
	<li><a href='/uslugi/vremennoe-khranenie-otkhodov/konteynernye-ploshchadki/' >Контейнерные площадки</a>	</li>
	</ul>-->
	</li>
	<li class='nav__dropdown'>												
	<a href='/uslugi/dokumentirovanie-otkhodov/' >
	Документирование отходов						</a></li>
	<li class='nav__dropdown'>														
	<a href='/uslugi/zakhoronenie-otkhodov/' >
	Захоронение отходов						</a></li>
	<li class='nav__dropdown'>														
	<!--<a href='/uslugi/konteynery/' >
	Контейнеры						</a>-->
	
	<li class='nav__dropdown'>														
	<a href='/uslugi/obezvrezhivanie-otkhodov/' >
	Обезвреживание отходов</a>
	<i class='ui-arrow-down nav__dropdown-trigger' role='button' aria-haspopup='true' aria-expanded='false'></i>
	<ul class='nav__dropdown-menu'>
	<li><a href='/uslugi/obezvrezhivanie-otkhodov/biologicheskoe-obezvrezhivanie/' >Биологическое обезвреживание</a>
	</li>
	<li><a href='/uslugi/obezvrezhivanie-otkhodov/khimicheskaya-neytralizatsiya/' >Химическая нейтрализация</a></li></ul>	
	</li>
	</li>
	<li class='nav__dropdown'>	
	<a href='/uslugi/pererabotka-otkhodov/' >Переработка опасных отходов</a>
	<!--<i class='ui-arrow-down nav__dropdown-trigger' role='button' aria-haspopup='true' aria-expanded='false'></i>
	<ul class='nav__dropdown-menu'>
	<li><a href='/uslugi/pererabotka-otkhodov/sortirovka/' >Сортировка</a></li>
	<li><a href='/uslugi/pererabotka-otkhodov/droblenie/' >Дробление</a></li>
	<li><a href='/uslugi/pererabotka-otkhodov/pressovanie/' >Прессование</a></li>
	</ul>-->
	</li>
	
	<!--<li class='nav__dropdown'>	
	<a href='/uslugi/realizatsiya-produktov-pererabotki/' >
	Реализация продуктов переработки</a></li>-->
	
	<!--<li class='nav__dropdown'>	
	<a href='/uslugi/sbor-i-vyvoz-otkhodov/' >
	Сбор и вывоз отходов</a>
	<i class='ui-arrow-down nav__dropdown-trigger' role='button' aria-haspopup='true' aria-expanded='false'></i>
	<ul class='nav__dropdown-menu'>
	<li><a href='/uslugi/sbor-i-vyvoz-otkhodov/razdelnyy-sbor/' >Раздельный сбор</a></li>	
	</ul>
	</li>-->
	<li class='nav__dropdown'>										
	<a href='/uslugi/transportirovka-otkhodov/' >
	Транспортировка отходов						</a></li>
	<li class='nav__dropdown'>										
	<a href='/uslugi/upakovka-otkhodov/' >
	Упаковка отходов						</a></li>
	<li class='nav__dropdown'>											
	<a href='/uslugi/unichtozhenie-otkhodov/' >
	Уничтожение отходов						</a></li>
	<li class='nav__dropdown'>											
	<a href='/uslugi/ustranenie-razlivov-khimicheskikh-veshchestv/' >
	Устранение разливов <br> опасных отходов</a></li>
	</li>		
	<li class='nav__dropdown'>											
	<a href='http://www.promothod.kz/uslugi/likvidacia_protechek_phd/' >
	Ликвидация утечек и проливов ПХД</a></li>
	</li>	
	

	</ul> <!-- end menu -->
	</nav> <!-- end nav-wrap -->	

	</div> <!-- end flex-parent -->
	</div> <!-- end container -->

	</div>
	<div class='widget_weather'>
		<div id='8f5983801733c5a9908c0bac42ca7f43' class=' wwidget ww-informers-box-854753'><p class='ww-informers-box-854754'><a href='https://world-weather.ru/pogoda/kazakhstan/karaganda/'>world-weather.ru</a><br><a href='https://world-weather.ru/pogoda/russia/lipetsk/'>https://world-weather.ru/pogoda/russia/lipetsk/</a></p></div><script async type='text/javascript' charset='utf-8' src='https://world-weather.ru/wwinformer.php?userid=8f5983801733c5a9908c0bac42ca7f43'></script><style>.ww-informers-box-854754{-webkit-animation-name:ww-informers54;animation-name:ww-informers54;-webkit-animation-duration:1.5s;animation-duration:1.5s;white-space:nowrap;overflow:hidden;-o-text-overflow:ellipsis;text-overflow:ellipsis;font-size:12px;font-family:Arial;line-height:18px;text-align:center}@-webkit-keyframes ww-informers54{0%,80%{opacity:0}100%{opacity:1}}@keyframes ww-informers54{0%,80%{opacity:0}100%{opacity:1}}</style>
<iframe style='width:100%;border:0;overflow:hidden;background-color:transparent;height:272px' scrolling='no' src='https://fortrader.org/informers/getInformer?st=30&cat=7&title=%D0%9A%D1%83%D1%80%D1%81%D1%8B%20%D0%B2%D0%B0%D0%BB%D1%8E%D1%82%20%D0%A6%D0%91%20%D0%A0%D0%A4&texts=%7B%22toolTitle%22%3A%22%D0%92%D0%B0%D0%BB%D1%8E%D1%82%D0%B0%22%2C%22todayCourse%22%3A%22%22%7D&mult=1&showGetBtn=0&hideHeader=0&hideDate=0&w=0&codes=1&colors=titleTextColor%3Dfff%2CtitleBackgroundColor%3D128968%2CsymbolTextColor%3Dffffff%2CtableTextColor%3Dffffff%2CprofitTextColor%3D89bb50%2CprofitBackgroundColor%3Deaf7e1%2ClossTextColor%3Dff1616%2ClossBackgroundColor%3Df6e1e1%2CborderTdColor%3Db3b1b1%2CtableBorderColor%3Db3b1b1%2CtrBackgroundColor%3D128968%2CdataTextColor%3Dffffff%2CdataBackgroundColor%3D128968%2CinformerLinkTextColor%3Dffffff%2CinformerLinkBackgroundColor%3Df1f1f1&items=2%2C21%2C30%2C11111&columns=&toCur=27'></iframe>
	</div>
	</div>
	
	";
	break;
	// case 'zakon':
	// echo "
	// <div class='nav nav--side nav--side-sticky-left leftMenu lnav'>
	// <div class='nav__holder'>
	// <div class='nav__container container'>

	// <div class='flex-parent'>
	// <!-- Navbar -->
	// <nav id='navbar-collapse' class='nav__wrap collapse navbar-collapse'>
	// <ul class='nav__menu'>
	// <li class='nav__dropdown'>
	// <a href='/zakon/' aria-haspopup='true'>Закон</a>
	// <!--<i class='ui-arrow-down nav__dropdown-trigger' role='button' aria-haspopup='true' aria-expanded='false'></i>
	// <ul class='nav__dropdown-menu'>
	// <li><a href='/zakon/kodeksy-i-zakony-respubliki-kazakhstan/ekologicheskiy-kodeks-respubliki-kazakhstan-kodeks-respubliki-kazakhstan-ot-9-yanvarya-2007-goda-n-2/'>Экологический кодекс РК, Кодекс РК от 9 января 2007 года N 212</a></li>
	// </ul>-->
	// </li>
	// <!--<li class='nav__dropdown'>
	// <a href='/zakon/vtorichnoe-syrye/' aria-haspopup='true'>Вторичное сырьё</a>
	// </li>-->
	
	// </ul> <!-- end menu -->
	// </nav> <!-- end nav-wrap -->	

	// </div> <!-- end flex-parent -->
	// </div> <!-- end container -->

	// </div>
	// </div> <!-- end navigation -->
	// ";
	// break;
	// case 'kontakty':
	// echo "
	// <div class='nav nav--side nav--side-sticky-left leftMenu lnav'>
	// <div class='nav__holder'>
	// <div class='nav__container container'>

	// <div class='flex-parent'>
	// <!-- Navbar -->
	// <nav id='navbar-collapse' class='nav__wrap collapse navbar-collapse'>
	// <ul class='nav__menu'>
	// <li class='nav__dropdown'>
	// <a href='/kontakty/predstavitelstva/' >Представительства</a>
	// <!--<i class='ui-arrow-down nav__dropdown-trigger' role='button' aria-haspopup='true' aria-expanded='false'></i>
	// <ul class='nav__dropdown-menu'>
	// <li><a href='/kontakty/predstavitelstva/astana.php' >АСТАНА</a></li>
	// <li><a href='/kontakty/predstavitelstva/almaty.php' >АЛМАТЫ</a></li>
	// </ul>-->
	// </li>
	// <li class='nav__dropdown'>
	// <a href='/kontakty/'>Контакты</a>
	// </li>
	
	// </ul> <!-- end menu -->
	// </nav> <!-- end nav-wrap -->	

	// </div> <!-- end flex-parent -->
	// </div> <!-- end container -->

	// </div>
	// </div> <!-- end navigation -->
	// ";
	// break;
	
	default:
	echo "
	<div class='nav nav--side nav--side-sticky-left leftMenu lnav'>
	<div class='nav__holder'>
	<div class='nav__container container'>

	<div class='flex-parent'>
	<!-- Navbar -->
	<nav id='navbar-collapse' class='nav__wrap collapse navbar-collapse'>
	<ul class='nav__menu'>
	<li class='nav__dropdown'>
	<a href='/o-nas/gruppa-specialistov/' >
	Группа специалистов						</a>
	
	</li>												
	<!--<li class='nav__dropdown'>
	<a href='/o-nas/novosti/' >
	Новости						</a>
	
	</li>		-->
												
	<li class='nav__dropdown'>
	<a href='/o-nas/videos/'>Видео</a>
	<!--<i class='ui-arrow-down nav__dropdown-trigger' role='button' aria-haspopup='true' aria-expanded='false'></i>
	<ul class='nav__dropdown-menu'>
	<li><a href='/o-nas/multimedia/video/' >Видеоматериалы</a></li>
	<li><a href='/o-nas/multimedia/fotomaterialy/' >Фотоматериалы</a></li>
	</ul>-->
	</li>						
	<li class='nav__dropdown'>
	
	<li class='nav__dropdown'>
	<a href='/o-nas/nashi-partnery/' >
	Наши партнеры						</a>		</li>	
	
	<li class='nav__dropdown'>
	<a href='/o-nas/razreshitelnye-dokumenty/' >
	Разрешительные документы						</a>		</li>	
	
	<li class='nav__dropdown'>
	<a href='/o-nas/interesnye-proekty/' >
	Уникальные проекты						</a>		</li>	
	
	<!-- <li class='nav__dropdown'>
	<a href='/o-nas/otzyvy/' >
	Отзывы						</a>		</li>	
	<li class='nav__dropdown'>
	<a href='/o-nas/vakansii/' >
	Вакансии						</a>		</li>	-->
	
	

	</ul> <!-- end menu -->
	</nav> <!-- end nav-wrap -->	

	</div> <!-- end flex-parent -->
	</div> <!-- end container -->

	</div>
	<div class='widget_weather'>
		<div id='8f5983801733c5a9908c0bac42ca7f43' class=' wwidget ww-informers-box-854753'><p class='ww-informers-box-854754'><a href='https://world-weather.ru/pogoda/kazakhstan/karaganda/'>world-weather.ru</a><br><a href='https://world-weather.ru/pogoda/russia/lipetsk/'>https://world-weather.ru/pogoda/russia/lipetsk/</a></p></div><script async type='text/javascript' charset='utf-8' src='https://world-weather.ru/wwinformer.php?userid=8f5983801733c5a9908c0bac42ca7f43'></script><style>.ww-informers-box-854754{-webkit-animation-name:ww-informers54;animation-name:ww-informers54;-webkit-animation-duration:1.5s;animation-duration:1.5s;white-space:nowrap;overflow:hidden;-o-text-overflow:ellipsis;text-overflow:ellipsis;font-size:12px;font-family:Arial;line-height:18px;text-align:center}@-webkit-keyframes ww-informers54{0%,80%{opacity:0}100%{opacity:1}}@keyframes ww-informers54{0%,80%{opacity:0}100%{opacity:1}}</style>
<iframe style='width:100%;border:0;overflow:hidden;background-color:transparent;height:272px' scrolling='no' src='https://fortrader.org/informers/getInformer?st=30&cat=7&title=%D0%9A%D1%83%D1%80%D1%81%D1%8B%20%D0%B2%D0%B0%D0%BB%D1%8E%D1%82%20%D0%A6%D0%91%20%D0%A0%D0%A4&texts=%7B%22toolTitle%22%3A%22%D0%92%D0%B0%D0%BB%D1%8E%D1%82%D0%B0%22%2C%22todayCourse%22%3A%22%22%7D&mult=1&showGetBtn=0&hideHeader=0&hideDate=0&w=0&codes=1&colors=titleTextColor%3Dfff%2CtitleBackgroundColor%3D128968%2CsymbolTextColor%3Dffffff%2CtableTextColor%3Dffffff%2CprofitTextColor%3D89bb50%2CprofitBackgroundColor%3Deaf7e1%2ClossTextColor%3Dff1616%2ClossBackgroundColor%3Df6e1e1%2CborderTdColor%3Db3b1b1%2CtableBorderColor%3Db3b1b1%2CtrBackgroundColor%3D128968%2CdataTextColor%3Dffffff%2CdataBackgroundColor%3D128968%2CinformerLinkTextColor%3Dffffff%2CinformerLinkBackgroundColor%3Df1f1f1&items=2%2C21%2C30%2C11111&columns=&toCur=27'></iframe>
	</div>
	</div>  

	";
	break;
}  ?>