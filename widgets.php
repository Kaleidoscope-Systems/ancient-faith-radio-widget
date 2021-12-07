<?php
/**
 * Ancient Faith Radio Widget
 *
 * Offers widgets to display players for Ancient Faith Radio's various channels.
 *
 * @package Ancient Faith Radio Widget
 * @subpackage Widgets
 */

 // Exit if accessed directly
defined( 'ABSPATH' ) || exit;

/**
 * Adds AFR_English_Music_Player widget.
 */
class AFR_English_Music_Player extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'afr_en_music_player', // Base ID
			esc_html__( 'AFR English Music Player', 'text_domain' ), // Name
			array( 'description' => esc_html__( 'Display the Ancient Faith Radio English Music Channel', 'text_domain' ), 'customize_selective_refresh' => true ) // Args
			
		);
	}

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
		$width = isset($instance['width']) ? $instance['width'] : '';

		echo $args['before_widget'];
		if ( ! empty( $instance['title'] ) ) {
			echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
		}?>
		<div id="afr_en_music_container" style="width: <?php echo $width ?>%;">
			<div id="afr_en_music_img"><img src="https://images.ancientfaithradio.com/radio/englishmusic.png"/></div>
			<div id="afr_en_music_media_controls">
				<audio controls style="width: 100%;">
					<source src="https://ancientfaith.streamguys1.com/music" type="audio/mp3">
				</audio>
			</div>
		</div>
		<?php echo $args['after_widget'];
	}

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
		$title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( 'AFR English Music', 'text_domain' );
		$width = ! empty( $instance['width'] ) ? $instance['width'] : esc_html__( '75', 'text_domain' );
		?>
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_attr_e( 'Title:', 'text_domain' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		</p>
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'width' ) ); ?>"><?php esc_attr_e( 'Width (%):', 'text_domain' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'width' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'width' ) ); ?>" type="number" min="1" max="100" value="<?php echo esc_attr( $width ); ?>">
		</p>
		<?php 
	}

	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? sanitize_text_field( $new_instance['title'] ) : '';
		$instance['width'] = ( ! empty( $new_instance['width'] ) ) ? sanitize_text_field( $new_instance['width'] ) : '';

		return $instance;
	}

} // class AFR_English_Music_Player

// register afr_en_music_player
function register_afr_en_music_player() {
    register_widget( 'AFR_English_Music_Player' );
}
add_action( 'widgets_init', 'register_afr_en_music_player' );

/**
 * Adds AFR_Global_Music_Player widget.
 */
class AFR_Global_Music_Player extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'afr_global_music_player', // Base ID
			esc_html__( 'AFR Global Music Player', 'text_domain' ), // Name
			array( 'description' => esc_html__( 'Display the Ancient Faith Radio Global Music Channel', 'text_domain' ), 'customize_selective_refresh' => true ) // Args
			
		);
	}

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
		$width = isset($instance['width']) ? $instance['width'] : '';
		
		echo $args['before_widget'];
		if ( ! empty( $instance['title'] ) ) {
			echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
		}?>
		<div id="afr_en_music_container" style="width: <?php echo $width ?>%;">
			<div id="afr_en_music_img"><img src="https://images.ancientfaithradio.com/radio/globalmusic.png"/></div>
			<div id="afr_en_music_media_controls">
				<audio controls style="width: 100%;">
					<source src="https://ancientfaith.streamguys1.com/ancientfaith3" type="audio/mp3">
				</audio>
			</div>
		</div>
		<?php 
		echo $args['after_widget'];
	}

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
		$title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( 'AFR Global Music', 'text_domain' );
		$width = ! empty( $instance['width'] ) ? $instance['width'] : esc_html__( '75', 'text_domain' );
		?>
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_attr_e( 'Title:', 'text_domain' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		</p>
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'width' ) ); ?>"><?php esc_attr_e( 'Width (%):', 'text_domain' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'width' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'width' ) ); ?>" type="number" min="1" max="100" value="<?php echo esc_attr( $width ); ?>">
		</p>
		<?php 
	}

	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? sanitize_text_field( $new_instance['title'] ) : '';
		$instance['width'] = ( ! empty( $new_instance['width'] ) ) ? sanitize_text_field( $new_instance['width'] ) : '';

		return $instance;
	}

} // class AFR_Global_Music_Player

// register afr_global_music_player
function register_afr_global_music_player() {
    register_widget( 'AFR_Global_Music_Player' );
}
add_action( 'widgets_init', 'register_afr_global_music_player' );

class AFR_English_Talk_Player extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'afr_en_talk_player', // Base ID
			esc_html__( 'AFR English Talk Player', 'text_domain' ), // Name
			array( 'description' => esc_html__( 'Display the Ancient Faith Radio English Talk Channel', 'text_domain' ), 'customize_selective_refresh' => true ) // Args
			
		);
	}

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
		$width = isset($instance['width']) ? $instance['width'] : '';

		echo $args['before_widget'];
		if ( ! empty( $instance['title'] ) ) {
			echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
		}?>
		<div id="afr_en_music_container" style="width: <?php echo $width ?>%;">
			<div id="afr_en_music_img"><img src="https://images.ancientfaithradio.com/radio/englishtalk.png"/></div>
			<div id="afr_en_music_media_controls">
				<audio controls style="width: 100%;">
					<source src="https://ancientfaith.streamguys1.com/talk" type="audio/mp3">
				</audio>
			</div>
		</div>
		<?php echo $args['after_widget'];
	}

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
		$title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( 'AFR English Talk', 'text_domain' );
		$width = ! empty( $instance['width'] ) ? $instance['width'] : esc_html__( '75', 'text_domain' );
		?>
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_attr_e( 'Title:', 'text_domain' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		</p>
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'width' ) ); ?>"><?php esc_attr_e( 'Width (%):', 'text_domain' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'width' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'width' ) ); ?>" type="number" min="1" max="100" value="<?php echo esc_attr( $width ); ?>">
		</p>
		<?php 
	}

	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? sanitize_text_field( $new_instance['title'] ) : '';
		$instance['width'] = ( ! empty( $new_instance['width'] ) ) ? sanitize_text_field( $new_instance['width'] ) : '';

		return $instance;
	}

} // class AFR_English_Talk_Player

// register afr_en_talk_player
function register_afr_en_talk_player() {
    register_widget( 'AFR_English_Talk_Player' );
}
add_action( 'widgets_init', 'register_afr_en_talk_player' );