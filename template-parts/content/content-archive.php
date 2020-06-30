<div class="container news">
<article class="row archive" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<header class="entry-header-archive">
		<?php the_title( sprintf('<h1 class="entry-title-news"><a href="%s">', esc_url( get_permalink() ) ),'</a></h1>' ); ?>
		<small>Posted on: <?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?></small><?php the_category(); ?>

	</header>
	
	<div class="row">
		
		<?php if( has_post_thumbnail() ): ?>
		
			<div class="col-sm">
				<div class="thumbnail"><?php the_post_thumbnail('medium'); ?></div>
			</div>
			<div class="col-sm read-more-news">
				<?php the_excerpt(); ?>
			</div>
		
		<?php else: ?>
		
			<div class="col-sm read-more-news">
				<?php the_excerpt(); ?>
			</div>
		
		<?php endif; ?>
	</div>

</article> <!-- row -->
<hr>  
</div>



