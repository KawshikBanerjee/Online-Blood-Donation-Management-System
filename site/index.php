<?php 
    include_once "include/DBh.php";
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="./CSS/bootstrap.min.css">
    <link rel="stylesheet" href="./CSS/bootstrap.min.js">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Login</title>
</head>
<body>
    <div class="main-menu">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="#">Blood Donation System</a>
            </div>
        </nav>
    </div>

    <p class="container display-4 text-center mt-2">Admin Login</p>
    
    <div class="container adminLogin">
    
    <form class="justify-content-center" action="index.php" method="POST">
        <div class="form-group">
            <label for="exampleInputEmail1">Username</label>
            <input type="text" class="form-control" id="name" required
            name="name" aria-describedby="name" placeholder="Username">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="password" required 
            name="password" placeholder="Password">
        </div>
        
        <input type="submit" name="submit" role="button" 
        class="btn btn-success submitButton" value="Login">
        
    </form>
    </div>
</body>
</html>

<?php

    if (isset($_POST['submit'])) {
        $userName = $_POST['name'];
        $passWord = $_POST['password'];
        //echo $userName;
        $_SESSION['ok']=FALSE;
        

        $sql = " SELECT * FROM admin WHERE ok=FALSE; ";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                //echo $row['username'];
                //echo $row['pass'];

                if ($row['username']==$userName && $row['pass']==$passWord) {
                    $_SESSION['ok']=TRUE;
                    header ('Location: home.php');
                }
                
                else {
                    $_SESSION['ok']=FALSE;
                    header ('Location: index.php?Error=WrongSubmission');
                }
            }
        }
    }

    require "footer.php";
?>