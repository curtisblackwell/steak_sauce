<?php
if (! defined('ADD_ON_V')) {
	define('ADD_ON_NAME', 'cpb Steak Sauce');
	define('ADD_ON_V', '1');
}

$config['name']									= ADD_ON_NAME;
$config['version']								= ADD_ON_V;
$config['nsm_addon_updater']['versions_xml']	= 'http://curtisblackwell.com/expressionengine-add-ons/rss_steak_sauce';
?>