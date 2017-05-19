<?php
/** 
* Theme: 7 Pontos
* Version 2.0
* Since Version: 1.0
*/
?>
<?php
class setepontos_featured_widget extends WP_Widget {

	function __construct() {
		parent::__construct(
			'setepontos_featured_widget', 
			__('Sete Pontos - Último Post', 'setepontos_featured_widget_domain'), 
			array( 'description' => __( 'Add Último Post.', 'setepontos_featured_widget_domain' ), ) 
		);
	}

	public function widget( $args, $instance ) {
		$title = apply_filters( 'widget_title', $instance['title'] );
		$category = $instance['category'];
		
		echo '<div class="setepontos_featured-widget">';
			if ( ! empty( $title ) ) echo $args['before_title'] . $title . $args['after_title'];
			
			$args = array(
				'posts_per_page'   => 4,
				'offset'           => 0,
				'category_name'    => $category,
				'orderby'          => 'date',
				'order'            => 'DESC',
				'post_type'        => 'post',
				'post_status'      => 'publish',
				'suppress_filters' => true 
			);
			$posts_array = get_posts( $args );
			
			echo '<ul>';
				foreach($posts_array as $post){
					echo '<li>';
						echo '<a href="'.$post->guid.'">';
							echo $post->post_title;
						echo "</a>";
					echo '</li>';
				}
			echo '</ul>';
		echo "</div>";
	}
		
	public function form( $instance ) {
		if ( isset( $instance[ 'title' ] ) ) {
			$title = $instance[ 'title' ];
		}
		else {
			$title = __( 'Novo Título', 'setepontos_featured_widget_domain' );
		}
		if ( isset( $instance[ 'category' ] ) ) {
			$category = $instance[ 'category' ];
		}
		else {
			$category = __( 'Categoria', 'setepontos_featured_widget_domain' );
		}
	?>
        <p>
            <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Título:' ); ?></label> 
            <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'category' ); ?>"><?php _e( 'Categoria:' ); ?></label> 
            <input class="widefat" id="<?php echo $this->get_field_id( 'category' ); ?>" name="<?php echo $this->get_field_name( 'category' ); ?>" type="text" value="<?php echo esc_attr( $category ); ?>" />
        </p>
	<?php 
	}
	
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		$instance['category'] = ( ! empty( $new_instance['category'] ) ) ? strip_tags( $new_instance['category'] ) : '';
		return $instance;
	}
} /* End Widget setepontos_featured_widget */

function setepontos_featured_load_widget() {
	register_widget( 'setepontos_featured_widget' );
}
add_action( 'widgets_init', 'setepontos_featured_load_widget' );

?>