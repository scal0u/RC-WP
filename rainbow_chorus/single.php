<?php get_header(); ?>
<section id="content" role="main" class="row">
	<div class="col-sm-7 text-center cWhite noPaddingXxs">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'entry' ); ?>
			<?php // if ( ! post_password_required() ) comments_template( '', true ); ?>
		<?php endwhile; endif; ?>
	</div>
	<?php get_sidebar(); ?>
</section>
<?php get_footer(); ?>	
