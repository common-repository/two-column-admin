<?php
   /*
   Plugin Name: Two Column Admin
   Plugin URI: http://imtheirwebguy.com
   Description: Provides the ability to select from the classic 1 or 2 column setup on your dashboard in wp-admin. There are no settings, simply install, activate, and then use "Screen Settings" in the main dashboard view to select one or two columns.
   Version: 1.1
   Author: Chris Jenkins
   Author URI: http://google.com/+ChrisJenkins
   License: GPL2
   */

/* Yep, this is all there is. */

function wp_two_columns() {
    add_screen_option(
        'layout_columns',
        array(
            'max'     => 2,
            'default' => 1
        )
    );
}
add_action( 'admin_head-index.php', 'wp_two_columns' );

?>