<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'F6.FxEmp',
            'List',
            [
                'Eployeee' => 'list, show, new, create, edit, update, delete'
            ],
            // non-cacheable actions
            [
                'Eployeee' => 'create, update, delete,list,delete'
            ]
        );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    list {
                        iconIdentifier = fx_emp-plugin-list
                        title = LLL:EXT:fx_emp/Resources/Private/Language/locallang_db.xlf:tx_fx_emp_list.name
                        description = LLL:EXT:fx_emp/Resources/Private/Language/locallang_db.xlf:tx_fx_emp_list.description
                        tt_content_defValues {
                            CType = list
                            list_type = fxemp_list
                        }
                    }
                }
                show = *
            }
       }'
    );
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
		
			$iconRegistry->registerIcon(
				'fx_emp-plugin-list',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:fx_emp/Resources/Public/Icons/user_plugin_list.svg']
			);
		
    }
);
