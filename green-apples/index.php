<?php get_header(); ?>

	<div id="container">		<div id="content" class="narrowcolumn">	<?php if (have_posts()) : ?>
	  <?php
$limit = get_option('posts_per_page');
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
query_posts('cat=21&showposts=' . $limit=10 . '&paged=' . $paged);
$wp_query->is_archive = true; $wp_query->is_home = false;
?>
		<?php while (have_posts()) : the_post(); ?>

			<div class="post" id="post-<?php the_ID(); ?>">
				<div class="post-date">
<div class="day"><?php the_time('d') ?></div>
<div class="month"><?php the_time('M') ?></div>

</div><h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>" target="_blank"><?php the_title(); ?></a></h2>
				<p class="byline"><small>by <?php the_author() ?> </small></p>

				<div class="entry">
					<?php the_excerpt()?>
					<div>
					  <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" target="_blank">тд╤андуб</a>
					</div>
				</div>

				<div class="postmetadata"><?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <span class="tiny-category"><?php the_category(', ') ?></span> | <?php edit_post_link('<span class="tiny-pencil">Edit</span>', '', ' | '); ?>  <span class="tiny-comments"><?php comments_popup_link('No Comments', '1 Comment ', '% Comments'); ?></span></div>
			</div>

		<?php endwhile; ?>
		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		</div>

	<?php else : ?>

		<h2>Not Found</h2>
		<p>Sorry, but you are looking for something that isn't here.</p>
		<?php include (TEMPLATEPATH . "/searchform.php"); ?>

	<?php endif; ?>		</div><!-- #content -->
	</div><!-- #container -->
<?php get_sidebar(); ?>
<?php include (TEMPLATEPATH . "/sidebar2.php"); ?>	


<?php get_footer(); ?>