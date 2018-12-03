<?php jpHeader();

while (have_posts()) {
	the_post(); ?>
	<div class="container">

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