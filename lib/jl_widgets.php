<?php

class jl_service_block_widget extends WP_Widget
{
    
    public function __construct()
    {
        parent::__construct('feature_oikos','Bloque de Servicios Oikos',['description' => 'Añade un campo de valores']);

        
    }
    function widget($args, $instance)
    {
    ?>
        <div class="col-lg-3 col-sm-6 col-12 latest-post mb-4 mb-lg-0">
            <div class="header-title mb-4">
                <h3 class="header-latest-post mb-2 p-2"><?php echo strtoupper($instance['title']); ?></h3>
            </div>
            <p><?php echo $instance['content']; ?></p>    
            <div class="post-thumb-container position-relative d-flex justify-content-sm-center">
                <a class="view-more" href="<?php echo $instance['link'] ?>"><img src="<?php echo $instance['image_uri'] ?>" class="img-fluid "> <span>Ver más</span></a>
            </div>
        </div>
    <?php

    }


    public function update($new_instance, $old_instance)
    {
        $instance = $old_instance;
        $instance['title'] = strip_tags($new_instance['title']);
        $instance['content'] = strip_tags($new_instance['content']);
        $instance['image_uri'] = strip_tags($new_instance['image_uri']);
        $instance['link'] = strip_tags($new_instance['link']);

        return $instance;

    }

    public function form($instance)
    {
        $title = ! empty( $instance['title'] ) ? $instance['title'] : '';
        $content = ! empty( $instance['content'] ) ? $instance['content'] : '';
        $img = ! empty( $instance['image_uri'] ) ? $instance['image_uri'] : '';
        $link = ! empty( $instance['link'] ) ? $instance['link'] : ''; 

        ?>
        <p>
		    <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_attr_e( 'Título:', 'oikos' ); ?></label> 
		    <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo $this->get_field_name( 'title' )  ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		</p>
        <p>
		    <label for="<?php echo esc_attr( $this->get_field_id( 'content' ) ); ?>"><?php esc_attr_e( 'Contenido:', 'oikos' ); ?></label> 
		    <textarea class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'content' ) ); ?>" name="<?php echo $this->get_field_name( 'content' )  ?>"><?php echo  $content ; ?></textarea>
		</p>
        
        <p>
		    <label for="<?php echo esc_attr( $this->get_field_id( 'link' ) ); ?>"><?php esc_attr_e( 'Enlace:', 'oikos' ); ?></label> 
		    <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'link' ) ); ?>" name="<?php echo $this->get_field_name( 'link' )  ?>" type="text" value="<?php echo esc_attr( $link ); ?>">
		</p>
        
      
        <p class="smartcat-uploader">
            <label for="<?php $this->get_field_id( 'image_uri' ); ?>">Imagen:</label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'image_uri' ) ); ?>" name="<?php echo $this->get_field_name( 'image_uri' ); ?>" type="text"  value="<?php echo esc_attr($img)  ?>"/>
        </p>

    <?php
    }
}

class jl_gallery_block_widget extends WP_Widget
{
    
    public function __construct()
    {
        parent::__construct('gallery_oikos','Bloque de Galerías Oikos',['description' => 'Añade un campo de valores']);

        
    }
    function widget($args, $instance)
    {
    ?>
        <div class="col-lg-3 col-sm-6 mt-lg-5 col-12 cover-gallery mb-4 mb-lg-0">
            <div class="post-thumb-container position-relative d-flex justify-content-sm-center">
                <a class="view-more" href="<?php echo $instance['link'] ?>"><img src="<?php echo $instance['image_uri'] ?>" class="img-fluid "></a>
            </div>
            <a href="<?php echo $instance['link'] ?>"><h3 class="header-latest-post mt-2 mb-2 p-2"> <?php echo $instance['title'] ?></h3></a>
        </div>
    <?php

    }


    public function update($new_instance, $old_instance)
    {
        $instance = $old_instance;
        $instance['title'] = strip_tags($new_instance['title']);
        $instance['image_uri'] = strip_tags($new_instance['image_uri']);
        $instance['link'] = strip_tags($new_instance['link']);

        return $instance;

    }

    public function form($instance)
    {
        $title = ! empty( $instance['title'] ) ? $instance['title'] : '';
        $img = ! empty( $instance['image_uri'] ) ? $instance['image_uri'] : '';
        $link = ! empty( $instance['link'] ) ? $instance['link'] : ''; 

        ?>
        <p>
		    <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_attr_e( 'Título:', 'oikos' ); ?></label> 
		    <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo $this->get_field_name( 'title' )  ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		</p>
        
        <p>
		    <label for="<?php echo esc_attr( $this->get_field_id( 'link' ) ); ?>"><?php esc_attr_e( 'Enlace:', 'oikos' ); ?></label> 
		    <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'link' ) ); ?>" name="<?php echo $this->get_field_name( 'link' )  ?>" type="text" value="<?php echo esc_attr( $link ); ?>">
		</p>
        
      
        <p class="smartcat-uploader">
            <label for="<?php $this->get_field_id( 'image_uri' ); ?>">Imagen:</label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'image_uri' ) ); ?>" name="<?php echo $this->get_field_name( 'image_uri' ); ?>" type="text"  value="<?php echo esc_attr($img)  ?>"/>
        </p>

    <?php
    }
}

function jl_oikos_register_widgets() {
	register_widget( 'jl_service_block_widget' );
	register_widget( 'jl_gallery_block_widget' );
}

add_action( 'widgets_init', 'jl_oikos_register_widgets' );


if (! function_exists('jl_widget_oikos_script')) {
    
    function jl_widget_oikos_script() {
        wp_enqueue_media();
        wp_enqueue_script('media-upload-js',get_template_directory_uri().'/assets/js/media-upload.js',array('jquery'),'1.0',true);
        wp_enqueue_script('script-media-upload',get_template_directory_uri().'/assets/js/script-media-upload.js',array('jquery'),'1.0',true);
    }

    add_action('admin_enqueue_scripts','jl_widget_oikos_script');
}

