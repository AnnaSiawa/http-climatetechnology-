<?php

//use Carbon_Fields\Container;
//use Carbon_Fields\Field;

add_theme_support('post-thumbnails');

// Carbon fields
add_action('after_setup_theme', 'crb_load');
function crb_load()
{
	//require_once('vendor/autoload.php');
	//\Carbon_Fields\Carbon_Fields::boot();
}

// Scripts and styles
function t_climate_theme_scripts_styles()
{
	wp_enqueue_style('index', get_template_directory_uri() . '/dist/index.css');
	wp_enqueue_script('index', get_template_directory_uri() . '/dist/index.js', array('jquery'), true, true); //my js
	if (is_front_page()) {
		wp_add_inline_script('index', getStatesForJS(), 'before');
	}
}
add_action('wp_enqueue_scripts', 't_climate_theme_scripts_styles');

function getStatesForJS()
{
	$res = [];
	$statePosts =  get_posts(array(
		'post_type' => 'states',
		'numberposts' => -1,
	));

	foreach ($statePosts as $state) {
		$res[carbon_get_post_meta($state->ID, 'states-state-id')] = [
			'id' => carbon_get_post_meta($state->ID, 'states-state-id'),
			'permalink' => get_the_permalink($state->ID),
		];
	}

	return 'window.statesJson = ' . json_encode($res);
}

// Контроллер компонентов
require_once __DIR__ . '/components/components-controller.php';
