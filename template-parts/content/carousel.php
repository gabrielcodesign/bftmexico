
<div id="bft-carousel" class="carousel slide container-fluid" data-ride="carousel">

  <div class="carousel-inner" role="listbox">
  
  <?php $args = array(
				'posts_per_page' => 5,
			 );
			 
             $slider = new WP_Query($args);
             if($slider->have_posts()):
			 $count = $slider->found_posts;
?>
			 <!--.carousel-indicators-->

				
				<!--.carousel-arrows-->
			 <div class="arrows">
				<a class="left carousel-control-prev" href="#bft-carousel" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control-next" href="#bft-carousel" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
				</a>
			 </div>
                <div class="carousel-inner" role="listbox">
                   <?php $i = 0; while($slider->have_posts()): $slider->the_post(); ?>
                       <div class="carousel-item <?php echo ($i == 0) ? 'active' : ''?>">
                             <?php the_post_thumbnail( 'slider', array(
                                                                     'class' => 'd-block img-fluid',
																		'alt' => get_the_title() ) ) ; ?>
							<div class="carousel-caption">
															
								<div class="row">
									<div class="col-md-8 ">
										<?php the_title( sprintf('<h1 class="entry-title">', esc_url( get_permalink() ) ),'</h1>' ); ?>
										<div class="col-sm-1">
										<a class="btn btn-light btn-xl slideanim" href="<?php the_permalink() ?>" role="button" title="Read more on <?php the_title_attribute(); ?>">Read</a>
										</div>
									</div>
								</div>
							</div>
                    	</div><!--.carousel-item-->
                    <?php $i++; endwhile; ?>
                </div> <!--.carouse-inner-->

             <?php endif;  wp_reset_postdata(); ?>
  </div>
 
</div>
