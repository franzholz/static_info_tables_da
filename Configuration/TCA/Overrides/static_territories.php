<?php
defined('TYPO3_MODE') or die();

$tablename = 'static_territories';
$additionalFields = array(
    'tr_name_en' => 'tr_name_da'
);
foreach ($additionalFields as $sourceField => $destField) {
    $additionalColumns = array();
    $additionalColumns[$destField] = $GLOBALS['TCA'][$tablename]['columns'][$sourceField];
    $additionalColumns[$destField]['label'] = 'LLL:EXT:static_info_tables_da/Resources/Private/Language/locallang_db.xlf:static_territories_item.' . $destField;
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns($tablename, $additionalColumns);
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes($tablename, $destField, '', 'after:' . $sourceField);
    // Add this field as a search field
    $GLOBALS['TCA'][$tablename]['ctrl']['searchFields'] .= ',' . $destField;
}
unset($additionalColumns);
unset($additionalFields);
