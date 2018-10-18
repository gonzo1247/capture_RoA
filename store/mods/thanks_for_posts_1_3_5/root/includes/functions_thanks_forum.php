<?php
/** 
*
* @author Sergeiy Varzaev (Палыч)  phpbbguru.net varzaev@mail.ru
* @version $Id: functions_thanks_forum.php,v 135 2012-10-10 10:02:51 Палыч $
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
$user->add_lang('mods/thanks_mod');

// forum reput
function get_thanks_forum_reput($forum_id)
{
	global $max_forum_thanks, $config, $phpbb_root_path, $template, $forum_thanks;
	$template->assign_block_vars('forumrow.reput', array(
		'FORUM_REPUT'				=> (isset($forum_thanks[$forum_id])) ? round($forum_thanks[$forum_id] / ($max_forum_thanks / 100), ($config['thanks_number_digits'])) . '%' : '',
		'S_THANKS_FORUM_REPUT_VIEW'	=> isset($config['thanks_forum_reput_view']) ? $config['thanks_forum_reput_view'] : false,
		'S_THANKS_REPUT_GRAPHIC'	=> isset($config['thanks_reput_graphic']) ? $config['thanks_reput_graphic'] : false,
		'S_THANKS_FORUM_REPUT_VIEW_COLUMN' => isset($config['thanks_forum_reput_view_column']) ? $config['thanks_forum_reput_view_column'] : false,
		'THANKS_REPUT_HEIGHT'		=> isset($config['thanks_reput_height']) ? sprintf('%dpx', $config['thanks_reput_height']) : false,
		'THANKS_REPUT_GRAPHIC_WIDTH'=> isset($config['thanks_reput_level']) ? (isset($config['thanks_reput_height']) ? sprintf('%dpx', $config['thanks_reput_level']*$config['thanks_reput_height']) : false) : false,
		'THANKS_REPUT_IMAGE'		=> (isset($config['thanks_reput_image'])) ? $phpbb_root_path . $config['thanks_reput_image'] : '',
		'THANKS_REPUT_IMAGE_BACK'	=> (isset($config['thanks_reput_image_back'])) ? $phpbb_root_path . $config['thanks_reput_image_back'] : '',	
	));
}
// forum thanks number
function get_thanks_forum_number()
{
	global $db, $forum_thanks, $cache, $config;
	if (isset($config['thanks_forum_reput_view']) ? $config['thanks_forum_reput_view'] : false)
	{
		if ($forum_thanks_rating = $cache->get('_forum_thanks_rating'))
		{
			$sql = 'SELECT forum_id, COUNT(*) AS forum_thanks
				FROM ' . THANKS_TABLE . "
				WHERE " . $db->sql_in_set('forum_id', $forum_thanks_rating) . '
				GROUP BY forum_id';
			$result = $db->sql_query($sql);
			while ($row = $db->sql_fetchrow($result))
			{
				$forum_thanks[$row['forum_id']] = $row['forum_thanks'];
			}
			$db->sql_freeresult($result);
		}
		return array($forum_thanks);
	}
}
// max forum thanks
function get_max_forum_thanks()
{
	global $db, $max_forum_thanks, $config;
	if (isset($config['thanks_forum_reput_view']) ? $config['thanks_forum_reput_view'] : false)
	{	
		$sql = 'SELECT MAX(tally) AS max_forum_thanks
			FROM (SELECT forum_id, COUNT(*) AS tally FROM ' . THANKS_TABLE . ' GROUP BY forum_id) t 
			WHERE forum_id <> 0';
		$result = $db->sql_query($sql);
		$max_forum_thanks = (int) $db->sql_fetchfield('max_forum_thanks');
		$db->sql_freeresult($result);
		return $max_forum_thanks;
	}
}
?>