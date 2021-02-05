<?php
$guest = 0;
$user = 2;
$moderator = 3;
$admin = 7;

$readpost = 1;
$writepost = 2;
$deletepost = 4;

function GuestPermission($user , $permision){
    if($user >= $permision){
        return true;
    }
    else {
        return false;
    }
}


if (GuestPermission($guest,$writepost) == true){
    echo "masz możliwośc napisać post";
}
else{
        echo " nie masz możliwośc napisać post";

}
?>
