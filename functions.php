<?php

require get_theme_file_path('inc/logo.php');
// jpFooter() function
require get_theme_file_path('inc/footer.php');
// jpHeader() function
require get_theme_file_path('inc/header.php');
// customHelperfunctions
require get_theme_file_path('inc/helpfulFunctions.php');

// Clean up wordpres <head>
remove_action('wp_head', 'rsd_link'); // remove really simple discovery link
remove_action('wp_head', 'wp_generator'); // remove wordpress version
remove_action('wp_head', 'feed_links', 2); // remove rss feed links (make sure you add them in yourself if youre using feedblitz or an rss service)
remove_action('wp_head', 'feed_links_extra', 3); // removes all extra rss feed links
remove_action('wp_head', 'index_rel_link'); // remove link to index page
remove_action('wp_head', 'wlwmanifest_link'); // remove wlwmanifest.xml (needed to support windows live writer)
remove_action('wp_head', 'start_post_rel_link', 10, 0); // remove random post link
remove_action('wp_head', 'parent_post_rel_link', 10, 0); // remove parent post link
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); // remove the next and previous post links
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);

/**
 * Theme assets
 */
// Font Awesome CSS Pro
function hook_fa()
{ ?>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-j8y0ITrvFafF4EkV1mPW0BKm6dp3c+J9Fky22Man50Ofxo2wNe5pT1oZejDH9/Dt" crossorigin="anonymous">
    <?php

}
// register scripts and stylesheets
add_action('wp_head', 'hook_fa');

add_action('wp_enqueue_scripts', function () {
    $manifest = json_decode(file_get_contents('build/assets.json', true));
    $main = $manifest->main;
    wp_enqueue_style('theme-css', get_template_directory_uri() . "/build/" . $main->css, false, null);
    wp_enqueue_script('theme-js', get_template_directory_uri() . "/build/" . $main->js, ['jquery'], null, true);
}, 100);

/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init()
{

    register_sidebar(array(
        'name' => 'Footer Menu',
        'id' => 'footer-menu',
        'description' => 'This will be displayed as columns in the footer.',
        'before_widget' => '<div class="footer-column color--dark-secondary"><div class="footer-column-inner">',
        'after_widget' => '</div></div>',
        'before_title' => '<h5 class="footer-heading">',
        'after_title' => '</h5>',
    ));

}
add_action('widgets_init', 'arphabet_widgets_init');

/**
 * Theme setup
 */
add_action('after_setup_theme', function () {
    /**
     * Enable plugins to manage the document title
     * @link https://developer.wordpress.org/reference/functions/add_theme_support/#title-tag
     */
    add_theme_support('title-tag');
    /**
     * Register navigation menus
     * @link https://developer.wordpress.org/reference/functions/register_nav_menus/
     */
    register_nav_menus([
        'primary_navigation' => __('Primary Navigation', 'mini')
    ]);
    /**
     * Enable post thumbnails
     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     */
    add_theme_support('post-thumbnails');
    /**
     * Enable HTML5 markup support
     * @link https://developer.wordpress.org/reference/functions/add_theme_support/#html5
     */
    add_theme_support('html5', ['caption', 'comment-form', 'comment-list', 'gallery', 'search-form']);
    /**
     * Enable selective refresh for widgets in customizer
     * @link https://developer.wordpress.org/themes/advanced-topics/customizer-api/#theme-support-in-sidebars
     */
    // add_theme_support('customize-selective-refresh-widgets');


}, 20);


add_action('rest_api_init', function () {
    $namespace = 'presspack/v1';
    register_rest_route($namespace, '/path/(?P<url>.*?)', array(
        'methods' => 'GET',
        'callback' => 'get_post_for_url',
    ));
});

/**
 * This fixes the wordpress rest-api so we can just lookup pages by their full
 * path (not just their name). This allows us to use React Router.
 *
 * @return WP_Error|WP_REST_Response
 */
function get_post_for_url($data)
{
    $postId = url_to_postid($data['url']);
    $postType = get_post_type($postId);
    $controller = new WP_REST_Posts_Controller($postType);
    $request = new WP_REST_Request('GET', "/wp/v2/{$postType}s/{$postId}");
    $request->set_url_params(array('id' => $postId));
    return $controller->get_item($request);
}

add_filter('body_class', 'add_slug_to_body_class'); // Add slug to body class (Starkers build)

// Add page slug to body class, love this - Credit: Starkers Wordpress Theme
function add_slug_to_body_class($classes)
{
    global $post;
    if (is_home()) {
        $key = array_search('blog', $classes);
        if ($key > -1) {
            unset($classes[$key]);
        }
    } elseif (is_page()) {
        $classes[] = sanitize_html_class($post->post_name);
    } elseif (is_singular()) {
        $classes[] = sanitize_html_class($post->post_name);
    }
    return $classes;
}
