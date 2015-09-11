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
 
/**
* Find all folder in a folder
*
* @param string $strPath    The folder path
* @param array  $arrOptions An optional options array
*
* @return \Model\Collection|\FilesModel|null A collection of models or null if there are no matching files
*/

namespace FFIF;

class cFindFolderInFolder extends \Model {

	protected static $strTable = 'tl_files';

	public static function findMultipleFoldersByFolder($strPath, array $arrOptions=array())
		{
			$t = static::$strTable;
			$strPath = str_replace(array('%', '_'), array('\\%', '\\_'), $strPath);

			return static::findBy(array("$t.type='folder' AND $t.path LIKE ? AND $t.path NOT LIKE ?"), array($strPath.'/%', $strPath.'/%/%'), $arrOptions);
		}
}
