<?php jpHeader(array('color' => 'darkSecondary')); ?>
<div class="blog-archive container">
  <h1 class="blog-header__title color--dark-secondary">Blog</h1>
<?php
while (have_posts()) {
  the_post(); ?>
  <div class="blog-post card-container">
    <div class="blog-post card">
      <article class="blog-post__container">
        <h3 class="card-title blog-post"><a class="normal-link" href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
        <h5 class="card-subtitle blog-post"><?php  ?></h5>
        <span><?php the_content(); ?></span>
      </article>
    </div>
  </div>

<?php

}

$blogAnnouncements = new WP_Query(array(
  'posts_per_page' => 3,
  'post_type' => 'announcement', // the type of post that we are querying
  'order' => 'ASC', // what order we want the posts to go in...
));
wp_reset_postdata();
while ($blogAnnouncements->have_posts()) {
  $blogAnnouncements->the_post();
  $summary = get_field('summary')
  ?>

  <div class="blog-post card-container announcement">
    <div class="blog-post annoucement <?php echo "background--" . ($summary['color']) . "800"; ?>">
      <article class="blog-post__announcement">
          <span class="announcement-summary"><?php echo $summary['summary']; ?></span>
          <span class="announcement-summary overline"><a href="<?php the_permalink(); ?>"><?php echo $summary['cta']; ?></a></span>
      </article>
    </div>
  </div>
</div>
<?php

}
jpFooter('mono');