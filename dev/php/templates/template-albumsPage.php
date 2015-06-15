<?php
/*
Template Name: albumsPage
*/
?>
<?php get_header(); ?>

	<div class="u-gridContainer  albumPage-wrapper">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<h2 class="title"><?php the_title(); ?></h2>
		<div>
			<?php the_content(); ?>
		</div>
	<?php endwhile; endif; ?>
	</div>

<?php get_footer(); ?>   