<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'F6.Fxteam',
            'Fzteam',
            [
                'Team' => 'list, show, new, create, edit, update, delete'
            ],
            // non-cacheable actions
            [
                'Team' => 'create, update, delete'
            ]
        );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    fzteam {
                        iconIdentifier = fxteam-plugin-fzteam
                        title = LLL:EXT:fxteam/Resources/Private/Language/locallang_db.xlf:tx_fxteam_fzteam.name
                        description = LLL:EXT:fxteam/Resources/Private/Language/locallang_db.xlf:tx_fxteam_fzteam.description
                        tt_content_defValues {
                            CType = list
                            list_type = fxteam_fzteam
                        }
                    }
                }
                show = *
            }
       }'
    );
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
		
			$iconRegistry->registerIcon(
				'fxteam-plugin-fzteam',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:fxteam/Resources/Public/Icons/user_plugin_fzteam.svg']
			);
		
    }
);
