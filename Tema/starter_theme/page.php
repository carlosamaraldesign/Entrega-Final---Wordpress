<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
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
			</div>
	</div>
</div>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post() ?>

			<article id="post-<?php the_ID(); ?>" class="article-page">
				<header class="entry-header">
					<?php the_title( '<h1 class="post-title entry-title">', '</h1>' ); ?>
				</header><!-- .entry-header -->

				<div class="entry-content">
					<?php the_content(); ?>
				</div><!-- .entry-content -->

			</article><!-- #post-## -->

		<?php endwhile; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
