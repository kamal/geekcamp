<?php get_header(); ?>
  <div id="canvas">
    <div class="left news" id="content">
      <?php if (have_posts()) : ?>
	  <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
 	  <?php /* If this is a category archive */ if (is_category()) { ?>
		<h1 class="page_title">Archive for the &#8216;<?php single_cat_title(); ?>&#8217; Category</h1>
 	  <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
		<h1 class="page_title">Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h1>
 	  <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
		<h1 class="page_title">Archive for <?php the_time('F jS, Y'); ?></h1>
 	  <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		<h1 class="page_title">Archive for <?php the_time('F, Y'); ?></h1>
 	  <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		<h1 class="page_title">Archive for <?php the_time('Y'); ?></h1>
	  <?php /* If this is an author archive */ } elseif (is_author()) { ?>
		<h1 class="page_title">Author Archive</h1>
 	  <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		<h1 class="page_title">Blog Archives</h1>
 	  <?php } ?>
      <p class="description">News &amp; Updates From Venus!</p>
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
      <?php else: ?>
      <?php if ( is_category() { { ?>
      <h1 class="page_title"><?php printf("No post for %s category yet!", single_cat_title('',false)); ?></h1>
      <p class="description">Try again in future!</p>
      <span class="home right"><a href="/">Back To Homepage</a></span>
      <div id="404">
      <p>Find something else?</p>
      <?php get_search_form(); ?>
      </div>
      <?php else if ( is_date() ) { ?>
      <h1 class="page_title">Sorry, but there aren't any posts with this date.</h1>
      <p class="description">Try again in future!</p>
      <span class="home right"><a href="/">Back To Homepage</a></span>
      <div id="404">
      <p>Find something else?</p>
      <?php get_search_form(); ?>
      </div>
      <?php else if ( is_author() ) { ?>
      $userdata = get_userdatabylogin(get_query_var('author_name'));
      <h1 class="page_title"><?php printf("No post by %s yet!", $userdata->display_name); ?></h1>
      <p class="description">Try again in future!</p>
      <span class="home right"><a href="/">Back To Homepage</a></span>
      <div id="404">
      <p>Find something else?</p>
      <?php get_search_form(); ?>
      </div>
      <?php else { ?>
      <h1 class="page_title">Oops! We Kenot Fain  Your Fail!</h1>
      <p class="description">Somehow, the file is missing!</p>
      <span class="home right"><a href="/">Back To Homepage</a></span>
      <div id="404">
      <p>Try to search what you are looking for</p>
      <?php get_search_form(); ?>
      </div>
      <?php } ?>
      <?php endif; ?>
    </div>
    <?php get_sidebar(); ?>
    <div class="clear"></div>
  </div>
<?php get_footer(); ?>