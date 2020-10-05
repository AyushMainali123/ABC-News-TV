<?php
function appharu_custom_logo_setup() {
	$defaults = array(
	'height'      => 150,
	'width'       => 450,
	'flex-height' => true,
	'flex-width'  => true,
	'header-text' => array( 'site-title', 'site-description' ),
	);
	add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'appharu_custom_logo_setup' );

if ( function_exists( 'add_theme_support' ) ) { 
	add_theme_support( 'post-thumbnails' );
	add_action( 'after_setup_theme', 'create_thumb' );
	function create_thumb() {
		add_image_size( 'thumbnail', 150, 150, true );
		add_image_size( 'medium', 400, 220, true );
		add_image_size( 'large', 768, 768);
	}
}
add_theme_support( 'html5', array(
    'search-form',
    'gallery',
    'caption',
) );
add_theme_support('post-formats', array('video','gallery'));
add_theme_support( 'jetpack-responsive-videos' );
if ( ! isset( $content_width ) ) {
	$content_width = 720;
}
//menu
function register_my_menus() {
	register_nav_menus(
	  array(
		'main-menu' => __( 'Main Menu Header' ),
		'footer-menu' => __( 'Footer Menu' )
	  )
	);
  }
add_action( 'init', 'register_my_menus' );
function wp_get_menu_array($current_menu) {
 
	$array_menu = wp_get_nav_menu_items($current_menu);
	$menu = array();
	foreach ($array_menu as $m) {
		if (empty($m->menu_item_parent)) {
			$menu[$m->ID] = array();
			$menu[$m->ID]['ID']      =   $m->ID;
			$menu[$m->ID]['title']       =   $m->title;
			$menu[$m->ID]['url']         =   $m->url;
			$menu[$m->ID]['children']    =   array();
		}
	}
	$submenu = array();
	foreach ($array_menu as $m) {
		if ($m->menu_item_parent) {
			$submenu[$m->ID] = array();
			$submenu[$m->ID]['ID']       =   $m->ID;
			$submenu[$m->ID]['title']    =   $m->title;
			$submenu[$m->ID]['url']  =   $m->url;
			$menu[$m->menu_item_parent]['children'][$m->ID] = $submenu[$m->ID];
		}
	}
	return $menu;
	 
  }
//registering widgets
function appharu_widgets_init() {
	$widgets = array(
		array('id' => 'sidebar-1','name'=>'Primary Sidebar' ),
		array('id' => 'sidebar-2','name'=>'Homepage Ad' ),
	);
	foreach ($widgets as $widget) {
		register_sidebar( array(
			'name'          => esc_html__( $widget['name'], 'appharu' ),
			'id'            => $widget['id'],
			'description'   => esc_html__( 'Add widgets here.', 'appharu' ),
			'before_widget' => '<section class="widget">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		) );
	}
	
}
add_action( 'widgets_init', 'appharu_widgets_init' );

// Enqueue Styles
function appharu_styles() {
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css',false,'1.1','all' );
	wp_enqueue_style('swiper', 'https://unpkg.com/swiper/swiper-bundle.min.css', array(), '2.2', 'all');
	wp_enqueue_style( 'base', get_template_directory_uri() . '/css/base.css',false,'1.1','all');
	wp_enqueue_style('presenters', get_template_directory_uri() . '/css/presenters.css', false, '1.1', 'all');
	wp_enqueue_style('programs', get_template_directory_uri() . '/css/programs.css', false, '1.1', 'all');
	wp_enqueue_style('widget', get_template_directory_uri() . '/css/widget.css', false, '1.1', 'all');
	wp_enqueue_style('schedules', get_template_directory_uri() . '/css/schedules.css', false, '1.1', 'all');

}

add_action('wp_enqueue_scripts', 'appharu_styles');

// Enqueue Scripts
function appharu_scripts() {

	wp_enqueue_script('jquery');
	wp_enqueue_script( 'font-awesome', 'https://kit.fontawesome.com/7d59914bdd.js', array(), '', false );
	wp_enqueue_script('bootstrap', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js',array(), '4.5', true);
	wp_enqueue_script('swiper', 'https://unpkg.com/swiper/swiper-bundle.min.js', array(), '4.0', true);
	wp_enqueue_script('base', get_template_directory_uri() . '/js/script.js',
	array(), '3.0', true);

}

add_action('wp_enqueue_scripts', 'appharu_scripts');

//Lets add Open Graph Meta Info

function insert_fb_in_head() {
	global $post;
	if ( !is_singular()) //if it is not a post or a page
		return;
        echo '<meta property="fb:admins" content="changingmission"/>';
		echo '<meta property="fb:app_id" content="1774296949456204">';
        echo '<meta property="og:title" content="' . get_the_title() . '"/>';
        echo '<meta property="og:type" content="article"/>';
        echo '<meta property="og:description" content="' . get_the_excerpt() . '"/>';
        echo '<meta property="og:url" content="' . get_permalink() . '"/>';
        echo '<meta property="og:site_name" content="'. get_bloginfo('name') .'"/>';
	if(!has_post_thumbnail( $post->ID )) {
		$default_image= get_stylesheet_directory_uri()."/img/logo.png";
		echo '<meta property="og:image" content="' . $default_image . '"/>';
	}
	else{
		$thumbnail_src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
		echo '<meta property="og:image" content="' . esc_attr( $thumbnail_src[0] ) . '"/>';
	}
	echo "";
}
add_action( 'wp_head', 'insert_fb_in_head', 5 );


?>

