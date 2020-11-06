<?php
defined('TYPO3_MODE') || die();

if (!isset($GLOBALS['TCA']['fe_users']['ctrl']['type'])) {
    // no type field defined, so we define it here. This will only happen the first time the extension is installed!!
    $GLOBALS['TCA']['fe_users']['ctrl']['type'] = 'tx_extbase_type';
    $tempColumnstx_keycloakconnectorsso_fe_users = [];
    $tempColumnstx_keycloakconnectorsso_fe_users[$GLOBALS['TCA']['fe_users']['ctrl']['type']] = [
        'exclude' => true,
        'label'   => 'LLL:EXT:keycloak_connector_sso/Resources/Private/Language/locallang_db.xlf:tx_keycloakconnectorsso.tx_extbase_type',
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [
                ['',''],
                ['KeycloakUser','Tx_KeycloakConnectorSso_KeycloakUser']
            ],
            'default' => 'Tx_KeycloakConnectorSso_KeycloakUser',
            'size' => 1,
            'maxitems' => 1,
        ]
    ];
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('fe_users', $tempColumnstx_keycloakconnectorsso_fe_users);
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
    'fe_users',
    $GLOBALS['TCA']['fe_users']['ctrl']['type'],
    '',
    'after:' . $GLOBALS['TCA']['fe_users']['ctrl']['label']
);

$tmp_keycloak_connector_sso_columns = [

    'keycloak_user_id' => [
        'exclude' => false,
        'label' => 'LLL:EXT:keycloak_connector_sso/Resources/Private/Language/locallang_db.xlf:tx_keycloakconnectorsso_domain_model_keycloakuser.keycloak_user_id',
        'config' => [
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim,required'
        ],
    ],

];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('fe_users',$tmp_keycloak_connector_sso_columns);

/* inherit and extend the show items from the parent class */

if (isset($GLOBALS['TCA']['fe_users']['types']['0']['showitem'])) {
    $GLOBALS['TCA']['fe_users']['types']['Tx_KeycloakConnectorSso_KeycloakUser']['showitem'] = $GLOBALS['TCA']['fe_users']['types']['0']['showitem'];
} elseif(is_array($GLOBALS['TCA']['fe_users']['types'])) {
    // use first entry in types array
    $fe_users_type_definition = reset($GLOBALS['TCA']['fe_users']['types']);
    $GLOBALS['TCA']['fe_users']['types']['Tx_KeycloakConnectorSso_KeycloakUser']['showitem'] = $fe_users_type_definition['showitem'];
} else {
    $GLOBALS['TCA']['fe_users']['types']['Tx_KeycloakConnectorSso_KeycloakUser']['showitem'] = '';
}
$GLOBALS['TCA']['fe_users']['types']['Tx_KeycloakConnectorSso_KeycloakUser']['showitem'] .= ',--div--;LLL:EXT:keycloak_connector_sso/Resources/Private/Language/locallang_db.xlf:tx_keycloakconnectorsso_domain_model_keycloakuser,';
$GLOBALS['TCA']['fe_users']['types']['Tx_KeycloakConnectorSso_KeycloakUser']['showitem'] .= 'keycloak_user_id';

$GLOBALS['TCA']['fe_users']['columns'][$GLOBALS['TCA']['fe_users']['ctrl']['type']]['config']['items'][] = ['LLL:EXT:keycloak_connector_sso/Resources/Private/Language/locallang_db.xlf:fe_users.tx_extbase_type.Tx_KeycloakConnectorSso_KeycloakUser','Tx_KeycloakConnectorSso_KeycloakUser'];
