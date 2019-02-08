<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'F6.Fxspeaker',
            'Fxspeakermng',
            [
                'Speaker' => 'list, show, new, create, edit, update, delete'
            ],
            // non-cacheable actions
            [
                'Speaker' => 'create, update, delete'
            ]
        );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    fxspeakermng {
                        iconIdentifier = fxspeaker-plugin-fxspeakermng
                        title = LLL:EXT:fxspeaker/Resources/Private/Language/locallang_db.xlf:tx_fxspeaker_fxspeakermng.name
                        description = LLL:EXT:fxspeaker/Resources/Private/Language/locallang_db.xlf:tx_fxspeaker_fxspeakermng.description
                        tt_content_defValues {
                            CType = list
                            list_type = fxspeaker_fxspeakermng
                        }
                    }
                }
                show = *
            }
       }'
    );
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
		
			$iconRegistry->registerIcon(
				'fxspeaker-plugin-fxspeakermng',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:fxspeaker/Resources/Public/Icons/user_plugin_fxspeakermng.svg']
			);
		
    }
);
