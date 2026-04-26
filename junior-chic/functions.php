<?php
if (! defined('ABSPATH')) {
	exit;
}

define('JUNIOR_CHIC_VERSION', '1.0.0');

function junior_chic_is_arabic_locale() {
	$locale = determine_locale();
	return strpos($locale, 'ar') === 0;
}

function junior_chic_force_frontend_arabic_locale($locale) {
	if (is_admin()) {
		return $locale;
	}

	$site_language = get_option('WPLANG');

	if (empty($site_language) || $site_language === 'en_US') {
		return 'ar';
	}

	return $locale;
}
add_filter('locale', 'junior_chic_force_frontend_arabic_locale', 1);
add_filter('determine_locale', 'junior_chic_force_frontend_arabic_locale', 1);

function junior_chic_setup() {
	load_theme_textdomain('junior-chic', get_template_directory() . '/languages');

	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
	add_theme_support('custom-logo', array(
		'height'      => 160,
		'width'       => 160,
		'flex-width'  => true,
		'flex-height' => true,
	));
	add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script'));
	add_theme_support('woocommerce');
	add_theme_support('wc-product-gallery-zoom');
	add_theme_support('wc-product-gallery-lightbox');
	add_theme_support('wc-product-gallery-slider');
	add_theme_support('custom-spacing');
	add_theme_support('editor-styles');
	add_theme_support('responsive-embeds');

	register_nav_menus(array(
		'primary' => __('Primary Menu', 'junior-chic'),
		'footer'  => __('Footer Menu', 'junior-chic'),
	));
}
add_action('after_setup_theme', 'junior_chic_setup');

function junior_chic_woocommerce_layout_cleanup() {
	remove_action('woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
	remove_action('woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);
}
add_action('after_setup_theme', 'junior_chic_woocommerce_layout_cleanup');

function junior_chic_enqueue_assets() {
	wp_enqueue_style('junior-chic-fonts', 'https://fonts.googleapis.com/css2?family=Baloo+Bhaijaan+2:wght@600;700;800&family=Cairo:wght@400;500;600;700;800&display=swap', array(), null);
	wp_enqueue_style('junior-chic-style', get_stylesheet_uri(), array(), JUNIOR_CHIC_VERSION);
	wp_enqueue_style('junior-chic-theme', get_template_directory_uri() . '/assets/css/theme.css', array('junior-chic-style', 'junior-chic-fonts'), JUNIOR_CHIC_VERSION);
	wp_enqueue_script('junior-chic-theme', get_template_directory_uri() . '/assets/js/theme.js', array(), JUNIOR_CHIC_VERSION, true);

	wp_localize_script('junior-chic-theme', 'juniorChicData', array(
		'quickViewLabel' => junior_chic_is_arabic_locale() ? 'عرض المنتج' : __('Quick View', 'junior-chic'),
		'closeLabel'     => junior_chic_is_arabic_locale() ? 'إغلاق' : __('Close', 'junior-chic'),
	));
}
add_action('wp_enqueue_scripts', 'junior_chic_enqueue_assets');

function junior_chic_widgets_init() {
	register_sidebar(array(
		'name'          => __('Shop Sidebar', 'junior-chic'),
		'id'            => 'shop-sidebar',
		'description'   => __('Widgets shown on shop archives.', 'junior-chic'),
		'before_widget' => '<section class="widget shop-widget">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	));
}
add_action('widgets_init', 'junior_chic_widgets_init');

function junior_chic_body_classes($classes) {
	$classes[] = is_rtl() ? 'is-rtl' : 'is-ltr';
	$classes[] = 'junior-chic-theme';
	$classes[] = junior_chic_is_arabic_locale() ? 'is-arabic' : 'is-not-arabic';
	return $classes;
}
add_filter('body_class', 'junior_chic_body_classes');

function junior_chic_excerpt_length() {
	return 18;
}
add_filter('excerpt_length', 'junior_chic_excerpt_length', 999);

function junior_chic_product_badges() {
	global $product;

	if (! $product instanceof WC_Product) {
		return;
	}

	echo '<div class="jc-card-badges">';

	if ($product->is_on_sale()) {
		echo '<span class="jc-badge sale">' . esc_html__('Sale', 'junior-chic') . '</span>';
	}

	if ($product->is_featured()) {
		echo '<span class="jc-badge featured">' . esc_html__('Featured', 'junior-chic') . '</span>';
	}

	if ($product->managing_stock() && $product->get_stock_quantity() !== null && $product->get_stock_quantity() <= 3) {
		echo '<span class="jc-badge low-stock">' . esc_html__('Few left', 'junior-chic') . '</span>';
	}

	echo '</div>';
}

function junior_chic_product_quick_view_button() {
	global $product;

	if (! $product instanceof WC_Product) {
		return;
	}

	$image_id = $product->get_image_id();
	$image    = $image_id ? wp_get_attachment_image_url($image_id, 'large') : wc_placeholder_img_src('large');
	$excerpt  = wp_strip_all_tags($product->get_short_description() ?: $product->get_description());

	printf(
		'<button type="button" class="jc-quick-view" data-title="%1$s" data-price="%2$s" data-image="%3$s" data-link="%4$s" data-description="%5$s">%6$s</button>',
		esc_attr($product->get_name()),
		esc_attr(wp_strip_all_tags($product->get_price_html())),
		esc_url($image),
		esc_url(get_permalink($product->get_id())),
		esc_attr(wp_trim_words($excerpt, 22)),
		esc_html__('Quick View', 'junior-chic')
	);
}

function junior_chic_single_product_extras() {
	global $product;

	if (! $product instanceof WC_Product) {
		return;
	}

	$video_url = get_post_meta($product->get_id(), '_jc_product_video', true);

	echo '<section class="jc-single-extras">';
	echo '<div class="jc-extra-card">';
	echo '<h3>' . esc_html__('Available sizes only', 'junior-chic') . '</h3>';
	echo '<p>' . esc_html__('Out-of-stock sizes stay disabled automatically on variable products, so families only see what can actually be ordered.', 'junior-chic') . '</p>';
	echo '</div>';

	echo '<div class="jc-extra-card">';
	echo '<h3>' . esc_html__('Bundle offer', 'junior-chic') . '</h3>';
	echo '<p>' . esc_html__('Pair this item with matching shoes or accessories and show a lower bundle price using your preferred bundles plugin.', 'junior-chic') . '</p>';
	echo '</div>';

	if ($video_url) {
		echo '<div class="jc-extra-card jc-video-card">';
		echo '<h3>' . esc_html__('Product video', 'junior-chic') . '</h3>';
		echo wp_oembed_get(esc_url($video_url));
		echo '</div>';
	}

	echo '</section>';
}
add_action('woocommerce_after_single_product_summary', 'junior_chic_single_product_extras', 12);

function junior_chic_related_title($title) {
	return __('You may also like', 'junior-chic');
}
add_filter('woocommerce_product_related_products_heading', 'junior_chic_related_title');

function junior_chic_cross_sells_title($title) {
	return __('Buy it with', 'junior-chic');
}
add_filter('woocommerce_product_cross_sells_products_heading', 'junior_chic_cross_sells_title');

function junior_chic_customize_sale_flash($html, $post, $product) {
	if (! $product instanceof WC_Product) {
		return $html;
	}

	return '<span class="onsale">' . esc_html__('Offer', 'junior-chic') . '</span>';
}
add_filter('woocommerce_sale_flash', 'junior_chic_customize_sale_flash', 10, 3);

function junior_chic_shop_per_page($count) {
	return 12;
}
add_filter('loop_shop_per_page', 'junior_chic_shop_per_page', 20);
