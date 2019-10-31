<?php
/*
* Plugin Name: WordPress Newsletter Plugin
* Plugin URI: https://www.fotohjaelp.dk/
* Description: This is a WordPress Newsletter Plugin based on HTML5, CSS, JS and PHP
* Version: 0.1.0
* Author: Charlotte Skibsted
* Author: https://www.fotohjaelp.dk/
* License: GPL2
*/

function newsletter_form(){
    $content = ' ';
    $content .= '<div class="login-form">';
    $content .= '<div class="popupCloseButton">X</div>';
    $content .= '<div class="login-face">';
    $content .= '<img src=" '.plugins_url("newsletterplugin/img/grumstid-hjerte-lille.png"). ' "';
    $content .= 'alt="login-face"></div>';
    $content .= '<div id="promotion-header">';
    $content .= '<h1 id="promotion-header-title">GRUMSTID</h1></div>';
    $content .= '<section class="form">';
    $content .= '<form action="#">';
    $content .= '<div id="promotion-body">';
    $content .= '<p id="promotion-body-text">Bestil din egen grumstid prøvepakke allerede i dag!</p>';
    $content .= '</div>';
    $content .= '<div class="input">';
    $content .= '<input type="text" id="username" placeholder="Mette Madsen" name="username" required><i class="fa fa-user fa-1x"></i>';
    $content .= '</div>';
    $content .= '<div class="input">';
    $content .= '<input type="email" id="email" placeholder="mettemadsen@hotmail.com" name="email" required><i class="fa fa-envelope fa-1x"></i>';
    $content .= '</div>';
    $content .= '<div id="submitForm">';
    $content .= '<input type="submit" id="submitBtn" name="submitBtn" value="Ja, Tak">';
    $content .= '</div>';
    $content .= '<div id="promotion-footer">';
    $content .= '<p id="promotion-footer-text">Ja, jeg vil gerne modtage min helt egen Grumstid-pakke og blive en del at Grums-family. Jeg modtager derved også Grums-nyheder via e-mail. Jeg kan til enhver tid framelde mig Grums Nyhedsmails</p>';
    $content .= '</div>';
    $content .= '</form>';
    $content .= '</section>';
    $content .= '</div>';
    
    return $content;
}

    #First parameter is a self chosen name for a unique short-code. Second parameter is the name of the function that creates the newsletter.
    add_shortcode('show_newsletter', 'newsletter_form');
    
    #Come back later
    add_action('wp_enqueue_scripts','register_style_and_scripts_for_plugin');
    
    function register_style_and_scripts_for_plugin()
    {
        wp_enqueue_style('fontAwesomCDN','https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
        wp_enqueue_style('CustomFontMontserrat','https://fonts.googleapis.com/css?family=Montserrat:300,400,800&display=swap');
        wp_enqueue_style('CustomFontDosisAndJosefinSlab','https://fonts.googleapis.com/css?family=Dosis:400,500|Josefin+Slab:400,600&display=swap');
        wp_enqueue_style('Custom_Stylesheet',plugins_url('/newsletterplugin/css/style.css'));
        wp_deregister_script('jquery');
        wp_enqueue_script('jquery','https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js',array(), null, true);
        wp_enqueue_script('CustomJavaScript',plugins_url('/newsletterplugin/js/script.js'), array(jquery), null, true);
    }
    #indsat for at tjekke om jquery kan virke

   #function wp_deregister_script('jquery')
  # {
		
	#	wp_enqueue_script('jquery','https://code.jquery.com/jquery-3.4.1.min.js',array(), null,'true');
		
	#	wp_enqueue_script('CustomScript', plugins_url('newsletterplugin/js/script.js'), array('jquery'), null, true);
    
#}
    