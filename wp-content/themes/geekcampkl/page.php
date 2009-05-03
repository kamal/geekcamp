<?php get_header(); ?>
    <div class="left" id="content">
	
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    
      <div class="post page" id="post-<?php the_ID(); ?>">
        <h1><?php the_title(); ?></h1>
        <span class="home right"><a href="/">Back To Homepage</a></span>
        <div class="clear"></div>
        <p class="description"><?php echo get_post_meta($post->ID, 'page_description', true); ?></p>
        <div class="text">
          <?php the_content(FALSE); ?>
        </div>
      </div>

    <?php endwhile; endif; ?>
    
    </div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>