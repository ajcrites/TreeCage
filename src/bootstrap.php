<?php
/**
 * The purpose of this file is to define all necessary functionality for TreeCage and find the route
 * @author Andrew Crites <explosion-pills@aysites.com>
 * @copyright 2012
 * @package treecage
 */

/**
 * Create a route to a controller plus data based on the client request
 */
function route() {
   return array_values(
      array_filter(
         explode('/'
            , parse_url(
               str_replace($_SERVER['ROOT'], '', $_SERVER['REQUEST_URI'])
               , PHP_URL_PATH
            )
         )
      )
   );
}

$controller = route();

function __tree_autoload($class) {
   $pbts = $_SERVER['APPROOT'] . '/lib/php-binary-tree/src';
   if (file_exists("$pbts/$class.php")) {
      include "$pbts/$class.php";
   }
   else if (file_exists("$pbts/node/$class.php")) {
      include "$pbts/node/$class.php";
   }
}
spl_autoload_register('__tree_autoload');

session_start();

/**
 * Use the requested controller, if available.  Otherwise, use the default
 * TODO a routes file to check against requests would obviate `is_readable`
 */
if ($controller) {
   list($cont) = $controller;

   if (is_readable(CONTROLLERS . "/$cont.php")) {
      require CONTROLLERS . "/$cont.php";
   }
   else {
      require CONTROLLERS . "/404.php";
   }
}
else {
   require CONTROLLERS . '/main.php';
}
?>
