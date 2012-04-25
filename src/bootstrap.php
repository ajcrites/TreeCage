<?php
/**
 * The purpose of this file is to define all necessary functionality for TreeCage and find the route
 * @author Andrew Crites <andrew@gleim.com>
 * @copyright 2012
 * @package treecage
 */

session_start();

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

if ($controller) {
   list($cont) = $cont;

   if (is_readable(CONTROLLERS . "$cont.php")) {
      require CONTROLLERS . "$cont.php";
   }
   else {
      require CONTROLLERS . "/404.php";
   }
}
else {
   require CONTROLLERS . '/main.php';
}
?>
