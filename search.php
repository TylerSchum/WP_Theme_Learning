<?php get_header(); ?>

<!-- Content
	============================================= -->
<section id="content">

	<div class="content-wrap">

		<div class="container clearfix">

      <!-- Title
        ========================================== -->
      <section id="page-title">

        <div class="container clearfix">
          <h1>
            <?php e_('Search Results for: ', 'Udemy'); ?>
            <?php echo get_search_query(); ?>
          </h1>
        </div>

      </section><!-- #page-title end -->

			<!-- Post Content
							============================================= -->
			<div class="postcontent nobottommargin clearfix">

        <!-- Search Box
                        ============================================= -->
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title"><?php e_('What are you searhing for today?', 'Udemy'); ?></h3>
						</div>
						<div class="panel-body">
							<?php get_search_form(); ?>
						</div>
					</div><!-- Search Box End -->

				<!-- Posts
									============================================= -->
				<div id="posts">
					<?php  
						if (have_posts()) {
							while (have_posts()) {
									the_post();
								get_template_part( 'partials/post/content_excerpt');
							}
						}
					?>
					
				</div><!-- #posts end -->

				<!-- Pagination
									============================================= -->
				<ul class="pager nomargin">
					<li class="previous"><?php previous_post_link( '&larr; Older' ) ?></li>
					<li class="next"><?php next_post_link( 'Newer &rarr;' ) ?></li>
				</ul><!-- .pager end -->

			</div><!-- .postcontent end -->

			<?php get_sidebar( name ) ?>

		</div>

	</div>

</section><!-- #content end -->

<?php get_footer(); ?>