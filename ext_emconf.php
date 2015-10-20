<?php
########################################################################
# Extension Manager/Repository config file for ext: "static_info_tables_da"
#
# Auto generated 20-07-2005 12:06
#
# Manual updates:
# Only the data in the array - anything else is removed by next write
########################################################################
$EM_CONF[$_EXTKEY] = Array (
	'title' => 'Static Info Tables (da)',
	'description' => 'Danish (da) language pack for the Static Info Tables providing localized names for countries, currencies and so on.',
	'category' => 'misc',
	'shy' => 0,
	'version' => '6.3.1',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'stable',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => 'static_countries,static_languages,static_currencies,static_territories',
	'clearcacheonload' => 1,
	'lockType' => '',
	'author' => 'Franz Holzinger',
	'author_email' => 'franz@ttproducts.de',
	'author_company' => 'jambage.com',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => array (
		'depends' => array(
			'typo3' => '6.1.0-7.99.99',
			'static_info_tables' => '6.2.1-',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => '',
);
?>