<?php
interface PermissionInterface
{
   const READ_POST = 1;
   const WRITE_POST = 2;
   const DELETE_POST = 4;
   const DELETE_USER = 8;
   
   
   
   function getPermission();
   function isPermited($permission);
   
   static function checkPermission($userPermission, $permission);

   
   
   
    
}







?>
