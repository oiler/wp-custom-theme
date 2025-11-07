<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	
	<style type="text/css">
      /* critical css */
      /* .modal { opacity: 0; visibility: hidden; } */
    </style>

	<?php wp_head(); ?>

	<link href="https://www.google-analytics.com" rel="dns-prefetch">
	<link href="https://www.google-analytics.com" rel="preconnect" crossorigin>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

</head>

<body <?php body_class("no-js"); ?>>

	<?php
	wp_body_open();
	?>

	<?php get_template_part( 'template-parts/header-markup' );?>