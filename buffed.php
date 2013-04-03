<?php

/**
 * buffed
 *
 * @author     Branko Wilhelm <bw@z-index.net>
 * @link       http://www.z-index.net
 * @copyright  (c) 2013 Branko Wilhelm
 * @package    plg_buffed
 * @license    GNU General Public License v3
 * @version    $Id: buffed.php 3 2013-04-03 16:28:41Z bruno $
 */
 
defined('_JEXEC') or die;

class plgSystemBuffed extends JPlugin {

	public function onBeforeRender() {
		JFactory::getDocument()->addScript('http://wowdata.buffed.de/js/buffed-db-tooltips.js');
    }
}
