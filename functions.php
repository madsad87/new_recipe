<?php
/**
 * Genesis Sample.
 *
 * This file adds functions to the Genesis Sample Theme.
 *
 * @package Genesis Sample
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://www.studiopress.com/
 */

// Starts the engine.
require_once get_template_directory() . '/lib/init.php';

// Sets up the Theme.
require_once get_stylesheet_directory() . '/lib/theme-defaults.php';

// Sets up Mobile Detect Library
require_once "lib/Mobile_Detect.php";

add_action( 'after_setup_theme', 'genesis_sample_localization_setup' );
/**
 * Sets localization (do not remove).
 *
 * @since 1.0.0
 */
function genesis_sample_localization_setup() {

	load_child_theme_textdomain( genesis_get_theme_handle(), get_stylesheet_directory() . '/languages' );

}

// Adds helper functions.
require_once get_stylesheet_directory() . '/lib/helper-functions.php';

// Adds image upload and color select to Customizer.
require_once get_stylesheet_directory() . '/lib/customize.php';

// Includes Customizer CSS.
require_once get_stylesheet_directory() . '/lib/output.php';

// Adds WooCommerce support.
require_once get_stylesheet_directory() . '/lib/woocommerce/woocommerce-setup.php';

// Adds the required WooCommerce styles and Customizer CSS.
require_once get_stylesheet_directory() . '/lib/woocommerce/woocommerce-output.php';

// Adds the Genesis Connect WooCommerce notice.
require_once get_stylesheet_directory() . '/lib/woocommerce/woocommerce-notice.php';

add_action( 'after_setup_theme', 'genesis_child_gutenberg_support' );
/**
 * Adds Gutenberg opt-in features and styling.
 *
 * @since 2.7.0
 */
function genesis_child_gutenberg_support() { // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedFunctionFound -- using same in all child themes to allow action to be unhooked.
	require_once get_stylesheet_directory() . '/lib/gutenberg/init.php';
}

// Registers the responsive menus.
if ( function_exists( 'genesis_register_responsive_menus' ) ) {
	genesis_register_responsive_menus( genesis_get_config( 'responsive-menus' ) );
}

add_action( 'wp_enqueue_scripts', 'genesis_sample_enqueue_scripts_styles' );
/**
 * Enqueues scripts and styles.
 *
 * @since 1.0.0
 */
function genesis_sample_enqueue_scripts_styles() {

	$appearance = genesis_get_config( 'appearance' );

	wp_enqueue_style(
		genesis_get_theme_handle() . '-fonts',
		$appearance['fonts-url'],
		[],
		genesis_get_theme_version()
	);

	wp_enqueue_style( 'dashicons' );

	if ( genesis_is_amp() ) {
		wp_enqueue_style(
			genesis_get_theme_handle() . '-amp',
			get_stylesheet_directory_uri() . '/lib/amp/amp.css',
			[ genesis_get_theme_handle() ],
			genesis_get_theme_version()
		);
	}

}

add_action( 'after_setup_theme', 'genesis_sample_theme_support', 9 );
/**
 * Add desired theme supports.
 *
 * See config file at `config/theme-supports.php`.
 *
 * @since 3.0.0
 */
function genesis_sample_theme_support() {

	$theme_supports = genesis_get_config( 'theme-supports' );

	foreach ( $theme_supports as $feature => $args ) {
		add_theme_support( $feature, $args );
	}

}

add_action( 'after_setup_theme', 'genesis_sample_post_type_support', 9 );
/**
 * Add desired post type supports.
 *
 * See config file at `config/post-type-supports.php`.
 *
 * @since 3.0.0
 */
function genesis_sample_post_type_support() {

	$post_type_supports = genesis_get_config( 'post-type-supports' );

	foreach ( $post_type_supports as $post_type => $args ) {
		add_post_type_support( $post_type, $args );
	}

}

// Adds image sizes.
add_image_size( 'sidebar-featured', 75, 75, true );
add_image_size( 'genesis-singular-images', 702, 526, true );

// Removes header right widget area.
unregister_sidebar( 'header-right' );

// Removes secondary sidebar.
unregister_sidebar( 'sidebar-alt' );

// Removes site layouts.
genesis_unregister_layout( 'content-sidebar-sidebar' );
genesis_unregister_layout( 'sidebar-content-sidebar' );
genesis_unregister_layout( 'sidebar-sidebar-content' );

// Repositions primary navigation menu.
remove_action( 'genesis_after_header', 'genesis_do_nav' );
add_action( 'genesis_header', 'genesis_do_nav', 12 );

// Repositions the secondary navigation menu.
remove_action( 'genesis_after_header', 'genesis_do_subnav' );
add_action( 'genesis_footer', 'genesis_do_subnav', 10 );

add_filter( 'wp_nav_menu_args', 'genesis_sample_secondary_menu_args' );
/**
 * Reduces secondary navigation menu to one level depth.
 *
 * @since 2.2.3
 *
 * @param array $args Original menu options.
 * @return array Menu options with depth set to 1.
 */
function genesis_sample_secondary_menu_args( $args ) {

	if ( 'secondary' === $args['theme_location'] ) {
		$args['depth'] = 1;
	}

	return $args;

}

add_filter( 'genesis_author_box_gravatar_size', 'genesis_sample_author_box_gravatar' );
/**
 * Modifies size of the Gravatar in the author box.
 *
 * @since 2.2.3
 *
 * @param int $size Original icon size.
 * @return int Modified icon size.
 */
function genesis_sample_author_box_gravatar( $size ) {

	return 90;

}

add_filter( 'genesis_comment_list_args', 'genesis_sample_comments_gravatar' );
/**
 * Modifies size of the Gravatar in the entry comments.
 *
 * @since 2.2.3
 *
 * @param array $args Gravatar settings.
 * @return array Gravatar settings with modified size.
 */
function genesis_sample_comments_gravatar( $args ) {

	$args['avatar_size'] = 60;
	return $args;

}


/*--DEFAULT THEME FUNCTIONS END HERE--**/

/*----- Display Logo before Site Title -----*/

add_action( 'genesis_header', 'ms_site_image', 5 );

/*function ms_site_image() {

	$header_image = '<img src="wp-content/uploads/2020/06/wp-engine-1.svg" alt="" />';

	printf( '<div class="site-image">%s</div>', $header_image );

}*/


/* START Mobile Detect */

// Sets up Mobile Detect Library
require_once "lib/Mobile_Detect.php"; 
$detect = new Mobile_Detect;
 
// Any mobile device (phones or tablets).
if ( $detect->isMobile() ) {
 
}
 
// Any tablet device.
if( $detect->isTablet() ){
 
}
 
// Exclude tablets.
if( $detect->isMobile() && !$detect->isTablet() ){
 
}
 
// Check for a specific platform with the help of the magic methods:
if( $detect->isiOS() ){
 
}
 
if( $detect->isAndroidOS() ){
 
}
 
// Alternative method is() for checking specific properties.
// WARNING: this method is in BETA, some keyword properties will change in the future.
$detect->is('Chrome');
$detect->is('iOS');
$detect->is('UC Browser');
// [...]
 
// Batch mode using setUserAgent():
$userAgents = array(
'Mozilla/5.0 (Linux; Android 4.0.4; Desire HD Build/IMM76D) AppleWebKit/535.19 (KHTML, like Gecko) Chrome/18.0.1025.166 Mobile Safari/535.19',
'BlackBerry7100i/4.1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 VendorID/103',
// [...]
);
foreach($userAgents as $userAgent){
 
  $detect->setUserAgent($userAgent);
  $isMobile = $detect->isMobile();
  $isTablet = $detect->isTablet();
  // Use the force however you want.
 
}
 
// Get the version() of components.
// WARNING: this method is in BETA, some keyword properties will change in the future.
$detect->version('iPad'); // 4.3 (float)
$detect->version('iPhone'); // 3.1 (float)
$detect->version('Android'); // 2.1 (float)
$detect->version('Opera Mini'); // 5.0 (float)
// [...]

/* END Mobile Detect */

/*

add_action( 'genesis_header', 'ms_site_image', 5 );

/*include 'lib/Mobile_Detect.php';*/
function ms_site_image() {
	$detect = new Mobile_Detect();

if ($detect->isMobile()) {
	$header_image = '<img src="/wp-content/uploads/2020/07/22-3.png" alt="" />';
	
	printf( '<div class="site-image">%s</div>', $header_image );
}
else if ($header_image = '<img src="/wp-content/uploads/2020/06/wp-engine-1.svg" alt="" />') {
	
	printf( '<div class="site-image">%s</div>', $header_image );
}
}

add_action( 'wp_enqueue_scripts', 'custom_load_font_awesome' );
/**
 * Enqueue Font Awesome.
 */
function custom_load_font_awesome() {

    wp_enqueue_style( 'font-awesome-free', '//use.fontawesome.com/releases/v5.2.0/css/all.css' );

}


//Remove Entry Title from Posts
add_action( 'loop_start', 'remove_titles_all_single_posts' );
function remove_titles_all_single_posts() {
    if ( is_singular('post') ) {
        remove_action( 'genesis_entry_header', 'genesis_do_post_title' );
    }
}

// Remove site footer.
remove_action( 'genesis_footer', 'genesis_footer_markup_open', 5 );
remove_action( 'genesis_footer', 'genesis_do_footer' );
remove_action( 'genesis_footer', 'genesis_footer_markup_close', 15 );

// Customize site footer
add_action( 'genesis_footer', 'sp_custom_footer' );
function sp_custom_footer() { ?>

	<div class="site-footer">
		<div class="wrap">
			<img src="/wp-content/uploads/2020/06/wp-engine-1.svg" alt="" style="width: 200px; height:50px; display: block; margin: 0; float: left; padding-top: 13px;"> 
			<h1 class="site-title title-area" itemprop="headline" style="width: auto;">
				<a href="http://representscook.local/" >| Cooking with Culture</a>
			</h1>
			
			<div style="width: 320px; height:50px; display: block; margin: 0; float: right; padding-top: 13px; margin: 0 4% 0 4%;">
			
			<ul id="menu-my-custom-menu" class="menu genesis-nav-menu menu-primary js-superfish sf-js-enabled sf-arrows" style="touch-action: pan-y; display: flex; justify-content: space-around;">
				<li id="menu-item-20" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-20">
					<a href="http://representscook.local/recipes/" itemprop="url">
						<span itemprop="name">Recipes</span>
					</a>
				</li>
				<li id="menu-item-19" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19">
					<a href="http://representscook.local/stories/" itemprop="url">
						<span itemprop="name">Stories</span>
					</a>
				</li>
				<li id="menu-item-18" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18">
					<a href="http://representscook.local/submit/" itemprop="url">
						<span itemprop="name">Submit</span>
					</a>
				</li>
			</ul>
			<p>© 2020 wpe engine all rights reserved</p>
			</div>
			<div style="float: right;">
			<ul class="alignright" style="padding-top: 30px;">
	<li class="ssi-facebook ms-social-icon">
		<a href="#">
			<svg role="img" class="social-facebook" aria-labelledby="social-facebook-3">
				<title id="social-facebook-3">Facebook</title>
				<use xlink:href="http://representscook.local/wp-content/plugins/simple-social-icons/symbol-defs.svg#social-facebook"></use>
			</svg>
		</a>
	</li>
	<li class="ssi-instagram ms-social-icon">
		<a href="#">
			<svg role="img" class="social-instagram" aria-labelledby="social-instagram-3">
				<title id="social-instagram-3">Instagram</title>
				<use xlink:href="http://representscook.local/wp-content/plugins/simple-social-icons/symbol-defs.svg#social-instagram"></use>
			</svg>
		</a>
	</li>
	<li class="ssi-rss ms-social-icon">
		<a href="#">
			<svg role="img" class="social-rss" aria-labelledby="social-rss-3">
				<title id="social-rss-3">RSS</title>
				<use xlink:href="http://representscook.local/wp-content/plugins/simple-social-icons/symbol-defs.svg#social-rss"></use>
			</svg>
		</a>
	</li>
</ul>
			</div>
		</div>
	</div>


	
<?php
}

