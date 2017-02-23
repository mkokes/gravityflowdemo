<?php
if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_snack-fields',
		'title' => 'Snack Fields',
		'fields' => array (
			array (
				'key' => 'field_58af215548165',
				'label' => 'Snack Type',
				'name' => 'snack_type',
				'type' => 'select',
				'choices' => array (
					'Chips' => 'Chips',
					'Crackers' => 'Crackers',
					'Candy' => 'Candy',
					'Pop' => 'Pop',
				),
				'default_value' => '',
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_58af222548167',
				'label' => 'Quantity',
				'name' => 'snack_quantity',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'snack',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
				0 => 'permalink',
				1 => 'the_content',
				2 => 'excerpt',
				3 => 'custom_fields',
				4 => 'discussion',
				5 => 'comments',
				6 => 'revisions',
				7 => 'slug',
				8 => 'author',
				9 => 'format',
				10 => 'featured_image',
				11 => 'categories',
				12 => 'tags',
				13 => 'send-trackbacks',
			),
		),
		'menu_order' => 0,
	));
}
