<?php
require_once "database/db_conection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Appliance</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<div class="w3-top">
  <div class="w3-bar w3-white w3-wide w3-padding w3-card">
    <a href="home.php" class="w3-bar-item w3-button"><b>E.B</b> Management System</a>
    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="Appliance.php" class="w3-bar-item w3-button">Appliance</a>
      <a href="Bills.php" class="w3-bar-item w3-button">Bills</a>
      <a href="household.php" class="w3-bar-item w3-button">Household</a>
      <a href="logout.php" class="w3-bar-item w3-button"><b>Logout</b></a>
    </div>
  </div>
</div>
<br>
<br>
<br>
</head>
<body style="background: url('');background-repeat: no-repeat!important;background-size: cover; height: 100% !important;" class="img-responsive">
<div class="container middle">
	<div class="row">
			
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<h2>Manage Households</h2>
			<div class="col-md-12">
				<form action="process/processes.php" method = "POST" enctype="multipart/form-data" >
					<div class="form-group">
						<label for="house_no">House No:</label>
						<input type="house_no" class="form-control" id="house_no" placeholder="Enter House Number" name="house_no" required />
                    </div>
                    <div class="form-group">
						<label for="user_name">User Name:</label>
						<input type="user_name" class="form-control" id="user_name" placeholder="Enter user name" name="user_name" required />
                    </div>
				
          <button type="submit" name = "add_household" class="btn btn-default">Add Household</button>
          <center><b>View Appliance</b> <br></b><a href="view_household.php">Household</a></center><!--for centered text-->
				
				</form>
			</div>
		</div>
	</div>
</div>

</body>
</html>