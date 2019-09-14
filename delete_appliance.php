<?php

include("database/db_conection.php");
$delete_id=$_GET['del'];
$delete_query="delete  from appliance WHERE id='$delete_id'";
$run=mysqli_query($dbcon,$delete_query);
if($run)
{

    echo "<script>window.open('view_appliance.php?deleted=appliance has been deleted','_self')</script>";
}
?>