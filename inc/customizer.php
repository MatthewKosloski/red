<?php

/**
 * Lets create a customizable theme and begin with some pre-setup
*/ 
add_action('customize_register', 'red_theme_customize');
function red_theme_customize($wp_customize) {
	$wp_customize->remove_section( 'colors');
}

add_action( 'customize_register', 'red_customize_register' );
function red_customize_register( $wp_customize ) {


 	// copyright text
 	$wp_customize->add_section(
        'copyright', // id of section (must be added to all controls)
        array(
            'title' => 'Copyright',
            'description' => 'Modify the copyright notice at the bottom of the site.',
            'priority' => 35,
        )
    );
    $wp_customize->add_setting( // settings must have controls
	    'copyright_textbox',
	    array(

	    )
	);
	$wp_customize->add_control(
	    'copyright_textbox',
	    array(
	        'label' => 'Copyright text',
	        'description' => 'The text you put in the field below will be displayed below the footer.',
	        'section' => 'copyright',
	        'type' => 'text',
	    )
	);
	$wp_customize->add_setting(
    	'hide_copyright'
	);
	$wp_customize->add_control(
	    'hide_copyright',
	    array(
	        'type' => 'checkbox',
	        'label' => 'Hide copyright text',
	        'section' => 'copyright',
	    )
	);
    $wp_customize->add_section(
	    'colors', // id of section (must be added to all controls)
	    array(
	        'title' => 'Colors',
	        'description' => 'Modify the color scheme of the theme with ease!',
	        'priority' => 35,
	    )
    );
	// main color
	$wp_customize->add_setting(
	'main-color',
	    array(
	        'default' => '#df4747',
	        'sanitize_callback' => 'sanitize_hex_color',
	    )
	);
	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'main-color',
	        array(
	            'label' => 'Main color',
	            'description' => 'This color is applied to the little bar underneath the menu items, 
	            to the overlay on the work gallery, and the icons.',
	            'section' => 'colors',
	            'settings' => 'main-color',
	        )
	    )
	);
	// background color
	$wp_customize->add_setting(
	'background-color',
	    array(
	        'default' => '#ffffff',
	        'sanitize_callback' => 'sanitize_hex_color',
	    )
	);
	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'background-color',
	        array(
	            'label' => 'Background color',
	            'section' => 'colors',
	            'settings' => 'background-color',
	        )
	    )
	);
	// body text color
	$wp_customize->add_setting(
    'body-text-color',
	    array(
	        'default' => '#444444',
	        'sanitize_callback' => 'sanitize_hex_color',
	    )
	);
	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'body-text-color',
	        array(
	            'label' => 'Body text color',
	            'section' => 'colors',
	            'settings' => 'body-text-color',
	        )
	    )
	);
	// link color
	$wp_customize->add_setting(
    'link-color',
	    array(
	        'default' => '#df4747',
	        'sanitize_callback' => 'sanitize_hex_color',
	    )
	);
	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'link-color',
	        array(
	            'label' => 'Link color',
	            'section' => 'colors',
	            'settings' => 'link-color',
	        )
	    )
	);
	// link color (hover)
	$wp_customize->add_setting(
    'link-color-hover',
	    array(
	        'default' => '#df4747',
	        'sanitize_callback' => 'sanitize_hex_color',
	    )
	);
	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'link-color-hover',
	        array(
	            'label' => 'Link color (hover)',
	            'section' => 'colors',
	            'settings' => 'link-color-hover',
	        )
	    )
	);
	// menu link color
	$wp_customize->add_setting(
    'menu-link-color',
	    array(
	        'default' => '#888888',
	        'sanitize_callback' => 'sanitize_hex_color',
	    )
	);
	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'menu-link-color',
	        array(
	            'label' => 'Menu link color',
	            'section' => 'colors',
	            'settings' => 'menu-link-color',
	        )
	    )
	);
	// menu link color (hover)
	$wp_customize->add_setting(
    'menu-link-color-hover',
	    array(
	        'default' => '#444444',
	        'sanitize_callback' => 'sanitize_hex_color',
	    )
	);
	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'menu-link-color-hover',
	        array(
	            'label' => 'Menu link color (hover)',
	            'section' => 'colors',
	            'settings' => 'menu-link-color-hover',
	        )
	    )
	);
	// dividers
	$wp_customize->add_setting(
    'dividers',
	    array(
	        'default' => '#f3f3f3',
	        'sanitize_callback' => 'sanitize_hex_color',
	    )
	);
	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'dividers',
	        array(
	            'label' => 'Dividers\' and input border color',
	            'section' => 'colors',
	            'settings' => 'dividers',
	        )
	    )
	);

	// button color
	$wp_customize->add_setting(
    'button-color',
	    array(
	        'default' => '#df4747',
	        'sanitize_callback' => 'sanitize_hex_color',
	    )
	);
	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'button-color',
	        array(
	            'label' => 'Button color',
	            'section' => 'colors',
	            'settings' => 'button-color',
	        )
	    )
	);

	// button color (hover)
	$wp_customize->add_setting(
    'button-color-hover',
	    array(
	        'default' => '#D23B3B',
	        'sanitize_callback' => 'sanitize_hex_color',
	    )
	);
	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'button-color-hover',
	        array(
	            'label' => 'Button color (hover)',
	            'section' => 'colors',
	            'settings' => 'button-color-hover',
	        )
	    )
	);

	// heading 1 color
	$wp_customize->add_setting(
    'heading-1-color',
	    array(
	        'default' => '#df4747',
	        'sanitize_callback' => 'sanitize_hex_color',
	    )
	);
	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'heading-1-color',
	        array(
	            'label' => 'Heading 1 color',
	            'section' => 'colors',
	            'settings' => 'heading-1-color',
	        )
	    )
	);
	// heading 2 color
	$wp_customize->add_setting(
    'heading-2-color',
	    array(
	        'default' => '#444444',
	        'sanitize_callback' => 'sanitize_hex_color',
	    )
	);
	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'heading-2-color',
	        array(
	            'label' => 'Heading 2 color',
	            'section' => 'colors',
	            'settings' => 'heading-2-color',
	        )
	    )
	);
	// heading 3 color
	$wp_customize->add_setting(
    'heading-3-color',
	    array(
	        'default' => '#888888',
	        'sanitize_callback' => 'sanitize_hex_color',
	    )
	);
	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'heading-3-color',
	        array(
	            'label' => 'Heading 3 color',
	            'section' => 'colors',
	            'settings' => 'heading-3-color',
	        )
	    )
	);
	// heading 4 color
	$wp_customize->add_setting(
    'heading-4-color',
	    array(
	        'default' => '#888888',
	        'sanitize_callback' => 'sanitize_hex_color',
	    )
	);
	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'heading-4-color',
	        array(
	            'label' => 'Heading 4 color',
	            'section' => 'colors',
	            'settings' => 'heading-4-color',
	        )
	    )
	);
	// heading 5 color
	$wp_customize->add_setting(
    'heading-5-color',
	    array(
	        'default' => '#888888',
	        'sanitize_callback' => 'sanitize_hex_color',
	    )
	);
	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'heading-5-color',
	        array(
	            'label' => 'Heading 5 color',
	            'section' => 'colors',
	            'settings' => 'heading-5-color',
	        )
	    )
	);
	// heading 6 color
	$wp_customize->add_setting(
    'heading-6-color',
	    array(
	        'default' => '#888888',
	        'sanitize_callback' => 'sanitize_hex_color',
	    )
	);
	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'heading-6-color',
	        array(
	            'label' => 'Heading 6 color',
	            'section' => 'colors',
	            'settings' => 'heading-6-color',
	        )
	    )
	);
	// image caption
	$wp_customize->add_setting(
    'image-caption-color',
	    array(
	        'default' => '#444444',
	        'sanitize_callback' => 'sanitize_hex_color',
	    )
	);
	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'image-caption-color',
	        array(
	            'label' => 'Image caption color',
	            'section' => 'colors',
	            'settings' => 'image-caption-color',
	        )
	    )
	);
	// input focus color
	$wp_customize->add_setting(
    'input-focus-color',
	    array(
	        'default' => '#e5e5e5',
	        'sanitize_callback' => 'sanitize_hex_color',
	    )
	);
	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'input-focus-color',
	        array(
	            'label' => 'Input focus color',
	            'section' => 'colors',
	            'description' => 'This color is applied to form fields (inputs) when you click on them.',
	            'settings' => 'input-focus-color',
	        )
	    )
	);
	// logo section
	$wp_customize->add_section(
        'logo', // id of section (must be added to all controls)
        array(
            'title' => 'Logo',
            'description' => 'Modify the appearance of the logo.  Text logo or image upload?',
            'priority' => 35,
        )
    );
    $wp_customize->add_setting(
    	'hide_text_logo'
	);
	$wp_customize->add_control(
	    'hide_text_logo',
	    array(
	        'type' => 'checkbox',
	        'label' => 'Hide text logo',
	        'section' => 'logo',
	    )
	);
	// text logo color
	$wp_customize->add_setting(
    'text-logo-color',
	    array(
	        'default' => '#666666',
	        'sanitize_callback' => 'sanitize_hex_color',
	    )
	);
	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'text-logo-color',
	        array(
	            'label' => 'Text logo color',
	            'section' => 'logo',
	            'settings' => 'text-logo-color',
	        )
	    )
	);
	// logo uploader
	$wp_customize->add_setting( 'logo-upload' );
 
$wp_customize->add_control(
    new WP_Customize_Image_Control(
        $wp_customize,
        'logo-upload',
        array(
            'label' => 'Logo Uploader',
            'description' => 'Select an image file from your computer do be displayed as a logo in the header.',
            'section' => 'logo',
            'settings' => 'logo-upload'
        )
    )
);



}

// add modified css to head of document
add_action( 'wp_head', 'red_customize_css');
function red_customize_css() {
?>
    <style>
       .logo a {
    		color: <?php echo get_theme_mod('text-logo-color', '#666666'); ?> 
    	}
    	.wp-caption-text {
    		color: <?php echo get_theme_mod('image-caption-color', '#444444'); ?>;
    	}
     	h1 {
     		color: <?php echo get_theme_mod('heading-1-color', '#df4747'); ?>;
     	}
     	h2 {
     		color: <?php echo get_theme_mod('heading-2-color', '#444444'); ?>;
     	}
     	h3 {
     		color: <?php echo get_theme_mod('heading-3-color', '#888888'); ?>;
     	}
     	h4 {
     		color: <?php echo get_theme_mod('heading-4-color', '#888888'); ?>;
     	}
     	h5 {
     		color: <?php echo get_theme_mod('heading-5-color', '#888888'); ?>;
     	}
     	h6 {
     		color: <?php echo get_theme_mod('heading-6-color', '#888888'); ?>;
     	}
		html,
		body { 
			background-color: <?php echo get_theme_mod('background-color', '#ffffff'); ?>; 
			color:<?php echo get_theme_mod('body-text-color', '#444444'); ?>; 
		}
		a {
			color:<?php echo get_theme_mod('link-color', '#df4747'); ?>;
		}
		a:hover {
			color:<?php echo get_theme_mod('link-color-hover', '#df4747'); ?>;
		}
		header .menu a {
			color:<?php echo get_theme_mod('menu-link-color', '#888888'); ?>;
		}
		header .menu a:not(.logo):hover {
			color:<?php echo get_theme_mod('menu-link-color-hover', '#444444'); ?>;
		}
		hr,
		header,
		footer,
		input,
		textarea,
		select  {
			border-color:<?php echo get_theme_mod('dividers', '#f3f3f3'); ?> !important;
		}
		i[class*="pe-7s-"], 
		span[class*="pe-7s-"] {
			color: <?php echo get_theme_mod('main-color', '#df4747'); ?>;
		}

		.shot__container .overlay {
			background-color: <?php echo get_theme_mod('main-color', '#df4747'); ?>;
		}
		.current-menu-item {
			border-color: <?php echo get_theme_mod('main-color', '#df4747'); ?>;
		}
		header .menu a:not(.logo):hover {
			border-color: <?php echo get_theme_mod('main-color', '#df4747'); ?>;
		}
		.btn,
		input[type="submit"] {
			background-color: <?php echo get_theme_mod('button-color', '#df4747'); ?>;
		}
		.btn:hover,
		input[type="submit"]:hover {
			background-color: <?php echo get_theme_mod('button-color-hover', '#D23B3B'); ?>;
		}
		input:focus, textarea:focus, select:focus {
			border-color: <?php echo get_theme_mod('input-focus-color', '#e5e5e5'); ?> !important;
		}
    </style>
<?php
}

?>