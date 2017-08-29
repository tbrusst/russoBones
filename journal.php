<?php
/*
 Template Name: Journal
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



<?php
	$args = [
		'category_name' => 'Journal',
		'order' => 'ASC'
	];

	$loop = new WP_Query($args);

	//print_r($loop);

	if($loop->have_posts() ){

		//loop through posts in $loop query

		while($loop->have_posts() ) : $loop->the_post();
		?>
		<div id="<?php the_title(); ?>"class="zoomView">
			<h4 class="zoomTitle"><?php the_title(); ?></h4>
			<img width="auto" height="auto"src=<?php the_post_thumbnail('full'); ?>


		</div>



		<?php

		endwhile;

	} else {
		//no posts found
	}


 ?>






				<section id="journalSection">


					<?php
						$args = [
							'category_name' => 'Journal',
							'order' => 'ASC'
						];

						$loop = new WP_Query($args);

						//print_r($loop);

						if($loop->have_posts() ){

							//loop through posts in $loop query

							while($loop->have_posts() ) : $loop->the_post();
							?>


							<div id="<?php the_title(); ?>1"class="journalPost <?php the_title(); ?>">
								<h4 class="journalTitle"><?php the_title(); ?></h4>

								<?php $image = the_post_thumbnail( 'bones-thumb-300q' ); ?>
								<img id="" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

							</div>

							<?php

							endwhile;

						} else {
							//no posts found
						}


					 ?>
				</section>




<?php get_footer(); ?>
