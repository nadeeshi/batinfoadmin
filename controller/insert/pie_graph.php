<?php
require_once('../../assets/includedFiles/auth.php');
?>

<!DOCTYPE html>
<html>


<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>BatFacts.com</title>


</head>



<body>
<?php include "../../assets/includedFiles/template.php" ?>



<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line" style="color: #500a6f">Bats Details Using Charts</h1>
                <h1 class="page-subhead-line">Select Graph Type:- <a href="bar_graph.php">Bar Chart</a>......<a href="">Pie chart</a></h1>

            </div>
        </div>


        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        View data from the database
                    </div>

                    <div class="panel-body">
                        <h4>Population of Bats</h4>
                        <div style="margin-top: 20px;">

                            <?php
                            include('../../view/graph/piegraph.html');?>



                        </div>
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
