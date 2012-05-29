<?php
/***************************************************************
*  Copyright notice
*
*  (c) Armin Rüdiger Vieweg <armin@v.ieweg.de>
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*  A copy is found in the textfile GPL.txt and important notices to the license
*  from the author is found in LICENSE.txt distributed with these scripts.
*
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/

require_once(PATH_typo3 . 'interfaces/interface.backend_toolbaritem.php');
require_once(PATH_typo3 . 'classes/class.clearcachemenu.php');

/**
 * class to render the menu for the cache clearing actions
 *
 * @package distant_clearcache
 * @license http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 * @author Armin Rüdiger Vieweg <armin@v.ieweg.de>
 */
class Tx_Getcaches_ClearCacheMenu extends ClearCacheMenu implements backend_toolbarItem {
	/**
	 * Gets the cache actions
	 *
	 * @return array the cache actions
	 */
	public function render() {
		$systemCaches = array('all', 'pages', 'temp_CACHED', 'clearRTECache');

		$cacheActions = $this->cacheActions;
		foreach($cacheActions as $key => $cacheAction) {
			$id = $cacheAction['id'];
			if (in_array($id, $systemCaches)) {
				$cacheActions[$key]['icon'] = $this->buildImage($id);
			} else {
				$cacheActions[$key]['icon'] = $this->extractAbsoluteImagePath($cacheAction['icon']);
			}
			$cacheActions[$key]['icon'] = $this->getThisUrl() . $cacheActions[$key]['icon'];
			$cacheActions[$key]['href'] = $this->getThisUrl() . '/typo3/' . $cacheActions[$key]['href'];
		}
		return $cacheActions;
	}

	/**
	 * Create absolute path to cache icon
	 *
	 * @param $id
	 * @return string
	 */
	protected function buildImage($id) {
		return '/typo3conf/ext/getcaches/Resources/Public/Images/' . $id . '.png';
	}

	/**
	 * Extracts the path of <img> tag and make the path absolute
	 *
	 * @param $htmlImageTag
	 * @return mixed
	 */
	protected function extractAbsoluteImagePath($htmlImageTag) {
		preg_match('/src="(.*?)"/i', $htmlImageTag, $imageParts);
		return str_replace('../', '/', $imageParts[1]);
	}

	/**
	 * Returns the current hostname, including the scheme
	 *
	 * @return	string
	 */
	protected static function getThisUrl() {
		$p = parse_url(t3lib_div::getIndpEnv('TYPO3_REQUEST_SCRIPT')); // Url of this script
		return $p['scheme'] . '://' . $p['host'];
	}

}
?>
