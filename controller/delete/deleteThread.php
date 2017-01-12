<?php
ob_start();
include("../../assets/includedFiles/connect.php");

if(isset($_GET['id'])!="")
{
    $sql=$_GET['id'];
    $delete=mysqli_query($bd,"DELETE FROM topics WHERE topic_id='$sql'");
    if($delete)
    {
        header("Location:".$_SERVER['HTTP_HOST']."/batinfo/admin/view/forum/forumTopics.php");
    }
    else
    {
        echo mysql_error();
    }
}
ob_end_flush();
?>