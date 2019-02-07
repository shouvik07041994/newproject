<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'F6.Demo',
            'Content123',
            [
                'Content' => 'list, show, new, create, edit, update, delete'
            ],
            // non-cacheable actions
            [
                'Content' => 'create, update, delete'
            ]
        );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    content123 {
                        iconIdentifier = demo-plugin-content123
                        title = LLL:EXT:demo/Resources/Private/Language/locallang_db.xlf:tx_demo_content123.name
                        description = LLL:EXT:demo/Resources/Private/Language/locallang_db.xlf:tx_demo_content123.description
                        tt_content_defValues {
                            CType = list
                            list_type = demo_content123
                        }
                    }
                }
                show = *
            }
       }'
    );
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
		
			$iconRegistry->registerIcon(
				'demo-plugin-content123',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:demo/Resources/Public/Icons/user_plugin_content123.svg']
			);
		
    }
);
