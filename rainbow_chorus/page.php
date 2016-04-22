<?php get_header(); ?>
<section id="content" role="main" class="row">
	<div class="col-sm-7">
		<h1 class="entry-title"><?php the_title(); ?></h1> <?php // edit_post_link(); ?>
		<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
		<?php the_content(); ?>
	</div>
	<?php get_sidebar(); ?>
</section>
<?php get_footer(); ?>	