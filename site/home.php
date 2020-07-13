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
    <title>Home</title>
</head>
<body>
    <div class="container adminLogin">

        <p class="display-4">WELCOME!</p>

        <form action="include/isLogged.php" method="POST"> 

            <input type="submit" name="logout" role="button" 
            class="btn btn-danger submitButton" value="Logout">

        </form>

    </div>
</body>
</html>

<?php 
    require "footer.php";
?>