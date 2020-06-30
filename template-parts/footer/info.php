<!-- Footer Links -->
<div class="container text-center text-md-left">

<!-- Footer links -->
<div class="row text-center text-md-left mt-3 pb-3">

  <!-- Grid column -->
  <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
    <h6 class="text-uppercase mb-4 font-weight-bold">Business Facilitation & Trading Mexico </h6>
    <p>We are a company managed by experienced professionals, 
    assisting companies in the development and implementation 
    of strategies in international promotion, trade and logistics.</p>
  </div>
  <!-- Grid column -->

  <hr class="w-100 clearfix d-md-none">

  <!-- Grid column -->
  <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">

  </div>
  <!-- Grid column -->

  <hr class="w-100 clearfix d-md-none">

  <!-- Grid column -->
  <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
    <h6 class="text-uppercase mb-4 font-weight-bold">Site Map</h6>
    <?php wp_nav_menu(array(
        'theme_location'=>'secondary',
        'menu_class'    =>'footer-menu col',
        'container'     => 'div',
    'container_class'   => 'footer-menu-div row', 
    
        )); 
        ?>
  </div>

  <!-- Grid column -->
  <hr class="w-100 clearfix d-md-none">

  <!-- Grid column -->
  <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
    <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
    <p>
      <i class="fas fa-home mr-3"></i> Río Guadalquivir 4Bis, Cuauhtémoc, 06500, Mexico City</p>
    <p>
      <i class="fas fa-envelope mr-3"></i> contacto@bfftmexico.com </p>
    <p><i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
  </div>
  <!-- Grid column -->

</div>
<!-- Footer links -->

<hr>

<!-- Grid row -->
<div class="row d-flex align-items-center">

  <!-- Grid column -->
  <div class="col-md-7 col-lg-8">
  <div class="site-info">
	<a href="<?php echo esc_url( __( 'http://bftmexico.com/' ) ); ?>">
		<?php
		/* translators: %s: CMS name, i.e. WordPress. */
		printf( esc_html__( '© 2020 BFT MEXICO – All rights reserved'));
		?>
	</a>
	<span class="sep"> | </span>
	<?php
	/* translators: Theme name. */
	printf( esc_html__( 'Theme: %s developed and designed by Gabriel Co. ' ), '<a href="' . esc_url( 'http://gabrielcodesign.com/' ) . '">BFT Mexico</a>' );


	?>
</div><!-- .site-info -->

  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="col-md-5 col-lg-4 ml-lg-0">

    <!-- Social buttons -->
    <div class="text-center text-md-right">
      <ul class="list-unstyled list-inline">
        <li class="list-inline-item">
          <a class="btn-floating btn-sm rgba-white-slight mx-1">
          <i class="fab fa-facebook-f"></i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="btn-floating btn-sm rgba-white-slight mx-1">
            <i class="fab fa-twitter"></i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="btn-floating btn-sm rgba-white-slight mx-1">
            <i class="fab fa-google-plus-g"></i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="btn-floating btn-sm rgba-white-slight mx-1">
            <i class="fab fa-linkedin-in"></i>
          </a>
        </li>
      </ul>
    </div>

  </div>
  <!-- Grid column -->

</div>
<!-- Grid row -->

</div>
<!-- Footer Links -->
