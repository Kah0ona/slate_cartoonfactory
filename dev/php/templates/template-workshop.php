<?php
/*
Template Name: workshop
*/
?>
<?php get_header(); ?>

	<div class="u-gridContainer  workshop-wrapper">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<content class="content-1 u-gridRow" id="post-<?php the_ID(); ?>">
			<h2 class="title"><?php the_title(); ?></h2>
		</content> 

		<content class="content-1 u-gridRow">
			<article class="content-article workshop-1-article-1 u-gridCol8 box-padding">
				<?php the_content(); ?>
			</article>
			<aside class="u-gridCol4">
				<article class="content-article workshop-1-article-2-aside1 ">
				
				</article>
				<article class="content-article workshop-1-article-2-aside2 box-padding">
						<p>Als professioneel  kunstenaar is TCF nu ook begonnen met het organiseren van creatieve workshops voor jong en oud. Doe mee en schrijf u in.</p>
						<a href="/contact" class="button-bottom-right">neem contact op</a><p>
				</article>
			</aside>

		</content> 
	<?php endwhile; endif; ?>
	</div>

<?php get_footer(); ?>   


