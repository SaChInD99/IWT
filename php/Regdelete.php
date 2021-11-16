<?php
//linking the configuration  file
require 'Config.php';

if(isset($_GET['delete'])){
    $delete_id=$_GET['delete'];

    $sqldelete="DELETE FROM register WHERE Email='$delete_id'";

    if(mysqli_query($conn,$sqldelete))
    {
        header("location:Regselect.php");
    }
    else
    {
        echo"<script type='text/javascript'>
        alert('Not Deleted')
        </script>";
    }
}
?>