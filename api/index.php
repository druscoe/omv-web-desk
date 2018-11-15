<?php
	require_once("openmediavault/autoloader.inc");
	require_once("openmediavault/env.inc");

	// Display errors if debugging is enabled.
	if (TRUE === \OMV\Environment::getBoolean("OMV_DEBUG_PHP")){
		ini_set("display_errors", 1);
	}

	$session = &\OMV\Session::getInstance();
	$session->start();

	if ($session->isAuthenticated() && !$session->isTimeout() && file_exists("./webdesk_config.js")) {
    require("./index.html");
	}
	else{
		require("./login/login.php");
	}
	exit;
?>
