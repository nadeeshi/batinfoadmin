<?php
ob_start();
include("../../assets/includedFiles/connect.php");
if(isset($_GET['id'])!="")
{
    $delete=$_GET['id'];
    $delete=mysqli_query($bd,"DELETE FROM research_details WHERE id='$delete'");
    if($delete)
    {
        header("Location:listOfResearch.php");
    }
    else
    {
        echo mysql_error();
    }
}
ob_end_flush();
?>