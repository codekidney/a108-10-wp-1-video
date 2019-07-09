<?php
/**
 * Template Name: Video
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<?php 
if ( have_posts() ) : 
    while ( have_posts() ) : the_post();
        ?>
        <div class="wrap">
            <div id="primary" class="content-area">
                <?php 
                // Embed Custom Video 
                echo do_shortcode('[youtube link="https://www.youtube.com/watch?v=Gr2ZgOhSUQY&t=7s" height="360px"]');
                ?>
                <?php the_content(); ?>
            </div>
        </div>
        <?php 
    endwhile; 
else: ?>
<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>
<?php
get_footer();
