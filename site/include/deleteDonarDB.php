<?php 

include_once "DBh.php";

$id = $_GET['id'];
//echo $id;

$sql = " UPDATE donors SET isDelete = TRUE WHERE id='$id'; ";

mysqli_query($conn, $sql);

header ('Location: ../viewDonor.php?id');

?>