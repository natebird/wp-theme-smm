<?php /* Start loop */ ?>
<?php while (have_posts()) : the_post(); ?>
	<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
		<header>
			<h1 class="entry-title"><?php the_title(); ?></h1>
			<?php reverie_entry_meta(); ?>
			<div class="comment-count hide-on-phones"><a href="#comments"><?php comments_number('No Comments', 'One Comment', '<span class="count">% </span>Comments' );?></a></div>
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
					<li class="email"><a href="#"></a></li>
					<li class="twitter"><a href="#"></a></li>
					<li class="facebook"><a href="#"></a></li>
					<li class="google"><a href="#"></a></li>
					<li class="stumbleupon"><a href="#"></a></li>
					<li class="pinterest"><a href="#"></a></li>
				</ul>
			</div>
			<?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'reverie'), 'after' => '</p></nav>' )); ?>
		</footer>
		<?php comments_template(); ?>
	</article>
<?php endwhile; // End the loop ?>