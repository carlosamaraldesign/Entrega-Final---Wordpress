<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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
		<?php
		while ( have_posts() ) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<div class="article-video">
				<?php the_content(); ?>
			</div><!-- .entry-content -->

		</article><!-- #post-## -->

			<?php

		endwhile; // End of the loop.
		?>

<?php
