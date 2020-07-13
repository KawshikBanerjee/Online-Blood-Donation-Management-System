<?php 
    session_start();
    if (!$_SESSION['ok']) {
        header ('Location: index.php?Error=NotLoggedIn');
    }
    
    require "header.php";
    include_once "include/DBh.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Search Donor</title>
</head>
</html>
<body>
    <div class="container searchDonor">
    <form class="form-inline justify-content-center" 
    action="searchDB.php" method="POST">

        <div class="form-group mb-2">
            <label for="exampleInputEmail1">Enter Blood Group</label>
        </div>

        <div class="form-group mx-sm-3 mb-2">
            <select id="bg" name="bg" class="form-control" required>
                <option selected></option>
                <option>A+</option>
                <option>A-</option>
                <option>B+</option>
                <option>B-</option>
                <option>AB+</option>
                <option>AB-</option>
                <option>O+</option>
                <option>O-</option>
            </select>
        </div>

        <button type="submit" name="submit" class="btn btn-primary mb-2">Search</button> 
        
    </form>
    </div>

<?php 

    require "footer.php";
?>