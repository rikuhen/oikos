<?php get_header( ); ?>
    <main>
        <?php get_template_part( 'template-parts/content/slider', 'home' ) ?>
        
        <div class="container separator my-5">
            <!-- titulo -->
            <?php if(have_posts()): ?>
               
                <?php while (have_posts()) : the_post() ; ?>
                    <div class="row mb-5">
                        <div class="col-12">
                            <h1 class="title-page gray-text"><?php the_title( ) ?></h1>
                        </div>
                        <div class="col-12 justify-content-center">
                            <p class="text-secondary"><?php the_date( 'd \d\e F Y', '', '', true ); ?></p>

                            <?php the_post_thumbnail('full',['class' => 'img-fluid text-center d-block justify-content-center mb-5 mx-auto']); ?>
                            <?php the_content() ?>
                        </div>
                    </div>
                <?php endwhile;  ?>
            <?php endif; ?>
        </div>
    </main>
<?php get_footer( ); ?>