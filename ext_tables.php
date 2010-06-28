<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

$pageDSPath = 'EXT:' . $_EXTKEY . '/core_templates/datastructures/page/';
$fceDSPath = 'EXT:' . $_EXTKEY . '/core_templates/datastructures/fce/';

// Add Page Data Structures
$GLOBALS['TBE_MODULES_EXT']['xMOD_tx_templavoila_cm1']['staticDataStructures'][] = array(
	'title' => 'iPhone: Master',
	'path' => $pageDSPath . 'master (page).xml',
	'icon' => '',
	'scope' => 1,
);

// Add FCE Data Structures
$GLOBALS['TBE_MODULES_EXT']['xMOD_tx_templavoila_cm1']['staticDataStructures'][] = array(
	'title' => 'Page',
	'path' => $fceDSPath . 'page (fce).xml',
	'icon' => '',
	'scope' => 2,
);

// Only show the current FCE icon.
t3lib_div::loadTCA('tt_content');
$GLOBALS['TCA']['tt_content']['columns']['tx_templavoila_to']['config']['suppress_icons'] = 'ONLY_SELECTED';

// Register static TypoScript
t3lib_extMgm::addStaticFile($_EXTKEY, 'core_templates/typoscript/', 'TemplaVoilà Templates for jQTouch');

?>