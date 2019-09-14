<html>
<head lang="en">
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css"> 
    <title>Bills</title>
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
    <h1 align="center">View Bills</h1>

<div class="table-responsive">


    <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">
        <thead>

        <tr>

            <th>Appliance ID</th>
            <th>House Number</th>
            <th>Consumption</th>
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
            $consumption=$row[8];



        ?>

        <tr>
        <td><?php echo$appliance_id;  ?></td>
        <td><?php echo $house_no;  ?></td>
        <td><?php echo $consumption;  ?></td>
            
</td> 
        </tr>

        <?php } ?>

    </table>
        </div>
</div>


</body>

</html>
