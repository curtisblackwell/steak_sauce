<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * ExpressionEngine - by EllisLab
 *
 * @package		ExpressionEngine
 * @author		ExpressionEngine Dev Team
 * @copyright	Copyright (c) 2003 - 2011, EllisLab, Inc.
 * @license		http://expressionengine.com/user_guide/license.html
 * @link		http://expressionengine.com
 * @since		Version 2.0
 * @filesource
 */

// ------------------------------------------------------------------------

/**
 * cpb Steak Sauce
 *
 * An ExpressionEngine 2 plugin.
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the Creative Commons Attribution-ShareAlike 3.0 Unported License
 *
 * @package		ExpressionEngine
 * @subpackage	Addons
 * @category	Plugin
 * @author		Curtis Blackwell
 * @copyright   Copyright (c) 2011, Curtis Blackwell (http://curtisblackwell.com)
 * @link        http://curtisblackwell.com/expressionengine-add-ons/cpb-steak-sauce
 * @license		http://creativecommons.org/licenses/by-sa/3.0/
 * @since       Version 0.1
 */

require_once(PATH_THIRD . 'steak_sauce/config.php');

$plugin_info = array(
	'pi_name'			=>  STEAK_SAUCE_NAME,
	'pi_version'		=>  STEAK_SAUCE_V,
	'pi_author'			=> 'Curtis Blackwell',
	'pi_author_url'		=> 'http://curtisblackwell.com',
	'pi_description'	=> 'Converts numbers to letters and vice versa.',
	'pi_usage'			=>  Steak_sauce::usage()
);


class Steak_sauce {

	function Steak_sauce() {

		$this->EE =& get_instance();

		$integer_to_letter = array(
			 1	=> 'A',
			 2	=> 'B',
			 3	=> 'C',
			 4	=> 'D',
			 5	=> 'E',
			 6	=> 'F',
			 7	=> 'G',
			 8	=> 'H',
			 9	=> 'I',
			10	=> 'J',
			11	=> 'K',
			12	=> 'L',
			13	=> 'M',
			14	=> 'N',
			15	=> 'O',
			16	=> 'P',
			17	=> 'Q',
			18	=> 'R',
			19	=> 'S',
			20	=> 'T',
			21	=> 'U',
			22	=> 'V',
			23	=> 'W',
			24	=> 'X',
			25	=> 'Y',
			26	=> 'Z'
		);

		$tagdata = $this->EE->TMPL->tagdata;

		if (is_numeric($tagdata)) {

			// if the number entered isn't within our 1-26 range, don't return anything.
			if ($tagdata < 1 || $tagdata >26) {
				$this->return_data = '';
			} else {
				$case = ($this->EE->TMPL->fetch_param('case')=='lowercase') ? true : false;
				$this->return_data = ($case) ? strtolower($integer_to_letter[$tagdata]) : $integer_to_letter[$tagdata];
			}

		} else {

			// if it's not a number, it must be a letter. better flip the array then make sure it's capital so that this sucker works.
			$integer_to_letter = array_flip($integer_to_letter);
			if (ctype_upper($tagdata)) {
				$this->return_data = $integer_to_letter[$tagdata];
			} else {
				$this->return_data = $integer_to_letter[strtoupper($tagdata)];
			}

		}

	}



	/* --------------------------------------------------------------------

		Usage

		This function describes how the plugin is used.

		@access	public
		@return	string

	 */

	function usage() {
	ob_start();
	?>

	http://curtisblackwell.github.com/cpb_steak_sauce/

	<?php
	$buffer = ob_get_contents();

	ob_end_clean();

	return $buffer;
	}

}

// End of file pi.steak_sauce.php
// Location: ./system/expressionengine/third_party/steak_sauce/pi.steak_sauce.php

?>