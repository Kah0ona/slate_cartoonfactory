<?php
/*
Template Name: videoAlbum
*/
?>
<?php get_header(); ?>

	<div class="u-gridContainer  album-wrapper">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<content id="post-<?php the_ID(); ?>">
			<h2 class="title"><?php the_title(); ?></h2>
		</content> 

		<content class="videoAlbum">
				<?php the_content(); ?>
		</content> 

	

	<?php endwhile; endif; ?>
	</div>

<?php get_footer(); ?>   