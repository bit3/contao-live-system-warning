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

namespace Bit3\Contao\LiveSystemWarning;

class Hooks
{
	public function outputBackendTemplate($content, $template)
	{
		if ($GLOBALS['TL_CONFIG']['live_system_warning_enabled']) {
			\Controller::loadLanguageFile('live_system_warning');

			$template = new \BackendTemplate('be_live_system_warning');
			$template->url = $GLOBALS['TL_CONFIG']['live_system_warning_url'];

			$content = preg_replace(
				'~<body[^>]*>~',
				'$0' . $template->parse(),
				$content
			);

			$content = str_replace(
				'</head>',
				'<link rel="stylesheet" href="assets/live-system-warning/css/backend.css">
</head>',
				$content
			);
		}

		return $content;
	}
}
