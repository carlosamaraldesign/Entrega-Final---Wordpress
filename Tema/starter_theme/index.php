<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package wp_theme
 */

 ?>

		<div class="side-main">
			<?php get_header(); ?>
			<nav id="site-navigation" class="side-nav" role="navigation">
	        <?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id'  => 'primary-menu' ) ); ?>
			</nav><!-- #site-navigation -->
			<nav id="site-navigation" class="side-nav" role="navigation">
	        <?php wp_nav_menu( array( 'theme_location' => 'menu-2', 'menu_id'  => 'primary-menu' ) ); ?>
			</nav><!-- #site-navigation -->
			<?php get_footer(); ?>
		</div>

		<div class="top-main">
			<div class="nav_title">
				<h1 class="site-title"><a class="underline" style="text-decoration:none; color:#FFF " href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			</div>
			<div class="nav_icon">
				<img onclick="openNav()" src="<?php bloginfo('stylesheet_directory'); ?>/svg/menu.svg" alt="menu">
			</div>
	    <div id="myNav" class="overlay">
	        <!-- Button to close the overlay navigation -->
	        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">x</a>
	        <!-- Overlay content -->
	        <div class="overlay-content">
	            <?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id'  => 'primary-menu' ) ); ?>
	            <?php wp_nav_menu( array( 'theme_location' => 'menu-2', 'menu_id'  => 'primary-menu' ) ); ?>
							<div class="nav_footer">
								Designed by&nbsp<a class="underline" style="text-decoration:none; color:#FFF " href="http://carlosamaral.net/" rel="designer">Carlos Amaral&nbsp</a>4369
							</div>
	        </div>

	    </div>
	  </div>
		<div class="gallery">

			<?php
			if ( have_posts() ) :

				if ( is_home() && ! is_front_page() ) : ?>
					<header>
						<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
					</header>

				<?php
				endif;

				/* Start the Loop */
				while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" class="article-gallery" <?php
					if ( $thumbnail_id = get_post_thumbnail_id() ) {
	        	if ( $image_src = wp_get_attachment_image_src( $thumbnail_id, 'full' ) )
	          	printf( ' style="background-image: url(%s);background-size: cover; background-repeat: no-repeat; background-position: right;"', $image_src[0] );} ?>>
					<header class="entry-header">
						<h2 class="article-gallery-title"><a style="text-decoration:none; color:#FFF " class="underline	" style="text-decoration:none" href="<?php echo esc_url( get_permalink() ) ?>" rel="bookmark"><?php the_title(); ?></a></h2>
						<!-- <?php the_post_thumbnail('large', array('class' => 'alignleft')); ?> -->

				</article><!-- #post-## -->

				<?php endwhile;

				the_posts_navigation();

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif; ?>

		</div>

<?php
