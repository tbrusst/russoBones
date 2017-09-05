
              <?php
                /*
                 * This is the default post format.
                 *
                 * So basically this is a regular post. if you don't want to use post formats,
                 * you can just copy ths stuff in here and replace the post format thing in
                 * single.php.
                 *
                 * The other formats are SUPER basic so you can style them as you like.
                 *
                 * Again, If you want to remove post formats, just delete the post-formats
                 * folder and replace the function below with the contents of the "format.php" file.
                */
              ?>

              <article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> role="article" itemscope itemprop="blogPost" itemtype="http://schema.org/BlogPosting">

                <div class="article-header entry-header postHead">
                  
                  <img id="" src="<?php the_field('post_header_image'); ?>" alt="<?php echo $image['alt']; ?>" />
                  <div class="postInfo">
                    <h3 class="entry-title single-title" itemprop="headline" rel="bookmark"><?php the_title(); ?></h1>
                    <p><?php the_field('head_text'); ?></p>

                    <a id="<?php the_field('layout'); ?>" href="<?php the_field('live_link'); ?>">
                    <svg id="move" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 501.31 187.03">
                    <title>moreButton</title>
                    <rect id="moveMoreRect" width="475.64" height="157.7" style="fill:none;stroke:<?php the_field('color'); ?>;stroke-miterlimit:10;stroke-width:4px"/>
                    <text id="moveMoreText" style="font-size:71.25077056884766px;font-family:Roboto Mono">link</text>
                    <rect x="2" y="2" width="475.64" height="157.7" style="fill:none;stroke:<?php the_field('color'); ?>;stroke-miterlimit:10;stroke-width:4px"/>
                    </svg>
                    </a>
                  </div>



                </div> <?php // end article header ?>


                <section class="entry-content cf postBod" itemprop="articleBody">

                  <?php
                    // the content (pretty self explanatory huh)
                    the_content();
                  ?>
                </section> <?php // end article section ?>

              </article> <?php // end article ?>


              <footer class="article-footer">
              </footer>
