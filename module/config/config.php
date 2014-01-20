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
 * Hooks
 */
$GLOBALS['TL_HOOKS']['outputBackendTemplate']['live-system-warning'] = array('Bit3\Contao\LiveSystemWarning\Hooks', 'outputBackendTemplate');
