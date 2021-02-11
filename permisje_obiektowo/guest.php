<?php
require_once("guestabstract.php");
class guest extends guestabstract
{

    public function __construct() {
        $this->permission = PermissionInterface::READ_POST | PermissionInterface::WRITE_POST;
    }

}




?>