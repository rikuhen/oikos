<?php get_header( ); ?>
<main>

    <?php get_template_part( 'template-parts/content/slider', 'home' ) ?>
    


    <div class="container separator my-5">
        <!-- separator -->
        <?php if(! is_front_page( )): ?>
            <!-- titulo -->
            <div class="row mb-5">
                <div class="col-12">
                    <h1 class="title-page gray-text"><?php the_title( ) ?></h1>
                </div>
 
        <?php endif; ?> 
    </div>
</main>
<?php get_footer( ); ?>