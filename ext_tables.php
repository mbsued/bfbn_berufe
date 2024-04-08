<?php
defined('TYPO3') || die('Access denied.');

use TYPO3\CMS\Core\Information\Typo3Version;
use TYPO3\CMS\Core\Utility\GeneralUtility;

$boot = static function (): void {
	$versionInformation = GeneralUtility::makeInstance(Typo3Version::class);
	if ($versionInformation->getMajorVersion() < 12) {
		// @extensionScannerIgnoreLine
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_bfbnberufe_domain_model_berufe', 'EXT:bfbn_berufe/Resources/Private/Language/locallang_csh_tx_bfbnberufe_domain_model_berufe.xlf');
		// @extensionScannerIgnoreLine
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_bfbnberufe_domain_model_berufe');
	}
};

$boot();
unset($boot);
