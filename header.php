<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package underscore
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>
<!-- _____________________________________________



	<header id="masthead" class="site-header">
		<div class="site-branding">
			<h1 class="site-title">
	<header id="masthead" class="site__header">
_____________________________________________ -->
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">

	<header id="masthead" class="site__header">
			<?php wp_nav_menu(array(
		"menu" => "primaire",
		"container" => "nav",
		"container_class" => "menu__principal"
	)); ?>
		<div class="site__branding">
			<h1 class="site__title">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
			</h1>
		<?php
			$underscore_description = get_bloginfo( 'description', 'display' );
			if ( $underscore_description || is_customize_preview() ) : ?>
			<p class="site__description"><?php echo $underscore_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>	
		</div><!-- .site-branding -->

	</header><!-- #masthead -->

	<aside class="widget__area">
			<h2>Menu Secondaire</h2>
			<?php wp_nav_menu(array(
						"menu" => "aside",
						"container" => "nav",
						"container_class" => "menu__aside"
			)); ?>
	</aside>
