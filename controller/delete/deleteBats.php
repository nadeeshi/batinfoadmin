<?php
ob_start();
include("../../assets/includedFiles/connect.php");
if(isset($_GET['id'])!="")
{
    $delete=$_GET['id'];
    $delete=mysqli_query($bd,"DELETE FROM bat_info WHERE bat_id='$delete'");
    if($delete)
    {
        header("Location:../../view/batDetails/listOfBats.php");
    }
    else
    {
        echo mysql_error();
    }
}
ob_end_flush();
?>