<?php include 'header.php' ?>


		<div class=' content content-wrapper content-wrapper--boxed oh'>

		<?php 
			$cat = explode('/', $_SERVER['REQUEST_URI']);
			$cat = $cat[1];
		switch ($cat) {
			case 'otkhody':
				echo "<div class='leftMenu'>
                	<div class='leftMenu-head'>
                    	<span>Отходы</span>
                    </div><!--leftMenu-head-->
															
						<a href='/otkhody/avtomobili-i-oborudovanie/' class='item '>
							Автомобили и оборудование						</a>
																				
						<a href='/otkhody/akkumulyatory/' class='item '>
							Аккумуляторы						</a>
																				
						<a href='/otkhody/arkhivy-na-bumazhnykh-nositelyakh/' class='item '>
							Архивы на бумажных носителях						</a>
																				
						<a href='/otkhody/ballony-atsetilenovye-gazovye-kislorodnye-i-dr/' class='item '>
							Баллоны ацетиленовые, газовые, кислородные и др.)						</a>
																				
						<a href='/otkhody/bumaga-karton/' class='item '>
							Бумага, картон						</a>
																				
						<a href='/otkhody/bytovaya-tekhnika-i-mebel/' class='item '>
							Бытовая техника и мебель						</a>
																				
						<a href='/otkhody/lakokrasochnye-materialy/' class='item '>
							Лакокрасочные материалы						</a>
																				
						<a href='/otkhody/lom-i-pyl-abrazivnykh-materialov/' class='item '>
							Лом и пыль абразивных материалов						</a>
																				
						<a href='/otkhody/medotkhody/' class='item '>
							Медицинские отходы						</a>
																				
						<a href='/otkhody/meditsinskoe-oborudovanie/' class='item '>
							Медицинское оборудование						</a>
																				
						<a href='/otkhody/neftesoderzhashchie-otkhody/' class='item '>
							Нефтесодержащие отходы		</a>		
										<div class='second_level'><a href='/otkhody/neftesoderzhashchie-otkhody/otrabotannye-masla/' class='link item-2 '>Отработанные масла</a><a href='/otkhody/neftesoderzhashchie-otkhody/promaslennaya-vetosh/' class='link item-2 '>Промасленная ветошь</a><a href='/otkhody/neftesoderzhashchie-otkhody/filtry-avtomobilnye/' class='link item-2 '>Фильтры автомобильные</a><a href='/otkhody/neftesoderzhashchie-otkhody/nefteshlam/' class='link item-2 '>Нефтешлам</a><a href='/otkhody/neftesoderzhashchie-otkhody/zamazuchennyy-grunt/' class='link item-2 '>Замазученный грунт</a><a href='/otkhody/neftesoderzhashchie-otkhody/vodomaslyanye-emulsii/' class='link item-2 '>Водомасляные эмульсии</a><a href='/otkhody/neftesoderzhashchie-otkhody/otkhody-nefteuloviteley/' class='link item-2 '>Отходы нефтеуловителей</a></div>
							
																		
						<a href='/otkhody/ogarki-svarochnykh-elektrodov/' class='item '>
							Огарки сварочных электродов						</a>
																				
						<a href='/otkhody/orgtekhnika-elektronnaya-tekhnika/' class='item '>
							Оргтехника, электронная техника						</a>
																				
						<a href='/otkhody/plastik-polimery/' class='item '>
							Пластик, полимеры						</a>
																				
						<a href='/otkhody/produkty-pitaniya-prosrochennye/' class='item '>
							Продукты питания просроченные						</a>
																				
						<a href='/otkhody/otkhody-drevesiny/' class='item '>
							Отходы древесины						</a>
																				
						<a href='/otkhody/otkhody-reziny/' class='item '>
							Отходы резины<div class='arrow'></div>						</a>
					<div class='second_level'><a href='/otkhody/otkhody-reziny/shiny-avtomobilnye/' class='link item-2 '>Шины автомобильные</a><a href='/otkhody/otkhody-reziny/konveyernaya-lenta-privodnye-remni-rezinovye-detali/' class='link item-2 '>Конвейерная лента, приводные ремни, резиновые детали</a></div>															
						<a href='/otkhody/otkhody-soderzhashchie-pkhd-i-soz/' class='item '>
							Отходы содержащие ПХД и СОЗ<div class='arrow'></div>						</a>
					<div class='second_level'><a href='/otkhody/otkhody-soderzhashchie-pkhd-i-soz/pkhd-soderzhashchee-maslo/' class='link item-2 '>ПХД-содержащее масло</a><a href='/otkhody/otkhody-soderzhashchie-pkhd-i-soz/pkhd-zagryaznennoe-oborudovanie/' class='link item-2 '>ПХД-загрязненное оборудование</a></div>															
						<a href='/otkhody/pyl-i-shlam-aspiratsionnykh-ustanovok/' class='item '>
							Пыль и шлам аспирационных установок						</a>
																				
						<a href='/otkhody/rtutsoderzhashchie-otkhody/' class='item '>
							Ртутьсодержащие отходы<div class='arrow'></div>						</a>
					<div class='second_level'><a href='/otkhody/rtutsoderzhashchie-otkhody/rtutsoderzhashchie-lampy/' class='link item-2 '>Ртутьсодержащие лампы</a><a href='/otkhody/rtutsoderzhashchie-otkhody/rtutsoderzhashchie-pribory/' class='link item-2 '>Ртутьсодержащие приборы</a><a href='/otkhody/rtutsoderzhashchie-otkhody/rtut-metallicheskaya/' class='link item-2 '>Ртуть металлическая</a><a href='/otkhody/rtutsoderzhashchie-otkhody/grunt-zagryaznennyy-rtutyu/' class='link item-2 '>Грунт, загрязненный ртутью</a></div>															
						<a href='/otkhody/sredstva-individualnoy-zashchity/' class='item '>
							Средства индивидуальной защиты						</a>
																				
						<a href='/otkhody/tamozhennye-otkhody/' class='item '>
							Таможенные отходы						</a>
																				
						<a href='/otkhody/tara-i-upakovka/' class='item '>
							Тара и упаковка						</a>
																				
						<a href='/otkhody/khimicheskie-otkhody/' class='item '>
							Химические отходы						</a>
										                </div>";
				break;
			case 'o-nas':
				echo "<div class='leftMenu'>
                	<div class='leftMenu-head'>
                    	<span>О нас</span>
                    </div><!--leftMenu-head-->
															
						<a href='/o-nas/nasha-komanda/' class='item '>
							Наша команда						</a>
																				
						<a href='/o-nas/novosti/' class='item '>
							Новости						</a>
																				
						<a href='/o-nas/multimedia/' class='item '>
							Mультимедиа<div class='arrow'></div>						</a>
					<div class='second_level'><a href='/o-nas/multimedia/video/' class='link item-2 '>Видеоматериалы</a><a href='/o-nas/multimedia/materialy-smi/' class='link item-2 '>Материалы СМИ</a><a href='/o-nas/multimedia/fotomaterialy/' class='link item-2 '>Фотоматериалы</a></div>															
						<a href='/o-nas/nashi-partnery/' class='item '>
							Наши партнеры						</a>
																				
						<a href='/o-nas/razreshitelnye-dokumenty/' class='item '>
							Разрешительные документы						</a>
																				
						<a href='/o-nas/interesnye-proekty/' class='item '>
							Интересные проекты						</a>
																				
						<a href='/o-nas/otzyvy/' class='item '>
							Отзывы						</a>
																				
						<a href='/o-nas/vakansii/' class='item '>
							Вакансии						</a>
										                </div>";
				break;
			case 'uslugi':
				echo "<div class='leftMenu'>
                	<div class='leftMenu-head'>
                    	<span>Услуги</span>
                    </div><!--leftMenu-head-->
															
						<a href='/uslugi/priem-otkhodov/' class='item '>
							Прием отходов<div class='arrow'></div>						</a>
					<div class='second_level'><a href='/uslugi/priem-otkhodov/priem-plastika-pet-i-pvd.php' class='link item-2 '>Прием пластика ПЭТ и ПВД</a></div>															
						<a href='/uslugi/vremennoe-khranenie-otkhodov/' class='item '>
							Временное хранение отходов<div class='arrow'></div>						</a>
					<div class='second_level'><a href='/uslugi/vremennoe-khranenie-otkhodov/konteynernye-ploshchadki/' class='link item-2 '>Контейнерные площадки</a></div>															
						<a href='/uslugi/dokumentirovanie-otkhodov/' class='item '>
							Документирование отходов						</a>
																				
						<a href='/uslugi/zakhoronenie-otkhodov/' class='item '>
							Захоронение отходов						</a>
																				
						<a href='/uslugi/konteynery/' class='item '>
							Контейнеры						</a>
																				
						<a href='/uslugi/obezvrezhivanie-otkhodov/' class='item '>
							Обезвреживание отходов<div class='arrow'></div>						</a>
					<div class='second_level'><a href='/uslugi/obezvrezhivanie-otkhodov/biologicheskoe-obezvrezhivanie/' class='link item-2 '>Биологическое обезвреживание</a><a href='/uslugi/obezvrezhivanie-otkhodov/khimicheskaya-neytralizatsiya/' class='link item-2 '>Химическая нейтрализация</a></div>															
						<a href='/uslugi/pererabotka-otkhodov/' class='item '>
							Переработка отходов<div class='arrow'></div>						</a>
					<div class='second_level'><a href='/uslugi/pererabotka-otkhodov/sortirovka/' class='link item-2 '>Сортировка</a><a href='/uslugi/pererabotka-otkhodov/droblenie/' class='link item-2 '>Дробление</a><a href='/uslugi/pererabotka-otkhodov/pressovanie/' class='link item-2 '>Прессование</a></div>															
						<a href='/uslugi/realizatsiya-produktov-pererabotki/' class='item '>
							Реализация продуктов переработки						</a>
																				
						<a href='/uslugi/sbor-i-vyvoz-otkhodov/' class='item '>
							Сбор и вывоз отходов<div class='arrow'></div>						</a>
					<div class='second_level'><a href='/uslugi/sbor-i-vyvoz-otkhodov/razdelnyy-sbor/' class='link item-2 '>Раздельный сбор</a></div>															
						<a href='/uslugi/transportirovka-otkhodov/' class='item '>
							Транспортировка отходов						</a>
																				
						<a href='/uslugi/upakovka-otkhodov/' class='item '>
							Упаковка отходов						</a>
																				
						<a href='/uslugi/unichtozhenie-otkhodov/' class='item '>
							Уничтожение отходов						</a>
																				
						<a href='/uslugi/ustranenie-razlivov-khimicheskikh-veshchestv/' class='item '>
							Устранение разливов химических веществ						</a>
										                </div>
				";
				break;
			case 'info':
				echo "
<div class='nav nav--side nav--side-sticky-left leftMenu'>
			<div class='nav__holder'>
				<div class='nav__container container'>

					<div class='flex-parent'>
						<!-- Navbar -->
						<nav id='navbar-collapse' class='nav__wrap collapse navbar-collapse'>
							<ul class='nav__menu'>
								<li class='nav__dropdown'>
									<a href='/info/kodeksy-i-zakony-respubliki-kazakhstan/' aria-haspopup='true'>Кодексы и Законы Республики Казахстан</a>
									<i class='ui-arrow-down nav__dropdown-trigger' role='button' aria-haspopup='true' aria-expanded='false'></i>
									<ul class='nav__dropdown-menu'>
										<li><a href='/info/kodeksy-i-zakony-respubliki-kazakhstan/ekologicheskiy-kodeks-respubliki-kazakhstan-kodeks-respubliki-kazakhstan-ot-9-yanvarya-2007-goda-n-2/'>Экологический кодекс Республики Казахстан, Кодекс Республики Казахстан от 9 января 2007 года N 212</a></li>
									</ul>
								</li>
								<li class='nav__dropdown'>
									<a href='/info/vtorichnoe-syrye/' aria-haspopup='true'>Вторичное сырьё</a>
								</li>
								
							</ul> <!-- end menu -->
						</nav> <!-- end nav-wrap -->	

					</div> <!-- end flex-parent -->
				</div> <!-- end container -->

			</div>
		</div> <!-- end navigation -->
				";
				break;
			case 'kontakty':
				echo "<div class='leftMenu'>
                	<div class='leftMenu-head'>
                    	<span>Контакты</span>
                    </div><!--leftMenu-head-->
															
						<a href='/kontakty/predstavitelstva/' class='item '>
							Представительства<div class='arrow'></div>						</a>
					<div class='second_level'><a href='/kontakty/predstavitelstva/astana.php' class='link item-2 '>АСТАНА</a><a href='/kontakty/predstavitelstva/almaty.php' class='link item-2 '>АЛМАТЫ</a></div>				                </div>";
				break;
			
			default:
				echo "<div class='leftMenu'>
                	<div class='leftMenu-head'>
                    	<span>О нас</span>
                    </div><!--leftMenu-head-->
															
						<a href='/o-nas/nasha-komanda/' class='item '>
							Наша команда						</a>
																				
						<a href='/o-nas/novosti/' class='item '>
							Новости						</a>
																				
						<a href='/o-nas/multimedia/' class='item '>
							Mультимедиа<div class='arrow'></div>						</a>
					<div class='second_level'><a href='/o-nas/multimedia/video/' class='link item-2 '>Видеоматериалы</a><a href='/o-nas/multimedia/materialy-smi/' class='link item-2 '>Материалы СМИ</a><a href='/o-nas/multimedia/fotomaterialy/' class='link item-2 '>Фотоматериалы</a></div>															
						<a href='/o-nas/nashi-partnery/' class='item '>
							Наши партнеры						</a>
																				
						<a href='/o-nas/razreshitelnye-dokumenty/' class='item '>
							Разрешительные документы						</a>
																				
						<a href='/o-nas/interesnye-proekty/' class='item '>
							Интересные проекты						</a>
																				
						<a href='/o-nas/otzyvy/' class='item '>
							Отзывы						</a>
																				
						<a href='/o-nas/vakansii/' class='item '>
							Вакансии						</a>
										                </div>";
				break;
		}  ?>
		
		<div class='content_text'>
			<h1><?php echo $h1; ?></h1>
			<?php echo $content; ?>
		</div>
		
		
</div>
			<!-- Footer -->
<?php include 'footer.php' ?>