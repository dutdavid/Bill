<?php

include("database/db_conection.php");
$delete_id=$_GET['del'];
$delete_query="delete  from household WHERE id='$delete_id'";
$run=mysqli_query($dbcon,$delete_query);
if($run)
{

    echo "<script>window.open('view_household.php?deleted=household has been deleted','_self')</script>";
}

?>