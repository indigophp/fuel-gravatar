<?php
/**
 * Fuel Gravatar
 *
 * @package 	Fuel
 * @subpackage	Gravatar
 * @version		0.1
 * @author 		Tamás Barta <barta.tamas.d@gmail.com>
 * @license 	MIT License
 */

/**
 * NOTICE:
 *
 * If you need to make modifications to the default configuration, copy
 * this file to your app/config folder, and make them in there.
 *
 * This will allow you to upgrade fuel without losing your custom config.
 */

return array(
	/**
	 * Protocol for request
	 *
	 * Valid values: http, https, null
	 * In case of null and undefined \Input::protocol() is used.
	 */
	'protocol' => null,

	/**
	 * Avatar related config
	 */
	'avatar'   => array(
		/**
		* Image size
		*
		* Valid values are integers between 1 and 2048
		* Specifies the size of the image in pixels.
		* Please consider that the most users have low-quality images.
		*/
		'size'    => null,

		/**
		* Default image
		*
		* Valid values: 404, mm, identicon, monsterid, wavatar, retro, blank
		* Other valid values: URL, null
		* If URL passed, it should NOT be urlencoded
		*
		* @link http://hu.gravatar.com/site/implement/images/#default-image
		*/
		'default' => null,

		/**
		* Force default picture
		*
		* Valid values: true, flase
		* Return the default image, even if the user is found
		*/
		'force'   => false,

		/**
		* Image rating
		*
		* Valid values are: G, PG, R, X, null
		* In case of null, G rated images are returned
		*
		* @link http://hu.gravatar.com/site/implement/images/#rating
		*/
		'rating'  => null,
	),
);
