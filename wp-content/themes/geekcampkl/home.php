<?php get_header(); ?>
    <div class="left" id="content">
	
	<?php if (have_posts()) : ?>
    
        <h1><?php the_title(); ?></h1>
        <span class="home right"><a href="/">Back To Homepage</a></span>
        <div class="clear"></div>
        <p class="description"><?php echo get_post_meta($post->ID, 'page_description', true); ?></p>

		<?php while (have_posts()) : the_post(); ?>

			<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				<small><?php the_time('F jS, Y') ?> by <?php the_author() ?></small>

				<div class="text">
					<?php the_content('Read the rest of this entry &raquo;'); ?>
				</div>

				<p class="postmetadata"><?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>
			</div>

		<?php endwhile; ?>

		<div class="pagination">
			<div class="left"><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div class="right"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
            <div class="clear"></div>
		</div>

	<?php else : ?>

		<h1>Oops! Page Not Found!</h1>
		<p id="404-hint">Sorry, but you are looking for something that isn't here.</p>
		<?php get_search_form(); ?>

	<?php endif; ?>

    </div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>