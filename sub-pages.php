
<?php 
/**
 * Atmosphere Pro.
 *
 * This file adds the Landing page template to the Atmosphere Pro Theme.
 *
 * Template Name: Sub pages
 *
 * @package Atmosphere
 * @author  StudioPress
 * @license GPL-2.0+
 * @link    http://my.studiopress.com/themes/atmosphere/
 */

// Add landing body class to the head.

get_header() ?>

<div>
	<?php while(have_posts()):?>

		<h2><?php the_title(); ?></h2>
		<?php the_content(); ?>
	<?php endwhile; ?>
</div>
<?php get_footer() ?>