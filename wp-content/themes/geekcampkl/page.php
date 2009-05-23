<?php get_header(); ?>
  <div id="canvas">
    <div class="left page" id="content">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <div class="post page" id="post-<?php the_ID(); ?>">
        <h1 class="page_title"><?php the_title(); ?></h1>
        <p class="meta description"><?php echo get_post_meta($post->ID, 'page_description', true); ?></p>
        <span class="home right"><a href="/">Back To Homepage</a></span>
        <div class="clear"></div>
        <div class="text">
          <?php the_content(FALSE); ?>
        </div>
      </div>
      <?php endwhile; endif; ?>
    </div>
   <?php get_sidebar(); ?>
    <div class="clear"></div>
  </div>
<?php get_footer(); ?>