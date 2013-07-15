<?php

/**
 * @author     Branko Wilhelm <branko.wilhelm@gmail.com>
 * @link       http://www.z-index.net
 * @copyright  (c) 2013 Branko Wilhelm
 * @license    GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */
 
defined('_JEXEC') or die;

class plgSystemBuffed extends JPlugin {

	public function onBeforeRender() {
	    JFactory::getDocument()->addScript('http://wowdata.buffed.de/js/buffed-db-tooltips.js', 'text/javascript', false, true);
    }
}