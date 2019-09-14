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
<body style="background: url('');background-repeat: no-repeat!important;background-size: cover; height: 100% !important;" class="img-responsive">
<div class="container middle">
	<div class="row">
			
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<h2>Manage Appliances</h2>
			<div class="col-md-12">
				<form action="process/processes.php" method = "POST" enctype="multipart/form-data" >
					<div class="form-group">
						<label for="house_no">House No:</label>
						<input type="house_no" class="form-control" id="house_no" placeholder="Enter House Number" name="house_no" required />
					</div>
					<div class="form-group">
						<label for="appliance_name">Appliance Name:</label>
						<input type="appliance_name" class="form-control" id="appliance_name" placeholder="Enter Appliance Name" name="appliance_name" required />
					</div>
                    <div class="form-group">
						<label for="quantity">Quantity:</label>
						<input type="quantity" class="form-control" id="quantity" placeholder="Enter Quantity" name="quantity" required />
                    </div>
                    <div class="form-group">
						<label for="rating_watts">Rating:</label>
						<input type="rating_watts" class="form-control" id="rating_watts" placeholder="Enter Rating" name="rating_watts" required />
                    </div>
                    <div class="form-group">
						<label for="hours">Hours:</label>
						<input type="hours" class="form-control" id="hours" placeholder="Enter hours" name="hours" required />
                    </div>
                    <div class="form-group">
						<label for="kwh">KWH:</label>
						<input type="kwh" class="form-control" id="kwh" placeholder="Enter KWH" name="kwh" required />
                    </div>
                    <div class="form-group">
						<label for="days">Days:</label>
						<input type="days" class="form-control" id="days" placeholder="Enter Days" name="days" required />
                    </div>
                    <div class="form-group">
						<label for="consumption">Consumption:</label>
						<input type="consumption" class="form-control" id="consumption" placeholder="Enter Consumption" name="consumption" required />
                    </div>
          <button type="submit" name = "add_appliance" class="btn btn-default">Add Appliance</button>
          <center><b>View Appliance</b> <br></b><a href="view_appliance.php">Appliances</a></center><!--for centered text-->
				
				</form>
			</div>
		</div>
	</div>
</div>

</body>
</html>