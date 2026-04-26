<?php
if (! defined('ABSPATH')) {
	exit;
}
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="site-header">
	<div class="site-header__inner container">
		<div class="site-branding">
			<a href="<?php echo esc_url(home_url('/')); ?>" class="site-branding__link" rel="home">
				<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/brand-mark.png'); ?>" alt="<?php bloginfo('name'); ?>" class="site-branding__logo">
			</a>
			<div class="site-branding__text">
				<a href="<?php echo esc_url(home_url('/')); ?>" class="site-title"><?php bloginfo('name'); ?></a>
				<p class="site-tagline"><?php bloginfo('description'); ?></p>
			</div>
		</div>

		<nav class="main-nav" aria-label="<?php echo esc_attr(junior_chic_is_arabic_locale() ? 'التنقل الرئيسي' : __('Primary navigation', 'junior-chic')); ?>">
			<?php
			wp_nav_menu(array(
				'theme_location' => 'primary',
				'container'      => false,
				'menu_class'     => 'main-nav__menu',
				'fallback_cb'    => false,
			));
			?>
		</nav>

		<div class="header-actions">
			<a class="header-pill" href="<?php echo esc_url(home_url('/shop/')); ?>"><?php echo esc_html(junior_chic_is_arabic_locale() ? 'ابدئي التسوق الآن' : __('Shop Now', 'junior-chic')); ?></a>
			<?php if (function_exists('WC')) : ?>
				<a class="header-cart" href="<?php echo esc_url(wc_get_cart_url()); ?>"><?php echo esc_html(junior_chic_is_arabic_locale() ? 'سلة الطلبات' : __('Cart', 'junior-chic')); ?></a>
			<?php endif; ?>
		</div>
	</div>
</header>
<main id="primary" class="site-main">
