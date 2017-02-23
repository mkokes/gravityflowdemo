<?php

// This creates a custom workflow step within Gravity Flow
// http://docs.gravityflow.io/article/93-step-framework

/**
* Wait until Gravity Flow is ready before declaring the step class.
*/
add_action( 'gravityflow_loaded', function(){
	class Gravity_Flow_Step_Create_Snack extends Gravity_Flow_Step {
		// Make this unique
		public $_step_type = 'create_snack';

		/**
		* Returns the label for the step type.
		*
		* @return string
		*/
		public function get_label() {
			return 'Create A Snack Post';
		}

		/**
		* Process the step.
		*
		* @return bool Is the step complete?
		*/
		public function process(){
			$entry = Gravity_Flow_Step::get_entry();

			//var_dump( $entry );
			//die();

			// Create a new post with the submitted form data.
			wp_insert_post(array (
				'post_type' => 'snack',
				'post_title' => $entry[1],
				'post_status' => 'publish',
				'comment_status' => 'closed',
				'ping_status' => 'closed',
				'meta_input' => array(
					'snack_type' => $entry[2],
					'snack_quantity' => $entry[3],
				)
			));

			return true;
		}

	}
	// Register the step
	Gravity_Flow_Steps::register( new Gravity_Flow_Step_Create_Snack() );
});
