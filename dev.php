<?php 


// проверка гет запросов
switch ($_GET['func']) {
	case 'view_from_cache':
		view_from_cache($_GET["page_id"]);
		break;
	case 'save_to_file':
		save_to_file($_GET["page_id"]);
		break;
	case 'save_to_db':
		save_to_db($_GET["page_id"]);
		break;
	case 'save_all_files_to_db':
		save_all_files_to_db();
		break;
	default:
		# code...
		break;
}

function save_to_file($page_id)
{
// выбираем контент из бд
	require 'config.php';
	// выражение запроса
	$sql = "SELECT id,url,content FROM promothod_kz___promothod_kz WHERE id = '$page_id'";
	// MySQLi Object-oriented
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}

	// выполнение запроса
	$result = $conn->query($sql);
	// если результатов не найдено
	if ($result->num_rows < 1) {
	// редирект на 404 ошибку
		echo "Такой страницы не существует </br>";
	  	exit;
	}
	// если результат есть
	if ($result->num_rows > 0) {
	  // присваиваем значения переменных и закрываем соединение
	  while($row = $result->fetch_assoc()) {	
	    $content = $row['content'];
	    $id = $row['id'];
	    $uri = $row['url'];
	    $filename = 'cache/' . $id . '.php';
	    file_put_contents( $filename, $content);	
	    echo "Страница <a href='$uri'>$uri</a> успешно сохранена в кеш. </br>";	
	    echo "<a href='/dev.php?func=view_from_cache&page_id=$page_id'>Посмотреть из кеша </a>";	
	    }
	}  
	$conn->close();

}

// сохраняем все файлы из папки кеш в базу данных
function save_all_files_to_db() {
	// сканируем все файлы в папке кеш в массив
	$files = scandir('cache');
	
	$files_count = count($files);
	for ($i=2; $i < $files_count; $i++) { 
		// убираем .php из названия файла и получаем $page_id
		$page_id = (str_replace('.php', '', $files[$i]));
		// пользуемся уже готовой функцией сохранения по id)))
		save_to_db($page_id);
	}
}

function save_to_db($page_id)
{
	require 'config.php';
	$content = file_get_contents('cache/' . $page_id . '.php');
	// выбираем контент из бд

	// выражение запроса
	$sql = "UPDATE promothod_kz___promothod_kz
	SET content = '$content'
	WHERE id = '$page_id';";
	// MySQLi Object-oriented
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}

	// выполнение запроса
	$result = $conn->query($sql);
	if ($result) {
		echo "Страница c id $page_id успешно сохранена в базу данных. </br>";
	}

	$conn->close();
}

function view_from_cache($page_id)
{
	require 'config.php';
	$id = $page_id;
	$filename = 'cache/' . $page_id .'.php';
	if (file_exists($filename)) {
		if (!file_get_contents($filename)) {
			echo "Файл пуст";
			exit;
		}
		require 'header.php';
				echo "<div class=' content content-wrapper content-wrapper--boxed oh'>";

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
							Нефтесодержащие отходы<div class='arrow'></div>						</a>
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
				<div class='leftMenu'>
                	<div class='leftMenu-head'>
                    	<span>Инфо</span>
                    </div><!--leftMenu-head-->
															
						<a href='/info/kodeksy-i-zakony-respubliki-kazakhstan/' class='item '>
							Кодексы и Законы Республики Казахстан<div class='arrow'></div>						</a>
					<div class='second_level'><a href='/info/kodeksy-i-zakony-respubliki-kazakhstan/ekologicheskiy-kodeks-respubliki-kazakhstan-kodeks-respubliki-kazakhstan-ot-9-yanvarya-2007-goda-n-2/' class='link item-2 '>Экологический кодекс Республики Казахстан, Кодекс Республики Казахстан от 9 января 2007 года N 212</a></div>															
						<a href='/info/vtorichnoe-syrye/' class='item '>
							Вторичное сырьё						</a>
										                </div>
				";
				break;
			case 'kontakty':
				echo "<div class='leftMenu'>
                	<div class='leftMenu-head'>
                    	<span>Контакты</span>
                    </div><!--leftMenu-head-->
															
						<a href='/kontakty/predstavitelstva/' class='item '>
							Представительства<div class='arrow'></div>						</a>
					<div class='second_level'><a href='/kontakty/predstavitelstva/astana.php' class='link item-2 '>АСТАНА</a><a href='/kontakty/predstavitelstva/almaty.php' class='link item-2 '>АЛМАТЫ</a></div>					                </div>";
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
		}  
		echo "<div class='content_text'>
			<h1> </h1>";
		require('cache/' . $page_id .'.php');
		echo "
		</div>
		
		
	</div>";
		
		require 'footer.php';
	}

}