<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
<!--    <title>--><?php //echo wp_get_document_title(); ?><!--</title>-->

    <?php wp_head();?>
	<?php $options = get_option('options', null);?>

</head>
<body dir="rtl">
<header class="header">
	<strong class="logo">
        <a href="http://<?= $options['uploadLogoHeader']['link']?>">
            <?= wp_get_attachment_image( $options['uploadLogoHeader']['image'], 'medium'); ?></a>
	</strong>
	<div class="top-slider">
        <?php $content = get_post_meta(get_the_ID(), 'box', true) ;?>
        <?php foreach ($content['headerPoster'] as $slide):?>
		<div class="slide">
			<picture class="pic">
				<source srcset="<?php echo wp_get_attachment_image_url( $slide['mobileImage'], 'medium');?>" media="(max-width:859px)">
				<?php echo wp_get_attachment_image( $slide['image'], 'large'); ?>
			</picture>
		</div>
 <?php endforeach;?>
	</div>

	<a class="arrow" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="34.836" height="17.332" viewBox="0 0 34.836 17.332"><path id="arrow" d="M18862.2,1091.61l-15.229,17.4,15.229,16.085" transform="translate(-1090.952 18862.955) rotate(-90)" fill="none" stroke="#fff" stroke-width="2"/></svg></a>
</header>