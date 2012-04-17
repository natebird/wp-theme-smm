<?php /* If there are no posts to display, such as an empty archive page */ ?>
<?php if (!have_posts()) : ?>
	<div class="notice">
		<p class="bottom"><?php _e('Sorry, no results were found.', 'reverie'); ?></p>
	</div>
	<?php get_search_form(); ?>	
<?php endif; ?>

<?php /* Start loop */ ?>
<?php while (have_posts()) : the_post(); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header>
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<?php reverie_entry_meta(); ?>
			<div class="comment-count hide-on-phones"><a href="<?php the_permalink(); ?>#comments"><?php comments_number('No Comments', 'One Comment', '<span class="count">% </span>Comments' );?></a></div>
		</header>
		<div class="entry-content">
	<?php if (is_archive() || is_search()) : // Only display excerpts for archives and search ?>
		<?php the_excerpt(); ?>
	<?php else : ?>
		<?php the_content('Continue reading...'); ?>
	<?php endif; ?>
		</div>
		<footer>
			<div class="categorized">
				<?php $tag = get_the_tags(); if (!$tag) { } else { ?><p class="tags"><?php the_tags("Posted in "); ?></p><?php } ?>				
			</div>
			<div class="sociable">
				<a href="<?php the_permalink(); ?>#respond" class="add_comment">Add a Comment</a>
				<a href="#" class="social_network_share">Share With A Friend</a>	
			</div>
			<div class="share_bubble">
				<ul>
					<li class="email"><a href="#"></a></li>
					<li class="twitter"><a href="#"></a></li>
					<li class="facebook"><a href="#"></a></li>
					<li class="google"><a href="#"></a></li>
					<li class="stumbleupon"><a href="#"></a></li>
					<li class="pinterest"><a href="#"></a></li>
				</ul>
			</div>
		</footer>
		<div class="divider"></div>
	</article>	
<?php endwhile; // End the loop ?>

<?php /* Display navigation to next/previous pages when applicable */ ?>
<?php if ($wp_query->max_num_pages > 1) : ?>
	<nav id="post-nav">
		<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'reverie' ) ); ?></div>
		<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'reverie' ) ); ?></div>
	</nav>
<?php endif; ?>