<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (C) 2005-2013 Leo Feyer
 *
 * @package   cFindFolderInFolder
 * @author    Christian Romeni  <c.romeni@brainfactory.de>
 * @link      https://brainfactory.de
 * @license   GNU
 * @copyright BrainFactory
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