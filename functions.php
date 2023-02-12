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
    function staceyfullerlanding_setup()
    {
        // Add support for block styles.
        add_theme_support('wp-block-styles');

        // Enqueue editor styles.
        // add_editor_style( 'editor-style.css' );

        // Enqueue block styles if needed

        // // more image sizes
        // add_image_size('Large Portrait', 1280, 1201,  array('center', 'center'));
    }
endif; // myfirsttheme_setup
add_action('after_setup_theme', 'staceyfullerlanding_setup');


function add_to_head()
{
    echo "<!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5PTG5H7');
    </script>
    <!-- End Google Tag Manager -->";
}
add_action('wp_head', 'add_to_head');

function add_to_body_top()
{
    echo ' <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5PTG5H7" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->';
}
add_action('wp_body_open', 'add_to_body_top');
