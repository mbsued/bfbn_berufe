<?php
defined('TYPO3') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'BfbnBerufe',
            'Berufe',
			[\BfbnBerufe\BfbnBerufe\Controller\BerufeController::class => 'list,show'],
			[\BfbnBerufe\BfbnBerufe\Controller\BerufeController::class => 'list,show'],
			 \TYPO3\CMS\Extbase\Utility\ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
        );

		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
		
			$iconRegistry->registerIcon(
				'bfbn_berufe-plugin-berufe',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:bfbn_berufe/Resources/Public/Icons/user_plugin_berufe.svg']
			);
		
    }
);
