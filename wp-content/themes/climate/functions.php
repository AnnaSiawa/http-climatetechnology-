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


//// Custom taxonomies
//add_action('init', 'create_faq_group_hierarchical_taxonomy', 0);
//add_action('init', 'create_answer_group_hierarchical_taxonomy', 0);
//
//function create_faq_group_hierarchical_taxonomy()
//{
//    register_taxonomy('faq_group', array('faq'), array(
//        'hierarchical' => true,
//        'labels' => create_taxonomy_labels('FAQ group'),
//        'show_ui' => true,
//        'show_in_rest' => true,
//        'show_admin_column' => true,
//        'query_var' => true,
//        'rewrite' => array('slug' => 'faq-group'),
//    ));
//}
//
//function create_answer_group_hierarchical_taxonomy()
//{
//    register_taxonomy('answer_group', array('answer'), array(
//        'hierarchical' => true,
//        'labels' => create_taxonomy_labels('Answer group'),
//        'show_ui' => true,
//        'show_in_rest' => true,
//        'show_admin_column' => true,
//        'query_var' => true,
//        'rewrite' => array('slug' => 'answer-group'),
//    ));
//}
//
//function create_taxonomy_labels($name)
//{
//    return array(
//        'name' => _x($name . 's', 'taxonomy general name'),
//        'singular_name' => _x($name, 'taxonomy singular name'),
//        'search_items' =>  __('Search ' . $name . 's'),
//        'all_items' => __('All ' . $name . 's'),
//        'parent_item' => __('Parent ' . $name),
//        'parent_item_colon' => __('Parent ' . $name . ': '),
//        'edit_item' => __('Edit ' . $name),
//        'update_item' => __('Update ' . $name),
//        'add_new_item' => __('Add New ' . $name),
//        'new_item_name' => __('New ' . $name . ' name'),
//        'menu_name' => __($name . 's'),
//    );
//}



//
//add_filter('excerpt_length', function () {
//    return 30;
//});
//add_filter('excerpt_more', function ($more) {
//    return '...';
//});
//
//// blog api posts
//add_action('rest_api_init', 'blog_filter_route');
//function blog_filter_route()
//{
//    register_rest_route('blog_filter', 'filter', array(
//        'methods' => 'post',
//        'callback' => 'blog_filter_function',
//        'permission_callback' => '__return_true',
//    ));
//    register_rest_route('blog_filter', 'get_dates', array(
//        'methods' => 'post',
//        'callback' => 'blog_filter_get_dates_function',
//        'permission_callback' => '__return_true',
//    ));
//}
//
//function blog_filter_get_dates_function($data)
//{
//    $posts = get_posts(array(
//        'numberposts' => -1,
//        'category'    => $data['category'],
//        'orderby'     => 'date',
//        'order'       => 'ASC',
//        'post_type'   => 'post',
//        'suppress_filters' => true,
//    ));
//
//    $dates = [];
//    foreach ($posts as $post) {
//        $dateKey = get_the_date('F Y', $post);
//        if (!array_key_exists($dateKey, $dates)) {
//            $dates[$dateKey] = get_the_date('m', $post);
//        }
//    }
//
//    return $dates;
//}
//
//function blog_filter_function($data)
//{
//    $aQrgs = array(
//        'numberposts' => -1,
//        'category'    => $data['category'],
//        'orderby'     => 'date',
//        'order'       => 'DESC',
//        'post_type'   => 'post',
//        'suppress_filters' => true,
//        's' => $data['srch'],
//    );
//
//    if ($data['date'] != 0) {
//        $aQrgs['date_query'] = array(
//            array(
//                'month' => $data['date']
//            ),
//        );
//    }
//
//    $posts = get_posts($aQrgs);
//    $result = '';
//
//    foreach ($posts as $post) {
//        $result .= '<div class="blog-issue">
//                            <div class="blog-issue__image" style="background-image: url(';
//        $result .= get_the_post_thumbnail_url($post->ID, "full");
//        $result .= ')"></div>
//                            <div class="blog-issue__image-line"></div>
//                            <div class="blog-issue__text">
//                                <div class="blog-issue__text_title">';
//        $result .= $post->post_title;
//        $result .= '</div>
//                                <div class="blog-issue__text_text">';
//        $result .=  get_the_excerpt($post->ID);
//        $result .=  '</div>
//                                <div class="blog-issue__text_btn">
//                                    <a href="';
//        $result .= get_post_permalink($post->ID);
//        $result .= '" class="btn btn-color--red">Read More</a>
//                                </div>
//                            </div>
//                        </div>';
//    }
//
//    if (empty($result)) {
//        $result = 'No post found by the specified criteria.';
//    }
//
//    return $result;
//}
//
//// search api endpoint
//add_action('rest_api_init', 'search_route');
//function search_route()
//{
//    register_rest_route('search', 'posts', array(
//        'methods' => 'post',
//        'callback' => 'search_posts_function',
//        'permission_callback' => '__return_true',
//    ));
//}
//
//function search_posts_function($data)
//{
//    $result = [];
//    $keyword = htmlspecialchars($data['query']);
//
//    $query = new WP_Query(array('s' => $keyword));
//    $posts = $query->posts;
//
//    if (count($posts) > 0) {
//        foreach ($posts as $post) {
//            array_push($result, [
//                'href' => get_post_permalink($post->ID),
//                'title' => $post->post_title
//            ]);
//        }
//    }
//
//    return $result;
//}
