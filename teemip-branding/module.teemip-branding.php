<?php
/*
 * @copyright   Copyright (C) 2026 teemIP
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

SetupWebPage::AddModule(
	__FILE__, // Path to the current file, all other file names are relative to the directory containing this file
	'teemip-branding/1.0.0',
	array(
		// Identification
		//
		'label' => 'teemIP skin',
		'category' => 'skin',
		
		// Setup
		//
		'dependencies' => array(
            'steffunky-backoffice-bluemoon-theme/0.1.0',
		),
		'mandatory' => true,
		'visible' => false,
		'installer' => 'TipBrandingInstaller',
		
		// Components
		//
		'datamodel' => array(
			'model.teemip-branding.php',
		),
		'webservice' => array(
		),
		'data.struct' => array(
		),
		'data.sample' => array(
		),
		
		// Documentation
		//
		'doc.manual_setup' => '',
		'doc.more_information' => '',
		
		// Default settings
		//
		'settings' => array(
		),
	)
);

if (!class_exists('TipBrandingInstaller'))
{
	// Module installation handler
	//
	class TipBrandingInstaller extends ModuleInstallerAPI
	{
		public static function BeforeWritingConfig(Config $oConfiguration)
		{
			// If you want to override/force some configuration values, do it here
			$oConfiguration->Set('app_icon_url', 'https://www.teemip.com/', 'first_install_or_update');
			$oConfiguration->Set('online_help', 'https://wiki.teemip.net/', 'first_install_or_update');
            $oConfiguration->Set('backoffice_default_theme', 'bluemoon', 'first_install_or_update');
			return $oConfiguration;
		}

	}
}

