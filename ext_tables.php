<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('keycloak_connector_sso', 'Configuration/TypoScript', 'Keycloak connector SSO');

    }
);
