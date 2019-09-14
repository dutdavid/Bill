<html>
<head lang="en">
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css"> 
    <title>Appliances</title>
</head>
<style>
    .login-panel {
        margin-top: 150px;
    }
    .table {
        margin-top: 50px;

    }

</style>

<body>

<div class="table-scrol">
    <h1 align="center">Appliances</h1>

<div class="table-responsive">


    <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">
        <thead>

        <tr>

            <th>Appliance ID</th>
            <th>House Number</th>
            <th>Appliance Name</th>
            <th>Quantity</th>
            <th>Rating Watts</th>
            <th>Hours  Used</th>
            <th>KWH</th>
            <th>Days</th>
            <th>Consumption</th>
            <th>Delete appliance</th>
        </tr>
        </thead>

        <?php
        include("database/db_conection.php");
        $view_appliance_query="select * from appliance";
        $run=mysqli_query($dbcon,$view_appliance_query);

        while($row=mysqli_fetch_array($run))
        {
            $appliance_id=$row[0];
            $house_no=$row[1];
            $appliance_name=$row[2];
            $quantity=$row[3];
            $ratting_watts=$row[4];
            $hours=$row[5];
            $kwh=$row[6];
            $days=$row[7];
            $consumption=$row[8];



        ?>

        <tr>
        <td><?php echo$appliance_id;  ?></td>
        <td><?php echo $house_no;  ?></td>
        <td><?php echo $appliance_name;  ?></td>
        <td><?php echo $quantity;  ?></td>
        <td><?php echo $ratting_watts;  ?></td>
        <td><?php echo $hours;  ?></td>
        <td><?php echo $kwh;  ?></td>
        <td><?php echo $days;  ?></td>
        <td><?php echo $consumption;  ?></td>
            
            <td><a href="view_appliance.php?del=<?php echo $appliance_id ?>"><button class="btn btn-danger">Delete</button></a></td> 
        </tr>

        <?php } ?>

    </table>
        </div>
</div>


</body>

</html>
