<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once(PATH_THIRD . 'steak_sauce/config.php');

$plugin_info = array(
	'pi_name'			=>  ADD_ON_NAME,
	'pi_version'		=>  ADD_ON_V,
	'pi_author'			=> 'Curtis Blackwell',
	'pi_author_url'		=> 'http://curtisblackwell.com',
	'pi_description'	=> 'Converts letters to numbers and vice versa.',
	'pi_usage'			=>  Steak_sauce::usage()
);

/*
	cpb Steak Sauce Class

	@package	cpb Steak Sauce
	@author		Curtis Blackwell
	@link		http://curtisblackwell.com/expressionengine-add-ons/plugins/steak-sauce
	@license	http://creativecommons.org/licenses/by-sa/3.0/
*/

class Steak_sauce {

	function Steak_sauce() {

		$this->EE =& get_instance();

		$int_to_let = array(
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
				$this->return_data = ($case) ? strtolower($int_to_let[$tagdata]) : $int_to_let[$tagdata];
			}

		} else {

			// if it's not a number, it must be a letter. better flip the array then make sure it's capital so that this sucker works.
			$int_to_let = array_flip($int_to_let);
			if (ctype_upper($tagdata)) {
				$this->return_data = $int_to_let[$tagdata];
			} else {
				$this->return_data = $int_to_let[strtoupper($tagdata)];
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

	http://curtisblackwell.com/expressionengine-add-ons/cpb-steak-sauce

	<?php
	$buffer = ob_get_contents();

	ob_end_clean();

	return $buffer;
	}

}

// End of file pi.steak_sauce.php
// Location: ./system/expressionengine/third_party/steak_sauce/pi.steak_sauce.php

?>