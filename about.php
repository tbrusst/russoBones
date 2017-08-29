<?php
/*
 Template Name: About
 *
 * This is your custom page template. You can create as many of these as you need.
 * Simply name is "page-whatever.php" and in add the "Template Name" title at the
 * top, the same way it is here.
 *
 * When you create your page, you can just select the template and viola, you have
 * a custom page template to call your very own. Your mother would be so proud.
 *
 * For more info: http://codex.wordpress.org/Page_Templates
*/
?>

<?php get_header(); ?>

			<div class="full aboutFull" style="background-image: url(<?php the_field('bg_image'); ?>)">
				<img id="midImage"src="<?php the_field('mid_image'); ?>" alt="">
				<div class="aboutInfo">
					<div class="insideInfo">
						<h3><?php the_field('name'); ?></h3>
						<p><?php the_field('line1'); ?></p>
						<p><?php the_field('line2'); ?></p>
						<p><?php the_field('line3'); ?></p>
						<a href="mailto:<?php the_field('email'); ?>"><p>Need Something?</p></a>
					</div>


				</div>


			</div>


<?php get_footer(); ?>
