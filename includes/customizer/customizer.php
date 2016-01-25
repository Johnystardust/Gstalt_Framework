<?php
/**
 * Created by:  Tim van der Slik
 * Project:     Gstalt Framework
 */

/*
|-----------------------------------------------------------------------------------------------------------------------
|   Customizer.
|-----------------------------------------------------------------------------------------------------------------------
*/

add_action('customize_register', 'tvds_customizer_init');

function tvds_customizer_init($wp_customize){

    // Action bar
    include_once('parts/customizer-action-bar.php');

    // Copyright footer
    include_once('parts/customizer-copyright-footer.php');

    // Contact information
    include_once('parts/customizer-contact.php');

    // Footer
    include_once('parts/customizer-footer.php');

    // Header
    include_once('parts/customizer-header.php');

    // Side icon
    include_once('parts/customizer-side-icon.php');

}