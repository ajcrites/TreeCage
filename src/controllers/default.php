<?php
if ('POST' != $_SERVER['REQUEST_METHOD']) {
   //exit;
}

$tree = new Tree;
$tree->addAll(array('F', 'B', 'G', 'A', 'D', 'I', 'C', 'E', 'H'));

$_SESSION['tree'] = $tree;

echo json_encode($tree->toArray());
?>
