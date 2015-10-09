<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sinhthaitieucanh
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>                
<div id="page" class="hfeed site">        
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'sinhthaitieucanh' ); ?></a>

	<header id="masthead" class="site-header" role="banner">                                                  
            <div>
                <div class="left">
                    <div class="site-logo">
                        <img class="logo" src="/images/Logo.png"/>
                    </div>                    
                </div>             
                <div class="top-menu">                               
                    <div class="right">                   
                         <?php wp_nav_menu( array( 'theme_location' => 'top', 'menu_id' => 'top-menu' ) ); ?>                
                    </div>                
                </div>    
            </div>            
            
             <nav id="site-navigation" class="main-navigation" role="navigation">                    
                    <!--<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'sinhthaitieucanh' ); ?></button>-->
                    <div>                            
                        <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
                     </div>    
                </div>                                       
            </nav> <!--#site-navigation -->
            
            <div id="header-image" class="header-image">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                        <img src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="">
                </a>
            </div>                
                       
            </div> 
	</header> <!--#masthead -->
        
	<div id="content" class="site-content">         

    