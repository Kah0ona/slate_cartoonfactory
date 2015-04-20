<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>

	<div class="u-gridContainer">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<content class="content-1 u-gridRow" id="post-<?php the_ID(); ?>">
			<article class="content-1-article-1 u-gridCol4">
			</article>
			<article class="content-1-article-1 u-gridCol8">
			</article>
		</content> 

		<content class="content-2 u-gridRow">
			<article class="content-2-article-1 u-gridCol12">  
			</article>
		</content> 

	 	<content class="content-3 u-gridRow">
	 		<article class="content-3-article-1 u-gridCol8">
			</article>
	 		<article class="content-3-article-2 u-gridCol4">
			</article>
		</content>  

		<content class="content-4 u-gridRow">
			<article class="content-4-article-1 u-gridCol3">
			</article>
			<article class="content-4-article-2 u-gridCol6">
			</article>
			<article class="content-4-article-3 u-gridCol3"> 
			</article>
		</content>

		<content class="content-5 u-gridRow">
			<article class="content-5-article-1 u-gridCol3">
			</article>
			<article class="content-5-article-2 u-gridCol3">
			</article>
			<article class="content-5-article-3 u-gridCol3">
			</article>
			<article class="content-5-article-4 u-gridCol3">
			</article>
		</content> 

		<content class="content-6 u-gridRow">
			<article class="content-6-article-1 u-gridCol12">
			</article>
		</content> 
	 

	 
 
	 

	 



	<?php endwhile; endif; ?>
	</div>

<?php get_footer(); ?>   
