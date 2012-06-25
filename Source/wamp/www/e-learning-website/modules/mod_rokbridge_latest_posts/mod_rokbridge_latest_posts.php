<?php
/**
 * @version	$Id: mod_rokbridge_latest_posts.php 2047 2007-10-02 00:42:56Z rhuk $ 
 * @package RokBridge - phpBB3 edition
 * @copyright Copyright (C) 2009 RocketTheme. All rights reserved. Based on code from Ron Severdia & BrandWorkspace.com
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
 * @author RocketTheme, LLC
 */

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

//initiate rokbridge helper
require_once(JPATH_ADMINISTRATOR.DS.'components'.DS.'com_rokbridge'.DS.'helper.php' );
$rokbridge = new RokBridgeHelper();

// Include the syndicate functions only once
require_once (dirname(__FILE__).DS.'helper.php');
$latestposts = new modRokBridgeLastPostsHelper($rokbridge);

$list = $latestposts->getList($params);
$phpbb_path = $rokbridge->phpbb_path;
$bridge_path = $rokbridge->bridge_path;
$link_format = $rokbridge->link_format;


require(JModuleHelper::getLayoutPath('mod_rokbridge_latest_posts'));
