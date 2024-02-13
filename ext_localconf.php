<?php
defined('TYPO3') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'BfbnBerufe',
            'Berufe',
			[\BfbnBerufe\BfbnBerufe\Controller\BerufeController::class => 'list,show'],
			[\BfbnBerufe\BfbnBerufe\Controller\BerufeController::class => 'list,show']			
        );		

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    berufe {
                        iconIdentifier = bfbn_berufe-plugin-berufe
                        title = LLL:EXT:bfbn_berufe/Resources/Private/Language/locallang_db.xlf:tx_bfbn_berufe_berufe.name
                        description = LLL:EXT:bfbn_berufe/Resources/Private/Language/locallang_db.xlf:tx_bfbn_berufe_berufe.description
                        tt_content_defValues {
                            CType = list
                            list_type = bfbnberufe_berufe
                        }
                    }
                }
                show = *
            }
       }'
    );
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
		
			$iconRegistry->registerIcon(
				'bfbn_berufe-plugin-berufe',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:bfbn_berufe/Resources/Public/Icons/user_plugin_berufe.svg']
			);
		
    }
);
