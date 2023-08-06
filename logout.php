<?php


if(!session_id()){
    session_start();
}
if(session_id()){
    session_unset();
    header("location:home.php");
}


?>