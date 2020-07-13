<?php
    session_start();
    include_once "DBh.php";

    if (isset($_POST['changePass'])) {

        $userName = $_POST['userName'];
        $oldPass1 = $_POST['oldPass1'];
        $oldPass2 = $_POST['oldPass2'];
        $newPass = $_POST['newPass'];

        if ($oldPass1 != $oldPass2) {
            header("Location: ../adminSettings.php?Error=OldPasswordsDoNotMatch");
        }

        else if ($oldPass1 == $newPass) {
            header("Location: ../adminSettings.php?Error=SamePassword");
        }

        else {
            $sql = " UPDATE admin SET pass=$newPass WHERE username='$userName'; ";
            mysqli_query($conn, $sql);
            $_SESSION['ok']=FALSE;
            header("Location: ../index.php?logoutSuccess");
        }
    }

    else {
        header('Location: ../viewDonor.php');
    }

?>