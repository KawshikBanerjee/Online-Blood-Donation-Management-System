<?php 
    session_start();
    if (!$_SESSION['ok']) {
        header ('Location: index.php?Error=NotLoggedIn');
    }
    
    require "header.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Settings</title>
</head>
<body>
    <div class="container adminLogin">
        <form class="justify-content-center" action="include/changePassDB.php" method="POST">
        <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="userName" 
                name="userName" required placeholder="Username">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Old Password</label>
                <input type="password" class="form-control" id="oldPass1" 
                name="oldPass1" required placeholder="Old Password">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword2">Repeat Old Password</label>
                <input type="password" class="form-control" id="oldPass2" 
                name="oldPass2" required placeholder="Repeat Old Password">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword3">New Password</label>
                <input type="password" class="form-control" id="newPass" 
                name="newPass" required placeholder="New Password">
            </div>
        
            <input type="submit" name="changePass" role="button" 
            class="btn btn-info submitButton" value="Change Password">

        </form>
    </div>
</body>
</html>

<?php 
    require "footer.php";
?>