<?php get_header( ); ?>
<main>

    <?php get_template_part( 'template-parts/content/slider', 'home' ) ?>
    


    <div class="container separator my-5">
        <!-- separator -->

        <!-- FOR A PAGE -->
        <?php if(is_front_page( ) || is_page()): ?>
            <!-- titulo -->
            <div class="row mb-5">
                <?php if(! is_front_page( )): ?>
                    <div class="col-12">
                        <h1 class="title-page gray-text"><?php the_title( ) ?></h1>
                    </div>
                <?php endif; ?>
                
                
                <!-- widget Services -->
                <?php if(is_front_page()) : ?>
                    <?php get_template_part('template-parts/content/widget','home') ?>
                <?php endif; ?>
                
                
                <!-- widget Gallery -->
                
                <?php if(!is_front_page() && get_the_title() == 'Galería') : ?>
                    <?php get_template_part('template-parts/content/widget','gallery') ?>
                <?php endif; ?>
                
                <!-- contenido -->
                <?php while (have_posts()) : the_post(); ?>
                    <?php the_content(); 
                    endwhile; 
                ?> 
            </div>

        <?php elseif(have_posts()): ?> 
            <div class="row">
                <?php while (have_posts()) : the_post(); ?>
                <article class="col-xs-12 col-md-4 col-sm-6">
                    <h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
                </article>
                <?php endwhile; ?>
            </div>
        <?php else: ?>
            <div class="row mt-5">
                <div class="col-12">
                    <h1 class="title-page text-secondary text-center"> No existen Publicaciones!</h1>
                </div>
            </div>
        <?php endif; ?>
    
</main>
<?php get_footer( ); ?>