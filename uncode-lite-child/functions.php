<?

/*
Theme Name: QLCHI - Wordpress Uncode Child Theme Demo
Theme URI: https://quantumleapchicago.com
Author: Owen | Lv 32 Cyberwizard | Quantum Leap Chicago
Author URI: https://quantumleapchicago.com
Template: uncode-lite
Description: Proof of concept Child Theme for Uncode. This simply extends uncode-lite and changes body background color to red.
Version: 0.1
License: Free and open source - GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Tags: demo
*/



// Required hoisting to embed the child style into parent enqueue

    // Function definition
    function qlchi_enqueue_styles() {
        
        // enqueue parent style - must call uncode-lite namespace
        wp_enqueue_style('uncode-lite', get_template_directory_uri() .'/style.css');
        
        // enqueue child styles - uncode lite doesn't have a built-in child handler, so we append it to the enqueued styles
        wp_enqueue_style('child-theme', get_stylesheet_directory_uri() .'/style.css', array('uncode-lite'));
        
    }

    // Call the function
    add_action('wp_enqueue_scripts', 'qlchi_enqueue_styles');

// Chiild styles now included - see style.css
    
// Can add further functionality here