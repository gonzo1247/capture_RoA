<?php
/**
*
* @author Sergeiy Varzaev (Палыч)  phpbbguru.net varzaev@mail.ru
* @version $Id: acp_thanks_truncate.php,v 135 2012-10-10 10:02:51 Палыч $
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
   exit;
}

class acp_thanks_truncate_info
{
	function module()
	{
		return array(
			'filename'	=> 'acp_thanks_truncate',
			'title'		=> 'ACP_THANKS_TRUNCATE',
			'version'	=> '1.3.4',
			'modes'		=> array(
				'thanks'			=> array('title' => 'ACP_THANKS_TRUNCATE', 'auth' => 'acl_a_board', 'cat' => array('ACP_THANKS')),
			),
		);
	}

	function install()
	{
	}

	function uninstall()
	{
	}
}

?>