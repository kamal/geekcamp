<?php
/*
Template Name: Home
*/
?>
<?php get_header(); ?>
    <div class="left" id="content">
      <div id="the-quote">&ldquo;I'm going to run GeekCamp. All technical talks, single track. No offense to marketers, *preneurs, social media experts but you can suck it.&rdquo;<span class="right" id="the-cite"><a href="http://twitter.com/kamal" title="@kamal">@kamal</a>, #geekcamp BDFL.</span></div>
      <div class="clear"></div>
      <div class="content-widget" id="welcome">
        <h1>An Introduction</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ut  sapien. Phasellus accumsan mollis mi. Lorem ipsum dolor sit amet,  consectetur adipiscing elit. Nunc odio magna, gravida et, gravida nec,  viverra sed, tellus. Maecenas tempor, arcu non ullamcorper aliquam,  nisl urna feugiat turpis, ac accumsan tellus metus sit amet dolor.  Maecenas condimentum faucibus lacus. Cum sociis natoque penatibus et  magnis dis parturient montes, nascetur ridiculus mus. Proin at risus a  sem congue lobortis. Pellentesque metus neque, convallis ut, rhoncus  ut, scelerisque quis, magna. Phasellus mauris. Praesent ligula sapien,  gravida quis, ornare ut, fringilla sed, metus. Integer mi mauris,  tempor eu, condimentum et, pretium et, urna. Nullam pretium lectus sed  lectus. Nullam quis purus eget orci gravida venenatis. Suspendisse sed  dolor.</p>
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