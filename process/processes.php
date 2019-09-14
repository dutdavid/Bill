<?php
	require_once "../includes/db_connect.php";

	if(isset($_POST["add_appliance"])){
		$house_no = mysqli_real_escape_string($conn, ucwords(strtolower($_POST["house_no"])));
		$appliance_name = mysqli_real_escape_string($conn, ucwords(strtolower($_POST["appliance_name"])));
		$quantity = mysqli_real_escape_string($conn, ucwords(strtolower($_POST["quantity"])));
		$rating_watts = mysqli_real_escape_string($conn, ucwords(strtolower($_POST["rating_watts"])));
		$hours = mysqli_real_escape_string($conn, ucwords(strtolower($_POST["hours"])));
		$kwh = mysqli_real_escape_string($conn, ucwords(strtolower($_POST["kwh"])));
		$days = mysqli_real_escape_string($conn, ucwords(strtolower($_POST["days"])));
		$consumption = mysqli_real_escape_string($conn, ucwords(strtolower($_POST["consumption"])));
			
	
		$appliance_insert = "INSERT INTO appliance (house_no, appliance_name, quantity, rating_watts, hours, kwh, days, consumption) VALUES ('$house_no', '$appliance_name', '$quantity', '$rating_watts', '$hours', '$kwh', '$days', '$consumption')";

		
		if ($conn->query($appliance_insert) === TRUE) {
			header("Location: ../appliance.php");
			exit();
		} else {
			echo "Error: " . $appliance_insert . "<br />" . $conn->error;
		}
		$conn->close();
	}
	if(isset($_POST["add_bills"])){
		$house_no = mysqli_real_escape_string($conn, ucwords(strtolower($_POST["house_no"])));
		$consumption = mysqli_real_escape_string($conn, ucwords(strtolower($_POST["consumption"])));
		$meter_reading = mysqli_real_escape_string($conn, ucwords(strtolower($_POST["meter_reading"])));
		$total_bills = mysqli_real_escape_string($conn, ucwords(strtolower($_POST["total_bills"])));
		$final_amount = mysqli_real_escape_string($conn, ucwords(strtolower($_POST["final_amount"])));
			
	
		$bills_insert = "INSERT INTO bills (house_no, consumption, meter_reading, total_bills, final_amount) VALUES ('$house_no', '$consumption', '$meter_reading', '$total_bills', '$final_amount')";

		if ($conn->query($bills_insert) === TRUE) {
			header("Location: ../bills.php");
			exit();
		} else {
			echo "Error: " . $bills_insert . "<br />" . $conn->error;
		}
		$conn->close();
	}
	if(isset($_POST["add_household"])){
		$house_no = mysqli_real_escape_string($conn, ucwords(strtolower($_POST["house_no"])));
		$user_name = mysqli_real_escape_string($conn, ucwords(strtolower($_POST["user_name"])));
	
		$house_insert = "INSERT INTO household (house_no, user_name) VALUES ('$house_no', '$user_name')";

		if ($conn->query($house_insert) === TRUE) {
			header("Location: ../household.php");
			exit();
		} else {
			echo "Error: " . $house_insert . "<br />" . $conn->error;
		}
		$conn->close();
	}
?>