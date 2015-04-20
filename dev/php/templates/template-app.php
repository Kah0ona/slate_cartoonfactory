<?php
/*
Template Name: App page
*/
?>

<?php get_header(); ?>

<div class="u-gridContainer  app-wrapper">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<content class="content-1 u-gridRow" id="post-<?php the_ID(); ?>">
			<h2 class="title"><?php the_title(); ?></h2>
		</content> 

		<div class="u-gridRow content-2">
			<content class="u-gridCol4">
				<article class="content-article app-2-article-1">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/iphone.png" class="App-iphone" />
				</article>
			</content> 

			<content class="u-gridCol8">
				<article class="content-article app-3-article-1 box-padding">
					<p>Bekijk nu ook de informatie van ons bedrijf vanuit de app! De app is beschikbaar in Google Play voor Android apparaten en als webapp voor iOS van Apple telefoons.
					Voor Apple iPhone gebruikers: scan de QR-code of surf naar de website. </p>
					
				</article>
				<div class="u-gridRow">
						<content class="u-gridCol12">
							<article class="content-article app-5-article-1">
								<a href="#">Download de app hier</a>
							</article>  
						</content> 
				</div>	
				<div class="u-gridRow">
						<content class="u-gridCol6">
							<article class="content-article app-4-article-1">
								<a href="https://play.google.com/store/apps/details?id=com.wThecartoonfactory"><img class="Content--app-Gimg qr-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/googleplay.jpg" /></a>
							</article>
						</content> 

						<content class="u-gridCol6">
							<article class="content-article app-4-article-2">
								<img class="Content--app-Gimg" src="<?php echo get_stylesheet_directory_uri(); ?>/img/placeholder_qr_code.jpg" />
							</article>					 
						</content> 
				</div>	
								
			</content> 
		</div> 
	<?php endwhile; endif; ?>
</div>
<?php get_footer(); ?>   

