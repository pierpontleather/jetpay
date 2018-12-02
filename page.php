<?php get_header();

while (have_posts()) {
	the_post(); ?>
	<div class="container">

	<article>
	<?php the_content(); ?>
	</article>
	</div>

<?php

}

jpFooter('mono');