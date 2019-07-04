<?php if(is_active_sidebar( 'home-introduction' ))  : ?> 
    <div class="row mx-0 d-flex justify-content-center">
        <?php dynamic_sidebar( 'home-introduction' )  ?>
    </div>
<?php endif; ?>


<?php if(is_active_sidebar( 'home-content' ))  : ?>
    <div class="row mx-0 d-flex justify-content-center">
        <?php dynamic_sidebar( 'home-content' )  ?>
    </div>
<?php endif; ?>
                