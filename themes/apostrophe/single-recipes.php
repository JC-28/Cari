<?php
	/**
 * @package Apostrophe
 *
 * The Template for displaying all single posts.
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>
			<?php
          $relatedFAQ = get_field('related_questions');// array of post objects
          if($relatedFAQ){
      
              echo '<h2 >Related FAQ</h2>';
              echo '<ul>';
              foreach($relatedFAQ as $questions){ //for each a post object
              ?>
              <li><a href="<?php echo get_the_permalink($questions);?>">
                      <?php echo get_the_title($questions);?>
                  </a>
              </li>   
      <?php }

          }
          echo '</ul>';
      ?>
         
			<?php
				// If comments are open or we have at least one comment, load up the comment template
			if ( comments_open() || '0' !== get_comments_number() ) :
				comments_template();
				endif;
			?>

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
