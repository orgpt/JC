<?php
get_header();
?>
<section class="hero hero--home">
	<div class="container hero__grid">
		<div class="hero__content">
			<span class="eyebrow"><?php echo esc_html(junior_chic_is_arabic_locale() ? 'كوليكشن أطفال مختار بعناية' : 'Curated kidswear collection'); ?></span>
			<h1><?php echo esc_html(junior_chic_is_arabic_locale() ? 'إطلالات أطفال أنيقة ومريحة بتفاصيل تليق بكل يوم' : 'Premium kidswear for everyday comfort and style'); ?></h1>
			<p><?php echo esc_html(junior_chic_is_arabic_locale() ? 'اكتشفي تشكيلة مختارة من ملابس الأطفال والأطقم والأحذية والإكسسوارات، بتصميمات لطيفة، خامات مريحة، وتجربة تسوق سهلة وسريعة من أول اختيار حتى إتمام الطلب.' : 'Discover curated kidswear, sets, shoes, and accessories with soft fabrics, refined details, and an easy shopping journey from browse to checkout.'); ?></p>
			<div class="hero__actions">
				<a class="btn btn--primary" href="<?php echo esc_url(home_url('/shop/')); ?>"><?php echo esc_html(junior_chic_is_arabic_locale() ? 'تسوقي الكوليكشن الآن' : 'Shop the collection'); ?></a>
				<a class="btn btn--ghost" href="https://wa.me/201000000000"><?php echo esc_html(junior_chic_is_arabic_locale() ? 'اطلبي بمساعدة واتساب' : 'Order with WhatsApp help'); ?></a>
			</div>
			<div class="hero__chips">
				<a href="<?php echo esc_url(home_url('/shop/?filter_age-group=0-2')); ?>"><?php echo esc_html(junior_chic_is_arabic_locale() ? 'مواليد حتى سنتين' : '0-2 years'); ?></a>
				<a href="<?php echo esc_url(home_url('/shop/?filter_age-group=3-5')); ?>"><?php echo esc_html(junior_chic_is_arabic_locale() ? 'من 3 إلى 5 سنوات' : '3-5 years'); ?></a>
				<a href="<?php echo esc_url(home_url('/shop/?filter_age-group=6-8')); ?>"><?php echo esc_html(junior_chic_is_arabic_locale() ? 'من 6 إلى 8 سنوات' : '6-8 years'); ?></a>
				<a href="<?php echo esc_url(home_url('/shop/?filter_age-group=9-12')); ?>"><?php echo esc_html(junior_chic_is_arabic_locale() ? 'من 9 إلى 12 سنة' : '9-12 years'); ?></a>
			</div>
			<div class="hero__stats">
				<div class="stat-card">
					<strong>24h</strong>
					<span><?php echo esc_html(junior_chic_is_arabic_locale() ? 'سرعة في تأكيد وتجهيز الطلبات' : 'Fast order preparation'); ?></span>
				</div>
				<div class="stat-card">
					<strong>100%</strong>
					<span><?php echo esc_html(junior_chic_is_arabic_locale() ? 'ستايل طفولي هادئ بخامات مريحة' : 'Soft premium styling'); ?></span>
				</div>
				<div class="stat-card">
					<strong>4</strong>
					<span><?php echo esc_html(junior_chic_is_arabic_locale() ? 'مراحل عمرية واضحة لسهولة الاختيار' : 'Age groups for easy shopping'); ?></span>
				</div>
			</div>
		</div>
		<div class="hero__visual">
			<div class="hero-frame">
				<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/brand-banner.png'); ?>" alt="<?php echo esc_attr(junior_chic_is_arabic_locale() ? 'تشكيلة منتجات Junior Chic' : 'Junior Chic product illustration'); ?>" loading="eager">
				<div class="hero-bubble hero-bubble--top"><?php echo esc_html(junior_chic_is_arabic_locale() ? 'شحن سريع داخل مصر' : 'Fast local shipping'); ?></div>
				<div class="hero-bubble hero-bubble--bottom"><?php echo esc_html(junior_chic_is_arabic_locale() ? 'مقاسات مرتبة وواضحة' : 'Clear sizing guide'); ?></div>
			</div>
		</div>
	</div>
</section>

<section class="trust-strip">
	<div class="container trust-strip__inner">
		<span><?php echo esc_html(junior_chic_is_arabic_locale() ? 'خامات مريحة تناسب حركة الأطفال' : 'Comfort-first fabrics'); ?></span>
		<span><?php echo esc_html(junior_chic_is_arabic_locale() ? 'ألوان هادئة ولمسات طفولية راقية' : 'Soft pastel styling'); ?></span>
		<span><?php echo esc_html(junior_chic_is_arabic_locale() ? 'تصفح سريع وتجربة شراء سهلة' : 'Fast, simple shopping'); ?></span>
		<span><?php echo esc_html(junior_chic_is_arabic_locale() ? 'دعم مباشر للطلب والاستفسار' : 'Direct order support'); ?></span>
	</div>
</section>

<section class="section container">
	<div class="section-heading">
		<div>
			<span class="eyebrow"><?php echo esc_html(junior_chic_is_arabic_locale() ? 'تسوقي حسب الفئة' : 'Shop by category'); ?></span>
			<h2><?php echo esc_html(junior_chic_is_arabic_locale() ? 'كل ما يحتاجه طفلك في مكان واحد بتجربة منظمة ومريحة' : 'Everything your child needs in one seamless destination'); ?></h2>
		</div>
		<a class="section-link" href="<?php echo esc_url(home_url('/shop/')); ?>"><?php echo esc_html(junior_chic_is_arabic_locale() ? 'عرض جميع المنتجات' : 'Browse all products'); ?></a>
	</div>
	<div class="category-grid">
		<a class="category-card category-card--tees" href="<?php echo esc_url(home_url('/product-category/t-shirts/')); ?>"><span><?php echo esc_html(junior_chic_is_arabic_locale() ? 'تيشيرتات يومية' : 'Everyday tees'); ?></span><small><?php echo esc_html(junior_chic_is_arabic_locale() ? 'أساسيات ناعمة تناسب كل يوم' : 'Soft essentials for daily wear'); ?></small></a>
		<a class="category-card category-card--sets" href="<?php echo esc_url(home_url('/product-category/sets/')); ?>"><span><?php echo esc_html(junior_chic_is_arabic_locale() ? 'أطقم جاهزة' : 'Ready sets'); ?></span><small><?php echo esc_html(junior_chic_is_arabic_locale() ? 'تنسيقات كاملة توفر الوقت والمجهود' : 'Complete looks made easy'); ?></small></a>
		<a class="category-card category-card--shoes" href="<?php echo esc_url(home_url('/product-category/shoes/')); ?>"><span><?php echo esc_html(junior_chic_is_arabic_locale() ? 'أحذية مريحة' : 'Comfort shoes'); ?></span><small><?php echo esc_html(junior_chic_is_arabic_locale() ? 'مرونة وثبات للحركة واللعب' : 'Built for movement and play'); ?></small></a>
		<a class="category-card category-card--accessories" href="<?php echo esc_url(home_url('/product-category/accessories/')); ?>"><span><?php echo esc_html(junior_chic_is_arabic_locale() ? 'إكسسوارات لطيفة' : 'Cute accessories'); ?></span><small><?php echo esc_html(junior_chic_is_arabic_locale() ? 'تفاصيل تكمل الإطلالة بذوق' : 'Finishing touches with charm'); ?></small></a>
	</div>
</section>

<section class="section section--soft">
	<div class="container">
		<div class="section-heading section-heading--catalog">
			<div>
				<span class="eyebrow"><?php echo esc_html(junior_chic_is_arabic_locale() ? 'فلترة أذكى' : 'Smarter filters'); ?></span>
				<h2><?php echo esc_html(junior_chic_is_arabic_locale() ? 'اختاري بسهولة حسب العمر والنوع والمقاس واللون والسعر' : 'Find the right fit by age, style, size, color, and price'); ?></h2>
			</div>
		</div>
		<div class="filter-showcase">
			<div class="filter-card">
				<h3><?php echo esc_html(junior_chic_is_arabic_locale() ? 'العمر المناسب' : 'Age range'); ?></h3>
				<p><?php echo esc_html(junior_chic_is_arabic_locale() ? 'قسّمنا المنتجات إلى مراحل عمرية واضحة تساعدك في الوصول السريع للأنسب.' : 'Clear age ranges help shoppers land on the right products faster.'); ?></p>
			</div>
			<div class="filter-card">
				<h3><?php echo esc_html(junior_chic_is_arabic_locale() ? 'النوع والتصميم' : 'Style & gender'); ?></h3>
				<p><?php echo esc_html(junior_chic_is_arabic_locale() ? 'تصفحي بسهولة بين منتجات الولاد والبنات واليونيسكس بحسب ذوقك.' : 'Browse boys, girls, and unisex collections with clean visual merchandising.'); ?></p>
			</div>
			<div class="filter-card">
				<h3><?php echo esc_html(junior_chic_is_arabic_locale() ? 'المقاسات المتاحة' : 'Available sizes'); ?></h3>
				<p><?php echo esc_html(junior_chic_is_arabic_locale() ? 'إظهار المقاسات المتوفرة فقط لتجربة أسرع وقرارات شراء أوضح.' : 'Only available sizes are shown, making shopping easier and more accurate.'); ?></p>
			</div>
			<div class="filter-card">
				<h3><?php echo esc_html(junior_chic_is_arabic_locale() ? 'ميزانية مناسبة' : 'Budget control'); ?></h3>
				<p><?php echo esc_html(junior_chic_is_arabic_locale() ? 'فلترة مرنة حسب السعر لتوصلي سريعًا للمنتجات المناسبة لميزانيتك.' : 'Price filters keep the shopping experience practical and conversion-friendly.'); ?></p>
			</div>
		</div>
	</div>
</section>

<section class="section container">
	<div class="section-heading">
		<div>
			<span class="eyebrow"><?php echo esc_html(junior_chic_is_arabic_locale() ? 'منتجات مختارة' : 'Featured selection'); ?></span>
			<h2><?php echo esc_html(junior_chic_is_arabic_locale() ? 'منتجات مميزة تجمع بين الراحة والذوق والعملية' : 'A featured edit of comfort, style, and practicality'); ?></h2>
		</div>
	</div>
	<?php echo do_shortcode('[products limit="8" columns="4" visibility="featured"]'); ?>
</section>

<section class="section container">
	<div class="offer-grid">
		<div class="promo-card">
			<span class="eyebrow"><?php echo esc_html(junior_chic_is_arabic_locale() ? 'عروض التنسيق' : 'Styled bundles'); ?></span>
			<h2><?php echo esc_html(junior_chic_is_arabic_locale() ? 'لوك متكامل بتنسيق أسهل وسعر أوفر' : 'Complete the look with easier styling and better value'); ?></h2>
			<p><?php echo esc_html(junior_chic_is_arabic_locale() ? 'اختاري القطع المكملة معًا في طلب واحد لتجربة أسرع وإطلالة منسقة بدون مجهود.' : 'Shop matching pieces together for a faster experience and a more polished look.'); ?></p>
			<a class="btn btn--primary" href="<?php echo esc_url(home_url('/shop/')); ?>"><?php echo esc_html(junior_chic_is_arabic_locale() ? 'اكتشفي العروض' : 'Explore offers'); ?></a>
		</div>
		<div class="promo-card promo-card--accent promo-card--countdown">
			<span class="eyebrow"><?php echo esc_html(junior_chic_is_arabic_locale() ? 'لفترة محدودة' : 'Limited-time offers'); ?></span>
			<h2><?php echo esc_html(junior_chic_is_arabic_locale() ? 'خصومات محدودة بوقت واضح وفرصة لا تتكرر' : 'Limited-time savings with a clear reason to act'); ?></h2>
			<p><?php echo esc_html(junior_chic_is_arabic_locale() ? 'أبرزي العروض الموسمية والكوبونات والخصومات المحدودة بطريقة واضحة تشجع على الشراء السريع.' : 'Highlight seasonal deals, coupons, and short-term discounts in a clear, high-converting way.'); ?></p>
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
				<span class="eyebrow"><?php echo esc_html(junior_chic_is_arabic_locale() ? 'الأكثر طلبًا والجديد' : 'Best sellers & new drops'); ?></span>
				<h2><?php echo esc_html(junior_chic_is_arabic_locale() ? 'بلوكات بيع جاهزة تساعد العميل يكتشف الأفضل بسرعة' : 'Conversion-friendly blocks that surface what shoppers want most'); ?></h2>
			</div>
		</div>
		<div class="product-blocks product-blocks--stacked">
			<div class="products-panel">
				<h3><?php echo esc_html(junior_chic_is_arabic_locale() ? 'الأكثر مبيعًا' : 'Best sellers'); ?></h3>
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
