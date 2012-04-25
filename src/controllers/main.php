<?php
/**
 * The purpose of this file is to create a visual representation of a binary tree
 * @author Andrew Crites <explosion-pills@aysites.com>
 * @copyright 2012
 * @package
 */

function __tree_autoload($class) {
   $pbts = 'php-binary-tree/src';
   if (file_exists("$pbts/$class.php")) {
      include "$pbts/$class.php";
   }
   else if (file_exists("$pbts/node/$class.php")) {
      include "$pbts/node/$class.php";
   }
}
spl_autoload_register('__tree_autoload');

include 'view/main.html';
?>
