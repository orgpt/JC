<?php
defined('ABSPATH') || exit;

global $product;

if (! $product || ! $product->is_visible()) {
	return;
}
?>
<li <?php wc_product_class('jc-product-card', $product); ?>>
	<div class="jc-product-card__inner">
		<?php junior_chic_product_badges(); ?>
		<a href="<?php the_permalink(); ?>" class="jc-product-card__image">
			<?php echo $product->get_image('woocommerce_thumbnail', array('loading' => 'lazy')); ?>
		</a>
		<div class="jc-product-card__body">
			<?php
			$terms = wc_get_product_terms($product->get_id(), 'pa_size', array('fields' => 'names'));
			if (! empty($terms)) :
				?>
				<div class="jc-product-card__sizes"><?php echo esc_html(implode(' / ', $terms)); ?></div>
			<?php endif; ?>
			<h2 class="woocommerce-loop-product__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<div class="jc-product-card__price"><?php echo wp_kses_post($product->get_price_html()); ?></div>
			<div class="jc-product-card__actions">
				<a class="button" href="<?php the_permalink(); ?>"><?php esc_html_e('Choose Size', 'junior-chic'); ?></a>
				<?php junior_chic_product_quick_view_button(); ?>
			</div>
		</div>
	</div>
</li>
