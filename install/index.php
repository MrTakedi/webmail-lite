<?php

/*
 * Copyright 2004-2014, AfterLogic Corp.
 * Licensed under AGPLv3 license or AfterLogic license
 * if commerical version of the product was purchased.
 * See the LICENSE file for a full license statement.
 */


	defined('WM_INSTALLER_PATH') || define('WM_INSTALLER_PATH', (dirname(__FILE__).'/'));

	include WM_INSTALLER_PATH.'installer.php';

	$oInstaller = new CInstaller();
	$oInstaller->Run();