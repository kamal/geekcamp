<?php
/*
Template Name: Home
*/
?>
<?php get_header(); ?>
  <div id="canvas">
    <div class="left home" id="content">
      <h1 class="page_title hide">Home</h1>
      <div class="widget" id="quote">
        <h2 class="hide">The Quote</h2>
        <p>&ldquo;I'm going to run GeekCamp. All technical talks, single track. No offense to marketers, *preneurs, social media experts but you can suck it.&rdquo;</p>
        <span class="cite right"><a href="http://twitter.com/kamal/status/1524835454">@kamal</a></span>
        <div class="clear"></div>
      </div>
      <div class="widget" id="introduction">
        <h2>What is #geekcamp?</h2>
        <p>#geekcamp is a full day, single track technical talks event squarely aimed at the geeks at heart. Don't expect watered down talks or marketing and sales driven. We show you real code by people in the trenches who are doing it for the love of technology.</p>
      </div>
      <div class="widget left" id="news">
        <h2>News &amp; Updates</h2>
        <a href="#" class="right more">previously &rarr;</a>
         <?php query_posts('showposts=1&orderby=date&order=DESC'); ?><?php if (have_posts()) : while (have_posts()) : the_post(); ?>
         <div class="post">
          <h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
          <span class="meta"><?php the_time('F jS, Y') ?></span>
          <?php the_excerpt(); ?>
        </div>
        <?php endwhile; endif; ?>
      </div>
      <div class="widget right" id="buzz">
        <h2>Spread The News</h2>
        <ul>
          <?php $bookmarks = get_bookmarks('orderby=rating&order=DESC&limit=5&category=3'); ?>
          <?php foreach($bookmarks as $b) { ?>
          <li id="buzz-link-<?php echo $b->link_id; ?>">
            <h3><a href="<?php echo $b->link_url; ?>"><?php echo $b->link_name; ?></a></h3>
            <span><?php echo $b->link_description; ?></span></li>
          <?php } ?>
        </ul>
      </div>
      <div class="clear"></div>
    </div>
    <?php get_sidebar(); ?>
    <div class="clear"></div>
  </div>
<?php get_footer(); ?>