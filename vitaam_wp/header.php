<!doctype html>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php wp_title('«', true, 'right'); ?> <?php bloginfo('name'); ?></title>
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <!-- Шапка сайта -->
    <header class="header">
        <div class="header__logo">
            <a href="index.html"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="Vitaam"></a>
            <p>«Быть в форме вкусно!»</p>
        </div>
        <div class="header__social">
            <a href="#"><img src="<?php bloginfo('template_url'); ?>/images/vk_h.png" alt="VK"></a>
            <a href="#"><img src="<?php bloginfo('template_url'); ?>/images/fb_h.png" alt="FB"></a>
            <a href="#"><img src="<?php bloginfo('template_url'); ?>/images/insta_h.png" alt="INSTAGRAM"></a>
        </div>
        <div class="header__text-block">
            <div class="text-block__phone">
                <p class="header__text"><a href="mail:hello@vitaam.ru">hello@vitaam.ru</a></p>
                <p class="header__text center-phone "><a href="tel:8 800 200 25 25">8 800 200 25 25</a></p>
                <p class="header__text"><a href="tel:+7 495 128 27 85">+7 495 128 27 85</a></p>
            </div>
            <div class="text-block__time">
                <p >с 900 до 1800<br>
                    выходной: сб, вс</p>
            </div>
        </div>
        <div class="header__bascet"><a href="#"></a></div>
    </header>
    <nav class="nav">
	        <? wp_nav_menu(array('menu' => 'top-menu', 'menu_class' => 'nav__block')); ?>
    </nav>
    <nav class="mobile-menu">
        <input type="checkbox" id="checkbox" class="mobile-menu__checkbox">
        <label for="checkbox" class="mobile-menu__btn"><div class="mobile-menu__icon"></div></label>
        <div class="mobile-menu__container">
            <? wp_nav_menu(array('menu' => 'gam-menu', 'menu_class' => 'mobile-menu__list')); ?>
        </div>
    </nav>