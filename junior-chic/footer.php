<?php
if (! defined('ABSPATH')) {
	exit;
}
?>
</main>
<footer class="site-footer">
	<div class="container site-footer__grid">
		<div>
			<h3><?php bloginfo('name'); ?></h3>
			<p><?php echo esc_html(junior_chic_is_arabic_locale() ? 'ملابس أطفال بألوان باستيل ورسومات لطيفة وتجربة تسوق سريعة ومريحة على الموبايل.' : __('Kidswear with pastel colors, playful illustrations, and a fast mobile shopping experience.', 'junior-chic')); ?></p>
		</div>
		<div>
			<h3><?php echo esc_html(junior_chic_is_arabic_locale() ? 'روابط سريعة' : __('Quick links', 'junior-chic')); ?></h3>
			<?php
			wp_nav_menu(array(
				'theme_location' => 'footer',
				'container'      => false,
				'menu_class'     => 'footer-menu',
				'fallback_cb'    => false,
			));
			?>
		</div>
		<div>
			<h3><?php echo esc_html(junior_chic_is_arabic_locale() ? 'تحتاج مساعدة؟' : __('Need help?', 'junior-chic')); ?></h3>
			<ul class="footer-list">
				<li><a href="https://wa.me/201000000000"><?php echo esc_html(junior_chic_is_arabic_locale() ? 'واتساب مباشر' : __('WhatsApp Direct', 'junior-chic')); ?></a></li>
				<li><a href="<?php echo esc_url(home_url('/shipping-returns/')); ?>"><?php echo esc_html(junior_chic_is_arabic_locale() ? 'الشحن والاستبدال' : __('Shipping & Returns', 'junior-chic')); ?></a></li>
				<li><a href="<?php echo esc_url(home_url('/about-us/')); ?>"><?php echo esc_html(junior_chic_is_arabic_locale() ? 'عن البراند' : __('About the Brand', 'junior-chic')); ?></a></li>
			</ul>
		</div>
	</div>
	<div class="site-footer__bottom container">
		<p>&copy; <?php echo esc_html(wp_date('Y')); ?> <?php bloginfo('name'); ?></p>
	</div>
</footer>
<div class="jc-modal" hidden>
	<div class="jc-modal__overlay" data-close-modal></div>
	<div class="jc-modal__dialog" role="dialog" aria-modal="true" aria-label="<?php echo esc_attr(junior_chic_is_arabic_locale() ? 'عرض سريع' : __('Quick view', 'junior-chic')); ?>">
		<button type="button" class="jc-modal__close" data-close-modal>&times;</button>
		<div class="jc-modal__content"></div>
	</div>
</div>
<?php wp_footer(); ?>
</body>
</html>
