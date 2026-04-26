<?php
get_header();
?>
<section class="container content-grid">
	<div class="content-main">
		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
				<article <?php post_class('post-card'); ?>>
					<?php if (has_post_thumbnail()) : ?>
						<a href="<?php the_permalink(); ?>" class="post-card__image"><?php the_post_thumbnail('large'); ?></a>
					<?php endif; ?>
					<div class="post-card__body">
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<div><?php the_excerpt(); ?></div>
					</div>
				</article>
			<?php endwhile; ?>
			<?php the_posts_pagination(); ?>
		<?php else : ?>
			<p><?php esc_html_e('No content found.', 'junior-chic'); ?></p>
		<?php endif; ?>
	</div>
</section>
<?php
get_footer();

