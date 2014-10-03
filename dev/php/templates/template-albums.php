<?php
/*
Template Name: albums
*/
?>
<?php get_header(); ?>

	<div class="u-gridContainer content-wrapper">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<content class="content-1 u-gridRow" id="post-<?php the_ID(); ?>">
			<article class="content-article album-1-article-1 u-gridCol4">
				<a class="button-bottom-left">cartoon</a><p></article>
			</article>
			<article class="content-article album-1-article-2 u-gridCol8">
				<a class="button-bottom-left">karikaturen</a><p></article>	
			</article>
		</content> 

		<content class="content-5 u-gridRow">
			<article class="content-article album-2-article-1 u-gridCol3">
				<a class="button-bottom-left">strips</a><p></article>
			</article>
			<article class="content-article album-2-article-2 u-gridCol3">
				<a class="button-bottom-right">characters</a><p></article>
			</article>
			<article class="content-article album-2-article-3 u-gridCol3">
				<a class="button-bottom-left">sneltekenen</a><p></article>
			</article>
			<article class="content-article album-2-article-4 u-gridCol3">
				<a class="button-bottom-right">fantasie art</a><p></article>
			</article>
		</content> 

		<content class="content-1 u-gridRow">
			<article class="content-article album-3-article-1 u-gridCol6">
				<a class="button-bottom-left">animatie</a><p></article>
			</article>
			<article class="content-article album-2-article-2 u-gridCol6">
				<a class="button-bottom-right">divers</a><p></article>
			</article>
		</content> 

		<content class="content-6 u-gridRow">
			<article class="content-article content-6-article-1 u-gridCol12">
			</article>
		</content> 

	<?php endwhile; endif; ?>
	</div>

<?php get_footer(); ?>   

