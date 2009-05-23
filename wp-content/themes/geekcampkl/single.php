<?php get_header(); ?>
  <div id="canvas">
    <div class="left single" id="content">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <div class="post" id="post-3">
        <h1 class="page_title"><?php the_title(); ?></h1>
        <p class="meta date author"><?php the_time('F jS, Y') ?> <?php the_author() ?></p>
        <div class="text">
          <?php the_content('more &rarr;'); ?>
        </div>
        <p class="meta tags"><?php the_tags('Tags: ', ', ', '<br />'); ?></p>
        <p class="meta category comment">Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>
      </div>
      <div class="pagination">
        <div class="left"><?php previous_post_link('&larr; %link') ?></div>
        <div class="right"><?php next_post_link('%link &rarr;') ?></div>
        <div class="clear"></div>
      </div>
    </div>
    <?php get_sidebar(); ?>
    <div class="clear"></div>
  </div>
<?php get_footer(); ?>