<?php jpHeader();

while (have_posts()) {
  the_post(); ?>
	<div class="container">
	<h1 class="page-title"><?php the_title(); ?></h1>
	<h2>Don't forget to replace me</h2>
	<article>
	<?php the_content(); ?>
	</article>
	</div>

<?php

}

/*
 ** Notice -- custom footer function
 *	$args of jpFooter() can be color, mono,
 *	orange, teal, or blue.
 **
 */
jpFooter('color');