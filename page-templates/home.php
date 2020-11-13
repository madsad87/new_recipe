
<?php

/**
 * WPE Recipe.
 *
 * This file adds the homepage template to the WPE Recipe Custom Theme.
 *
 * Template Name: Home
 *
 * @package WPE Recipe
 * @author  Madison Sadler
 * @license GPL-2.0-or-later
 * @link    https://genesisguides.com
 */

        $target = mktime(0,0,0,11,16,2020);
        $today = time();
        $difference = ($target-$today);
        $days = (int)($difference/86400);
?>        

<html>
	<head>
    	<title>Recipe Home</title>
    </head>
    <body>
	<h1>Time Until Launch</h1>
	<p>Our Recipe Site will launch in <?php echo $days?> days!</p>
    
<a href="<?php echo get_permalink( block_value( 'featured-hero' )->ID ); ?>">
    <?php block_field( 'featured-hero' ); ?>
</a>
    </body>
</html>