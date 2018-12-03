<?php

function jpHeader($args = null)
{
  // --Can choose from text colors darkPrimary, darkSecondary, darkDisabled
  //    lightPrimary, lightSecondary, lightDisabled, or color.

  //if no color prop is given, then we default to color
  if (!$args['color']) {
    $args['color'] = 'color';
  }
  // if no logosize is given, we default to 150
  if (!$args['logoSize']) {
    $args['logoSize'] = '150';
  }
  // if no linkColor is given, we default to the logoColor
  if (!$args['linkColor']) {
    if ($args['color'] == 'color') {
      $args['linkColor'] = 'darkSecondary';
    } else {
      $args['linkColor'] = $args['color'];
    }
  }
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
	<body <?php body_class(); ?>>
		<div class="content-wrapper">
			<div class=content>
				<header class="container">
				<?php Logo(array('size' => '150', 'color' => $args['color'])); ?>
				<div class="header-menu">
					<a href="#">
						<div style="color:<?php convertColor($args['linkColor']); ?>" class="header-menu-primary">Services</div>
					</a>
					<a href="#">
						<div style="color:<?php convertColor($args['linkColor']); ?>" class="header-menu-primary">Company</div>
					</a>
					<a href="#">
						<div style="color:<?php convertColor($args['linkColor']); ?>" class="header-menu-primary">Blog</div>
					</a>
					<a href="#">
						<div style="color:<?php convertColor($args['linkColor']); ?>" class="header-menu-primary">Resources</div>
					</a>
				</div>
        </header>
        <?php

      }