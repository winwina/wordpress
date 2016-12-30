<?php
if ( ! function_exists( 'fashion_store_lite_setup' ) ) :
function fashion_store_lite_setup() {
	load_theme_textdomain( 'fashion-store-lite', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' ); 
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',	) );
	register_nav_menu('header-menu', __( 'Header Menu', 'fashion-store-lite' ));
}
endif;
add_action( 'after_setup_theme', 'fashion_store_lite_setup' );

function fashion_store_lite_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'fashion_store_lite_content_width', 640 );
}
add_action( 'after_setup_theme', 'fashion_store_lite_content_width', 0 );
function fashion_store_lite_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Right', 'fashion-store-lite' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'fashion-store-lite' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Header 1', 'fashion-store-lite' ),
		'id'            => 'sidebar-2',
		'description'   => esc_html__( 'Add widgets here.', 'fashion-store-lite' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Header 2', 'fashion-store-lite' ),
		'id'            => 'sidebar-3',
		'description'   => esc_html__( 'Add widgets here.', 'fashion-store-lite' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Header 3', 'fashion-store-lite' ),
		'id'            => 'sidebar-4',
		'description'   => esc_html__( 'Add widgets here.', 'fashion-store-lite' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer-1', 'fashion-store-lite' ),
		'id'            => 'sidebar-5',
		'description'   => esc_html__( 'Add widgets here.', 'fashion-store-lite' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer-2', 'fashion-store-lite' ),
		'id'            => 'sidebar-6',
		'description'   => esc_html__( 'Add widgets here.', 'fashion-store-lite' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer-3', 'fashion-store-lite' ),
		'id'            => 'sidebar-7',
		'description'   => esc_html__( 'Add widgets here.', 'fashion-store-lite' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer-4', 'fashion-store-lite' ),
		'id'            => 'sidebar-8',
		'description'   => esc_html__( 'Add widgets here.', 'fashion-store-lite' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'fashion_store_lite_widgets_init' );










function fashion_store_lite_scripts() {
		wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array( ), false, 'all' );
		wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap-theme.css', array( ), false, 'all' );
		wp_enqueue_script('jquery');
		wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array( ), false, 'all' );
		wp_enqueue_style( 'fashion-store-style', get_stylesheet_uri() );
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'fashion_store_lite_scripts' );


require get_template_directory() . '/inc/template-tags.php';
add_action( 'after_setup_theme', 'fashion_store_lite_woocommerce_support' );
function fashion_store_lite_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}









function fashion_store_lite_menu() {
	add_theme_page('Fashion Store Lite Setup', 'Theme Help', 'edit_theme_options', 'fashion-store-lite', 'fashion_store_lite_menu_page');
}
add_action('admin_menu', 'fashion_store_lite_menu');
function fashion_store_lite_menu_page() {
echo '
<br>
<center><h1 style="font-size:79px;">' . __( 'Fashion Store Lite', 'fashion-store-lite' ) . '</h1></ceter>
<br><br><br>
	<center><h1>' . __( 'Max Mega Menu', 'fashion-store-lite' ) . '</h1></ceter>
<br>
Installation:<br>
1. Go to the Plugins Menu in WordPress<br>
2. Search for "Max Mega Menu"<br>
3. Click "Install"<br><br>

<h2><center>' . __( 'Documentation', 'fashion-store-lite' ) . '  <a href="https://www.megamenu.com/documentation/mega-menus/">' . __( 'https://www.megamenu.com/documentation/mega-menus/', 'fashion-store-lite' ) . '</a></center></h2><br><br>

<center><img src="' . get_template_directory_uri() . '/images/max-mega-menu-1.jpg"></center>
<br><br>
<center><img src="' . get_template_directory_uri() . '/images/max-mega-menu-2.jpg"></center>
<br><br>
<center><img src="' . get_template_directory_uri() . '/images/max-mega-menu-3.jpg"></center>
<br>

 


';
}