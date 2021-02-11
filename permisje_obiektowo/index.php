<?php
require_once("guest.php");
require_once("user.php");
require_once 'permissioninterface.php';
$g = new guest();
$u = new user();
echo var_dump($g->isPermited(PermissionInterface::READ_POST))

// jeśli prawda to wyświetla odpowiedni panel


?>