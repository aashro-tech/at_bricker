<?php

// TYPO3 Security Check
defined('TYPO3') or die();

// Add default RTE configuration
$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['default'] = 'EXT:at_bricker/Configuration/RTE/Default.yaml';

// Set default values if not already set by the backend
if (empty($GLOBALS['TYPO3_CONF_VARS']['SYS']['sitename']) || $GLOBALS['TYPO3_CONF_VARS']['SYS']['sitename'] == "New TYPO3 Project" || $GLOBALS['TYPO3_CONF_VARS']['SYS']['sitename'] == "New TYPO3 site") {
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['sitename'] = 'Bricker';
}

if (empty($GLOBALS['TYPO3_CONF_VARS']['EXTENSIONS']['backend']['backendLogo'])) {
    $GLOBALS['TYPO3_CONF_VARS']['EXTENSIONS']['backend']['backendLogo'] = 'EXT:at_bricker/Resources/Public/Icons/logo.svg';
}

if (empty($GLOBALS['TYPO3_CONF_VARS']['EXTENSIONS']['backend']['loginLogo'])) {
    $GLOBALS['TYPO3_CONF_VARS']['EXTENSIONS']['backend']['loginLogo'] = 'EXT:at_bricker/Resources/Public/Icons/logo.svg';
}
