<?php
/**
 * The purpose of this file is to emit a 404 error from an invalid route
 * @author Andrew Crites <explosion-pills@aysites.com>
 * @copyright 2012
 * @package treecage
 */

header('HTTP/1.0 404 Not Found');

include VIEWS . '/404.html';
?>
