<?php

/**
 * 
 */
class AwesomeScripts
{

	public function __construct()
	{
		add_action('wp_enqueue_scripts', array($this, 'frontendScripts'));
		add_action('wp_enqueue_scripts', array($this, 'frontendStyles'));
	}

	public function frontendScripts()
	{
		global $awesomeTheme;
//		wp_enqueue_script('googleapis-api', 'http://maps.googleapis.com/maps/api/js?libraries=geometry&sensor=false&key=AIzaSyCqoIQ3ttE4fbG2BKgI4mtPM2DgovzJYO0&callback=initMap', array('jquery'), $awesomeTheme->version, true);
		wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery.js', array('jquery'), $awesomeTheme->version, true);
		wp_enqueue_script('jquery-migrate', get_template_directory_uri() . '/assets/js/jquery-migrate.min.js', array('jquery'), $awesomeTheme->version, true);
		wp_enqueue_script('common', get_template_directory_uri() . '/assets/js/common.js', array('jquery'), $awesomeTheme->version, true);
		wp_enqueue_script('util', get_template_directory_uri() . '/assets/js/util.js', array('jquery'), $awesomeTheme->version, true);

		wp_enqueue_script('azexo_vc', get_template_directory_uri() . '/assets/design-construct/js/azexo_vc.js', array('jquery'), $awesomeTheme->version, true);
		wp_enqueue_script('bootstrap-min', get_template_directory_uri() . '/assets/design-construct/js/bootstrap.min.js', array('jquery'), $awesomeTheme->version, true);
		wp_enqueue_script('owl.carousel', get_template_directory_uri() . '/assets/design-construct/js/owl.carousel.min.js', array('jquery'), $awesomeTheme->version, true);
		wp_enqueue_script('jquery-animsition', get_template_directory_uri() . '/assets/design-construct/js/jquery.animsition.min.js', array('jquery'), $awesomeTheme->version, true);
		wp_enqueue_script('cubeportfolio', get_template_directory_uri() . '/assets/design-construct/cubeportfolio/js/jquery.cubeportfolio.min.js', array('jquery'), $awesomeTheme->version, true);
		wp_enqueue_script('jquery-plugins', get_template_directory_uri() . '/assets/design-construct/js/plugins.js', array('jquery'), $awesomeTheme->version, true);
		wp_enqueue_script('blockets', get_template_directory_uri() . '/assets/design-construct/js/blockets.js', array('jquery'), $awesomeTheme->version, true);
//		wp_enqueue_script('lightbox', get_template_directory_uri() . '/assets/design-construct/js/lightbox.js', array('jquery'), $awesomeTheme->version, true);
		wp_enqueue_script('ie10-viewport-bug', get_template_directory_uri() . '/assets/design-construct/js/ie10-viewport-bug-workaround.js', array('jquery'), $awesomeTheme->version, true);
		wp_enqueue_script('simple-likes', get_template_directory_uri() . '/assets/design-construct/js/simple-likes-public.js', array('jquery'), $awesomeTheme->version, true);
		wp_enqueue_script('frontend', get_template_directory_uri() . '/assets/design-construct/js/frontend.js', array('jquery'), $awesomeTheme->version, true);
		wp_enqueue_script('fontend', get_template_directory_uri() . '/assets/js/fontend.js', array('jquery'), $awesomeTheme->version, true);
		wp_enqueue_script('jquery.sticky-kit', get_template_directory_uri() . '/assets/js/jquery.sticky-kit.min.js', array('jquery'), $awesomeTheme->version, true);
		wp_enqueue_script('imagesloaded', get_template_directory_uri() . '/assets/design-construct/js/imagesloaded.min.js', array('jquery'), $awesomeTheme->version, true);
		wp_enqueue_script('background-check', get_template_directory_uri() . '/assets/js/background-check.min.js', array('jquery'), $awesomeTheme->version, true);
		wp_enqueue_script('wp-embed', get_template_directory_uri() . '/assets/design-construct/js/wp-embed.min.js', array('jquery'), $awesomeTheme->version, true);
	}

	public function frontendStyles()
	{
		global $awesomeTheme;
        wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/design-construct/css/bootstrap.min.css', $awesomeTheme->version, true);
        wp_enqueue_style('azexo-et-icons', get_template_directory_uri() . '/assets/design-construct/css/et-icons.css', $awesomeTheme->version, true);
		wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/design-construct/css/font-awesome.min.css', $awesomeTheme->version, true);
		wp_enqueue_style('animsition', get_template_directory_uri() . '/assets/design-construct/css/animsition.css', $awesomeTheme->version, true);
		wp_enqueue_style('animate', get_template_directory_uri() . '/assets/design-construct/css/animate.css', $awesomeTheme->version, true);
		wp_enqueue_style('owl-carousel', get_template_directory_uri() . '/assets/design-construct/owl-carousel/owl.carousel.css', $awesomeTheme->version, true);
		wp_enqueue_style('owl-theme', get_template_directory_uri() . '/assets/design-construct/owl-carousel/owl.theme.css', $awesomeTheme->version, true);
		wp_enqueue_style('cubeportfolio', get_template_directory_uri() . '/assets/design-construct/cubeportfolio/css/cubeportfolio.css', $awesomeTheme->version, true);
		wp_enqueue_style('lightbox', get_template_directory_uri() . '/assets/design-construct/css/lightbox.css', $awesomeTheme->version, true);

        wp_enqueue_style('azexo-skin', get_template_directory_uri() . '/assets/design-construct/css/skin-da45b01e2f.css', $awesomeTheme->version, true);
        wp_enqueue_style('azexo-style-global', get_template_directory_uri() . '/assets/design-construct/css/style.css', $awesomeTheme->version, true);
        wp_enqueue_style('azexo-fonts', get_template_directory_uri() . '/assets/design-construct/css/css', $awesomeTheme->version, true);
        wp_enqueue_style('azexo-style', get_template_directory_uri() . '/assets/css/style.css', $awesomeTheme->version, true);

	}
}
?>
