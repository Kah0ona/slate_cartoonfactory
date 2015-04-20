<?php
/*
Template Name: Contactpage
*/
?>

<?php get_header(); ?>

	<div class="u-gridContainer  contact-wrapper">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<content class="content-1 u-gridRow" id="post-<?php the_ID(); ?>">
			<h2 class="title"><?php the_title(); ?></h2>
		</content> 

		<content class="content2 u-gridRow">
			<article class="content-article contact-1-article-1 u-gridCol4">
				<ul class="adress-info content-1-article-1-ul">
					<li>
						<svg class="Icon Icon--inline" viewBox="0 0  128 128">
							<img class="starcartoon"src="<?php echo get_stylesheet_directory_uri(); ?>/ico/bulletImg.png"/>
						</svg>
						<span><a href="#">cartoonfactory</a></span>
					</li>
					<li>
						<svg class="Icon Icon--inline" viewBox="0 0  128 128">
							<img class="starcartoon"src="<?php echo get_stylesheet_directory_uri(); ?>/ico/bulletImg.png"/>
						</svg>
						<span><a href="#">Bosbeemd 10</a></span>
					</li>
					<li>
						<svg class="Icon Icon--inline" viewBox="0 0  128 128">
							<img class="starcartoon"src="<?php echo get_stylesheet_directory_uri(); ?>/ico/bulletImg.png"/>
						</svg>
						<span><a href="#">4847 HM Teteringen</a></span>
					</li>
					<li>
						<svg class="Icon Icon--inline" viewBox="0 0  128 128">
							<img class="starcartoon"src="<?php echo get_stylesheet_directory_uri(); ?>/ico/bulletImg.png"/>
						</svg>
						<span><a href="#">Email: info@thecartoonfactory.nl</a></span>
					</li>
					<li>
						<svg class="Icon Icon--inline" viewBox="0 0  128 128">
							<img class="starcartoon"src="<?php echo get_stylesheet_directory_uri(); ?>/ico/bulletImg.png"/>
						</svg>
						<span><a href="#">Tel: 0765310054</a></span>
					</li>
				</ul>
			</article>

			<aside class="u-gridCol8">
				<article class="content-article contact-1-article-1 ">
							<div id="map_canvas"></div>
				</article>
			</aside>
		</content> 

		<content class="content-3 u-gridRow">
			<article class="content-article contact-3-article-1 u-gridCol12">
				<p class="contact-page-p">Heeft u nog vragen? Neem dan hieronder contact met ons op. </p>
			</article>
		</content> 
	    <content class="content-4 u-gridRow"> 
	    	<article class="content-article contact-4-article-1 u-gridCol12 box-padding">
				<?php the_content(); ?>
				<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?> 
			</article>
		</content>

	<?php endwhile; endif; ?>
	</div>

<?php get_footer(); ?>   

