<?php
/**
	Plugin Name: Dax Google Analytics
	Plugin URI: https://github.com/dcaste/dax_ga
	Author: Dax Castellon
	Author URI: https://github.com/dcaste/
	Description: Adds the Google Analytics code to WordPress Footer
	Version: 1.0.0
	License: The MIT License (MIT)
	License URI: http://opensource.org/licenses/MIT
*/

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

add_action('wp_footer', 'dax_google_analytics');
function dax_google_analytics(){
?>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=YOUR ID GOES HERE"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'YOUR ID GOES HERE');
</script>


<?php
};
