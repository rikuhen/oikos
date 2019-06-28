<?php

class jl_service_block_widget extends WP_Widget
{
    
    public function __construct()
    {
        parent::__construct('feature_oikos','Bloque de Servicios Oikos',['description' => 'Añade un campo de valores']);

        
    }
    function widget($args, $instance)
    {
        echo $args['before_widget'];

	 	if ( ! empty( $instance['title'] ) ) {
			echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
		}

		echo  date_i18n("d ") . __(' de ', 'oikos') . ucfirst(date_i18n('F ')) . __('del ','oikos') . date_i18n('Y');
		echo $args['after_widget'];

    }


    public function update($new_instance, $old_instance)
    {
        # code...
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
		    <textarea class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'content' ) ); ?>" name="<?php echo $this->get_field_name( 'content' )  ?>"><?php echo esc_attr( $content ); ?></textarea>
		</p>
        
        <p>
		    <label for="<?php echo esc_attr( $this->get_field_id( 'link' ) ); ?>"><?php esc_attr_e( 'Enlace:', 'oikos' ); ?></label> 
		    <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'link' ) ); ?>" name="<?php echo $this->get_field_name( 'link' )  ?>" type="text" value="<?php echo esc_attr( $link ); ?>">
		</p>
        
      
        <p>
            <label for="<?php $this->get_field_id( 'image_uri' ); ?>">Image</label>
            <img class="<?php $this->id ?>_img" src="<?php (!empty($instance['image_uri'])) ? $instance['image_uri'] : ''; ?>" style="margin:0;padding:0;max-width:100%;display:block"/>
            <input type="text" class="widefat <?php $this->id ?>_url" name="<?php $this->get_field_name( 'image_uri' ); ?>" value="<?php $img; ?>" style="margin-top:5px;" />
            <input type="button" id="<?php $this->id ?>" class="button button-primary js_custom_upload_media" value="Upload Image" style="margin-top:5px;" />
        </p>

    <?php
    }
}

function jl_oikos_register_widgets() {
	register_widget( 'jl_service_block_widget' );
}

add_action( 'widgets_init', 'jl_oikos_register_widgets' );


if (! function_exists('jl_widget_oikos_script')) {
    
    function jl_widget_oikos_script() {
        wp_enqueue_media();
        wp_enqueue_script('media-upload-js',get_template_directory_uri().'/assets/js/media-upload.js',array('jquery'),'1.0',true);
    }

    add_action('admin_enqueue_scripts','jl_widget_oikos_script');
}

