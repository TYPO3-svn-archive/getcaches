<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

$GLOBALS['TYPO3_CONF_VARS'][TYPO3_MODE]['AJAX']['Getcaches::getCaches']
		= t3lib_extMgm::extPath($_EXTKEY) . 'Classes/class.tx_getcaches.php:tx_getcaches->getCaches';

?>