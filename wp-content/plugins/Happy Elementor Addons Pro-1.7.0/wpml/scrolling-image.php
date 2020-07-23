<?php
/**
 * Scrolling Image integration
 */
namespace Happy_Addons_Pro\Widget;

defined( 'ABSPATH' ) || die();


class WPML_Scrolling_Image extends \WPML_Elementor_Module_With_Items  {

	/**
	 * @return string
	 */
	public function get_items_field() {
		return 'scroll_items';
	}

	/**
	 * @return array
	 */
	public function get_fields() {
		return ['title','link'];
	}

	/**
	 * @param string $field
	 *
	 * @return string
	 */
	protected function get_title( $field ) {
		switch ( $field ) {
			case 'title':
				return __( 'Scrolling Image: Title', 'happy-addons-pro' );
			case 'link':
				return __( 'Scrolling Image: Link', 'happy-addons-pro' );
			default:
				return '';
		}
	}

	/**
	 * @param string $field
	 *
	 * @return string
	 */
	protected function get_editor_type( $field ) {
		switch ( $field ) {
			case 'title':
				return 'LINE';
			case 'link':
				return 'LINK';
			default:
				return '';
		}
	}
}
