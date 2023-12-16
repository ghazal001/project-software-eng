<?php
include("session.php");

if(isset($_POST['akkar'])){
    header("Location:akkar.php");
}
if(isset($_POST['tripoli'])){
    header("Location:tripoli.php");
}
if(isset($_POST['beirut'])){
    header("Location:delete.php");
}
if(isset($_POST['sour'])){
    header("Location:sour.php");
}


?>