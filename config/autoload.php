<?php if (!defined('TL_ROOT')) die('You cannot access this file directly!');

/**
 * Contao Open Source CMS
 *
 * Copyright (C) 2005-2013 Leo Feyer
 *
 * @package   fen
 * @author    Frank Hoppe
 * @license   GNU/LGPL
 * @copyright Frank Hoppe 2013
 */

/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Classes
	'FEN'                => 'system/modules/fen/FEN.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'ce_fen'        => 'system/modules/fen/templates',
));
