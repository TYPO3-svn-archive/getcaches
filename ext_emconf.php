<?php

########################################################################
# Extension Manager/Repository config file for ext "getcaches".
#
# Auto generated 29-05-2012 22:27
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Get caches',
	'description' => 'Provides simple access to available clear cache processes from remote, if valid backend session exists.',
	'category' => 'misc',
	'author' => 'Armin Ruediger Vieweg',
	'author_email' => 'armin@v.ieweg.de',
	'author_company' => '',
	'shy' => '',
	'priority' => '',
	'module' => '',
	'state' => 'stable',
	'internal' => '',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'version' => '1.0.0',
	'dependencies' => '',
	'constraints' => array(
		'depends' => array(
			'typo3' => '4.4.0-0.0.0',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'suggests' => array(
	),
	'conflicts' => '',
	'_md5_values_when_last_written' => 'a:12:{s:12:"ext_icon.gif";s:4:"a054";s:17:"ext_localconf.php";s:4:"ddd6";s:14:"ext_tables.php";s:4:"0643";s:14:"ext_tables.sql";s:4:"d41d";s:26:"Classes/ClearCacheMenu.php";s:4:"b460";s:30:"Classes/class.tx_getcaches.php";s:4:"3c57";s:31:"Resources/Public/Images/all.png";s:4:"2655";s:41:"Resources/Public/Images/clearRTECache.png";s:4:"02da";s:33:"Resources/Public/Images/pages.png";s:4:"2661";s:38:"Resources/Public/Images/singlepage.png";s:4:"b298";s:39:"Resources/Public/Images/temp_CACHED.png";s:4:"2cff";s:14:"doc/manual.sxw";s:4:"ecb4";}',
);

?>