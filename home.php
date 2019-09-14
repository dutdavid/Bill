<?php
session_start();

if(!$_SESSION['email'])
{

    header("Location: index.php");
}

?>


<html lang="en">
<head>
  <title>Appliance</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<body>
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
<body>
<h1>Welcome</h1><br>
<?php
echo $_SESSION['email'];
?>

</body>

</html>

