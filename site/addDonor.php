<?php 
  
    session_start();
    if (!$_SESSION['ok']) {
      header ('Location: index.php?Error=NotLoggedIn');
    }
  
    require "header.php";
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Donor</title>
</head>

<body>
<p class="display-4 text-center mt-3">Add Donor</p>
<form class="container addDonor" action="include/addDonorDB.php" method="POST">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="name">Name</label>
      <input type="text" required class="form-control" id="name" name="name" placeholder="Example: Abul Bashar">
    </div>
    <div class="form-group col-md-4">
      <label for="bloodgroup">Blood Group</label>
      <select id="bloodgroup" name="bloodgroup" class="form-control" required>
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
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="text" required class="form-control" id="email" name="email" placeholder="Example: abul@gmail.com">
  </div>
  <div class="form-group">
    <label for="contact">Contact</label>
    <input type="text" required class="form-control" id="contact" name="contact" placeholder="Example: 01717......">
  </div>
  <div class="form-group">
    <label for="address">District</label>
    <input type="text" required class="form-control" id="address" name="address" placeholder="Example: Rajshahi">
  </div>
  <div class="form-group">
    <label for="count">Count</label>
    <input type="number" required class="form-control" id="count" name="count">
  </div>
  
  <button type="submit" name="submit" class="btn btn-success submitButton">Add As Donor</button>

</form>
</body>
</html>

<?php
  require "footer.php";
?>