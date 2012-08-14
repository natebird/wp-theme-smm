<?php /* Start loop */ ?>
<?php while (have_posts()) : the_post(); ?>
	<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
		<header>
			<h1 class="entry-title"><?php the_title(); ?></h1>
			<?php reverie_entry_meta(); ?>
			<div class="comment-count"><a href="#comments"><?php comments_number('No Comments', 'One Comment', '<span class="count">% </span>Comments' );?></a></div>
		</header>
		<div class="entry-content">
			<?php the_content(); ?>
		</div>
		<footer>
			<div class="categorized">
				<?php $tag = get_the_tags(); if (!$tag) { } else { ?><p class="tags"><?php the_tags("Posted in "); ?></p><?php } ?>				
			</div>
			<div class="sociable">
				<a href="#respond" class="add_comment">Add a Comment</a>
				<a href="#" class="social_network_share">Share With A Friend</a>	
			</div>
			<div class="share_bubble">
				<ul>
					<li class="pinterest">	<?php echo do_shortcode("[socialize service='pinterest']"); 	?></li>
					<li class="facebook">		<?php echo do_shortcode("[socialize service='facebook']"); 		?></li>
					<li class="twitter">		<?php echo do_shortcode("[socialize service='twitter']"); 		?></li>
					<li class="stumbleupon"><?php echo do_shortcode("[socialize service='stumbleupon']"); ?></li>
					<li class="google">			<?php echo do_shortcode("[socialize service='googleplus']"); 	?></li>
				</ul>
			</div>
			<?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'reverie'), 'after' => '</p></nav>' )); ?>
		</footer>
		<?php comments_template(); ?>
	</article>
<?php endwhile; // End the loop ?>