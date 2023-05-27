<?php
/**
 * The header for Astra Theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?><!DOCTYPE html>
<?php astra_html_before(); ?>
<html <?php language_attributes(); ?>>
<head>
<?php astra_head_top(); ?>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="https://gmpg.org/xfn/11">

<?php wp_head(); ?>
<?php astra_head_bottom(); ?>
</head>


<body <?php astra_schema_body(); ?> <?php body_class(); ?>>

<?php astra_body_top(); ?>
<?php wp_body_open(); ?>





<a
	class="skip-link screen-reader-text"
	href="#content"
	role="link"
	title="<?php echo esc_attr( astra_default_strings( 'string-header-skip-link', false ) ); ?>">
		<?php echo esc_html( astra_default_strings( 'string-header-skip-link', false ) ); ?>
</a>

<div class="page">
	
	
	
	
	
	
	<?php
	
	astra_header_before();
	
	astra_header();
	 

	astra_header_after();
	
    


	astra_content_before();
	
	
?>



	
	

	
	<div id="content" class="site-content">
	<!-- Logo -->
		<div class= "logomenu">
	<?php the_custom_logo(); ?>
	<?php
	// Menu header
		wp_nav_menu([
        'theme_location' => 'header',
        'container' => false,
        'menu_class' => 'navbar_header',
    ]); ?> </div>
		<div class="ast-container">
			
		<?php astra_content_top(); ?>
		
        
   
        
