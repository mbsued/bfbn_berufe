<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {


        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_bfbnberufe_domain_model_berufe', 'EXT:bfbn_berufe/Resources/Private/Language/locallang_csh_tx_bfbnberufe_domain_model_berufe.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_bfbnberufe_domain_model_berufe');

    }
);
