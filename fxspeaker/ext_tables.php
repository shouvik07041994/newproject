<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'F6.Fxspeaker',
            'Fxspeakermng',
            'speakermng'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('fxspeaker', 'Configuration/TypoScript', 'speaker');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_fxspeaker_domain_model_speaker', 'EXT:fxspeaker/Resources/Private/Language/locallang_csh_tx_fxspeaker_domain_model_speaker.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_fxspeaker_domain_model_speaker');

    }
);
