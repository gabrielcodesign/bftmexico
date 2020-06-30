<?php get_header('news'); ?>


<div class="container archive-container ">
<?php get_template_part( 'template-parts/content/carousel' ); ?>
<div class="row">
    <div class="col-sm-8">
		<?php if( have_posts() ): ?>
			
			<header class="page-header">
				<?php 
					
					the_archive_title('<h1 class="page-title">', '</h1>');
					the_archive_description('<div class="taxonomy-description">', '</div>');
					
				?>
			</header>
			
			<?php while( have_posts() ): the_post(); ?>
				
				<?php get_template_part('template-parts/content/content','archive'); ?>
			
			<?php endwhile; ?>
				

			<?php endif; ?></div>
	<div class="col-sm-4">
	<?php get_sidebar(); ?>
	<?php the_posts_navigation(); ?>
	</div>
  </div>
		

</div>

<?php get_footer('news'); ?>
