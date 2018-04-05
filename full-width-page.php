<?php
/*
Template Name: Full Width Page
*/
get_header();
while( have_posts()) {
  the_post();
  ?>
  <section id="page-title">
  
      <div class="container clearfix">
          <h1><?php the_title(); ?></h1>
          <?php
          if (function_exists('the_subtitle')) {
            ?>
            <span><?php the_subtitle(); ?></span>
            <?php
          }
          ?>
      </div>
  
  </section><!-- #page-title end -->
  <?php
}
rewind_posts();
?>

<!-- Content
	============================================= -->
<section id="content">

	<div class="content-wrap">

		<div class="container clearfix">

			<!-- Post Content
							============================================= -->
      <!-- LOOP START
            =============================================== -->
       <?php
          while (have_posts()) {
            the_post();
            $author_ID = get_the_author_meta( 'ID' );
            $author_URL = get_author_posts_url( $author_ID );
            ?>
            <div class="single-post nobottommargin">
    
              <!-- Single Post
              ============================================= -->
              <div class="entry clearfix">
    
                  <!-- Entry Image
                  ============================================= -->
                  <?php
                    if (has_post_thumbnail()) {
                      ?>
                      <div class="entry-image">
                        <?php the_post_thumbnail( 'full' ); ?>
                      </div>
                    <?php
                    }
                    ?>
                  <!-- Entry Content
                  ============================================= -->
                  <div class="entry-content notopmargin">
    
                      <?php
                    
                      the_content();
                      wp_link_pages(array(
                        'before' => '<p class="text-center">' . __('Pages:', 'Udemy'),
                        'after' => '</p>'
                      ));
                      
                      ?>
                      <!-- Post Single - Content End -->
                  </div>
              </div><!-- .entry end -->
    
              <?php
                if (comments_open() || get_comments_number()) {
                  comments_template();
                }
              ?>   
          </div>
            <?php
          }
       ?>
       <!-- .postcontent end -->
		</div>
	</div>
</section><!-- #content end -->

<?php get_footer(); ?>