<?php

/**
 * Plugin Name: Photocopier
 * Plugin URI: https://kjellr.com
 * Description: Make your blocks look like photocopies.
 * Version: 1.0
 * Author: Kjell Reigstad
 * 
 * Photocopier WordPress Plugin, 2020 Kjell Reigstad
 * Photocopier is distributed under the terms of the GNU GPL.
 * 
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 2 of the License, or
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 * 
 * The noise pattern used is derived from "Noisy Pattern" on Patternlet.com CC0.
 * https://patternlet.com/noisy-pattern/
 * 
 * Plugin icon derived from "Abstract Concrete" by Sarah Pflug. CC0.
 * https://stocksnap.io/photo/abstract-concrete-QHO4YAWVRM
 * 
 * Screenshot uses "Fall Leaves" by Free Nature Stock. CC0
 * https://stocksnap.io/photo/fall-leaves-RSUKHP2EHX
 */

/**
 * Register Custom Block Styles
 */
if ( function_exists( 'register_block_style' ) ) {
	function photocopier_register_block_styles() {
	
		/**
		 * Register stylesheet
		 */
		wp_register_style(
			'photocopier-stylesheet',
			plugins_url( 'style.css', __FILE__ ),
			array(),
			'1.0'
		);

		/**
		 * Register block styles
		 */
		register_block_style(
			'core/image',
			array(
				'name'         => 'photocopy',
				'label'        => 'Photocopy',
				'style_handle' => 'photocopier-stylesheet',
			)
		);
		register_block_style(
			'core/gallery',
			array(
				'name'         => 'photocopy',
				'label'        => 'Photocopy',
				'style_handle' => 'photocopier-stylesheet',
			)
		);
		register_block_style(
			'core/media-text',
			array(
				'name'         => 'photocopy',
				'label'        => 'Photocopy',
				'style_handle' => 'photocopier-stylesheet',
			)
		);
	}

	add_action( 'init', 'photocopier_register_block_styles' );
}