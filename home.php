<?php
/*
 Template Name: Home
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



			<div id="">


				<div id="inner-content" class="full cf">

						<main id="main" class="cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'homeHeader' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">



								<section class="nameTag cf" itemprop="articleBody">
									<?php
										// the content (pretty self explanatory huh)
										the_content();

										/*
										 * Link Pages is used in case you have posts that are set to break into
										 * multiple pages. You can remove this if you don't plan on doing that.
										 *
										 * Also, breaking content up into multiple pages is a horrible experience,
										 * so don't do it. While there are SOME edge cases where this is useful, it's
										 * mostly used for people to get more ad views. It's up to you but if you want
										 * to do it, you're wrong and I hate you. (Ok, I still love you but just not as much)
										 *
										 * http://gizmodo.com/5841121/google-wants-to-help-you-avoid-stupid-annoying-multiple-page-articles
										 *
										*/
										wp_link_pages( array(
											'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'bonestheme' ) . '</span>',
											'after'       => '</div>',
											'link_before' => '<span>',
											'link_after'  => '</span>',
										) );
									?>
								</section>




								<footer class="article-footer">

                  <?php the_tags( '<p class="tags"><span class="tags-title">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '</p>' ); ?>

								</footer>

								<?php comments_template(); ?>

							</article>

							<?php endwhile; else : ?>

									<article id="post-not-found" class="hentry cf">
											<header class="article-header">
												<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
										</header>
											<section class="entry-content">
												<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the page-custom.php template.', 'bonestheme' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>

							<!-- video -->

							<div class="bgvideo">
				      <video loop autoplay muted id="videohome">
				     		<source src="<?php the_field('video'); ?>" type="video/mp4">
				     	</video>
				      </div>

						</main>



				</div>

				<section>
					<?php
						$args = [
							'category_name' => 'Featured Work',
							'order' => 'ASC'
						];

						$loop = new WP_Query($args);

						//print_r($loop);

						if($loop->have_posts() ){

							//loop through posts in $loop query

							while($loop->have_posts() ) : $loop->the_post();
							?>

							<div class="<?php the_field('layout'); ?>">
								<div class="">
									<div class="info" id="<?php the_field('layout'); ?>">
										<h4><?php the_title(); ?></h4>
										<p><?php the_field('head_text'); ?> </p>

										<a id="<?php the_field('layout'); ?>" href="<?php the_permalink(); ?>">
										<svg id="move" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 501.31 187.03">
										<title>moreButton</title>
										<rect id="moveMoreRect" width="475.64" height="157.7" style="fill:none;stroke:<?php the_field('color'); ?>;stroke-miterlimit:10;stroke-width:4px"/>
										<text id="moveMoreText" style="font-size:71.25077056884766px;font-family:Roboto Mono">more</text>
										<rect x="2" y="2" width="475.64" height="157.7" style="fill:none;stroke:<?php the_field('color'); ?>;stroke-miterlimit:10;stroke-width:4px"/>
										</svg>
										</a>

									</div>
									<div class="projectHold">
										<?php $image = get_field('hero_image'); ?>
										<img id="<?php the_field('layout'); ?>" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
									</div>

									<div class="bar" style="background-color: <?php the_field('color'); ?>"></div>
								</div>
							</div>

							<?php

							endwhile;

						} else {
							//no posts found
						}


					 ?>
				</section>

			</div>


<?php get_footer(); ?>
