<?php
/**
 *
 *===================================================================
 *
 *  User Merge -- ACP Module File
 *-------------------------------------------------------------------
 *	Script info:
 * Version:		1.2.0
 * Copyright:	(c) 2009 - phpBBModders.net
 * License:		http://opensource.org/licenses/gpl-license.php | GNU Public License v2
 * Package:		Language [es]
 *
 *===================================================================
 *
 */

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

// Create the lang array if it does not already exist
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// Merge the following language entries into the lang array
$lang = array_merge($lang, array(
	'ACP_USER_MERGE'		=> 'Fusionar Usuario',
	'VERSION' 			=> 'Versión',
	'LOG_USERS_MERGED'	=> '<strong>Usuarios fusionados</strong><br />%s',
));
