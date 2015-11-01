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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>  
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=440158272732840";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
    
<div id="page" class="hfeed site">        
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'sinhthaitieucanh' ); ?></a>

	<header id="masthead" class="site-header" role="banner">                                                  
            <div>                
                    <div class="site-logo">
                        <a href="<?php bloginfo('url'); ?>">
                            <img src="<?php esc_html_e(get_template_directory_uri() . "/images/GreenwayGarden+-Slogant.png"); ?>"/>
                            
<!--                            <div class="">
                                <img src="<?php esc_html_e(get_template_directory_uri() . "/images/Slogan_lighter.png"); ?>"/>
                            </div>                            -->
                        </a>                                                       
                    </div>                                    
                
                <div class="right">                   
                    <div id="search-container" class="search-box-wrapper clear">
                        <div class="search-box clear">
                            <?php get_search_form()?>  
                        </div>                                
                    </div>      
                    <div class="social-network-container">
                        <div class="cart-contents">
                            <a href="<?php echo WC()->cart->get_cart_url(); ?>" 
                               title="<?php _e( 'View your shopping cart' ); ?>">                                
                                <img src="<?php esc_html_e(get_template_directory_uri() . "/images/cart-shopping.png"); ?>"/>
                                <span class="cart-content-count">[<?php echo sprintf (_n( '%d', '%d', WC()->cart->cart_contents_count ), WC()->cart->cart_contents_count ); ?>]</span>   
                                   <?php //echo WC()->cart->get_cart_total(); ?>
                            </a>
                        </div>
                        
                        <div class="social-network-content">
                            <div class="social_network_facebook">
                                <a href="https://www.facebook.com/sinhthaitieucanh" title="Facebook">
                                    <img src="<?php esc_html_e(get_template_directory_uri() . "/images/facebook_icon.png"); ?>"/>
                                </a>
                                
                                <a href="https://plus.google.com/" title="Google Plus">
                                    <img src="<?php esc_html_e(get_template_directory_uri() . "/images/google_plus_icon.png"); ?>"/>
                                </a> 
                                
                                <a href="https://www.pinterest.com/" title="Pinterest">
                                    <img src="<?php esc_html_e(get_template_directory_uri() . "/images/pinterest_icon.png"); ?>"/>
                                </a> 
                                
                                 <a href="https://instagram.com/" title="Instagram">
                                    <img src="<?php esc_html_e(get_template_directory_uri() . "/images/instagram_icon.png"); ?>"/>
                                </a>                                                                 
                            </div>                                                                                                             
                        </div>                        
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
                    <?php
//                    if(is_home())
                      echo do_shortcode('[pjc_slideshow slide_type="banner"]'); 
                    ?>                
                    <img class="" src="<?php esc_html_e(get_template_directory_uri() . "/images/line.png"); ?>" alt="line">
                    
                    <div class="navigation-path">
                        <div class="breadcrumbs" xmlns:v="http://rdf.data-vocabulary.org/#">
                        <?php if(function_exists('bcn_display'))
                        {
                            bcn_display();
                        }?>
                    </div>
                    </div>                    
            </div>               
        </div> 
    </header> <!--#masthead -->
        
<div id="content" class="site-content">         

    