<?php
/*
Template Name: Home
*/
?>
<?php get_header(); ?>
    <div class="left" id="content">
      <div id="the-quote">&ldquo;I'm going to run GeekCamp. All technical talks, single track. No offense to marketers, *preneurs, social media experts but you can suck it.&rdquo;<span class="right" id="the-cite"><a href="http://twitter.com/kamal/status/1524835454" title="@kamal on Apr 15th 2009">@kamal</a></span></div>
      <div class="clear"></div>
      <div class="content-widget" id="welcome">
        <h1>What is #geekcamp?</h1>
        <p>#geekcamp is a full day, single track technical talks event squarely aimed at the geeks at heart. Don't expect watered down talks or marketing and sales drivel. We show you real code by people in the trenches who are doing it for the love of technology.</p>
      </div>
      <div class="content-widget left" id="news">
        <h1>News &amp; Updates</h1>
        <a href="/news/" class="right more">previously &rarr;</a>
        <?php query_posts('showposts=1&orderby=date&order=DESC'); ?>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="post">
          <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
          <span class="meta"><?php the_time('F jS, Y') ?></span>
          <?php the_excerpt(); ?>
        </div>
        <?php endwhile; endif; ?>
      </div>
      <div class="content-widget right" id="buzz">
        <h1>Spread The News</h1>
        <ul>
          <?php $bookmarks = get_bookmarks('orderby=rating&order=DESC&limit=5&category=3'); ?>
          <?php foreach($bookmarks as $b) { ?>
          <li id="buzz-link-<?php echo $b->link_id; ?>">
            <h2><a href="<?php echo $b->link_url; ?>"><?php echo $b->link_name; ?></a></h2>
            <span><?php echo $b->link_description; ?></span></li>
          <?php } ?>
        </ul>
      </div>
      <div class="clear"></div>
    </div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>