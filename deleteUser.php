<?php
    include_once "users.php";
    include_once "accessCheck.php";

    $isAdmin = $_SESSION["loggedUser"]["Admin"];
    if ($isAdmin) {
        TableUsers()->deleteUser($_GET["id"]);
        redirect("listUsers.php");
    } else 
        illegalAccessRedirection();
    
?>