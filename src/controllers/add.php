<?php
if ('POST' != $_SERVER['REQUEST_METHOD'] || !isset($_POST['node'])) {
   //exit;
}

if (!isset($_SESSION['tree'])) {
   $_SESSION['tree'] = new Tree;
}

try {
   $_SESSION['tree']->add($_POST['node']);
}
catch (TreeException $e) {
   header('HTTP/1.0 500 Internal Server Error');
   exit;
}

header('Content-Type: application/json');
echo json_encode($_SESSION['tree']->toArray());
?>
