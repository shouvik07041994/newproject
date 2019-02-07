<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'F6.Demo',
            'Content123',
            'contenttype'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('demo', 'Configuration/TypoScript', 'content man');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_demo_domain_model_content', 'EXT:demo/Resources/Private/Language/locallang_csh_tx_demo_domain_model_content.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_demo_domain_model_content');

    }
);
