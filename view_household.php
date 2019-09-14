<html>
<head lang="en">
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css"> 
    <title>View Household</title>
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
    <h1 align="center">Households</h1>

<div class="table-responsive">


    <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">
        <thead>

        <tr>

            <th>Household Id</th>
            <th>House Number</th>
            <th>User Name</th>
            
            
        </tr>
        </thead>

        <?php
        include("database/db_conection.php");
        $view_house_query="select * from household";
        $run=mysqli_query($dbcon,$view_house_query);

        while($row=mysqli_fetch_array($run))
        {
            $house_id=$row[0];
            $house_no=$row[1];
            $user_name=$row[2];

        ?>

        <tr>

            <td><?php echo $house_id;  ?></td>
            <td><?php echo $house_no;  ?></td>
            <td><?php echo $user_name;  ?></td>
        
            <td><a href="view_household.php?del=<?php echo $house_id ?>"><button class="btn btn-danger">Delete</button></a></td> 
        </tr>

        <?php } ?>

    </table>
        </div>
</div>


</body>

</html>
