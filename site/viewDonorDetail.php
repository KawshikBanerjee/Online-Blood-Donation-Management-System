<?php 
    session_start();
    if (!$_SESSION['ok']) {
        header ('Location: index.php?Error=NotLoggedIn');
    }
    
    require "header.php";
    include_once "include/DBh.php";

    $id = $_GET['id'];
    //echo $id;
    $sql = " SELECT * FROM donors WHERE id='$id' ";
    $result = mysqli_query($conn, $sql);
    $check = mysqli_num_rows($result);

    if ($check > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
?>

            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta http-equiv="X-UA-Compatible" content="ie=edge">
             <title>Donor Detail</title>
            </head>
            <body>
            <div class="container text-center">

                <p class="display-4 mt-4">Donor Data</p>

                <form class="pt-2 pb-5 mx-auto" action="#" method="GET" style="max-width: 400px">
                    <div class="form-group">
                        <label>Donor Name</label>
                        <input name="name" disabled value="<?php echo $row['name']; ?>" type="text" class="form-control text-center">
                    </div>
                    <div class="form-group">
                        <label>Blood Group</label>
                        <input name="bloodGroup" disabled value="<?php echo $row['bloodGroup']; ?>" type="text" class="form-control text-center">
                    </div>
                    <div class="form-group">
                        <label>Contact</label>
                        <input name="contact" disabled value="<?php echo $row['contact']; ?>" type="text" class="form-control text-center">
                    </div>
                    <div class="form-group">
                        <label>E-mail</label>
                        <input name="email" disabled value="<?php echo $row['email']; ?>" type="text" class="form-control text-center">
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <input name="address" disabled value="<?php echo $row['address']; ?>" type="text" class="form-control text-center">
                    </div>

                    <div class="pt-3">
                        <a class="btn btn-success submitButton" href="include/donateIncrementDB.php?id=
                        <?php echo $row['id'] ?> "role="button" target="_blank">Donate Now!</a>
                    </div>
                    <div class="pt-3">
                        <a class="btn btn-danger submitButton" href="include/deleteDonarDB.php?id=
                        <?php echo $row['id'] ?> "role="button" target="_blank">Delete Donor</a>
                    </div>
                </form>
            </div>
            </body>


<?php 
        }
    } 
?>  


<?php 
    require "footer.php";
?>