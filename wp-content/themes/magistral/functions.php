<?php
/**
 * magistral functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package magistral
 */

if ( ! function_exists( 'magistral_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function magistral_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on magistral, use a find and replace
		 * to change 'magistral' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'magistral', get_template_directory() . '/languages' );

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



		// class CSS_Menu_Walker extends Walker {
		// 	var $db_fields = array('parent' => 'menu_item_parent', 'id' => 'db_id');
			
		// 	function start_lvl(&$output, $depth = 0, $args = array()) {
		// 		$indent = str_repeat("\t", $depth);
		// 		$output .= "\n$indent<ul>\n";
		// 	}
			
		// 	function end_lvl(&$output, $depth = 0, $args = array()) {
		// 		$indent = str_repeat("\t", $depth);
		// 		$output .= "$indent</ul>\n";
		// 	}
			
		// 	function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
			
		// 		global $wp_query;
		// 		$indent = ($depth) ? str_repeat("\t", $depth) : '';
		// 		$class_names = $value = '';
		// 		$classes = empty($item->classes) ? array() : (array) $item->classes;
				
		// 		/* Добавление активного класса */
		// 		if (in_array('current-menu-item', $classes)) {
		// 			$classes[] = 'active';
		// 			unset($classes['current-menu-item']);
		// 		}
				
		// 		/* Проверка наличия дочерних элементов */
		// 		$children = get_posts(array('post_type' => 'nav_menu_item', 'nopaging' => true, 'numberposts' => 1, 'meta_key' => '_menu_item_menu_item_parent', 'meta_value' => $item->ID));
		// 		if (!empty($children)) {
		// 			$classes[] = 'has-sub';
		// 		}
				
		// 		$class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
		// 		$class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';
				
		// 		$id = apply_filters('nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args);
		// 		$id = $id ? ' id="' . esc_attr($id) . '"' : '';
				
		// 		$output .= $indent . '<li' . $id . $value . $class_names .'>';
				
		// 		$attributes  = ! empty($item->attr_title) ? ' title="'  . esc_attr($item->attr_title) .'"' : '';
		// 		$attributes .= ! empty($item->target)     ? ' target="' . esc_attr($item->target    ) .'"' : '';
		// 		$attributes .= ! empty($item->xfn)        ? ' rel="'    . esc_attr($item->xfn       ) .'"' : '';
		// 		$attributes .= ! empty($item->url)        ? ' href="'   . esc_attr($item->url       ) .'"' : '';
				
		// 		$item_output = $args->before;
		// 		$item_output .= '<a'. $attributes .'><span>';
		// 		$item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;
		// 		$item_output .= '</span></a>';
		// 		$item_output .= $args->after;
				
		// 		$output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
		// 	}
			
		// 	function end_el(&$output, $item, $depth = 0, $args = array()) {
		// 		$output .= "</li>\n";
		// 	}
		// }







		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			// 'menu-1' => esc_html__( 'Primary', 'magistral' )
			'primary' => __( 'Primary Menu', 'magistral' ), 
			'bottom' => 'Меню в подвале',
			'left_menu' => 'Меню - Продукция'
		) );

		add_filter('wp_nav_menu_args', 'my_wp_nav_menu_args');

		function my_wp_nav_menu_args($args = ''){
			$args['menu'] = 'Primary Menu';
			return $args;

		};

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

		// Set up the WordPress core custom background feature.
		// add_theme_support( 'custom-background', apply_filters( 'magistral_custom_background_args', array(
		// 	'default-color' => 'ffffff',
		// 	'default-image' => '',
		// ) ) );

		// Add theme support for selective refresh for widgets.

		add_theme_support( 'custom-background',  array(
			'default-color' => '#EEEEEE',
			'default-image' => get_template_directory_uri() . '/img/bg.jpg'
		)
);

	add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'magistral_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
 
function magistral_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'magistral_content_width', 640 );
}
add_action( 'after_setup_theme', 'magistral_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */

 
function magistral_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'magistral' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'magistral' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'magistral_widgets_init' );

/**
 * Enqueue scripts and styles.
 */

function magistral_scripts() {
	wp_enqueue_style( 'magistral-style', get_stylesheet_uri() );

	wp_enqueue_script( 'magistral-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'magistral-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'magistral_scripts' );


function magistral_customize_register( $wp_customize ) {
	
	$wp_customize->add_section('section_block', array(
		'title' => __('Настройки сайта','magistral'),
		'priority' => 30,
	));

	$wp_customize->add_setting('phone1', array(
		'default' => __('', 'magistral'),
		'transport' => 'refresh',
	));
	$wp_customize->add_control('phone1', array(
		'label' => __('Телефон 1', 'magistral'),
		'section' => 'section_block',
		'settings' => 'phone1',
		'type' => 'text',
	));

	$wp_customize->add_setting('phone2', array(
		'default' => __('', 'magistral'),
		'transport' => 'refresh',
	));
	$wp_customize->add_control('phone2', array(
		'label' => __('Телефон 2', 'magistral'),
		'section' => 'section_block',
		'settings' => 'phone2',
		'type' => 'text',
	));

	$wp_customize->add_setting('title_top', array(
		'default' => __('', 'magistral'),
		'transport' => 'refresh',
	));
	$wp_customize->add_control('title_top', array(
		'label' => __('Заголовок сайта', 'magistral'),
		'section' => 'section_block',
		'settings' => 'title_top',
		'type' => 'text',
	));

	$wp_customize->add_setting('title_top_text', array(
		'default' => __('', 'magistral'),
		'transport' => 'refresh',
	));
	$wp_customize->add_control('title_top_text', array(
		'label' => __('Подзаголовок сайта', 'magistral'),
		'section' => 'section_block',
		'settings' => 'title_top_text',
		'type' => 'text',
	));


// 	$wp_customize->add_setting('img-upload');
// 	$wp_customize->add_control(
// 		new WP_Customize_Image_Control($wp_customize, 'img-upload', array(
// 			'label' => __('Загрузка изображения 1', 'magistral'),			
// 				'section' => 'example_section_one',
// 				'settings' => 'img-upload'
// 		)
// 	)
// );

$wp_customize->add_setting('feature_product_one', array(
	'default-image' => get_template_directory_uri() . '/assest/imgs/featureProducts/product1.png',
	'transport'     => 'refresh',
	'height'        => 180,
	'width'        => 195,
));

$wp_customize->add_setting('feature_product_two', array(
	'default-image' => get_template_directory_uri() . '/assest/imgs/featureProducts/product1.png',
	'transport'     => 'refresh',
	'height'        => 132,
	'width'        => 195,
));

$wp_customize->add_setting('feature_product_three', array(
	'default-image' => get_template_directory_uri() . '/assest/imgs/featureProducts/product1.png',
	'transport'     => 'refresh',
	'height'        => 132,
	'width'        => 195,
));

$wp_customize->add_setting('feature_product_four', array(
	'default-image' => get_template_directory_uri() . '/assest/imgs/featureProducts/product1.png',
	'transport'     => 'refresh',
	'height'        => 132,
	'width'        => 195,
));

$wp_customize->add_setting('feature_product_five', array(
	'default-image' => get_template_directory_uri() . '/assest/imgs/featureProducts/product1.png',
	'transport'     => 'refresh',
	'height'        => 132,
	'width'        => 195,
));

$wp_customize->add_setting('feature_product_six', array(
	'default-image' => get_template_directory_uri() . '/assest/imgs/featureProducts/product1.png',
	'transport'     => 'refresh',
	'height'        => 132,
	'width'        => 195,
));

$wp_customize->add_setting('feature_product_seven', array(
	'default-image' => get_template_directory_uri() . '/assest/imgs/featureProducts/product1.png',
	'transport'     => 'refresh',
	'height'        => 132,
	'width'        => 195,
));

$wp_customize->add_setting('feature_product_eight', array(
	'default-image' => get_template_directory_uri() . '/assest/imgs/featureProducts/product1.png',
	'transport'     => 'refresh',
	'height'        => 132,
	'width'        => 195,
));

$wp_customize->add_section('feature_images', array(
	'title'           => __('Наша продукция', 'magistral'),
	'description'     => __('тут вы можете редактировать картинки и названия ссылок'), 
	'priority'        => 70,
	'active_callback' => 'is_front_page',
));

// ####### настройки для блока - наши услуги ###### //

$wp_customize->add_setting('feature_product_one_text', array(
	'default' => __('', 'magistral'),
	'transport' => 'refresh',
));

$wp_customize->add_setting('feature_product_one_text_url', array(
	'default' => __('', 'magistral'),
	'transport' => 'refresh',
));

$wp_customize->add_setting('feature_product_two_text', array(
	'default' => __('', 'magistral'),
	'transport' => 'refresh',
));

$wp_customize->add_setting('feature_product_two_text_url', array(
	'default' => __('', 'magistral'),
	'transport' => 'refresh',
));

$wp_customize->add_setting('feature_product_three_text', array(
	'default' => __('', 'magistral'),
	'transport' => 'refresh',
));

$wp_customize->add_setting('feature_product_three_text_url', array(
	'default' => __('', 'magistral'),
	'transport' => 'refresh',
));

$wp_customize->add_setting('feature_product_four_text', array(
	'default' => __('', 'magistral'),
	'transport' => 'refresh',
));

$wp_customize->add_setting('feature_product_four_text_url', array(
	'default' => __('', 'magistral'),
	'transport' => 'refresh',
));

$wp_customize->add_setting('feature_product_five_text', array(
	'default' => __('', 'magistral'),
	'transport' => 'refresh',
));

$wp_customize->add_setting('feature_product_five_text_url', array(
	'default' => __('', 'magistral'),
	'transport' => 'refresh',
));

$wp_customize->add_setting('feature_product_six_text', array(
	'default' => __('', 'magistral'),
	'transport' => 'refresh',
));

$wp_customize->add_setting('feature_product_six_text_url', array(
	'default' => __('', 'magistral'),
	'transport' => 'refresh',
));

$wp_customize->add_setting('feature_product_seven_text', array(
	'default' => __('', 'magistral'),
	'transport' => 'refresh',
));

$wp_customize->add_setting('feature_product_seven_text_url', array(
	'default' => __('', 'magistral'),
	'transport' => 'refresh',
));


$wp_customize->add_setting('feature_product_eight_text', array(
	'default' => __('', 'magistral'),
	'transport' => 'refresh',
));

$wp_customize->add_setting('feature_product_eight_text_url', array(
	'default' => __('', 'magistral'),
	'transport' => 'refresh',
));


$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'feature_product_one_control', array(
	'label' => __('Блок 1', 'magistral'),
	'section' => 'feature_images',
	'settings' => 'feature_product_one',
)));

$wp_customize->add_control('feature_product_one_control_text_title', array(
	'label' => __('введите название для ссылки', 'magistral'),
	'section' => 'feature_images',
	'settings' => 'feature_product_one_text',
	'type' => 'text',
));


$wp_customize->add_control('feature_product_one_control_text_url', array(
	'label' => __('введите адрес страницы', 'magistral'),
	'section' => 'feature_images',
	'settings' => 'feature_product_one_text_url',
	'type' => 'text',
));


$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'feature_product_two_control', array(
	'label' => __('Блок 2', 'magistral'),
	'section' => 'feature_images',
	'settings' => 'feature_product_two',
))); 

$wp_customize->add_control('feature_product_two_control_text_title', array(
	'label' => __('введите название для ссылки', 'magistral'),
	'section' => 'feature_images',
	'settings' => 'feature_product_two_text',
	'type' => 'text',
));


$wp_customize->add_control('feature_product_two_control_text_url', array(
	'label' => __('введите адрес страницы', 'magistral'),
	'section' => 'feature_images',
	'settings' => 'feature_product_two_text_url',
	'type' => 'text',
));

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'feature_product_three_control', array(
	'label' => __('Блок 3', 'magistral'),
	'section' => 'feature_images',
	'settings' => 'feature_product_three',
)));

$wp_customize->add_control('feature_product_three_control_text_title', array(
	'label' => __('введите название для ссылки', 'magistral'),
	'section' => 'feature_images',
	'settings' => 'feature_product_three_text',
	'type' => 'text',
));


$wp_customize->add_control('feature_product_three_control_text_url', array(
	'label' => __('введите адрес страницы', 'magistral'),
	'section' => 'feature_images',
	'settings' => 'feature_product_three_text_url',
	'type' => 'text',
));

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'feature_product_four_control', array(
	'label' => __('Блок 4', 'magistral'),
	'section' => 'feature_images',
	'settings' => 'feature_product_four',
)));

$wp_customize->add_control('feature_product_four_control_text_title', array(
	'label' => __('введите название для ссылки', 'magistral'),
	'section' => 'feature_images',
	'settings' => 'feature_product_four_text',
	'type' => 'text',
));


$wp_customize->add_control('feature_product_four_control_text_url', array(
	'label' => __('введите адрес страницы', 'magistral'),
	'section' => 'feature_images',
	'settings' => 'feature_product_four_text_url',
	'type' => 'text',
));

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'feature_product_five_control', array(
	'label' => __('Блок 5', 'magistral'),
	'section' => 'feature_images',
	'settings' => 'feature_product_five',
))); 

$wp_customize->add_control('feature_product_five_control_text_title', array(
	'label' => __('введите название для ссылки', 'magistral'),
	'section' => 'feature_images',
	'settings' => 'feature_product_five_text',
	'type' => 'text',
));


$wp_customize->add_control('feature_product_five_control_text_url', array(
	'label' => __('введите адрес страницы', 'magistral'),
	'section' => 'feature_images',
	'settings' => 'feature_product_five_text_url',
	'type' => 'text',
));

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'feature_product_six_control', array(
	'label' => __('Блок 6', 'magistral'),
	'section' => 'feature_images',
	'settings' => 'feature_product_six',
))); 

$wp_customize->add_control('feature_product_six_control_text_title', array(
	'label' => __('введите название для ссылки', 'magistral'),
	'section' => 'feature_images',
	'settings' => 'feature_product_six_text',
	'type' => 'text',
));


$wp_customize->add_control('feature_product_six_control_text_url', array(
	'label' => __('введите адрес страницы', 'magistral'),
	'section' => 'feature_images',
	'settings' => 'feature_product_six_text_url',
	'type' => 'text',
));

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'feature_product_seven_control', array(
	'label' => __('Блок 7', 'magistral'),
	'section' => 'feature_images',
	'settings' => 'feature_product_seven',
))); 

$wp_customize->add_control('feature_product_seven_control_text_title', array(
	'label' => __('введите название для ссылки', 'magistral'),
	'section' => 'feature_images',
	'settings' => 'feature_product_seven_text',
	'type' => 'text',
));


$wp_customize->add_control('feature_product_seven_control_text_url', array(
	'label' => __('введите адрес страницы', 'magistral'),
	'section' => 'feature_images',
	'settings' => 'feature_product_seven_text_url',
	'type' => 'text',
));

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'feature_product_eight_control', array(
	'label' => __('Блок 8', 'magistral'),
	'section' => 'feature_images',
	'settings' => 'feature_product_eight',
))); 

$wp_customize->add_control('feature_product_eight_control_text_title', array(
	'label' => __('введите название для ссылки', 'magistral'),
	'section' => 'feature_images',
	'settings' => 'feature_product_eight_text',
	'type' => 'text',
));


$wp_customize->add_control('feature_product_eight_control_text_url', array(
	'label' => __('введите адрес страницы', 'magistral'),
	'section' => 'feature_images',
	'settings' => 'feature_product_eight_text_url',
	'type' => 'text',
));



	// НАША ПРОДУКЦИЯ

	$wp_customize->add_setting('productions', array(
		'default' => __('', 'magistral'),
		'transport' => 'refresh',
	));
	$wp_customize->add_control('productions', array(
		'label' => __('Наша продукция', 'magistral'),
		'section' => 'section_block',
		'settings' => 'productions',
		'type' => 'text',
	));

	$wp_customize->add_setting( 'custom_field' , array(
		'default' => 'Default value',
		'type' => 'theme_mod',
		'sanitize_callback' => 'our_sanitize_function',
	) );

};

add_action( 'customize_register', 'magistral_customize_register' );


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
// require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

