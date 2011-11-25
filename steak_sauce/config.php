<?php

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

if (! defined('STEAK_SAUCE_V')) {
	define('STEAK_SAUCE_NAME', 'cpb Steak Sauce');
	define('STEAK_SAUCE_V', '1.1');
}

$config['name']									= STEAK_SAUCE_NAME;
$config['version']								= STEAK_SAUCE_V;
$config['nsm_addon_updater']['versions_xml']	= 'http://curtisblackwell.com/expressionengine-add-ons/rss_steak_sauce';
?>