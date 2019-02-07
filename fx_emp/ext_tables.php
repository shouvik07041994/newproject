<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'F6.FxEmp',
            'List',
            'list'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('fx_emp', 'Configuration/TypoScript', 'Employee Record');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_fxemp_domain_model_eployeee', 'EXT:fx_emp/Resources/Private/Language/locallang_csh_tx_fxemp_domain_model_eployeee.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_fxemp_domain_model_eployeee');

    }
);
