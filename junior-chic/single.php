<?php
get_header();
?>
<section class="container page-shell">
	<?php while (have_posts()) : the_post(); ?>
		<article <?php post_class('page-card'); ?>>
			<h1 class="page-title"><?php the_title(); ?></h1>
			<div class="page-meta"><?php echo esc_html(get_the_date()); ?></div>
			<div class="page-content"><?php the_content(); ?></div>
		</article>
	<?php endwhile; ?>
</section>
<?php
get_footer();

