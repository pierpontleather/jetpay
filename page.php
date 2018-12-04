<?php jpHeader();

while (have_posts()) {
	the_post();
	the_content();
}

/*
 ** Notice -- custom footer function
 *	$args of jpFooter() can be color, mono,
 *	orange, teal, or blue.
 **
 */
jpFooter('color');