<?php 
    
    session_start();
    if (!$_SESSION['ok']) {
        header ('Location: index.php?Error=NotLoggedIn');
    }
    
    include_once "include/DBh.php";

    if (isset($_POST['logout'])) {
        session_destroy();
        header('Location: ../index.php');
    }

?>