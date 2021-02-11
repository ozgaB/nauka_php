<?php
require_once 'permissioninterface.php';
abstract class guestabstract implements PermissionInterface
{
    protected $permission = 0;
 abstract function __construct();
 
    static function checkPermission($userPermission, $permission)
    {
        if($userpermission & $permission)
            return true;
        
        return false;
    }
    function getPermission() {
        return $this->permission;
    }
    function isPermited($permission) {
       if ($this->permission & $permission)
           return true;
       
       return false;
    }
}
?>