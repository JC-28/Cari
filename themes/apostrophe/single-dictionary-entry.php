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
            <?php /*
            $relatedRelated = new WP_Query(array(
              'posts_per_page' => -1,
              'post_type' => 'recipes',
              'orderby' => 'title',
              'order' => 'ASC',
              'meta_query' => array(
                array(
                  'key' => 'related_recipes',
                  'compare' => 'LIKE',
                  'value' => '"'.get_the_ID().'"'
                )
              )
            ));
            if($relatedRecipes->have_posts()){
            while($relatedRecipes->have_posts()){
              $relatedRecipes->the_post();?>
              <li>
                <a  href="<?php the_permalink();?>">
                  <span > <?php the_title(); ?></span>
                </a>
              </li>
            <?php 
            }
            echo '</ul>';
          }
         */ ?>
         <?php
          $relatedRecipes = get_field('related_recipes');// array of post objects
          if($relatedRecipes){
      
              echo '<h2 >Related Recipes</h2>';
              echo '<ul>';
              foreach($relatedRecipes as $recipes){ //for each a post object
              ?>
              <li><a href="<?php echo get_the_permalink($recipes);?>">
                      <?php echo get_the_title($recipes);?>
                  </a>
              </li>   
      <?php }

          }
          echo '</ul>';
      ?>
         
			<?php
				// If comments are open or we have at least one comment, load up the comment template
			if ( comments_open() ||  get_comments_number() ) :
				comments_template();
				endif;
			?>

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>