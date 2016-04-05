<?php get_header(); ?>
<section id="content" role="main" class="row">
	<div class="col-sm-7 text-center cWhite noPaddingXxs">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'entry' ); ?>
		<?php comments_template(); ?>
		<?php endwhile; endif; ?>
		<?php get_template_part( 'nav', 'below' ); ?>
	</div>
	<?php get_sidebar(); ?>
</section>
<?php get_footer(); ?>