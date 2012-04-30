<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * ExpressionEngine - by EllisLab
 *
 * @package     ExpressionEngine
 * @author      ExpressionEngine Dev Team
 * @copyright   Copyright (c) 2003 - 2011, EllisLab, Inc.
 * @license     http://expressionengine.com/user_guide/license.html
 * @link        http://expressionengine.com
 * @since       Version 2.0
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
 * @package     ExpressionEngine
 * @subpackage  Addons
 * @category    Plugin
 * @author      Curtis Blackwell
 * @copyright   Copyright (c) 2011, Curtis Blackwell (http://curtisblackwell.com)
 * @link        http://curtisblackwell.github.com/cpb_steak_sauce/
 * @license     http://creativecommons.org/licenses/by-sa/3.0/
 * @since       Version 0.1
 */

require_once(PATH_THIRD . 'steak_sauce/config.php');

$plugin_info = array(
    'pi_name'         =>  STEAK_SAUCE_NAME,
    'pi_version'      =>  STEAK_SAUCE_V,
    'pi_author'       => 'Curtis Blackwell',
    'pi_author_url'   => 'http://curtisblackwell.com',
    'pi_description'  => 'Converts numbers to letters and vice versa.',
    'pi_usage'        =>  Steak_sauce::usage()
);


class Steak_sauce {

    function Steak_sauce() {

        $this->EE =& get_instance();
        $tagdata = $this->EE->TMPL->tagdata;

        // If the input is a number...
        if (is_numeric($tagdata)) {

            // If the number is less than 1, return NULL. Otherwise, we'll convert the number to a letter.
            if ($tagdata < 1) {
                $this->return_data = NULL;
            } else {

                $int_to_let = 'A';
                $counter = 1;

                while ($counter != $tagdata) {
                    $int_to_let++;
                    $counter++;
                }

                // Now check for the case parameter. If it's set to lowercase, make it so.
                $case = ($this->EE->TMPL->fetch_param('case')=='lowercase') ? true : false;
                $this->return_data = ($case) ? strtolower($int_to_let) : $int_to_let;
            }

          // If the input isn't a number, it must be a letter. Let's do this the other way around, shall we?
        } else {

            // Make sure the input is uppercase so that it will match $counter.
            $tagdata = strtoupper($tagdata);
            $let_to_int = 1;
			$counter = 'A';

			while ($counter != $tagdata) {
			    $let_to_int++;
			    $counter++;
			}

			$this->return_data = $let_to_int;

        }

    }



    /* --------------------------------------------------------------------

        Usage

        This function describes how the plugin is used.

        @access    public
        @return    string

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