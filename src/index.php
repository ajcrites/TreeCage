<?php
/**
 * The purpose of this file is to create a visual representation of a binary tree
 * @author Andrew Crites <explosion-pills@aysites.com>
 * @copyright 2012
 * @package
 */

function __tree_autoload($class) {
   if (file_exists("src/$class.php")) {
      include "src/$class.php";
   }
   else if (file_exists("src/node/$class.php")) {
      include "src/node/$class.php";
   }
}
spl_autoload_register('__tree_autoload');

include 'view/index.html';
?>
