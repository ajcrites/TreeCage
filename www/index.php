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
set_include_path(get_include_path() . ":$app/lib/php-binary-tree" . ":$app/src");

?>
