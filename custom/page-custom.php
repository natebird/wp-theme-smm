<?php
/*
Template Name: Custom Template
*/
get_header(); ?>

		<?php get_sidebar(); ?>

		<!-- Row for main content area -->
		<div id="content" class="eight columns" role="main">
	
			<div class="post-box">
				<?php get_template_part('loop', 'page'); ?>
			</div>

		</div><!-- End Content row -->
				
<?php get_footer(); ?>