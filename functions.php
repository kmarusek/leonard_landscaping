<?php 

//Load Stylesheets/Scripts
function scripts()
{
        wp_enqueue_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', array(), false, 'all');
        wp_enqueue_style('owl_carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css', array(), false, 'all');
      
        wp_register_style('fa', get_stylesheet_directory_uri().'/src/css/fontawesome.min.css', array(), false, 'all');
        wp_enqueue_style('fa');
      
        wp_register_style('magnific_popup_style', get_stylesheet_directory_uri().'/src/css/magnific-popup.min.css', array(), false, 'all');
        wp_enqueue_style('magnific_popup_style');
      
        wp_register_style('flexslider', get_stylesheet_directory_uri() . '/src/css/flexslide.min.css', array(), false, 'all');
        wp_enqueue_style('flexslider'); 
      
        wp_register_style('isotope', get_stylesheet_directory_uri() . '/src/css/isotope.min.css', array(), false, 'all');
        wp_enqueue_style('isotope');

        wp_register_style('style', get_stylesheet_directory_uri() . '/dist/app.css', [], 1, 'all');
        wp_enqueue_style('style');  

        wp_enqueue_script('jquery');

        wp_enqueue_script('fa_icons', 'https://kit.fontawesome.com/949a866417.js', array(), null, true);
        wp_enqueue_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', array(), null, true);
        wp_enqueue_script('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', array(), null, true);


        wp_register_script('slider', get_template_directory_uri() . '/src/js/jquery.flexslider-min.js', array('jquery'), null, true);
        wp_enqueue_script('slider');

        wp_register_script('isotope', get_template_directory_uri() . '/src/js/jquery.isotope.pkgd.min.js', array('jquery'), false, true);
        wp_enqueue_script('isotope');

        wp_register_script('magnific_popup', get_template_directory_uri().'/src/js/jquery.magnific-popup.min.js', array('jquery'), null, true);
        wp_enqueue_script('magnific_popup');

        wp_register_script('app', get_template_directory_uri() . '/dist/app.js', ['jquery'], 1, true);
        wp_enqueue_script('app');

}
add_action('wp_enqueue_scripts', 'scripts');



//Theme Options
add_theme_support('menus');
// add_theme_support('post-thumbnails');
add_theme_support('widgets');

//Menus
register_nav_menus(

        array(

                'top-menu' => 'Top Menu',
                'mobile-menu' => 'Mobile Menu',
                'footer-menu' => 'Footer Menu',
                'footer-media-menu' => 'Footer Social Media',
        )

);

// Add Span to Sub-Menu Parents for Icon Arrow

      class add_span_walker extends Walker_Nav_Menu {
        function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
            global $wp_query;
            $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
    
            $class_names = '';
    
            $classes = empty( $item->classes ) ? array() : (array) $item->classes;
            $classes[] = 'menu-item-' . $item->ID;
    
            $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
            $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';
    
            $id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
            $id = $id ? ' id="' . esc_attr( $id ) . '"' : '';
    
            $output .= $indent . '<li' . $id . $class_names .'>';
    
            $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
            $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
            $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
            $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
    
            $item_output = $args->before;
            $item_output .= '<a'. $attributes .'>';
            $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
    
            if ( 'mobile-menu' == $args->theme_location ) {
                $submenus = 0 == $depth || 1 == $depth ? get_posts( array( 'post_type' => 'nav_menu_item', 'numberposts' => 1, 'meta_query' => array( array( 'key' => '_menu_item_menu_item_parent', 'value' => $item->ID, 'fields' => 'ids' ) ) ) ) : false;
                $item_output .= ! empty( $submenus ) ? ( 0 == $depth ? '<span class="fas fa-caret-down"></span>' : '<span class="sub-arrow"></span>' ) : '';
            }
            $item_output .= '</a>';
            $item_output .= $args->after;
    
            $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
        }
    }

// Custom Image Sizes
add_image_size('blog-large', 800, 400, true);
add_image_size('blog-small', 300, 200, true);
add_image_size('slider', 500, 500, true);

//WP Hidden Content Editor for Specified Template
add_action( 'admin_init', 'hide_editor' );
 
function hide_editor() {
    $post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
    if( !isset( $post_id ) ) return;
 
    $template_file = get_post_meta($post_id, '_wp_page_template', true);
     
    if($template_file == 'template-gallery.php'){ // edit the template name
        remove_post_type_support('page', 'editor');
    }
}
 
// ACF Options
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(

                array(
                'page_title' => 'Global Sections',
                'menu_title' => 'Global Sections',
                'menu_slug' => 'global-sections',
                'capability' => 'edit_posts',
                'icon_url' => 'dashicons-admin-site-alt2'
                )

        );

        acf_add_options_sub_page( 
                
                array(

                        'page_title' => 'Project Section',
                        'menu_title' => 'Project Section',
                        'parent_slug' => 'global-sections'

                )
        );

        acf_add_options_sub_page( 
                
                array(

                        'page_title' => 'Contact Section',
                        'menu_title' => 'Contact Section',
                        'parent_slug' => 'global-sections'

                )
        );
};

//Custom Post Types

// function projects_post_type()
// {
//         $labels = array(
//                 'name' => __( 'Project Gallery Images' ),
//                 'singular_name' => __( 'Project Gallery Image' ),
//                 'add_new' => __('Add New Project'),
//                 'add_new_item' => __('Add New Project Image'),
//                 'edit_item' => __('Edit Project Image'),
//                 'new_item' => __('New Project Image'),
//                 'view_item' => __('View Project Image'),
//                 'search_items' => __('Search Project Images'),
//                 'not_found' =>  __('No project image found'),
//                 'not_found_in_trash' => __('No project image found in Trash'), 
//                 'parent_item_colon' => ''
//               );
            
//               $args = array(
//                 'labels' => $labels,
//                 'public' => true,
//                 'exclude_from_search' => true,
//                 'publicly_queryable' => true,
//                 'show_ui' => true, 
//                 'query_var' => true,
//                 'menu_icon' => 'dashicons-format-gallery',
//                 'capability_type' => 'post',
//                 'hierarchical' => false,
//                 'menu_position' => null,
//                 // Uncomment the following line to change the slug; 
//                 // You must also save your permalink structure to prevent 404 errors
//                 // 'rewrite' => array( 'slug' => 'our-projects' ),
//                 'has_archive' => false,
//                 'supports' => array('title','editor'),
//                 'taxonomies' => array('category',),
//               ); 
            
//               register_post_type('projects',$args);
// }
// add_action('init', 'projects_post_type');


// function projects_taxonomy()
// {

//         $args = array(

//                 'labels' => array(

//                         'name' => 'Categories',
//                         'singular_name' => 'Category',
//                 ),

//                 'public' => true,
//                 'hierarchical' => true,

//         );

//         register_taxonomy('projects', array('projects'), $args);

// }
// add_action('init', 'projects_taxonomy');

//Contact Form 7

function mod_contact7_form_content( $template, $prop ) { //Modify CF7 Form to fit custom format
        if ( 'form' == $prop ) {
          return implode( '', array(

        '<div class="contact-wrap" id="contact-1">',
                '<div class="form-group row">',
                    '<div class="col-lg-12">',
                        '[text* your-name placeholder"First Name"]',
                    '</div>',
                    '<div class="col-lg-12 mt-3">',
                        '[text* your-name placeholder"Last Name"]',
                    '</div>',
                    '<div class="col-lg-12 mt-3">',
                          '[email* your-email placeholder"Email"]',
                    '</div>',
                    '<div class="col-lg-12 mt-3">',
                          '[tel* your-tel placeholder"Phone Number"]',
                    '</div>',
                    '<div class="col-lg-12 mt-3">',
                         '[text* your-subject placeholder"Subject"]',
                    '</div>',
                '</div>',
                '<div class="form-group">',
                    '[textarea* your-message placeholder"Message/Prayer Request"]',
                '</div>',
                '<div class="form-group">',
                        '[submit class:btn class:btn-success class:btn-block "Send"]',
                '</div>',    
        '</div>'
          ) );
        } else {
          return $template;
        } 
      }
      add_filter(
        'wpcf7_default_template',
        'mod_contact7_form_content',
        10,
        2
      );

function mod_contact7_form_title( $template ) {// Adds title for CF7 hook to bypass ID
        $template->set_title( 'Contact Form' );
        return $template;
      }
      add_filter(
        'wpcf7_contact_form_default_pack',
        'mod_contact7_form_title'
      );


//Change Admin Logo/Background
function my_login_admin() { ?>
        <style type="text/css">
         body.login.js.login-action-login.wp-core-ui {
                background-color: #111111;
            }
            #login h1 a, .login h1 a {
                width: 100%;
                background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/logo_min.png);
                background-repeat: no-repeat;
                background-size: 100% 100%;
            }
        </style>
    <?php }
    add_action( 'login_enqueue_scripts', 'my_login_admin' );