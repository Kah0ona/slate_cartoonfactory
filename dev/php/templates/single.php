<?php get_header(); ?>
<div class="u-gridContainer  albumPage-wrapper"> 
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article class="u-gridRow " <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<div  class="u-gridCol8 blog-wrapper titel-canvas"> 
					<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				</div>
				<div class="u-gridCol4 blog-wrapper date-canvas" >
					<span class=""><?php the_time( get_option( 'date_format' ) ); ?></span>
				</div>
			</article>

			<article class="u-gridRow ">
				<div class="u-gridCol8 blog-wrapper box-padding text-canvas">
					 <img class="text-wolk" src="<?php echo get_stylesheet_directory_uri(); ?>/img/text-wolk.png"/>
					<?php the_content('Read the rest of this entry &raquo;'); ?>
				</div>
			</article>
		
		<nav>
			<div><?php previous_post_link('&laquo; %link') ?></div>
			<div><?php next_post_link('%link &raquo;') ?></div>
		</nav>

		<?php comments_template(); ?>

	<?php endwhile; else: ?>

		<p><?php _('Sorry, no posts matched your criteria.'); ?></p>

	<?php endif; ?>
</div>
<?php get_footer(); ?>
