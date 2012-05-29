<?php
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2012 Armin Ruediger Vieweg <armin@v.ieweg.de>
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * @package getcaches
 * @license http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 * @author Armin Ruediger Vieweg <armin@v.ieweg.de>
 */
class tx_getcaches {

	/**
	 * Method which will be called by ajax request
	 *
	 * @return string Available caches as json
	 */
	public function getCaches() {
		echo json_encode($this->getCachesAllowedToClear());
	}

	/**
	 * Returns an array with available caches
	 *
	 * @return array caches which the current user is allowed to clear
	 */
	protected function getCachesAllowedToClear() {
		require_once(t3lib_extMgm::extPath('getcaches') . 'Classes/ClearCacheMenu.php');

		/** @var $menu Tx_Getcaches_ClearCacheMenu */
		$menu = t3lib_div::makeInstance('Tx_Getcaches_ClearCacheMenu');
		return $menu->render();
	}
}
?>