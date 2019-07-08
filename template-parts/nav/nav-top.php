<div id="main-nav" class="col-md-8 col-12 d-flex justify-content-center justify-content-md-end">
    <nav class="navbar navbar-expand-lg navbar-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <?php 
            wp_nav_menu( array(
                'theme_location' => 'top',
                'menu_class' => 'navbar-nav mr-auto mt-2 mt-lg-0',
                'menu_id'        => 'top-menu',
                'container_id' => 'navbarTogglerDemo01',
                'container_class' => 'collapse navbar-collapse',
                'walker' => new bootstrap_4_walker_nav_menu(),
            ) ); 
        ?>
    </nav>
</div>