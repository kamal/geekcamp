<?php get_header(); ?>
  <div id="canvas">
    <div class="left news" id="content">
      <h1 class="page_title">News &amp; Updates</h1>
      <p class="description">Recently from #geekcamp volunteers!</p>
      <span class="home right"><a href="/">Back To Homepage</a></span>
      <?php while (have_posts()) : the_post(); ?>
      <div class="post entry" id="post-<?php the_ID(); ?>">
        <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
        <p class="meta date author"><?php the_time('F jS, Y') ?> <?php the_author() ?></p>
        <div class="text">
          <?php the_content() ?>
        </div>
        <p class="meta tags"><?php the_tags('Tags: ', ', ', '<br />'); ?></p>
        <p class="meta category comment">Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>
      </div>
      <?php endwhile; ?>
      <div class="pagination">
        <div class="left"><?php next_posts_link('&larr; Previously') ?></div>
        <div class="right"><?php previous_posts_link('Recently &rarr;') ?></div>
        <div class="clear"></div>
      </div>
      <?php endif; ?>
    </div>
    <?php get_sidebar(); ?>
    <div class="clear"></div>
  </div>
<?php get_footer(); ?>