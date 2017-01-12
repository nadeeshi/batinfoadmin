<html>
<head>
<style>
    table {
        border-collapse: collapse;
        border-spacing: 0;
        width: 100%;
        border: 1px solid #ddd;
    }

    th, td {
        border: none;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even){background-color: #f2f2f2}

    #chart-container {
        width: 400px;
        height: 200px;
    }



</style>



</head>


<?php
require_once('auth.php');
?>

<?php include("template.php")?>




<body>

<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line" style="color: #500a6f">DASHBOARD</h1>

            </div>
        </div>
       <!-- /. ROW  -->

        <!--for get counters-->
        <div class="row" >
            <div class="col-md-12">
                <div class="col-xs-3" >
                    <div class="main-box mb-red" style="width: 230px; height: 80px;">
                        <a href="#">
                            <h3> Admin Count:
                                <?php

                                ob_start();
                                include("connect.php");
                                $query = mysqli_query($bd,"select count(*) as total from admin_details");
                                $result = mysqli_fetch_array($query);
                                echo $result['total'];
                                ob_end_flush();
                                ?>
                            </h3>
                        </a>

                     </div>
                </div>
                <div class="col-xs-3">
                    <div class="main-box mb-dull" style="width: 240px; height: 80px;">
                        <a href="#">
                            <h4 style="font-size: 25px">Researchers Count:
                                <?php
                                ob_start();
                                include("connect.php");
                                $query = mysqli_query($bd,"select count(*) as total from researchers");
                                $result = mysqli_fetch_array($query);
                                echo $result['total'];
                                ob_end_flush();
                                ?>
                            </h4>
                        </a>
                    </div>
                </div>
                <div class="col-xs-3">
                    <div class="main-box mb-pink" style="width: 220px; height: 80px;">
                        <a href="#">
                            <h3>Bats Count:
                                <?php
                                ob_start();
                                include("connect.php");
                                $query = mysqli_query($bd,"select count(*) as total from bat_info");
                                $result = mysqli_fetch_array($query);
                                echo $result['total'];
                                ob_end_flush();
                                ?>
                            </h3>
                        </a>
                    </div>
                </div>
                <div class="col-xs-3">
                    <div class="main-box mb-dull" style="width: 235px; height: 80px;">
                        <a href="#">
                            <h4 style="font-size: 22px">Research Count :
                                <?php
                                ob_start();
                                include("connect.php");
                                $query = mysqli_query($bd,"select count(*) as total from tbl_uploads");
                                $result = mysqli_fetch_array($query);
                                echo $result['total'];
                                ob_end_flush();
                                ?>
                            </h4>
                        </a>
                    </div>
                </div>
             </div>

        </div>
        <!-- / counters -->

        <!--list of research details -->

        <div class="row">

            <div class="col-md-4">
                <h1><p style="font-size:26px;"><b>Map Details</b><a href="../../view/mapDetails/map.php" style="color: deeppink;font-size: 20px">Click Here</a></h1></p>
            </div>

            <div class="col-md-2"></div>
            <div class="col-md-6">
                <h1><p style="font-size:26px;"><b>Graph Details</b><a href="../../controller/insert/pie_graph.php" style="color: deeppink;font-size: 20px">Click Here</a></h1>
                </div>


        </div>

        <div class="row">
            <div class="col-md-4">
                <img src="../images/1.PNG"   style="width: 300px; height: 200px;"/>

                   <br><br><h1><p style="font-size:26px;"><b>Calander </b><a href="http://www.google.com/calendar/event?action=TEMPLATE&text=Example%20Event&dates=20131124T010000Z/20131124T020000Z&details=Event%20Details%20Here&location=123%20Main%20St%2C%20Example%2C%20NY" style="color: deeppink;font-size: 20px">Click Here</a></h1></p>
                    <?php include('../../calander.php');?>


            </div>


            <div class="col-md-6">
                <div class="panel panel-default" style="width: 650px;height: 470px">
                    <div class="panel-heading">
                        View bat Information using Graph
                    </div>
                    <div class="panel-body" style="height: 400px">

                        <div id="chart-container">
                            <canvas id="mycanvas"></canvas>
                        </div>
                        <script type="text/javascript" src="../../assets/js/graph_js/jquery-1.11.3.min.js"></script>
                        <script type="text/javascript" src="../../assets/js/graph_js/Chart.min.js"></script>
                        <script type="text/javascript" src="../../assets/js/graph_js/app3.js"></script>

                    </div>
                </div>
            </div>


        </div>


        <br><br>






        <div class="row">

            <div class="col-md-8">
                <h1><p style="font-size:26px;"><b>Research Details</b><a href="../../view/researchDetails/researchUploadedFileView.php" style="color: deeppink;font-size: 20px">Click Here</a></h1></p>
                <h1 style="color: #500a6f ;font-size: 20px"><b>List Of Research Details</b></h1>

            </div>
        </div>
        
        
        
                <div class="row">
                    <div class="col-md-10">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                View data from the database
                            </div>
                            <div class="panel-body">
                                <h4>view  Details of Research</h4>
                                <div style="margin-top: 20px;">

                                    <table width="100%" border="1">
                                        <tr>
                                            <td>File Name</td>
                                            <td>File Type</td>
                                            <td>File Size(KB)</td>
                                            <td>View</td>
                                        </tr>
                                        <?php
                                        ob_start();
                                        include("../../assets/includedFiles/connect.php");
                                        $sql="SELECT * FROM tbl_uploads";

                                        $result_set=mysqli_query($bd,$sql);
                                        while($row=mysqli_fetch_array($result_set))
                                        {
                                            ?>
                                            <tr>
                                                <td><?php echo $row['file'] ?></td>
                                                <td><?php echo $row['type'] ?></td>
                                                <td><?php echo $row['size'] ?></td>
                                                <td><a href="../../controller/insert/uploads/<?php echo $row['file'] ?>" target="_blank">view file</a></td>




                                                <td> <a href="../researchDetails/deleteResearch.php?id=<?php echo $id; ?>"
                                                        onclick="return confirm('Are you sure you wish to delete this Record?');">
                                                        <span class="delete" title="Delete"> Delete </span></a></td>
                                            </tr>
                                        <?php
                                        }
                                        ?>
                                    </table>



                                </div>
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





