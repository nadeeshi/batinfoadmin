<?php
ob_start();
include("../../assets/includedFiles/connect.php");
if(isset($_GET['id'])!="")
{
    $delete=$_GET['id'];
    $delete=mysqli_query($bd,"DELETE FROM researchers WHERE id='$delete'");
    if($delete)
    {
        header("Location:../insert/researcherDetails.php");
    }
    else
    {
        echo mysql_error();
    }
}
ob_end_flush();
?>