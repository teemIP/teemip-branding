<?php

namespace Steffunky\iTop\CustomCSS;

use iLoginUIExtension;
use LoginBlockExtension;
use LoginTwigContext;
use utils;

class BluemoonCSSLoginExtension implements iLoginUIExtension
{

	public function ListSupportedLoginModes()
	{
		return array('form');
	}

	public function GetTwigContext()
	{
		$oLoginContext = new LoginTwigContext();
		$oLoginContext->SetLoaderPath(utils::GetAbsoluteModulePath('steffunky-login-bluemoon-theme').'view');
		$oLoginContext->AddBlockExtension('css', new LoginBlockExtension('bluemoon.css.twig'));

		return $oLoginContext;
	}
}
