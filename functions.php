<?php

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;


$picostrap_includes = array(
	'/theme-settings.php',                  // Initialize theme default settings.
	'/setup.php',                           // Theme setup and custom theme supports.
	'/widgets.php',                         // Register widget area.
	'/clean-head.php',							// Eliminates useless meta tags, emojis, etc            
	'/enqueues.php', 							// Enqueue scripts and styles.     
	'/template-tags.php',                   // Custom template tags for this theme.
	'/pagination.php',                      // Custom pagination for this theme.
	//'/hooks.php',                           // Custom hooks.
	//'/extras.php',                          // Custom functions that act independently of the theme templates.
	//'/customizer.php',                      // Customizer additions.
	'/custom-comments.php',                 // Custom Comments file.
	//'/jetpack.php',                         // Load Jetpack compatibility file.
	'/bootstrap-navwalker.php',    			// Load custom WordPress nav walker. 
	'/woocommerce.php',                     // Load WooCommerce functions.
	'/editor.php',                          // Load Editor functions. 
	'/customizer-assets/customizer.php',	//Defines Customizer options
	'/customizer-assets/scss-compiler.php', //To interface the Customizer with the SCSS php compiler	 
	'/customizer-assets/livereload.php', //To automatically trigger SCSS compiling when source sass changes	 
	'/options-page.php',                  // Load theme options page. 

);

foreach ( $picostrap_includes as $file ) {
	require_once get_template_directory() . '/inc' . $file;
}

function post_categories_badges($classes) {
	$categories = get_the_category();
	foreach($categories as $category) {
		 $classes[] = $category->slug;
	}
	return $classes;
}
add_filter('post_class', 'post_categories_badges');

if ( function_exists('register_sidebar') ) {

	//Código para o widget.
	register_sidebar(array(
		'name' => __( "Área widget custom" ),
		'id' => 'wp-custom-widgets',
		'description' => __( 'Area de widget' ),
		'before_widget' => '<div id="%1$s" class="%2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));

}

//PURELY OPT-IN FEATURES ////////////////

//OPTIONAL: DISABLE WORDPRESS COMMENTS
if (get_theme_mod("singlepost_disable_comments") ) require_once locate_template('/inc/opt-in/disable-comments.php'); 

//OPTIONAL: BACK TO TOP
if (get_theme_mod("enable_back_to_top") ) require_once locate_template('/inc/opt-in/back-to-top.php');

//OPTIONAL: LIGHTBOX  
if (get_theme_mod("enable_lightbox") ) require_once locate_template('/inc/opt-in/lightbox.php');
	
//OPTIONAL: DETECT PAGE SCROLL
if (get_theme_mod("enable_detect_page_scroll") ) require_once locate_template('/inc/opt-in/detect-page-scroll.php');

//OPTIONAL: DISABLE GUTENBERG  
if (get_theme_mod("disable_gutenberg") ) require_once locate_template('/inc/opt-in/disable-gutenberg.php');
	
//OPTIONAL: DISABLE WIDGETS BLOCK EDITOR  
if (get_theme_mod("disable_widgets_block_editor") ) require_once locate_template('/inc/opt-in/disable-widgets-block-editor.php');
	
//OPTIONAL: DISABLE XML/RPC
if (get_theme_mod("disable_xml_rpc") ) require_once locate_template('/inc/opt-in/disable-xml-rpc.php');

function lc_block_shortcode($atts, $content = null)
{
	ob_start();
?>
	<div class="lc-block">
		<div class="d-inline-flex">
			<div>
				<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="text-success" viewBox="0 0 16 16" lc-helper="svg-icon">
					<path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z">
					</path>
				</svg>
			</div>

			<div class="ms-2" editable="rich">
				<p><?php echo $content; ?></p>
			</div>
		</div>
	</div>
<?php
	return ob_get_clean();
}
add_shortcode('lc_block', 'lc_block_shortcode');

function custom_card_shortcode($atts) {
	$atts = shortcode_atts(
			array(
					'avatar' => 'https://images.unsplash.com/photo-1527980965255-d3b416303d12?crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8M3x8YXZhdGFyfGVufDB8Mnx8fDE2Mzg4OTExNTE&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=1080&amp;h=1080',
					'name' => 'Nome padrão',
					'comment' => 'Comentário padrão',
			), $atts, 'custom_card'
	);

	ob_start();
	?>
	<div class="col-md-8 col-lg-4 mb-4">
			<div class="card border">
					<div class="card-body py-4">
							<div class="d-flex">
									<img style="width:48px;height:48px" src="<?php echo esc_url($atts['avatar']); ?>" alt="Photo by <?php echo esc_attr($atts['name']); ?>" class="rounded">
									<div class="ps-2">
											<h4 editable="inline" class="rfs-7 ms-2"><?php echo esc_html($atts['name']); ?></h4>
									</div>
							</div>
							<div class="lc-block mt-4 text-muted">
									<div editable="rich">
											<p><?php echo esc_html($atts['comment']); ?></p>
									</div>
									<div class="rating mt-3 text-success">
										<div class="lc-block"> 
											<svg width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" lc-helper="svg-icon">
												<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
											</svg>
											<svg width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" lc-helper="svg-icon">
												<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
											</svg>
											<svg width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" lc-helper="svg-icon">
												<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
											</svg>
											<svg width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" lc-helper="svg-icon">
												<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
											</svg> <svg width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" lc-helper="svg-icon">
												<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
											</svg>
										</div>
									</div>
							</div>
							<!-- O restante do código HTML vai aqui -->
					</div>
			</div>
	</div>
	<?php
	return ob_get_clean();
}
add_shortcode('custom_card', 'custom_card_shortcode');