<?php
defined('ABSPATH') || exit;

get_header('shop');
?>
<section class="shop-hero">
	<div class="container shop-hero__inner">
		<div>
			<span class="eyebrow"><?php echo esc_html(junior_chic_is_arabic_locale() ? 'تسوقي من Junior Chic' : __('Junior Chic Shop', 'junior-chic')); ?></span>
			<h1><?php woocommerce_page_title(); ?></h1>
			<p><?php echo esc_html(junior_chic_is_arabic_locale() ? 'اكتشفي منتجات مختارة بعناية مع فلترة واضحة وصور كبيرة وتجربة تسوق سريعة تناسب الأهل وتختصر وقت الاختيار.' : __('Clear filters, large imagery, and a mobile-first buying flow for parents shopping fast.', 'junior-chic')); ?></p>
		</div>
		<div class="shop-hero__filters">
			<a href="<?php echo esc_url(home_url('/shop/?filter_age-group=0-2')); ?>">0-2</a>
			<a href="<?php echo esc_url(home_url('/shop/?filter_age-group=3-5')); ?>">3-5</a>
			<a href="<?php echo esc_url(home_url('/shop/?filter_gender=boys')); ?>"><?php echo esc_html(junior_chic_is_arabic_locale() ? 'ولاد' : __('Boys', 'junior-chic')); ?></a>
			<a href="<?php echo esc_url(home_url('/shop/?filter_gender=girls')); ?>"><?php echo esc_html(junior_chic_is_arabic_locale() ? 'بنات' : __('Girls', 'junior-chic')); ?></a>
			<a href="<?php echo esc_url(home_url('/shop/?filter_gender=unisex')); ?>"><?php echo esc_html(junior_chic_is_arabic_locale() ? 'يونيسكس' : __('Unisex', 'junior-chic')); ?></a>
		</div>
	</div>
</section>

<section class="container shop-layout">
	<aside class="shop-sidebar">
		<?php if (is_active_sidebar('shop-sidebar')) : ?>
			<?php dynamic_sidebar('shop-sidebar'); ?>
		<?php else : ?>
			<section class="widget shop-widget">
				<h3 class="widget-title"><?php echo esc_html(junior_chic_is_arabic_locale() ? 'فلترة مقترحة' : __('Suggested widgets', 'junior-chic')); ?></h3>
				<p><?php echo esc_html(junior_chic_is_arabic_locale() ? 'أضيفي فلاتر العمر والنوع والمقاس واللون والسعر لتجربة تصفح أسرع وتحويل أعلى.' : __('Add WooCommerce layered nav for age, gender, size, and color, plus filter by price.', 'junior-chic')); ?></p>
			</section>
		<?php endif; ?>
	</aside>
	<div class="shop-content">
		<?php
		do_action('woocommerce_before_main_content');

		if (woocommerce_product_loop()) {
			do_action('woocommerce_before_shop_loop');
			woocommerce_product_loop_start();

			if (wc_get_loop_prop('total')) {
				while (have_posts()) {
					the_post();
					do_action('woocommerce_shop_loop');
					wc_get_template_part('content', 'product');
				}
			}

			woocommerce_product_loop_end();
			do_action('woocommerce_after_shop_loop');
		} else {
			do_action('woocommerce_no_products_found');
		}

		do_action('woocommerce_after_main_content');
		?>
	</div>
</section>
<?php
get_footer('shop');
