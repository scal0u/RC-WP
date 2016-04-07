<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark">
	<div class="col-xs-12 col-sm-6 marginBottom">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="news_article paddingBottom">
				<img src="img/covers/truck.jpg" class="img-responsive full-width">
				<h2 class="h3 paddingX">
					<span class="date">nov 16 2015</span>
					<?php the_title(); ?>
				</h2>
			</div>  
		</article>
	</div>
</a>



<?php // edit_post_link(); ?>
<?php // if ( is_singular() ) { echo '<h1 class="entry-title">'; } else { echo '<h2 class="entry-title">'; } ?>
<?php // if ( !is_search() ) get_template_part( 'entry', 'meta' ); ?>
<?php // get_template_part( 'entry', ( is_archive() || is_search() ? 'summary' : 'content' ) ); ?>
<?php // if ( !is_search() ) get_template_part( 'entry-footer' ); ?>