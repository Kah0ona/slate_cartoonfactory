<?php get_header(); ?>

	<div>
		<div class="u-gridContainer">
		
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="u-gridCol8">
			<article class="Content page-content" id="post-<?php the_ID(); ?>">
				<h2><?php the_title(); ?></h2>
				<div>
					<?php the_content(); ?>
					<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
				</div>
			</article>
			</div>
		<?php endwhile; endif; ?>
			<div class="u-gridCol4 page-sidebar">
				<?php get_sidebar(); ?>
			</div>
		</div>



	</div>

<?php get_footer(); ?>
