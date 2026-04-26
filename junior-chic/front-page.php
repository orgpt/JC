<?php
get_header();
?>
<section class="hero">
	<div class="container hero__grid">
		<div class="hero__content">
			<span class="eyebrow"><?php esc_html_e('Pastel kidswear boutique', 'junior-chic'); ?></span>
			<h1><?php esc_html_e('Playful fashion for every little adventure', 'junior-chic'); ?></h1>
			<p><?php esc_html_e('A clean shopping experience for babywear, sets, shoes, and matching pieces with fast browsing on mobile.', 'junior-chic'); ?></p>
			<div class="hero__actions">
				<a class="btn btn--primary" href="<?php echo esc_url(home_url('/shop/')); ?>"><?php esc_html_e('Shop Collection', 'junior-chic'); ?></a>
				<a class="btn btn--ghost" href="https://wa.me/201000000000"><?php esc_html_e('WhatsApp Order Help', 'junior-chic'); ?></a>
			</div>
			<div class="hero__chips">
				<a href="<?php echo esc_url(home_url('/shop/?filter_age-group=0-2')); ?>">0-2</a>
				<a href="<?php echo esc_url(home_url('/shop/?filter_age-group=3-5')); ?>">3-5</a>
				<a href="<?php echo esc_url(home_url('/shop/?filter_age-group=6-8')); ?>">6-8</a>
				<a href="<?php echo esc_url(home_url('/shop/?filter_age-group=9-12')); ?>">9-12</a>
			</div>
		</div>
		<div class="hero__visual">
			<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/brand-banner.png'); ?>" alt="<?php esc_attr_e('Junior Chic brand banner', 'junior-chic'); ?>" loading="eager">
		</div>
	</div>
</section>

<section class="section container">
	<div class="section-heading">
		<div>
			<span class="eyebrow"><?php esc_html_e('Browse by category', 'junior-chic'); ?></span>
			<h2><?php esc_html_e('Everything families need in one quick scroll', 'junior-chic'); ?></h2>
		</div>
		<a href="<?php echo esc_url(home_url('/shop/')); ?>"><?php esc_html_e('View all', 'junior-chic'); ?></a>
	</div>
	<div class="category-grid">
		<a class="category-card" href="<?php echo esc_url(home_url('/product-category/t-shirts/')); ?>"><span>T-Shirts</span><small><?php esc_html_e('Soft basics', 'junior-chic'); ?></small></a>
		<a class="category-card" href="<?php echo esc_url(home_url('/product-category/sets/')); ?>"><span><?php esc_html_e('Sets', 'junior-chic'); ?></span><small><?php esc_html_e('Easy outfits', 'junior-chic'); ?></small></a>
		<a class="category-card" href="<?php echo esc_url(home_url('/product-category/shoes/')); ?>"><span><?php esc_html_e('Shoes', 'junior-chic'); ?></span><small><?php esc_html_e('Play-ready comfort', 'junior-chic'); ?></small></a>
		<a class="category-card" href="<?php echo esc_url(home_url('/product-category/accessories/')); ?>"><span><?php esc_html_e('Accessories', 'junior-chic'); ?></span><small><?php esc_html_e('Cute finishing touch', 'junior-chic'); ?></small></a>
	</div>
</section>

<section class="section section--soft">
	<div class="container">
		<div class="section-heading">
			<div>
				<span class="eyebrow"><?php esc_html_e('Smart filters', 'junior-chic'); ?></span>
				<h2><?php esc_html_e('Age, gender, size, color, and price made simple', 'junior-chic'); ?></h2>
			</div>
		</div>
		<div class="filter-showcase">
			<div class="filter-card">
				<h3><?php esc_html_e('Age', 'junior-chic'); ?></h3>
				<p><?php esc_html_e('0-2, 3-5, 6-8, and 9-12 ready as WooCommerce attributes.', 'junior-chic'); ?></p>
			</div>
			<div class="filter-card">
				<h3><?php esc_html_e('Style', 'junior-chic'); ?></h3>
				<p><?php esc_html_e('Boys, girls, and unisex merchandising with clean labels.', 'junior-chic'); ?></p>
			</div>
			<div class="filter-card">
				<h3><?php esc_html_e('Fit', 'junior-chic'); ?></h3>
				<p><?php esc_html_e('Size and color selectors are highlighted clearly on product cards and PDPs.', 'junior-chic'); ?></p>
			</div>
			<div class="filter-card">
				<h3><?php esc_html_e('Budget', 'junior-chic'); ?></h3>
				<p><?php esc_html_e('Price filter widgets inherit the same pastel UI in the sidebar.', 'junior-chic'); ?></p>
			</div>
		</div>
	</div>
</section>

<section class="section container">
	<div class="section-heading">
		<div>
			<span class="eyebrow"><?php esc_html_e('Featured products', 'junior-chic'); ?></span>
			<h2><?php esc_html_e('Best picks for this week', 'junior-chic'); ?></h2>
		</div>
	</div>
	<?php echo do_shortcode('[products limit="8" columns="4" visibility="featured"]'); ?>
</section>

<section class="section container">
	<div class="two-up">
		<div class="promo-card">
			<span class="eyebrow"><?php esc_html_e('Bundles', 'junior-chic'); ?></span>
			<h2><?php esc_html_e('Complete looks with a lower set price', 'junior-chic'); ?></h2>
			<p><?php esc_html_e('Use product bundles or frequently bought together plugins and this block becomes the visual spotlight for those offers.', 'junior-chic'); ?></p>
			<a class="btn btn--primary" href="<?php echo esc_url(home_url('/shop/')); ?>"><?php esc_html_e('Explore bundles', 'junior-chic'); ?></a>
		</div>
		<div class="promo-card promo-card--accent">
			<span class="eyebrow"><?php esc_html_e('Limited offers', 'junior-chic'); ?></span>
			<h2><?php esc_html_e('Countdown-friendly sale moments', 'junior-chic'); ?></h2>
			<p><?php esc_html_e('Pair this section with a scarcity/countdown plugin to highlight flash sales and coupon drops.', 'junior-chic'); ?></p>
			<div class="countdown-strip">
				<span>02</span><span>14</span><span>36</span><span>22</span>
			</div>
		</div>
	</div>
</section>

<section class="section section--soft">
	<div class="container">
		<div class="section-heading">
			<div>
				<span class="eyebrow"><?php esc_html_e('Best sellers & new arrivals', 'junior-chic'); ?></span>
				<h2><?php esc_html_e('Merchandising blocks ready for growth', 'junior-chic'); ?></h2>
			</div>
		</div>
		<div class="product-blocks">
			<div>
				<h3><?php esc_html_e('Best selling', 'junior-chic'); ?></h3>
				<?php echo do_shortcode('[best_selling_products limit="4" columns="4"]'); ?>
			</div>
			<div>
				<h3><?php esc_html_e('New arrivals', 'junior-chic'); ?></h3>
				<?php echo do_shortcode('[recent_products limit="4" columns="4"]'); ?>
			</div>
		</div>
	</div>
</section>
<?php
get_footer();

