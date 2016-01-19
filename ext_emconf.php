<?php

########################################################################
# Extension Manager/Repository config file for ext "Themes".
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'THEMES - The theme engine',
	'description' => '',
	'category' => 'fe',
	'shy' => 0,
	'version' => '2.5.5',
	'dependencies' => '',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'stable',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearcacheonload' => 0,
	'lockType' => '',
	'author' => 'Themes-Team (Kay Strobach, Jo Hasenau, Thomas Deuling)',
	'author_email' => 'typo3@kay-strobach.de',
	'author_company' => 'private',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => array(
		'depends' => array(
			'php' => '5.2.0-0.0.0',
			'typo3' => '6.2.14-6.2.99',
			'static_info_tables' => '6.0.10-6.3.99',
			'yaml_parser' => '1.0.0-1.0.99',
		),
		'conflicts' => array(
			'belayout_tsprovider' => ''
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => '',
);

?>
