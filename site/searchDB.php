<?php 
session_start();
if (!$_SESSION['ok']) {
    header ('Location: index.php?Error=NotLoggedIn');
}

include_once "include/DBh.php";
$bg = $_POST['bg'];
//echo $bg;
require "header.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View Donors</title>
</head>

<body>
  <p class="container display-4 text-center mt-3">View Donors</p>

  <div class="container">
  <table class="table">
  
  <thead>
    <tr>
      <th scope="col" style="text-align:center">Name</th>
      <th scope="col" style="text-align:center">Blood Group</th>
      <th scope="col" style="text-align:center">Phone</th>
      <th scope="col" style="text-align:center">District</th>
      <th scope="col" style="text-align:center">Donate Count</th>
      <th scope="col" style="text-align:center">More</th>
    </tr>
  </thead>
  
  <?php
    $sql = " SELECT * FROM donors WHERE isDelete=FALSE AND bloodGroup='$bg'; ";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) { 
  ?> 

  <tbody>
    <tr>
      <th scope="row" style="text-align:center"><?php echo $row['name'] ?> </td>
      <td style="text-align:center"><?php echo $row['bloodGroup'] ?> </td>
      <td style="text-align:center"><?php echo $row['contact'] ?> </td>
      <td style="text-align:center"><?php echo $row['address'] ?> </td>
      <td style="text-align:center"><?php echo $row['donateCount'] ?> </td>
      <td style="text-align:center"> 
        <a href="viewDonorDetail.php?id=<?php echo $row['id']; ?>" target="_blank">View Detail</a>
      </td>
    </tr>
    
    <?php 
        }
    } 
    ?>

  </tbody>
  </table>
  </div>
  </div>
</body>

<?php 
    require "footer.php";
?>