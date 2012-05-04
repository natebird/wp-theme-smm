<?php
/*
Template Name: Tutorials
*/
get_header(); ?>

		<?php get_sidebar(); ?>
		
		<!-- Row for main content area -->
		<div id="content" class="eight columns" role="main">
	
			<div class="image-grid post-box">
				<?php the_content(); ?>
			
				<?php query_posts( array ( 'category_name' => 'Tutorials', 'posts_per_page' => -1 ) ); ?>
				<ul>
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<li>
							<a href="<?php the_permalink(); ?>">
								<?php if ( has_post_thumbnail() ) { the_post_thumbnail('medium'); } ?>
								<span class="page-grid-list-title"><?php the_title(); ?></span>
							</a>
						</li>
					<?php endwhile; ?>
				</ul>
				<?php else : ?>
					<h2>Not Found</h2>
				<?php endif; ?>
				<?php wp_reset_query(); ?>
			</div>

		</div><!-- End Content row -->
		
<?php get_footer(); ?>