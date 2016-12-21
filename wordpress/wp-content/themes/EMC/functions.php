<!-- functions.php - Custom functions for the theme. You should leave this alone unless you know PHP and know what you're doing. -->

<?php

// enables custom javascript - delete if necessary
// function add_scriptfilter( $string ) {
//   global $allowedtags;
//   $allowedtags['script'] = array( 'src' =&gt; array () );
//   return $string;
// }
// add_filter( 'pre_kses', 'add_scriptfilter' );


// Add scripts and stylesheets
function EMC_scripts() {
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.6' );
	wp_enqueue_style( 'global', get_template_directory_uri() . '/css/global.css' );
  wp_enqueue_style( 'navbar', get_template_directory_uri() . '/css/navbar.css' );
  wp_enqueue_style( 'footer', get_template_directory_uri() . '/css/footer.css' );
  wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.css' );
  wp_enqueue_style( 'carousel', get_template_directory_uri() . '/css/carousel.css' );
  wp_enqueue_style( 'calendar', get_template_directory_uri() . '/css/calendar.css' );
  wp_enqueue_style( 'essentials', get_template_directory_uri() . '/css/essentials.css' );
  wp_enqueue_style( 'flexslider', get_template_directory_uri() . '/css/flexslider.css' );
  wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css' );
  wp_enqueue_style( 'layerslider', get_template_directory_uri() . '/css/layerslider.css' );
  wp_enqueue_style( 'layout', get_template_directory_uri() . '/css/layout.css' );
  wp_enqueue_style( 'revolution-slider', get_template_directory_uri() . '/css/revolution-slider.css' );
  wp_enqueue_style( 'sky-forms', get_template_directory_uri() . '/css/sky-forms.css' );
  wp_enqueue_style( 'views', get_template_directory_uri() . '/css/views.css' );
  wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js' );
  wp_enqueue_script( 'contract', get_template_directory_uri() . '/js/contract.js' );
  wp_enqueue_script( 'countdown', get_template_directory_uri() . '/js/countdown.js' );
  wp_enqueue_script( 'functions', get_template_directory_uri() . '/js/functions.js' );
  wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/jasny-bootstrap.min.js' );
  wp_enqueue_script( 'revolution_slider', get_template_directory_uri() . '/js/revolution_slider.js' );
  wp_enqueue_script( 'scripts', get_template_directory_uri() . '/plugins/magnific-popup/jquery.magnific-popup.min.js' );
  wp_enqueue_script( 'scripts', get_template_directory_uri() . '/plugins/owl-carousel/owl.carousel.min.js' );
  wp_enqueue_script( 'scripts', get_template_directory_uri() . '/plugins/knob/js/jquery.knob.js' );
  wp_enqueue_script( 'scripts', get_template_directory_uri() . '/plugins/flexslider/jquery.flexslider-min.js' );
  wp_enqueue_script( 'scripts', get_template_directory_uri() . '/plugins/revolution-slider/js/jquery.themepunch.tools.min.js' );
  wp_enqueue_script( 'scripts', get_template_directory_uri() . '/plugins/revolution-slider/js/jquery.themepunch.revolution.min.js' );
}

add_action( 'wp_enqueue_scripts', 'startwordpress_scripts' );

// Add Google Fonts
function startwordpress_google_fonts() {
				wp_register_style('OpenSans', 'http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800');
				wp_enqueue_style( 'OpenSans');
		}

add_action('wp_print_styles', 'startwordpress_google_fonts');

// WordPress Titles
add_theme_support( 'title-tag' );

// Support Featured Images
add_theme_support( 'post-thumbnails' );

// Custom settings
function custom_settings_add_menu() {
  add_menu_page( 'Custom Settings', 'Custom Settings', 'manage_options', 'custom-settings', 'custom_settings_page', null, 99);
}
add_action( 'admin_menu', 'custom_settings_add_menu' );

// Create Custom Global Settings
function custom_settings_page() { ?>
  <div class="wrap">
    <h1>Custom Settings</h1>
    <form method="post" action="options.php">
       <?php
           settings_fields('section');
           do_settings_sections('theme-options');      
           submit_button(); 
       ?>          
    </form>
  </div>
<?php }

function setting_twitter() { ?>   <!-- Twitter -->
  <input type="text" name="twitter" id="twitter" value="<?php echo get_option('twitter'); ?>" />
<?php }

function setting_github() { ?>    <!-- Github -->
  <input type="text" name="github" id="github" value="<?php echo get_option('github'); ?>" />
<?php }

function setting_facebook() { ?>  <!-- Facebook -->
  <input type="text" name="facebook" id="facebook" value="<?php echo get_option('facebook'); ?>" />
<?php }

function custom_settings_page_setup() {
  add_settings_section('section', 'All Settings', null, 'theme-options');
  add_settings_field('twitter', 'Twitter URL', 'setting_twitter', 'theme-options', 'section');
  add_settings_field('github', 'GitHub URL', 'setting_github', 'theme-options', 'section');
  add_settings_field('facebook', 'Facebook URL', 'setting_facebook', 'theme-options', 'section');
  
	register_setting('section', 'twitter');
  register_setting('section', 'github');
  register_setting('section', 'facebook');
}
add_action( 'admin_init', 'custom_settings_page_setup' );