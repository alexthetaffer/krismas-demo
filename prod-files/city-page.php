<?php



/**

 * Template Name: Города

 *

 * @package WordPress

 * @subpackage Twenty_Fourteen

 * @since Twenty Fourteen 1.0

 */



require_once(dirname(__FILE__) . '/templates/' . 'why.php');

require_once(dirname(__FILE__) . '/templates/' . 'video.php');

require_once(dirname(__FILE__) . '/templates/' . 'suppliers.php');

require_once(dirname(__FILE__) . '/templates/' . 'stock.php');

require_once(dirname(__FILE__) . '/templates/' . 'slider.php');

require_once(dirname(__FILE__) . '/templates/' . 'promo-block.php');

require_once(dirname(__FILE__) . '/templates/' . 'lights-slider.php');

require_once(dirname(__FILE__) . '/templates/' . 'our-advantages.php');

require_once(dirname(__FILE__) . '/templates/' . 'installment.php');

require_once(dirname(__FILE__) . '/templates/' . 'info.php');

require_once(dirname(__FILE__) . '/templates/' . 'gallery-works.php');

require_once(dirname(__FILE__) . '/templates/' . 'free-call.php');

require_once(dirname(__FILE__) . '/templates/' . 'clients.php');

require_once(dirname(__FILE__) . '/templates/' . 'cards.php');

require_once(dirname(__FILE__) . '/templates/' . 'calculator.php');

require_once(dirname(__FILE__) . '/templates/' . 'advertising.php');

require_once(dirname(__FILE__) . '/templates/' . 'additional-services.php');

require_once(dirname(__FILE__) . '/templates/' . 'ceiling-types.php');

require_once(dirname(__FILE__) . '/templates/' . 'faq.php');



get_header(); ?>

<!--Главный заголовок-->

<? render_advertising(); ?>

<? render_calculator(); ?>

<div class="bg-back-wrap">

	<div class="bg-main">

		<h1 class="title-block"><? echo get_the_title(); ?></h1>

	</div>

	<div class="bg-content-wrap">

		<div class="bg-content">

			<? echo apply_filters('the_content', $post->post_content); ?>

		</div>

		<div class="bg-pluses">

			<h6>Почему с нами так удобно работать:</h6>

			<div class="pluses-main-block-flex">

				<div class="pluses-min-elem">

					<img class="alignleft size-full wp-image-3053" src="https://krismas.by/wp-content/uploads/2019/06/1.png" alt="1" width="83" height="83" />Используем только качественные материалы. В наличии все сертификаты.

				</div>

				<div class="pluses-min-elem">

					<img class="alignleft size-full wp-image-3066" src="https://krismas.by/wp-content/uploads/2019/06/2.png" alt="2" width="83" height="83" />Все наши монтажники - это профессионалы. Которые имеют опыт работы

					не менее 2-х лет

				</div>

				<div class="pluses-min-elem">

					<img class="alignleft size-full wp-image-3061" src="https://krismas.by/wp-content/uploads/2019/06/3.png" alt="3" width="83" height="83" />Мы заботимся о безопасности. При монтаже газовый баллон выносится в

					соседнюю комнату, что позволяет не нагревать его.

				</div>

				<div class="pluses-min-elem">

					<img class="alignleft size-full wp-image-3062" src="https://krismas.by/wp-content/uploads/2019/06/4.png" alt="4" width="83" height="83" />Мы заключаем официальный договор и всегда выполняем договорные

					обязательства.

				</div>

				<div class="pluses-min-elem">

					<img class="alignleft size-full wp-image-3063" src="https://krismas.by/wp-content/uploads/2019/06/5.png" alt="5" width="83" height="83" />Установка натяжных потолков осуществляется через 2-3 дня после

					подписания договора или по Вашему звонку в удобный для Вас день.

				</div>

				<div class="pluses-min-elem">

					<img class="alignleft size-full wp-image-3064" src="https://krismas.by/wp-content/uploads/2019/06/6.png" alt="6" width="83" height="83" />Действуют акции, скидки и подарки для натяжных потолков, которые

					приятно удивят.

				</div>

				<div class="pluses-min-elem">

					<img class="alignleft size-full wp-image-3065" src="https://krismas.by/wp-content/uploads/2019/06/7.png" alt="7" width="83" height="83" />Большинство клиентов обращаются к нам повторно или по рекомендациям

					знакомых.

				</div>

			</div>

		</div>

	</div>

	<div class="blur"></div>

</div>

<? render_slider(); ?>

<? render_promo_block(); ?>

<? render_lights_slider(); ?>

<? render_gallery_works(); ?>

<? render_our_advantages(); ?>

<? render_stock(); ?>

<? render_installment(); ?>

<? render_cards(); ?>

<? render_free_call(); ?>

<? render_suppliers(); ?>

<? render_video(); ?>

<? render_clients(); ?>

<? render_info(); ?>





<?php get_footer() ?>