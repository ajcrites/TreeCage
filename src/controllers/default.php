<?php
/**
 * The purpose of this file is to replace the current tree representation with a known sample
 * @author Andrew Crites <explosion-pills@aysites.com>
 * @copyright 2012
 * @package treecage
 * TODO the json handling should be a method/function of bootstrap as other controllers will need it
 */

if ('POST' != $_SERVER['REQUEST_METHOD']) {
   exit;
}

$tree = new Tree;
$tree->addAll(array('F', 'B', 'G', 'A', 'D', 'I', 'C', 'E', 'H'));

$_SESSION['tree'] = $tree;

header('Content-Type: application/json');

echo json_encode($tree->toArray());
?>
