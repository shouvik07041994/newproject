<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'F6.Fxteam',
            'Fzteam',
            'TEAMMNGE'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('fxteam', 'Configuration/TypoScript', 'team');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_fxteam_domain_model_team', 'EXT:fxteam/Resources/Private/Language/locallang_csh_tx_fxteam_domain_model_team.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_fxteam_domain_model_team');

    }
);
