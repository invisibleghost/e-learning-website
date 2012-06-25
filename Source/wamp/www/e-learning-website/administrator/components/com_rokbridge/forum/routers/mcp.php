<?php
/**
 * @version		$Id: mcp.php 2047 2007-10-02 00:42:56Z jinx $ 
 * @package RokBridge - phpBB3 edition
 * @copyright Copyright (C) 2009 RocketTheme. All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
 * @author RocketTheme, LLC
 */

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

function McpBuildRoute(&$query)
{
	$segments = array();
	
	if(isset($query['mode'])) {
		$segments[] = $query['mode'];
		unset($query['mode']);
	};

	return $segments;
}

function McpParseRoute($segments)
{
	$vars = array();

	// Count route segments
	$count = count($segments);

	return $vars;
}
?>