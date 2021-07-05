<?php
 
class LatestNews extends WP_Widget {

    public function __construct() {
        parent::__construct( false, 'جدید ترین مطالب');
    }
 
    public function widget( $args, $instance ) {
        echo $args['before_widget'];
		echo $args['before_title'];
        echo $instance['title'] ;
        echo $args['after_title'];
        ?>
        <ul class="postsideseri">        
        <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post() ?>
        <li>
        <a href="#">
              <?php the_post_thumbnail();?>
            </a>
            <a href="#">
              <h3><?php the_title(); ?></h3>
            </a>
          </li>
        <?php endwhile; ?>
      <?php endif; ?>
      </ul>
        <?php
        echo $args['after_widget'];
    }
 
    public function form( $instance ) {
        $title = ! empty( $instance['titleeeee'] ) ? $instance['title'] : esc_html__( 'New ', 'text_domain' );
		?>

		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>">
        <?php esc_attr_e( 'Title:', 'text_domain' ); ?>
        </label> 
		<input 
        class="widefat" 
        id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"
        name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>"
        type="text" 
        value="<?php echo esc_attr( $title ); ?>">
		</p>

		<?php 
	}
 
    public function update( $new_instance, $old_instance ) {
        $instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? sanitize_text_field( $new_instance['title'] ) : '';

		return $instance;
    }
}

function wpdocs_register_widgets() {
    register_widget( 'LatestNews' );
}

add_action( 'widgets_init', 'wpdocs_register_widgets' );
