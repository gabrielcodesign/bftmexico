<?php get_header('news'); ?>
<div class="container news-single">

    
        <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-sm-8 col-sm-4">
                        <h1 class="display-4 font-italic"><?php the_title('<h1 class="entry-title-news">','</h1>' ); ?></h1>
                        <small>Posted on: <?php the_time('F j, Y'); ?> at <?php the_time('g:i a '); ?><?php the_category(' '); ?> || <?php the_tags(); ?> || <?php edit_post_link(); ?></small>
                        <hr>                
                    </div>
                        <div class="container image-news-container">
                            <div class="row">
                                <div class="col-sm-12 col-sm-8 col-sm-4 image-news-">
                                <?php the_post_thumbnail( array(800, 600) , array('class' => 'news-image img-fluid')); ?> <!-- Other resolutions -->
                                </div>
                                
                            </div>
                        </div>   
                </div>
        </div>


</div>

<div class="container content-news">
<div class="row">
        <div class="col-sm-8 col-sm-12">
		<?php 
		if( have_posts() ):
			while( have_posts() ): the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> 
                <div class="pull-right"></div>
                <?php the_content(); ?>
                <?php 
                    if( comments_open() ){ 
                        comments_template(); 
                    } else {
                        echo '<h5 class="text-center">Sorry, Comments are closed!</h5>';
                    }
                 ?>
            </article>
			<?php endwhile;
		endif;
		?>
        </div>

</div>
</div>
<div class="container">
<div class="col-sm-4 col-sm-8">
<?php get_sidebar(); ?>
</div>
</div>

<?php get_footer('news'); ?>
