
<?php
require_once('../../assets/includedFiles/auth.php');
?>



<?php
require_once ("../../assets/includedFiles/connect.php");
?>




<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>BatFacts.com</title>
    <link href="../../assets/css/bootstrap.css" rel="stylesheet" />
    <link href="../../assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="../../assets/css/custom.css" rel="stylesheet" />

    <style type="text/css">
        table tr:nth-child(even) {
            background-color: #e1e1d0;
        }
        table tr:nth-child(odd) {
            background-color: white;
        }
    </style>
</head>
<body>
<?php include("../../assets/includedFiles/template.php")?>

<div id="page-wrapper">
<div id="page-inner">
<div class="row">
    <div class="col-md-12">
        <h1 class="page-head-line" style="color: #500a6f"><b>Forum Details</b></h1>
        <h1 class="page-subhead-line">Add Different Topics </h1>

        <div class="col-md-12">

            <div class="row">
                <div class="col-xs-12">
                    <a href="../../controller/insert/addThread.php">
                        <button class="button">Add a new discussion topic</button>
                    </a>
                </div>
            </div>
            <div class="row" style="padding: 4.5%; margin-left: 0.2%;">
                <?php
                $sql= "SELECT topic_id, topic_subject, topic_date, topic_by FROM topics";
                $result= mysqli_query($bd, $sql);

                echo "<table>";
                echo "<tr height='50'>";
                echo "<th class='col-sm-6'> Topic </th>";
                echo "<th class='col-sm-2'> Posted Date </th>";
                echo "<th class='col-sm-2'> Posted by </th>";
                echo "<th class='col-sm-2'> </th>";
                echo "</tr>";

                echo "<tr>";
                foreach ($result as $user) {
                    echo  "<td class='col-sm-9 col-xs-9' height='50'>";
                    echo "<a href='discussion.php?id=".$user['topic_id']."'>".$user['topic_subject']."</a>"." "."</td>";
                    echo  "<td height='50' class='col-sm-2 col-xs-2'>";
                    echo $user['topic_date']." "."</td>";
                    echo "<td class='col-sm-2 col-xs-2'>";
                    echo "<a href=#>siguisgiwugiu</a>"." "."</td>";
                    echo "<td class='col-sm-2 col-xs-2'>";?>
                    <a href='../../controller/delete/deleteThread.php?id=<?=$user['topic_id']?>'  onclick="return confirm('Are you sure you wish to delete this Record?');">Delete</a></td>
                    <?php
                    echo "</tr>";
                }
                echo "</table>";
                ?>
            </div>
        </div>





    </div>
</div>



</div>
</div>

<div id="footer-sec"><b>Group 23-UCSC Group Project</b>
</div>
</body>
</html>





