<?php

class General
{
	protected $managers = [
		0 => 'Нет менеджера',
		1 => 'Ангелина К.',
		2 => 'Дарья М.',
		3 => 'Наталья П.',
		4 => 'Ольга Ж.',
		5 => 'Надежда В.',
		6 => 'Ирина Х.',
		7 => 'Александра Г.',
		8 => 'Виктория Р.',
		9 => 'Василина М.',
		10 => 'Андрей Ж.',
		11 => 'Елизавета Л.',
		12 => 'Анастасия Р.',
		13 => 'Дарья А.',
		14 => 'Екатерина Н.',
		15 => 'Кристина Х.',
		16 => 'Миронова Д.'
	];

	public function __construct()
	{
		add_action('wp_enqueue_scripts', [$this, 'themeScriptsAndStyles']);

		add_action('do_robotstxt', [$this, 'addedRobotsTxt']);

		add_action('init', [$this, 'settingsAdminWP']);

		// add_action('init', [$this, 'set_tocken']);

		// add_action('init', [$this, 'geo']);

		add_action('wp_enqueue_scripts', [$this, 'removeCode']);

		add_action('init', [$this, 'utmSource']);

		/** Excerpt */
		add_filter('excerpt_more', function ($more) {
			return '...';
		});

		add_filter('excerpt_length', function () {
			return 20;
		});

		add_filter('wpseo_locale', [$this, 'locale']);

		add_action('admin_notices', [$this, 'managerStatsNotice']);
		add_action('restrict_manage_posts', [$this, 'requestsCustomFilter']);
		add_action('pre_get_posts', [$this, 'handlerFilter']);
		add_filter('manage_requests_posts_columns', [$this, 'addCustomColumn']);
		add_filter('manage_requests_posts_custom_column', [$this, 'addHandlerCustomColumn'], 10, 2);

		add_filter('nav_menu_css_class', [$this, 'addClassMenuItems'], 1, 3);

		// Подключение фильтра изменения языка shema WebPage в Yoast SEO
		add_filter('wpseo_schema_webpage', [$this, 'shemaDePage']);

		// Подключение фильтра изменения языка shema WebSite в Yoast SEO
		add_filter('wpseo_schema_website', [$this, 'shemaDeSite']);

		// Подключение фильтра изменения языка shema Organization в Yoast SEO
		add_filter('wpseo_schema_organization', [$this, 'shemaDeOrganization']);

		// Загрузка svg
		add_filter('upload_mimes', [$this, 'svgUploadAllow']);
		add_filter('wp_check_filetype_and_ext', [$this, 'fix_svg_mime_type'], 10, 5);

		// Скрыть стандартный редактор для страниц указанный в массиве
		add_action('admin_init', [$this, 'hide_editor']);

		// Подключение js и css для админки
		add_action('admin_enqueue_scripts', [$this, 'adminStyleScript'], 99);
	}

	// Подключение js и css для админки
	public function adminStyleScript()
	{
		wp_enqueue_style('style-admin', get_template_directory_uri() . '/resources/css/admin.css');
		wp_enqueue_script('script-admin', get_template_directory_uri() . '/resources/js/admin.js');
	}

	// Скрыть стандартный редактор для страниц указанный в массиве
	public function hide_editor()
	{
		$post_id = isset($_GET['post']) ? $_GET['post'] : (isset($_POST['post_ID']) ? $_POST['post_ID'] : null);
		if (!$post_id) return;

		// Список шаблонов страниц, для которых нужно скрыть редактор
		$hide_editor_on_templates = array(
			'pages/halfe-page.php',
			'template-page-1.php',
			'template-page-2.php',
			// добавьте названия шаблонов страниц, для которых нужно скрыть редактор
		);

		$current_template = get_page_template_slug($post_id);
		if (in_array($current_template, $hide_editor_on_templates)) {
			remove_post_type_support('page', 'editor');
		}
	}

	// Добавление utm_source в куки
	public static function utmSource()
	{
		if (isset($_GET['utm_source'])) {
			$utm_source = $_GET['utm_source'];
			// Устанавливаем куку с именем "utm_source" и значением $utm_source на 1 день
			setcookie('utm_source', json_encode($utm_source), time() + (1 * 24 * 60 * 60), '/');
		}
	}

	// Функция изменения языка shema WebPage в Yoast SEO
	public static function shemaDePage($data)
	{
		$data['inLanguage'] = 'de-DE';
		$data['primaryImageOfPage']['inLanguage'] = 'de-DE';
		$data['image']['inLanguage'] = 'de-DE';
		return $data;
	}

	// Функция изменения языка shema WebSite в Yoast SEO
	public static function shemaDeSite($data)
	{
		$data['inLanguage'] = 'de-DE';
		return $data;
	}

	// Функция изменения языка shema Organization в Yoast SEO
	public static function shemaDeOrganization($data)
	{
		$data['logo'] = [
			'@type'      => 'ImageObject',
			'@id'        => 'https://akademily.de/#/schema/logo/image/',
			'inLanguage' => 'de-DE',
			'url'        => 'https://akademily.de/wp-content/uploads/2024/01/logo.svg',
			'contentUrl' => 'https://akademily.de/wp-content/uploads/2024/01/logo.svg',
			'caption'    => 'Akademily',
		];
		$data['image'] = [
			'@type'      => 'ImageObject',
			'@id'        => 'https://akademily.de/#/schema/logo/image/',
			'inLanguage' => 'de-DE',
			'url'        => 'https://akademily.de/wp-content/uploads/2024/01/logo.svg',
			'contentUrl' => 'https://akademily.de/wp-content/uploads/2024/01/logo.svg',
			'caption'    => 'Akademily',
		];
		return $data;
	}

	// Разрешает добавлять svg
	public function svgUploadAllow($mimes)
	{
		$mimes['svg'] = 'image/svg+xml';
		return $mimes;
	}
	# Исправление MIME типа для SVG файлов.
	function fix_svg_mime_type($data, $file, $filename, $mimes, $real_mime = '')
	{

		// WP 5.1 +
		if (version_compare($GLOBALS['wp_version'], '5.1.0', '>=')) {
			$dosvg = in_array($real_mime, ['image/svg', 'image/svg+xml']);
		} else {
			$dosvg = ('.svg' === strtolower(substr($filename, -4)));
		}

		// mime тип был обнулен, поправим его
		// а также проверим право пользователя
		if ($dosvg) {

			// разрешим
			if (current_user_can('manage_options')) {

				$data['ext']  = 'svg';
				$data['type'] = 'image/svg+xml';
			}
			// запретим
			else {
				$data['ext']  = false;
				$data['type'] = false;
			}
		}

		return $data;
	}
























	public function themeScriptsAndStyles()
	{
		// wp_enqueue_script('bootstrap', DE_URI . '/assets/js/bootstrap.bundle.min.js', [], '1.7', true);
		// wp_enqueue_script('swiper', DE_URI . '/assets/js/swiper-bundle.min.js', [], '1.7', true);
		// wp_enqueue_script('main', DE_URI . '/assets/js/main.js', [], '1.7', true);

		$version = filemtime(get_template_directory() . '/resources/js/app.min.js');
		wp_enqueue_script('new', DE_URI . '/resources/js/app.min.js', [], $version, true);

		// wp_enqueue_style('bootstrap', DE_URI . '/assets/css/bootstrap.min.css', [], '1.7');
		// wp_enqueue_style('swiper', DE_URI . '/assets/css/swiper.min.css', [], '1.7');
		// wp_enqueue_style('main', DE_URI . '/style.css', [], '1.7');

		$version = filemtime(get_template_directory() . '/resources/css/app.min.css');
		wp_enqueue_style('new', DE_URI . '/resources/css/app.min.css', [], $version);
	}

	public function removeCode()
	{
		wp_dequeue_style('wp-block-library');
	}

	// Add class menu items
	public function addClassMenuItems($classes, $item, $args)
	{
		if (isset($args->add_li_class)) {
			$classes[] = $args->add_li_class;
		}
		return $classes;
	}


	public function settingsAdminWP()
	{
		register_nav_menu('top-menu', 'Top menu');
		register_nav_menu('mobile-menu', 'Mobile menu');
		register_nav_menu('side-menu', 'Side menu');
		register_nav_menu('bottom-menu', 'Bottom menu');
		register_nav_menu('footer-menu', 'Footer menu');

		add_theme_support('post-thumbnails', ['post']);
	}

	public function locale(): string
	{
		return 'de-DE';
	}

	public function managerStatsNotice()
	{
		if ($_SERVER['REQUEST_URI'] !== '/wp-admin/edit.php?post_type=requests') {
			return;
		}

		global $wpdb;

		$data = $wpdb->get_results("SELECT DISTINCT meta_value FROM {$wpdb->postmeta} WHERE meta_key = '_manager'");
?>
		<div class="notice notice-success">
			<h3>Количество заявок у менеджеров</h3>
			<div class="flex-column">
				<?php
				foreach ($data as $item) {
					$result = $wpdb->get_results("
                        SELECT p.ID FROM {$wpdb->posts} AS p
                        INNER JOIN {$wpdb->postmeta} AS pm
                            ON p.ID = pm.post_id AND pm.meta_value = '{$item->meta_value}' AND pm.meta_key = '_manager'
                        WHERE p.post_status = 'publish'
                    ");
				?>
					<a class="button" href="/wp-admin/edit.php?s&post_status=all&post_type=requests&action=-1&m=0&manager=<?= $item->meta_value; ?>&filter_action=Фильтр&paged=1&action2=-1">
						<span><?= sprintf('%s - %d', $this->managers[$item->meta_value], count($result)); ?></span>
					</a>
				<?php
				}
				?>
			</div>
			<br />
		</div>
	<?php
	}

	public function requestsCustomFilter($postType)
	{
	?>
		<select name="manager">
			<?php foreach ($this->managers as $key => $value) { ?>
				<option value="<?= $key; ?>" <?= selected($key, @$_GET['manager'], 0); ?>>
					<?= $value; ?>
				</option>
			<?php } ?>
		</select>
<?php
	}

	public function handlerFilter($query)
	{
		$cs = function_exists('get_current_screen') ? get_current_screen() : null;

		if (!is_admin() || empty($cs->post_type) || $cs->post_type != 'requests' || $cs->id != 'edit-requests') {
			return;
		}

		if (!empty($_GET['manager'])) {
			$selectedId = $_GET['manager'];
			$query->set('meta_query', [
				[
					'key' => '_manager',
					'value' => $selectedId,
					'type' => 'numeric',
				]
			]);
		}
	}

	public function addCustomColumn($columns)
	{
		$myColumns['manager'] = 'Менеджер';

		return array_slice($columns, 0, 2) + $myColumns + $columns;
	}

	public function addHandlerCustomColumn($columnName, $postId)
	{
		if ($columnName === 'manager') {
			if (get_post_meta($postId, '_manager', true)) {
				echo $this->managers[get_post_meta($postId, '_manager', true)];
			} else {
				echo '--';
			}
		}

		return $columnName;
	}

	//     0 => 'Нет менеджера',
	//     1 => 'Настя - Erika',
	//     2 => 'Саша - Sandra',
	//     3 => 'Оля - Helga',
	//     4 => 'Лиза - Luisa',
	//     5 => 'Даша - Rebecca',

	// Rebecca
	// Mein persönliches WhatsApp:  +49 1577 614 17 06
	// Mein persönliches Skype:          live:.cid.6464445003f78477

	// Sandra 
	// Mein persönliches WhatsApp: +49 1577 614 17 04 
	// Mein persönliches Skype:          live:.cid.378275e05e7902e0

	// Helga
	// Mein persönliches WhatsApp:  +49 1577 65394 20
	// Mein persönliches Skype:          live:.cid.6571d4a7f9dbc179


	// Mein persönliches WhatsApp:  +49 1577 653 67 49 
	// Mein persönliches Skype:          live:lazarevich2001

	// Erika
	// Mein persönliches WhatsApp:  +49 15777 778 753
	// Mein persönliches Skype:         live:.cid.ad237ccbf347238


	public static function managers($type = false): string
	{
		$dd = getdate();
		$name = '';

		if ($dd['wday'] == 1 && $dd['hours'] >= 8 && $dd['hours'] <= 17) {
			$name = ($type) ? '4915777778753' : 'live:.cid.ad237ccbf347238'; // Erika
		} elseif ($dd['wday'] == 1 && $dd['hours'] >= 18 && $dd['hours'] <= 19) {
			$name = ($type) ? '493022389844' : 'live:.cid.6571d4a7f9dbc179'; // Helga
		} elseif ($dd['wday'] == 1 && $dd['hours'] >= 20 && $dd['hours'] <= 23) {
			$name = ($type) ? '4915776141704' : 'live:.cid.378275e05e7902e0'; // Sandra
		} elseif ($dd['wday'] == 2 && $dd['hours'] >= 7 && $dd['hours'] <= 17) {
			$name = ($type) ? '4915777778753' : 'live:.cid.ad237ccbf347238'; // Erika
		} elseif ($dd['wday'] == 2 && $dd['hours'] >= 18 && $dd['hours'] <= 19) {
			$name = ($type) ? '493022389844' : 'live:.cid.6571d4a7f9dbc179'; // Helga
		} elseif ($dd['wday'] == 2 && $dd['hours'] >= 20 && $dd['hours'] <= 23) {
			$name = ($type) ? '4915776141706' : 'live:.cid.6464445003f78477'; // Rebecca
		} elseif ($dd['wday'] == 3 && $dd['hours'] >= 7 && $dd['hours'] <= 8) {
			$name = ($type) ? '4915776536749' : ''; // Erika
		} elseif ($dd['wday'] == 3 && $dd['hours'] > 8 && $dd['hours'] <= 17) {
			$name = ($type) ? '4915776141704' : 'live:.cid.378275e05e7902e0'; // Sandra
		} elseif ($dd['wday'] == 3 && $dd['hours'] > 17 && $dd['hours'] <= 23) {
			$name = ($type) ? '493022389844' : 'live:.cid.6571d4a7f9dbc179'; // Helga
		} elseif ($dd['wday'] == 4 && $dd['hours'] >= 7 && $dd['hours'] <= 8) {
			$name = ($type) ? '4915776536749' : ''; // Erika
		} elseif ($dd['wday'] == 4 && $dd['hours'] > 8 && $dd['hours'] <= 17) {
			$name = ($type) ? '4915776141704' : 'live:.cid.378275e05e7902e0'; // Sandra
		} elseif ($dd['wday'] == 4 && $dd['hours'] > 17 && $dd['hours'] <= 23) {
			$name = ($type) ? '493022389844' : 'live:.cid.6571d4a7f9dbc179'; // Helga
		} elseif ($dd['wday'] == 5 && $dd['hours'] >= 7 && $dd['hours'] <= 8) {
			$name = ($type) ? '4915776536749' : ''; // Erika
		} elseif ($dd['wday'] == 5 && $dd['hours'] > 8 && $dd['hours'] <= 17) {
			$name = ($type) ? '4915777778753' : 'live:.cid.89c747bb56a5a665'; // Nadine
		} elseif ($dd['wday'] == 5 && $dd['hours'] > 17 && $dd['hours'] <= 23) {
			$name = ($type) ? '4915776141706' : 'live:.cid.6464445003f78477'; // Rebecca
		} elseif ($dd['wday'] == 6 && $dd['hours'] >= 7 && $dd['hours'] <= 8) {
			$name = ($type) ? '4915777778753' : 'live:.cid.89c747bb56a5a665'; // Nadine
		} elseif ($dd['wday'] == 6 && $dd['hours'] > 8 && $dd['hours'] <= 17) {
			$name = ($type) ? '4915776141706' : 'live:.cid.6464445003f78477'; // Rebecca
		} elseif ($dd['wday'] == 6 && $dd['hours'] > 17 && $dd['hours'] <= 23) {
			$name = ($type) ? '4915776141704' : 'live:.cid.378275e05e7902e0'; // Sandra
		}

		return $name;
	}

	public function set_tocken()
	{
		$token = bin2hex(random_bytes(32));
		setcookie('csrf_token', $token, time() + 3600, '/');
	}

	public static function get_utm()
	{
		$out = array();
		$keys = array('utm_source', 'utm_medium', 'utm_campaign', 'utm_content', 'utm_term');
		foreach ($keys as $row) {
			if (!empty($_GET[$row])) {
				$value = strval($_GET[$row]);
				$value = stripslashes($value);
				$value = htmlspecialchars_decode($value, ENT_QUOTES);
				$value = strip_tags($value);
				$value = htmlspecialchars($value, ENT_QUOTES);
				$out[] = '<input type="hidden" name="' . $row . '" value="' . $value . '">';
			}
		}
		return implode("\r\n", $out);
	}

	// public static function geo()
	// {
	//   // URL параметры
	//   $session = [
	//     "first" => ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . (($_SERVER['REQUEST_URI'] == '/wp-content/themes/akademilyassets/js/feedback.js?ver=1') ? '/' : $_SERVER['REQUEST_URI']),
	//     "isMobile" => wp_is_mobile() ? 'true' : 'false',
	//     "refer" => $_SERVER["HTTP_REFERER"],
	//     "dich" => $_SERVER['REQUEST_URI'],
	//   ];
	//   if (!isset($_COOKIE['session'])) {
	//     setcookie('session', json_encode($session), time() + 60 * 60 * 24, '/');
	//   };

	//   // GET параметры
	//   if (!isset($_COOKIE['getParam'])) {
	//     setcookie('getParam', json_encode($_GET), time() + 60 * 60 * 24, '/');
	//   }

	//   // GEO параметры
	//   if (!isset($_COOKIE['geo'])) {
	//     $client_ip = $_SERVER['REMOTE_ADDR'];
	//     // проверка для локалки
	//     // $client_ip = '84.244.8.172';

	//     $api = 'https://json.geoiplookup.io/' . $client_ip;

	//     $ch = curl_init();
	//     curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	//     curl_setopt($ch, CURLOPT_URL, $api);

	//     $response = curl_exec($ch);
	//     curl_close($ch);

	//     $response = json_encode(json_decode($response));
	//     setcookie('geo', $response, time() + 60 * 60 * 24, '/');
	//     return $response;
	//   }
	// }
}

new General();
