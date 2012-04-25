<?php
/**
 * The purpose of this file is to act as the router for TreeCage
 * @author Andrew Crites <explosion-pills@aysites.com>
 * @copyright 2012
 * @package treecage
 */

if (!isset($_SERVER['APPROOT'])) {
   exit('App root environment not found.  Run this from the browser or use the deploy script');
}
$app = $_SERVER['APPROOT'];

//disguise filename
if (strpos($_SERVER['REQUEST_URI'], 'index.') !== false) {
   header('Location: /');
   exit;
}

set_include_path(get_include_path() . ":$app/src:$app/lib");

/**#@+
 * Configuration constants
 */
define('CONTROLLERS', "$app/src/controllers");
define('VIEWS', "$app/src/view");
/**#@-*/

require 'bootstrap.php';
?>
