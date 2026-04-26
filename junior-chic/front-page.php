<?php
get_header();
?>
<section class="hero hero--home">
	<div class="container hero__grid">
		<div class="hero__content">
			<span class="eyebrow"><?php echo esc_html(junior_chic_is_arabic_locale() ? 'كوليكشن أطفال باستيل' : 'Pastel kidswear boutique'); ?></span>
			<h1><?php echo esc_html(junior_chic_is_arabic_locale() ? 'إطلالات أطفال مريحة، لطيفة، وسهلة الاختيار للأهل' : 'Playful fashion for every little adventure'); ?></h1>
			<p><?php echo esc_html(junior_chic_is_arabic_locale() ? 'تسوقي تيشيرتات وأطقم وأحذية وإكسسوارات بتجربة سريعة وواضحة، مع مقاسات مرتبة وصور كبيرة مناسبة للموبايل.' : 'A clean shopping experience for babywear, sets, shoes, and matching pieces with fast browsing on mobile.'); ?></p>
			<div class="hero__actions">
				<a class="btn btn--primary" href="<?php echo esc_url(home_url('/shop/')); ?>"><?php echo esc_html(junior_chic_is_arabic_locale() ? 'ابدئي التسوق' : 'Shop Collection'); ?></a>
				<a class="btn btn--ghost" href="https://wa.me/201000000000"><?php echo esc_html(junior_chic_is_arabic_locale() ? 'اطلبي عبر واتساب' : 'WhatsApp Order Help'); ?></a>
			</div>
			<div class="hero__chips">
				<a href="<?php echo esc_url(home_url('/shop/?filter_age-group=0-2')); ?>"><?php echo esc_html(junior_chic_is_arabic_locale() ? 'عمر 0-2' : '0-2'); ?></a>
				<a href="<?php echo esc_url(home_url('/shop/?filter_age-group=3-5')); ?>"><?php echo esc_html(junior_chic_is_arabic_locale() ? 'عمر 3-5' : '3-5'); ?></a>
				<a href="<?php echo esc_url(home_url('/shop/?filter_age-group=6-8')); ?>"><?php echo esc_html(junior_chic_is_arabic_locale() ? 'عمر 6-8' : '6-8'); ?></a>
				<a href="<?php echo esc_url(home_url('/shop/?filter_age-group=9-12')); ?>"><?php echo esc_html(junior_chic_is_arabic_locale() ? 'عمر 9-12' : '9-12'); ?></a>
			</div>
			<div class="hero__stats">
				<div class="stat-card">
					<strong>24h</strong>
					<span><?php echo esc_html(junior_chic_is_arabic_locale() ? 'تجهيز الطلبات' : 'Fast dispatch'); ?></span>
				</div>
				<div class="stat-card">
					<strong>100%</strong>
					<span><?php echo esc_html(junior_chic_is_arabic_locale() ? 'ألوان هادئة وهوية مرحة' : 'Pastel identity'); ?></span>
				</div>
				<div class="stat-card">
					<strong>4</strong>
					<span><?php echo esc_html(junior_chic_is_arabic_locale() ? 'مراحل عمرية واضحة' : 'Age groups ready'); ?></span>
				</div>
			</div>
		</div>
		<div class="hero__visual">
			<div class="hero-frame">
				<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/brand-banner.png'); ?>" alt="<?php esc_attr_e('Junior Chic brand banner', 'junior-chic'); ?>" loading="eager">
				<div class="hero-bubble hero-bubble--top"><?php echo esc_html(junior_chic_is_arabic_locale() ? 'شحن سريع' : 'Fast shipping'); ?></div>
				<div class="hero-bubble hero-bubble--bottom"><?php echo esc_html(junior_chic_is_arabic_locale() ? 'مقاسات واضحة' : 'Clear sizing'); ?></div>
			</div>
		</div>
	</div>
</section>

<section class="trust-strip">
	<div class="container trust-strip__inner">
		<span><?php echo esc_html(junior_chic_is_arabic_locale() ? 'أقمشة مريحة للأطفال' : 'Comfort-first fabrics'); ?></span>
		<span><?php echo esc_html(junior_chic_is_arabic_locale() ? 'تنسيق ألوان باستيل' : 'Soft pastel palette'); ?></span>
		<span><?php echo esc_html(junior_chic_is_arabic_locale() ? 'تصفح سريع على الموبايل' : 'Mobile-first browsing'); ?></span>
		<span><?php echo esc_html(junior_chic_is_arabic_locale() ? 'مساعدة مباشرة على واتساب' : 'WhatsApp support'); ?></span>
	</div>
</section>

<section class="section container">
	<div class="section-heading">
		<div>
			<span class="eyebrow"><?php echo esc_html(junior_chic_is_arabic_locale() ? 'تسوقي حسب الفئة' : 'Browse by category'); ?></span>
			<h2><?php echo esc_html(junior_chic_is_arabic_locale() ? 'كل ما يحتاجه طفلك في واجهة مرتبة وسهلة' : 'Everything families need in one quick scroll'); ?></h2>
		</div>
		<a class="section-link" href="<?php echo esc_url(home_url('/shop/')); ?>"><?php echo esc_html(junior_chic_is_arabic_locale() ? 'عرض الكل' : 'View all'); ?></a>
	</div>
	<div class="category-grid">
		<a class="category-card category-card--tees" href="<?php echo esc_url(home_url('/product-category/t-shirts/')); ?>"><span><?php echo esc_html(junior_chic_is_arabic_locale() ? 'تيشيرتات' : 'T-Shirts'); ?></span><small><?php echo esc_html(junior_chic_is_arabic_locale() ? 'أساسيات ناعمة يومية' : 'Soft basics'); ?></small></a>
		<a class="category-card category-card--sets" href="<?php echo esc_url(home_url('/product-category/sets/')); ?>"><span><?php echo esc_html(junior_chic_is_arabic_locale() ? 'أطقم' : 'Sets'); ?></span><small><?php echo esc_html(junior_chic_is_arabic_locale() ? 'لوك كامل بسرعة' : 'Easy outfits'); ?></small></a>
		<a class="category-card category-card--shoes" href="<?php echo esc_url(home_url('/product-category/shoes/')); ?>"><span><?php echo esc_html(junior_chic_is_arabic_locale() ? 'أحذية' : 'Shoes'); ?></span><small><?php echo esc_html(junior_chic_is_arabic_locale() ? 'راحة للحركة واللعب' : 'Play-ready comfort'); ?></small></a>
		<a class="category-card category-card--accessories" href="<?php echo esc_url(home_url('/product-category/accessories/')); ?>"><span><?php echo esc_html(junior_chic_is_arabic_locale() ? 'إكسسوارات' : 'Accessories'); ?></span><small><?php echo esc_html(junior_chic_is_arabic_locale() ? 'لمسة نهائية لطيفة' : 'Cute finishing touch'); ?></small></a>
	</div>
</section>

<section class="section section--soft">
	<div class="container">
		<div class="section-heading">
			<div>
				<span class="eyebrow"><?php echo esc_html(junior_chic_is_arabic_locale() ? 'فلترة ذكية' : 'Smart filters'); ?></span>
				<h2><?php echo esc_html(junior_chic_is_arabic_locale() ? 'العمر والنوع والمقاس واللون والسعر في خطوات واضحة' : 'Age, gender, size, color, and price made simple'); ?></h2>
			</div>
		</div>
		<div class="filter-showcase">
			<div class="filter-card">
				<h3><?php echo esc_html(junior_chic_is_arabic_locale() ? 'حسب العمر' : 'Age'); ?></h3>
				<p><?php echo esc_html(junior_chic_is_arabic_locale() ? '0-2 و 3-5 و 6-8 و 9-12 جاهزة كخصائص داخل المتجر.' : '0-2, 3-5, 6-8, and 9-12 ready as WooCommerce attributes.'); ?></p>
			</div>
			<div class="filter-card">
				<h3><?php echo esc_html(junior_chic_is_arabic_locale() ? 'حسب النوع' : 'Style'); ?></h3>
				<p><?php echo esc_html(junior_chic_is_arabic_locale() ? 'ولاد وبنات ويونيسكس بعرض مرتب وواضح.' : 'Boys, girls, and unisex merchandising with clean labels.'); ?></p>
			</div>
			<div class="filter-card">
				<h3><?php echo esc_html(junior_chic_is_arabic_locale() ? 'اختيار المقاس' : 'Fit'); ?></h3>
				<p><?php echo esc_html(junior_chic_is_arabic_locale() ? 'إظهار المقاسات المتاحة فقط مع أزرار أوضح داخل المنتج.' : 'Size and color selectors are highlighted clearly on product cards and PDPs.'); ?></p>
			</div>
			<div class="filter-card">
				<h3><?php echo esc_html(junior_chic_is_arabic_locale() ? 'حسب السعر' : 'Budget'); ?></h3>
				<p><?php echo esc_html(junior_chic_is_arabic_locale() ? 'واجهة فلترة هادئة وسريعة تساعدك توصلي للمنتج الأنسب.' : 'Price filter widgets inherit the same pastel UI in the sidebar.'); ?></p>
			</div>
		</div>
	</div>
</section>

<section class="section container">
	<div class="section-heading">
		<div>
			<span class="eyebrow"><?php echo esc_html(junior_chic_is_arabic_locale() ? 'منتجات مميزة' : 'Featured products'); ?></span>
			<h2><?php echo esc_html(junior_chic_is_arabic_locale() ? 'اختياراتنا المفضلة لهذا الأسبوع' : 'Best picks for this week'); ?></h2>
		</div>
	</div>
	<?php echo do_shortcode('[products limit="8" columns="4" visibility="featured"]'); ?>
</section>

<section class="section container">
	<div class="offer-grid">
		<div class="promo-card">
			<span class="eyebrow"><?php echo esc_html(junior_chic_is_arabic_locale() ? 'أطقم وتنسيقات' : 'Bundles'); ?></span>
			<h2><?php echo esc_html(junior_chic_is_arabic_locale() ? 'كملي اللوك بالكامل بسعر أفضل' : 'Complete looks with a lower set price'); ?></h2>
			<p><?php echo esc_html(junior_chic_is_arabic_locale() ? 'قسّمنا العروض بحيث يسهل على العميل شراء تيشيرت مع شورت أو حذاء أو إكسسوار في نفس الطلب.' : 'Use product bundles or frequently bought together plugins and this block becomes the visual spotlight for those offers.'); ?></p>
			<a class="btn btn--primary" href="<?php echo esc_url(home_url('/shop/')); ?>"><?php echo esc_html(junior_chic_is_arabic_locale() ? 'استكشفي العروض' : 'Explore bundles'); ?></a>
		</div>
		<div class="promo-card promo-card--accent promo-card--countdown">
			<span class="eyebrow"><?php echo esc_html(junior_chic_is_arabic_locale() ? 'عروض محدودة' : 'Limited offers'); ?></span>
			<h2><?php echo esc_html(junior_chic_is_arabic_locale() ? 'عروض سريعة مع عداد واضح يشجع على الشراء' : 'Countdown-friendly sale moments'); ?></h2>
			<p><?php echo esc_html(junior_chic_is_arabic_locale() ? 'المكان جاهز لعرض عداد تنازلي وكوبون خصم أو إشعار بندرة الكمية.' : 'Pair this section with a scarcity/countdown plugin to highlight flash sales and coupon drops.'); ?></p>
			<div class="countdown-strip">
				<span><b>02</b><small><?php echo esc_html(junior_chic_is_arabic_locale() ? 'يوم' : 'Days'); ?></small></span>
				<span><b>14</b><small><?php echo esc_html(junior_chic_is_arabic_locale() ? 'ساعة' : 'Hours'); ?></small></span>
				<span><b>36</b><small><?php echo esc_html(junior_chic_is_arabic_locale() ? 'دقيقة' : 'Minutes'); ?></small></span>
				<span><b>22</b><small><?php echo esc_html(junior_chic_is_arabic_locale() ? 'ثانية' : 'Seconds'); ?></small></span>
			</div>
		</div>
	</div>
</section>

<section class="section section--soft">
	<div class="container">
		<div class="section-heading">
			<div>
				<span class="eyebrow"><?php echo esc_html(junior_chic_is_arabic_locale() ? 'الأكثر مبيعًا والجديد' : 'Best sellers & new arrivals'); ?></span>
				<h2><?php echo esc_html(junior_chic_is_arabic_locale() ? 'بلوكات بيع جاهزة تساعد العميل يكتشف بسرعة' : 'Merchandising blocks ready for growth'); ?></h2>
			</div>
		</div>
		<div class="product-blocks">
			<div class="products-panel">
				<h3><?php echo esc_html(junior_chic_is_arabic_locale() ? 'الأكثر مبيعًا' : 'Best selling'); ?></h3>
				<?php echo do_shortcode('[best_selling_products limit="4" columns="4"]'); ?>
			</div>
			<div class="products-panel">
				<h3><?php echo esc_html(junior_chic_is_arabic_locale() ? 'وصل حديثًا' : 'New arrivals'); ?></h3>
				<?php echo do_shortcode('[recent_products limit="4" columns="4"]'); ?>
			</div>
		</div>
	</div>
</section>
<?php
get_footer();
