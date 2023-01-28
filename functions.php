<?php

/**
 * Enqueue the style.css file.
 *
 * @since 1.0.0
 */
// Front End Scripts and Styles Only
function fse_styles()
{
    wp_enqueue_style(
        'fse-style',
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get('Version')
    );
}
// add_action('wp_enqueue_scripts', 'fse_styles');



// Hook the enqueue functions into the frontend and editor
add_action('enqueue_block_assets', 'fse_styles');



if (!function_exists('staceyfullerlanding_setup')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which runs
     * before the init hook.
     */
    function staceyfullertwentytwo_setup()
    {
        // Add support for block styles.
        add_theme_support('wp-block-styles');

        // Enqueue editor styles.
        // add_editor_style( 'editor-style.css' );

        // Enqueue block styles if needed
    }
endif; // myfirsttheme_setup
add_action('after_setup_theme', 'staceyfullerlanding_setup');
