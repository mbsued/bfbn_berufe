<?php
defined('TYPO3') || die();

/**
 * Include TypoScript
 */
// @extensionScannerIgnoreLine seems to be a false positive
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
	'bfbn_berufe',
	'Configuration/TypoScript',
	'BFBN Berufe'
);
