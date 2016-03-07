<?php
/**
 * reroot functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package reroot
 */

if ( ! function_exists( 'reroot_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function reroot_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on reroot, use a find and replace
	 * to change 'reroot' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'reroot', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	/*register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'reroot' ),
	) );*/

	 register_nav_menu('mainmenu', 'メインメニュー');

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'reroot_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'reroot_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function reroot_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'reroot_content_width', 640 );
}
add_action( 'after_setup_theme', 'reroot_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function reroot_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'reroot' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'reroot_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function reroot_scripts() {
	wp_enqueue_style( 'reroot-style', get_stylesheet_uri() );

	wp_enqueue_script( 'reroot-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'reroot-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'reroot_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

// スタッフ投稿の追加
add_action( 'init', 'create_post_type' );
function create_post_type() {
	register_post_type( 'stuff', // 投稿タイプ名の定義
		array(
			'labels' => array(
			'name' => __( 'スタッフ一覧' ), // フロントで表示する投稿タイプ名
			'singular_name' => __( 'スタッフ一覧' )
		),
		'public' => true,
		'menu_position' =>5,
    	'supports' => array('title','editor','thumbnail',
      	'custom-fields','excerpt','author','trackbacks',
      	'comments','revisions','page-attributes')
		)
	);
}


/* カスタム投稿タイプの追加 */
add_action( 'init', 'create_post_type2' );
function create_post_type2() {
	register_post_type( 'useful_info', /* post-type */
		array(
			'labels' => array(
			'name' => __( 'お役立ち情報' ),
			'singular_name' => __( 'お役立ち情報' )
		),
		'public' => true,
		'menu_position' =>4,
    	'supports' => array('title','editor','thumbnail',
      	'custom-fields','excerpt','author','trackbacks',
      	'comments','revisions','page-attributes')
    	)
	);
}


//Pagenation
function pagination($pages = '', $range = 2)
{
     $showitems = ($range * 2)+1;//表示するページ数（５ページを表示）

     global $paged;//現在のページ値
     if(empty($paged)) $paged = 1;//デフォルトのページ

     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;//全ページ数を取得
         if(!$pages)//全ページ数が空の場合は、１とする
         {
             $pages = 1;
         }
     }

     if(1 != $pages)//全ページが１でない場合はページネーションを表示する
     {
		 echo "<div class=\"pagenation\">\n";
		 echo "<ul>\n";
		 //Prev：現在のページ値が１より大きい場合は表示
         if($paged > 1) echo "<li class=\"prev\"><a href='".get_pagenum_link($paged - 1)."'>Prev</a></li>\n";

         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                //三項演算子での条件分岐
                echo ($paged == $i)? "<li class=\"active\">".$i."</li>\n":"<li><a href='".get_pagenum_link($i)."'>".$i."</a></li>\n";
             }
         }
		//Next：総ページ数より現在のページ値が小さい場合は表示
		if ($paged < $pages) echo "<li class=\"next\"><a href=\"".get_pagenum_link($paged + 1)."\">Next</a></li>\n";
		echo "</ul>\n";
		echo "</div>\n";
     }
}




