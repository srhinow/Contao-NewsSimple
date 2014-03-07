<?php

/**
 * Contao Open Source CMS
 * 
 * Copyright (C) 2005-2013 Leo Feyer
 * 
 * @package News_simple
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Classes
	'Contao\NewsSimple' => 'system/modules/news_simple/classes/NewsSimple.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'news_full_simple' => 'system/modules/news_simple/templates',
));
