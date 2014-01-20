<?php

/**
 * Live system warning for Contao Open Source CMS
 * Copyright (C) 2014 Tristan Lins
 *
 * PHP version 5
 *
 * @copyright  bit3 UG 2014
 * @author     Tristan Lins <tristan.lins@bit3.de>
 * @package    live-system-warning
 * @license    LGPL-3.0+
 * @filesource
 */


/**
 * Palettes
 */
$GLOBALS['TL_DCA']['tl_settings']['palettes']['__selector__'][] = 'live_system_warning_enabled';
$GLOBALS['TL_DCA']['tl_settings']['palettes']['default'] .= ';{live_system_warning:hide},live_system_warning_enabled';
$GLOBALS['TL_DCA']['tl_settings']['subpalettes']['live_system_warning_enabled'] = 'live_system_warning_url';


/**
 * Fields
 */
$GLOBALS['TL_DCA']['tl_settings']['fields']['live_system_warning_enabled'] = array(
	'inputType' => 'checkbox',
	'label'     => &$GLOBALS['TL_LANG']['tl_settings']['live_system_warning_enabled'],
	'eval'      => array(
		'submitOnChange' => true,
		'tl_class'       => 'm12 w50'
	),
);
$GLOBALS['TL_DCA']['tl_settings']['fields']['live_system_warning_url']     = array(
	'inputType' => 'text',
	'label'     => &$GLOBALS['TL_LANG']['tl_settings']['live_system_warning_url'],
	'eval'      => array(
		'rgxp'     => 'url',
		'tl_class' => 'w50'
	),
);
