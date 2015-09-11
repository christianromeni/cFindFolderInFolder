<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (C) 2005-2013 Leo Feyer
 *
 * @package   cFindFolderInFolder
 * @author    Christian Romeni  <christian@romeni.eu>
 * @link      https://romeni.eu
 * @license   GNU
 * @copyright Romeni WebDesign
 */

ClassLoader::addNamespaces(array
(
	'FFIF',
));

/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	'FFIF\cFindFolderInFolder' => 'system/modules/cFindFolderInFolder/models/FindFolderInFolder.php',
));
