<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'BfbnBerufe.BfbnBerufe',
            'Berufe',
            [
                'Berufe' => 'list, show, suchen'
            ],
            // non-cacheable actions
            [
                'Berufe' => 'list, show, suchen'
            ]
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
