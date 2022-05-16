<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
<!--    <title>--><?php //echo wp_get_document_title(); ?><!--</title>-->

    <?php wp_head();?>
</head>
<body dir="rtl">
<header class="header">
	<strong class="logo">
		<a href="#"><img src="<?php bloginfo('template_url');?>/assets/images/logo.svg" alt="BODY BIKE indoor cycle"/></a>
	</strong>
	<div class="top-slider">
		<div class="slide">
			<picture class="pic">
				<source srcset="<?php bloginfo('template_url');?>/assets/images/mob-people.png" media="(max-width:859px)">
				<img src="<?php bloginfo('template_url');?>/assets/images/people@2x.png" alt="Body Bike"/>
			</picture>
		</div>
	</div>

	<a class="arrow" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="34.836" height="17.332" viewBox="0 0 34.836 17.332"><path id="arrow" d="M18862.2,1091.61l-15.229,17.4,15.229,16.085" transform="translate(-1090.952 18862.955) rotate(-90)" fill="none" stroke="#fff" stroke-width="2"/></svg></a>
</header>