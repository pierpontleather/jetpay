<?php

function jpHeader($args = null)
{

  /*
   * Defining Default Variables
   ** e.g. (color, logosize, linkColor)
   */

  // Logo Color
  if (!$args['color']) {
    $args['color'] = 'color';
  }
  // Body Color
  if (!$args['bodyColor']) {
    $args['bodyColor'] = '';
  }
  // Logo Size
  if (!$args['logoSize']) {
    $args['logoSize'] = '150';
  }
  // Link Color
  if (!$args['linkColor']) {
    if ($args['color'] == 'color') {
      $args['linkColor'] = 'darkSecondary';
    } else {
      $args['linkColor'] = $args['color'];
    }
  }


  /*
   * Now we output our HTML
   */
  ?>
  <!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?> >
		<div class="content-wrapper">
			<div class=content>
				<header class="container">
        <a href="<?php echo site_url() ?>">
         <?php Logo(array('size' => '150', 'color' => $args['color'])); ?>
        </a>
				<div class="header-menu">
					<a href="<?php echo site_url('/sample-page') ?>">
						<div style="color:<?php convertColor($args['linkColor']); ?>" class="header-menu-primary">Services</div>
					</a>
					<a href="#">
						<div style="color:<?php convertColor($args['linkColor']); ?>" class="header-menu-primary">Company</div>
					</a>
					<a href="<?php echo get_post_type_archive_link('blog'); ?>">
						<div style="color:<?php convertColor($args['linkColor']); ?>" class="header-menu-primary">Blog</div>
					</a>
					<a href="#">
						<div style="color:<?php convertColor($args['linkColor']); ?>" class="header-menu-primary">Resources</div>
					</a>
				</div>
        </header>
        <?php

      }