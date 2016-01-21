<?php

/*
  Plugin Name: Common Shortcodes &amp; Widgets
  Description: Provides shortcodes and widgets to add very common site features like map, flickr photos and many more.
  Version: 0.1
  Author: Bilzit
  Author URI: http://bilzit.com/
  License: GPL2
  License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

/**
 * Copyright (c) 2014, Bilzit. All rights reserved.
 *
 * Released under the GPL2 license
 * http://www.gnu.org/licenses/gpl-2.0.txt
 *
 * This is an add-on for WordPress
 * http://wordpress.org/
 *
 * **********************************************************************
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 * **********************************************************************
 */

// Constants
define('BZ_CSW_FOLDER', plugin_dir_path( __FILE__ ));
define('BZ_CSW_URL', WP_PLUGIN_URL.'/'.BZ_CSW_FOLDER);
define('BZ_CSW_SHORTCODES', BZ_CSW_FOLDER . '/shortcodes');
define('BZ_CSW_WIDGETS', BZ_CSW_FOLDER . '/widgets');
define('BZ_CSW_TEXT_DOMAIN', 'bz_csw_textdomain');

// required files
require_once ( BZ_CSW_SHORTCODES . '/bz-flickr-photos.php');
require_once ( BZ_CSW_WIDGETS . '/bz-widgets.php');

// Activate shortcodes
$bz_flickrphotos = new BZ_Flickr_Photos();