<?php 

include_once "DBh.php";

$id = $_GET['id'];
//echo $id;

$sql = " UPDATE donors SET isDelete = !isDelete WHERE id='$id'; ";

mysqli_query($conn, $sql);

header ('Location: ../viewDonor.php');

?>