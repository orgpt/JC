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

		<div class="header-actions">
			<button type="button" class="mobile-menu-toggle" aria-expanded="false" aria-controls="site-mobile-nav">
				<span class="mobile-menu-toggle__icon" aria-hidden="true">
					<span></span>
					<span></span>
					<span></span>
				</span>
				<span class="screen-reader-text"><?php echo esc_html(junior_chic_is_arabic_locale() ? 'فتح القائمة' : __('Open menu', 'junior-chic')); ?></span>
			</button>
			<a class="header-pill" href="<?php echo esc_url(home_url('/shop/')); ?>"><?php echo esc_html(junior_chic_is_arabic_locale() ? 'ابدئي التسوق الآن' : __('Shop Now', 'junior-chic')); ?></a>
			<?php if (function_exists('WC')) : ?>
				<a class="header-cart" href="<?php echo esc_url(wc_get_cart_url()); ?>">
					<span class="header-cart__icon" aria-hidden="true">
						<svg viewBox="0 0 24 24" focusable="false">
							<path d="M8 19a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3Zm9 0a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3ZM5.2 5l1.1 5.2A2 2 0 0 0 8.3 12h8.5a2 2 0 0 0 2-1.6l1.1-5.4H7.1L6.6 2.7A1 1 0 0 0 5.6 2H3v2h1.8L7 14.1A2 2 0 0 0 9 16h9v-2H9l-.2-1h8a4 4 0 0 0 3.9-3.2L22 3H5.2Z"></path>
						</svg>
					</span>
					<span class="header-cart__label"><?php echo esc_html(junior_chic_is_arabic_locale() ? 'سلة الطلبات' : __('Cart', 'junior-chic')); ?></span>
				</a>
			<?php endif; ?>
		</div>

		<nav id="site-mobile-nav" class="main-nav" aria-label="<?php echo esc_attr(junior_chic_is_arabic_locale() ? 'التنقل الرئيسي' : __('Primary navigation', 'junior-chic')); ?>">
			<?php
			wp_nav_menu(array(
				'theme_location' => 'primary',
				'container'      => false,
				'menu_class'     => 'main-nav__menu',
				'fallback_cb'    => false,
			));
			?>
		</nav>
	</div>
</header>
<main id="primary" class="site-main">
