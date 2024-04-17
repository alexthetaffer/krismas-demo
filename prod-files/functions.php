<?php



/**



 * Setup theme functions for Minamaze.



 *



 * @package ThinkUpThemes



 */



add_filter('get_shortlink', function ($shortlink) {

	return $shortlink;

});



// Setup content width 



if (!isset($content_width))



	$content_width = 960;







/* ----------------------------------------------------------------------------------



	Add Theme Options Panel & Assign Variable Values



---------------------------------------------------------------------------------- */







// Add Redux Framework - Credits attributable to http://reduxframework.com/



require_once (get_template_directory() . '/admin/main/framework.php');







// Add Theme Options Features.



require_once (get_template_directory() . '/admin/main/options/00.theme-setup.php');



require_once (get_template_directory() . '/admin/main/options/00.variables.php');



require_once (get_template_directory() . '/admin/main/options/01.general-settings.php');



require_once (get_template_directory() . '/admin/main/options/02.homepage.php');



require_once (get_template_directory() . '/admin/main/options/03.header.php');



require_once (get_template_directory() . '/admin/main/options/04.footer.php');



require_once (get_template_directory() . '/admin/main/options/05.blog.php');



require_once (get_template_directory() . '/admin/main/options/08.special-pages.php');







// Add widget features.



//	include_once( get_template_directory() . '/lib/widgets/categories.php' ); 



//	include_once( get_template_directory() . '/lib/widgets/popularposts.php' ); 



//	include_once( get_template_directory() . '/lib/widgets/recentposts.php' ); 



//	include_once( get_template_directory() . '/lib/widgets/searchfield.php' ); 



//	include_once( get_template_directory() . '/lib/widgets/tagscloud.php' );







/* ----------------------------------------------------------------------------------



	Assign Theme Specific Functions



---------------------------------------------------------------------------------- */







/* Setup theme features, register menus and scripts.  */



if (!function_exists('thinkup_themesetup')) {







	function thinkup_themesetup()
	{







		/* Load required files */



		require_once (get_template_directory() . '/lib/functions/extras.php');



		require_once (get_template_directory() . '/lib/functions/template-tags.php');







		/* Make theme translation ready. */



		load_theme_textdomain('lan-thinkupthemes', get_template_directory() . '/languages');







		/* Add default theme functions. */



		add_theme_support('automatic-feed-links');



		add_theme_support('post-thumbnails');



		add_theme_support('custom-background');







		// Add support for custom header



		$args = apply_filters('custom-header', array('height' => 200, 'width' => 1600));



		add_theme_support('custom-header', $args);







		/* Register theme menu's. */



		register_nav_menus(array('pre_header_menu' => 'Pre Header Menu', ));



		register_nav_menus(array('header_menu' => 'Primary Header Menu', ));



		register_nav_menus(array('sub_footer_menu' => 'Footer Menu', ));

	}

}



add_action('after_setup_theme', 'thinkup_themesetup');











/* ----------------------------------------------------------------------------------



	Register Front-End Styles And Scripts



---------------------------------------------------------------------------------- */







function thinkup_frontscripts()
{







	/* Add jQuery library. */



	wp_enqueue_script('jquery');



	wp_register_style('Slick CSS', 'http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');

	wp_enqueue_style('Slick CSS');

	wp_register_script('Slick', 'http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', null, null, true);

	wp_enqueue_script('Slick');

	// Enqueue Magnific Popup script & styles
	wp_enqueue_style('magnific-popup', 'https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css', array(), '1.1.0');

	wp_enqueue_script('magnific-popup', 'https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js', array('jquery'), '1.1.0', true);

	// Enqueue Swiper script & styles
	wp_enqueue_style('swiper', 'https://unpkg.com/swiper/swiper-bundle.min.css', array(), null);
	wp_enqueue_script('swiper', 'https://unpkg.com/swiper/swiper-bundle.min.js', array(), null, true);





	/* Register theme stylesheets. */



	wp_register_style('style', get_stylesheet_uri(), '', '1.1.4');

	wp_register_style('templates', get_template_directory_uri(), '/styles/style-templates.css', '1.0');



	wp_register_style('shortcodes', get_template_directory_uri() . '/styles/style-shortcodes.css', '', '1.1');



	wp_register_style('responsive', get_template_directory_uri() . '/styles/style-responsive.css', '', '1.1');



	wp_register_style('sidebarleft', get_template_directory_uri() . '/styles/layouts/thinkup-left-sidebar.css', '', '1.1');



	wp_register_style('sidebarright', get_template_directory_uri() . '/styles/layouts/thinkup-right-sidebar.css', '', '1.1');



	wp_register_style('bootstrap', get_template_directory_uri() . '/lib/extentions/bootstrap/css/bootstrap.min.css', '', '2.3.2');



	wp_register_style('prettyPhoto', get_template_directory_uri() . '/lib/extentions/prettyPhoto/css/prettyPhoto.css', '', '3.1.5');







	/* Register Font Packages. */



	wp_register_style('font-awesome-min', get_template_directory_uri() . '/lib/extentions/font-awesome/css/font-awesome.min.css', '', '3.2.1');



	wp_register_style('font-awesome-cdn', get_template_directory_uri() . '/lib/extentions/font-awesome-4.2.0/css/font-awesome.min.css', '', '4.2.0');



	wp_register_style('dashicons-css', get_template_directory_uri() . '/lib/extentions/dashicons/css/dashicons.css', '', '2.0');







	/* Register theme scripts. */



	wp_register_script('frontend', get_template_directory_uri() . '/lib/scripts/main-frontend.js', array('jquery'), '1.1', true);



	wp_register_script('modernizr', get_template_directory_uri() . '/lib/scripts/modernizr.js', array('jquery'), '', true);



	wp_register_script('retina', get_template_directory_uri() . '/lib/scripts/retina.js', array('jquery'), '', true);



	wp_register_script('bootstrap', get_template_directory_uri() . '/lib/extentions/bootstrap/js/bootstrap.js', array('jquery'), '2.3.2', true);



	wp_register_script('prettyPhoto', (get_template_directory_uri() . "/lib/extentions/prettyPhoto/jquery.prettyPhoto.js"), array('jquery'), '3.1.5', true);







	/* Add Font Packages */



	wp_enqueue_style('font-awesome-min');



	wp_enqueue_style('font-awesome-cdn');



	wp_enqueue_style('dashicons-css');







	/* Add theme stylesheets */



	wp_enqueue_style('bootstrap');



	wp_enqueue_style('prettyPhoto');





	wp_enqueue_style('shortcodes');







	/* Add theme scripts */



	wp_enqueue_script('prettyPhoto');



	wp_enqueue_script('frontend');



	wp_enqueue_script('bootstrap');



	wp_enqueue_script('modernizr');







	if (is_singular() && comments_open() && get_option('thread_comments')) {



		wp_enqueue_script('comment-reply');

	}







	// Add ThinkUpSlider scripts



	wp_enqueue_script('thinkupslider', get_template_directory_uri() . '/lib/scripts/plugins/ResponsiveSlides/responsiveslides.min.js', array('jquery'), '1.54');



	wp_enqueue_script('thinkupslider-call', get_template_directory_uri() . '/lib/scripts/plugins/ResponsiveSlides/responsiveslides-call.js', array('jquery'));







	if (get_page_template_slug() === 'main.php' || get_page_template_slug() === 'city-page.php' || get_page_template_slug() === 'manufacturer-page.php' || get_page_template_slug() === 'calculator-page.php' || get_page_template_slug() === 'standard-solutions.php' || get_page_template_slug() === 'calculator.php') {

		wp_register_style('new-css', get_template_directory_uri() . '/new_style.css', '', 1.2);

		wp_enqueue_style('new-css');

		wp_register_script('calculator-js', get_template_directory_uri() . '/calculator.js');

		wp_enqueue_script('calculator-js');

	} else {

		wp_enqueue_style('style');

	}



	wp_enqueue_script('popup', get_template_directory_uri() . '/js/popup.js', array('jquery'), true);

	// Scripts for custom templates
	wp_enqueue_script('templates', get_template_directory_uri() . '/js/templates.js', array(), '1.0', true);



}





add_action('wp_enqueue_scripts', 'thinkup_frontscripts', 10);





wp_enqueue_script('showImgPrice', get_template_directory_uri() . '/lib/scripts/plugins/ResponsiveSlides/showImgPrice.js', array('jquery'));







/* ----------------------------------------------------------------------------------



	Register Back-End Styles And Scripts



---------------------------------------------------------------------------------- */







function thinkup_adminscripts()
{







	/* Register theme stylesheets. */



	wp_register_style('backend', get_template_directory_uri() . '/styles/backend/style-backend.css', '', 1.1);







	/* Register theme scripts. */



	wp_register_script('backend', get_template_directory_uri() . '/lib/scripts/main-backend.js', array('jquery'), '1.1');







	/* Add theme stylesheets */



	wp_enqueue_style('backend');







	/* Add theme scripts */



	wp_enqueue_script('backend');

}



add_action('admin_enqueue_scripts', 'thinkup_adminscripts');











//----------------------------------------------------------------------------------



//	Register Shortcodes Styles And Scripts



//----------------------------------------------------------------------------------







function thinkup_shortcodescripts()
{







	// Register shortcode scripts



	wp_register_script('thinkupslider', get_template_directory_uri() . '/lib/scripts/plugins/ResponsiveSlides/responsiveslides.min.js', array('jquery'), '1.55', true);



	// 	wp_register_script( 'thinkupslider-call', get_template_directory_uri() . '/lib/scripts/plugins/ResponsiveSlides/responsiveslides-call.js', array( 'jquery' ), '', false );







	// Add shortcode scripts



	wp_enqueue_script('thinkupslider');



	wp_enqueue_script('thinkupslider-call');

}



add_action('wp_enqueue_scripts', 'thinkup_shortcodescripts', 10);











/* ----------------------------------------------------------------------------------



	Register Theme Widgets



---------------------------------------------------------------------------------- */







function thinkup_widgets_init()
{



	register_sidebar(
		array(



			'name' => 'Sidebar',



			'id' => 'sidebar-1',



			'before_widget' => '<aside class="widget %2$s">',



			'after_widget' => '</aside>',



			'before_title' => '<h3 class="widget-title">',



			'after_title' => '</h3>',



		)
	);







	register_sidebar(
		array(



			'name' => 'Footer Widget Area 1',



			'id' => 'footer-w1',



			'before_widget' => '<aside class="widget %2$s">',



			'after_widget' => '</aside>',



			'before_title' => '<h3 class="footer-widget-title"><span>',



			'after_title' => '</span></h3>',



		)
	);







	register_sidebar(
		array(



			'name' => 'Footer Widget Area 2',



			'id' => 'footer-w2',



			'before_widget' => '<aside class="widget %2$s">',



			'after_widget' => '</aside>',



			'before_title' => '<h3 class="footer-widget-title"><span>',



			'after_title' => '</span></h3>',



		)
	);







	register_sidebar(
		array(



			'name' => 'Footer Widget Area 3',



			'id' => 'footer-w3',



			'before_widget' => '<aside class="widget %2$s">',



			'after_widget' => '</aside>',



			'before_title' => '<h3 class="footer-widget-title"><span>',



			'after_title' => '</span></h3>',



		)
	);







	register_sidebar(
		array(



			'name' => 'Footer Widget Area 4',



			'id' => 'footer-w4',



			'before_widget' => '<aside class="widget %2$s">',



			'after_widget' => '</aside>',



			'before_title' => '<h3 class="footer-widget-title"><span>',



			'after_title' => '</span></h3>',



		)
	);







	register_sidebar(
		array(



			'name' => 'Footer Widget Area 5',



			'id' => 'footer-w5',



			'before_widget' => '<aside class="widget %2$s">',



			'after_widget' => '</aside>',



			'before_title' => '<h3 class="footer-widget-title"><span>',



			'after_title' => '</span></h3>',



		)
	);







	register_sidebar(
		array(



			'name' => 'Footer Widget Area 6',



			'id' => 'footer-w6',



			'before_widget' => '<aside class="widget %2$s">',



			'after_widget' => '</aside>',



			'before_title' => '<h3 class="footer-widget-title"><span>',



			'after_title' => '</span></h3>',



		)
	);

}



add_action('widgets_init', 'thinkup_widgets_init');



function statistic_init()
{

	?>

	<!-- Facebook Pixel Code -->

	<script>

		! function (f, b, e, v, n, t, s) {

			if (f.fbq) return;

			n = f.fbq = function () {

				n.callMethod ?

					n.callMethod.apply(n, arguments) : n.queue.push(arguments)

			};

			if (!f._fbq) f._fbq = n;

			n.push = n;

			n.loaded = !0;

			n.version = '2.0';

			n.queue = [];

			t = b.createElement(e);

			t.async = !0;

			t.src = v;

			s = b.getElementsByTagName(e)[0];

			s.parentNode.insertBefore(t, s)

		}(window, document, 'script',

			'https://connect.facebook.net/en_US/fbevents.js');

		fbq('init', '577434100119443');

		fbq('track', 'PageView');

	</script>

	<noscript><img height="1" width="1" style="display:none"
			src="https://www.facebook.com/tr?id=577434100119443&ev=PageView&noscript=1" /></noscript>

	<!-- End Facebook Pixel Code -->

	<?php

}



add_action('wp_head', 'statistic_init');





function slick_testimonials()
{

	?>

	<script>

		jQuery(document).ready(function () {

			jQuery("#testimonials .testimonials__list").slick({

				infinite: true,

				autoplay: true,

				slidesToShow: 2,

				slidesToScroll: 1,

				dots: true,

				speed: 2000,

				responsive: [{

					breakpoint: 1024,

					settings: {

						slidesToShow: 2,

						slidesToScroll: 1,

						infinite: true,

						dots: true

					}

				},

				{

					breakpoint: 768,

					settings: {

						slidesToShow: 1,

						slidesToScroll: 1

					}

				}

				]

			});



			jQuery("#gallery-works").slick({

				infinite: true,

				autoplay: true,

				slidesToShow: 3,

				slidesToScroll: 1,

				dots: true,

				speed: 2000,

				responsive: [{

					breakpoint: 1024,

					settings: {

						slidesToShow: 3,

						slidesToScroll: 1,

						infinite: true,

						dots: true

					}

				},

				{

					breakpoint: 768,

					settings: {

						slidesToShow: 2,

						slidesToScroll: 1,

						infinite: true,

						dots: true

					}

				},

				{

					breakpoint: 568,

					settings: {

						slidesToShow: 1,

						slidesToScroll: 1,

						infinite: true,

						dots: true

					}

				}

				]

			});

		});

	</script>

<?

}



add_action("wp_footer", "slick_testimonials");





function javascript_tab()
{

	?>

	<script>

		jQuery(document).ready(function ($) {

			const tabNavs = document.querySelector("#krismas-celling-prices .krismas-celling-list-types > ul");

			const tabsContent = document.querySelectorAll("#krismas-celling-prices .krismas-celling-tab-content > .krismas-celling-tab-pane");



			if (!tabNavs || !tabsContent) return;



			tabNavs.addEventListener("click", ({

				target

			}) => {

				if (target.classList.contains("tab-nav")) {

					const selectedTabId = Number(target.getAttribute("data-tab"));

					const tabNavItems = tabNavs.querySelectorAll("li");



					tabsContent.forEach((item, idx) => {

						if (idx == selectedTabId) {

							item.classList.add("active");

							tabNavItems[idx].classList.add("active");

							// 							const sliderItemSlide = item.querySelector('.slides') 		

							// 							sliderItemSlide.slick('refresh')

							jQuery(item).find('.slides').slick('refresh');



						} else {

							item.classList.remove("active");

							tabNavItems[idx].classList.remove("active");

						}

					});

				}

			});



			tabNavs.querySelector("li").classList.add("active");

			tabsContent[0].classList.add("active");

		});

	</script>

<?

}



add_action('wp_footer', 'javascript_tab');





function slick_prices()
{

	?>

	<script>

		jQuery(document).ready(function () {

			jQuery('.krismas-celling-tab-content .slides').each(function () {

				jQuery(this).slick({

					slidesToShow: 1,

					slidesToScroll: 1,

					appendArrows: jQuery(this).parents('.krismas-celling-tab-pane').find('.krismas-celling-buttons'),

				});

				jQuery(this).on('afterChange', function (event, slick, currentSlide, nextSlide) {

					jQuery('.krismas-celling-counter').text(currentSlide + 1 + ' / ' + slick.slideCount);

				});

			});



			let style = "";



			jQuery('.krismas-celling-tab-content .slides .slick-track').each(function (_, idx) {

				if (idx == 0) {

					style = jQuery(this).attr('style');

				}

				if (idx > 0) {

					this.style = style;

				}

			})

		});

	</script>

<?

}



add_action("wp_footer", "slick_prices");



add_filter('upload_mimes', 'svg_upload_allow');



# Добавляет SVG в список разрешенных для загрузки файлов.

function svg_upload_allow($mimes)
{

	$mimes['svg'] = 'image/svg+xml';



	return $mimes;

}



add_filter('wp_check_filetype_and_ext', 'fix_svg_mime_type', 10, 5);



# Исправление MIME типа для SVG файлов.

function fix_svg_mime_type($data, $file, $filename, $mimes, $real_mime = '')
{



	// WP 5.1 +

	if (version_compare($GLOBALS['wp_version'], '5.1.0', '>='))

		$dosvg = in_array($real_mime, ['image/svg', 'image/svg+xml']);
	else

		$dosvg = ('.svg' === strtolower(substr($filename, -4)));



	// mime тип был обнулен, поправим его

	// а также проверим право пользователя

	if ($dosvg) {



		// разрешим

		if (current_user_can('manage_options')) {



			$data['ext'] = 'svg';

			$data['type'] = 'image/svg+xml';

		}

		// запретим
		else {

			$data['ext'] = $type_and_ext['type'] = false;

		}



	}



	return $data;

}

add_filter('wp_prepare_attachment_for_js', 'show_svg_in_media_library');



# Формирует данные для отображения SVG как изображения в медиабиблиотеке.

function show_svg_in_media_library($response)
{



	if ($response['mime'] === 'image/svg+xml') {



		// С выводом названия файла

		$response['image'] = [

			'src' => $response['url'],

		];

	}



	return $response;

}