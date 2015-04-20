<?php get_header(); ?>
	<div class="u-gridContainer  albumPage-wrapper"> 
		<?php if (have_posts()) : ?>
	
			<h2 class="title">
			<?php if ( is_day() ) : ?>
				<?php printf( __( 'Daily Archives: %s', '' ), '<span>' . get_the_date() . '</span>' ); ?>
			<?php elseif ( is_month() ) : ?>
				<?php printf( __( 'Monthly Archives: %s', '' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', '' ) ) . '</span>' ); ?>
			<?php elseif ( is_year() ) : ?>
				<?php printf( __( 'Yearly Archives: %s', '' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', '' ) ) . '</span>' ); ?>
			<?php else : ?>
				<?php _e( 'Archives', '' ); ?>
			<?php endif; ?>
			</h2>
	
		<?php while (have_posts()) : the_post(); ?>
	
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
		

			<article class="u-gridRow ">
				<div class="u-gridCol12 blog-wrapper button-canvas">
					<p><?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>
				</div>
			</article>
			<content class="u-gridRow">
				<article class="content-article  u-gridCol12 devider-canvas"></article>
			</content> 

		<?php endwhile; ?>
	
			<nav>
				<div><?php next_posts_link('&laquo; Older Entries') ?></div>
				<div><?php previous_posts_link('Newer Entries &raquo;') ?></div>
			</nav>
			
		<?php else : ?>
	
			<h2><?php _e('Nothing Found', ''); ?></h2>
				
			<?php get_search_form(); ?>
	
		<?php endif;?>

	</div>
<?php get_sidebar(); ?>

<?php get_footer(); ?>
