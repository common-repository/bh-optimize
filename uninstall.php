<?php

/*
 * Uninstall BH Optimize Plugin
 */
 
if (!defined('BH_UNINSTALL_PLUGIN'))
	exit();

delete_option('bh_tuning_settings');
delete_site_option('bh_tuning_settings');

?>