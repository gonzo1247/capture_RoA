<?php
/**
 * Author: Peter Dragicevic [peter@petschko.org]
 * Authors-Website: http://petschko.org/
 * Date: 19.10.2018
 * Time: 01:44
 *
 * Notes: Contains the Main Event-Listener
 */

namespace roa\wow_plugin\event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * Class MainListener
 *
 * @package roa\wow_plugin\event
 */
class MainListener implements EventSubscriberInterface {

	/**
	 * Returns an array of event names this subscriber wants to listen to.
	 *
	 * The array keys are event names and the value can be:
	 *
	 *  * The method name to call (priority defaults to 0)
	 *  * An array composed of the method name to call and the priority
	 *  * An array of arrays composed of the method names to call and respective
	 *    priorities, or 0 if unset
	 *
	 * For instance:
	 *
	 *  * array('eventName' => 'methodName')
	 *  * array('eventName' => array('methodName', $priority))
	 *  * array('eventName' => array(array('methodName1', $priority), array('methodName2')))
	 *
	 * @return array - The event names to listen to
	 */
	public static function getSubscribedEvents() {
		return array(
			'core.user_setup' => 'loadLanguage',
		);
	}

	/**
	 * Loads the Plugin-Language
	 *
	 * @param \phpbb\event\data $event - The event object
	 */
	public function loadLanguage($event) {
		$lang_set_ext = $event['lang_set_ext'];
		$lang_set_ext[] = array(
			'ext_name' => 'roa/wow_plugin',
			'lang_set' => 'common',
		);
		$event['lang_set_ext'] = $lang_set_ext;
	}
}
