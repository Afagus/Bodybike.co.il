<?php get_header() ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php bloginfo('the_title');?>
	<?php bloginfo('the_content');?>

<?php endwhile; else: ?>
	Записей нет.
<?php endif; ?>


<?php get_footer() ?>
