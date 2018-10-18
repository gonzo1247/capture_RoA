<?php
/**
 *
 * @package PBWoW Extension
 * @copyright (c) 2015 PayBas
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace paybas\pbwowext\migrations;

class release_3_2_1_data extends \phpbb\db\migration\migration
{
	static public function depends_on()
	{
		return array('\paybas\pbwowext\migrations\release_3_2_1');
	}

	public function update_data()
	{
		return array(
			array('custom', array(array($this, 'pbwow_update_data'))),
		);
	}

	public function pbwow_update_data()
	{
		$sql_ary = array(
			array(
				'config_name' => 'topbar_code',
				'config_value' =>'<li data-skip-responsive="true" class="leftside">
<i class="icon fa-cubes fa-fw" aria-hidden="true"></i> <span><strong>Hi there! This is a welcome message</strong></span>
</li>
<li class="leftside"  ><a href="http://www.avathar.be" title="avathar.be" role="menuitem">
<i class="icon fa-heart fa-fw" aria-hidden="true"></i><span>avathar.be</span></a>
</li>
<li class="leftside"><a href="https://www.phpbb.com" title="phpBB" role="menuitem">
<i class="icon fa-globe fa-fw" aria-hidden="true"></i><span>phpBB</span></a>
</li>
<li class="rightside"><a href="#" title="On the right" role="menuitem">
<i class="icon fa-hand-o-right fa-fw" aria-hidden="true"></i><span>On the right</span></a>
</li>',
				'config_default' => '',
			)
		);

		$sql = 'DELETE FROM ' . $this->table_prefix . 'pbwowext_config WHERE ' . $this->db->sql_in_set('config_name', 'topbar_code');
		$this->db->sql_query($sql);

		$this->db->sql_multi_insert($this->table_prefix . 'pbwowext_config', $sql_ary);
		unset($sql_ary);

	}

}
