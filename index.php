<?php jpHeader(array('color' => 'darkSecondary')); ?>
<div class="blog-archive container">
<?php
while (have_posts()) {
  the_post(); ?>
  <div class="blog-post card-container">
    <div class="blog-post card">
      <article class="blog-post__container">
        <h3 class="card-title blog-post"><a class="normal-link" href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
        <h5 class="card-subtitle blog-post">This is a subtitle</h5>
        <span><?php the_content(); ?></span>
      </article>
    </div>
  </div>

<?php

} ?>

</div>

<?php
jpFooter();
