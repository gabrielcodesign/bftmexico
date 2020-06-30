    <nav class="mainnavbar navbar sticky-top navbar-expand-lg shadow navbar-light bg-light">
        <div class="container container-nav">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <?php
                            wp_nav_menu( array(
                            'theme_location' => 'primary', // Defined when registering the menu
                            'container'      => false,
                            'depth'          => 2,
                            'menu_class'     => 'navbar-nav ml-auto',
                            'walker'         => new Bootstrap_NavWalker(), // This controls the display of the Bootstrap Navbar
                            'fallback_cb'    => 'Bootstrap_NavWalker::fallback', // For menu fallback
                            ) );
                        ?>
                    
                    <span class="navbar-text">
                    <i class="fa fa-search" aria-hidden="true"></i>
                    </span>
    </nav>
    <div class="search-bar">
		<div class="container">
			<div class="row">
				<div class="col-md-8 offset-md-2">
					<?php get_search_form(); ?>
				</div><!--  .col-md-8 -->
			</div><!--  .row -->
		</div><!--  .container -->
	</div><!--  .search-bar -->
    <!-- .site-branding -->

