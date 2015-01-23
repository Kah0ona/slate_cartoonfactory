<?php
/*
Template Name: albums
*/
?>
<?php get_header(); ?>

	<div class="u-gridContainer  album-wrapper">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<content class="content-1 u-gridRow" id="post-<?php the_ID(); ?>">
			<h2 class="title"><?php the_title(); ?></h2>
		</content> 

		<content class="content-1 u-gridRow">
			<article class="content-article album-1-article-1 u-gridCol4">
				<a href="/cartoon"class="button-bottom-left">cartoon</a><p></article>
			</article>
			<article class="content-article album-1-article-2 u-gridCol8">
				<a href="/karikaturen"class="button-bottom-left">karikaturen</a><p></article>	
			</article>
		</content> 

		<content class="content-2 u-gridRow">
			<article class="content-article album-2-article-1 u-gridCol3">
				<a href="/strips"class="button-bottom-left">strips</a><p></article>
			</article>
			<article class="content-article album-2-article-2 u-gridCol3">
				<a href="/characters"class="button-bottom-right">characters</a><p></article>
			</article>
			<article class="content-article album-2-article-3 u-gridCol3">
				<a href="/sneltekenen" class="button-bottom-left">sneltekenen</a><p></article>
			</article>
			<article class="content-article album-2-article-4 u-gridCol3">
				<a href="/fantasie-art"class="button-bottom-right">fantasie art</a><p></article>
			</article>
		</content> 

		<content class="content-3 u-gridRow">
			<article  class="content-article album-3-article-1 u-gridCol6">
				<a  href="/animatie" class="button-bottom-left">animatie</a><p></article>
			</article>
			<article href="divers" class="content-article album-3-article-2 u-gridCol6">
				<a  href="/divers" class="button-bottom-right">divers</a><p></article>
			</article>
		</content> 

	<?php endwhile; endif; ?>
	</div>

<?php get_footer(); ?>   

