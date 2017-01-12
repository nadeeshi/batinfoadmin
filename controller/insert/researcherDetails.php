<?php
require_once('../../assets/includedFiles/auth.php');
?>

<!DOCTYPE html>
<html>


<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>BatFacts.com</title>
    <style>
        .error {color: #FF0000;}
    </style>

    <style>
        .error {color: #FF0000;}
    </style>

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

    </style>

    <link href="../../assets/css/bootstrap.css" rel="stylesheet" />
    <link href="../../assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="../../assets/css/custom.css" rel="stylesheet" />
    <script src="../../assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="../../assets/js/bootstrapjs.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="../../assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="../../assets/js/custom.js"></script>
    <link href="../../assets/css/font-awesome.css" rel="stylesheet" />





</head>



<body>
<?php include("../../assets/includedFiles/template.php")?>



<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line" style="color: #500a6f">Researchers Details</h1>
                <h1 class="page-subhead-line">All Member Researchers details </h1>

            </div>
        </div>


        <div class="row">
            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Add New Researcher to the System
                    </div>

                    <div class="panel-body">
                        <h4>Give Password to  New Researcher</h4>
                        <div style="margin-top: 20px;">

                            <?php
                            include('../../assets/includedFiles/connect.php');
                            $select=mysqli_query($bd,"SELECT * FROM researchers WHERE password is  NULL order by id desc");
                            //$select=mysql_query("SELECT * FROM researcher_details order by id desc");
                            $i=1;
                            ?>

                            <div class="display">

                                <table>
                                    <tr>
                                        <th>FIRST  NAME : </th>
                                        <th>LAST  NAME : </th>
                                        <th>EMAIL : </th>


                                        <th>Give_Password</th>
                                        <th>Delete</th>


                                    </tr>


                                    <?php



                                    while($userrow=mysqli_fetch_array($select))
                                    {
                                        $id=$userrow['id'];
                                        $fname=$userrow['fname'];
                                        $lname=$userrow['lname'];
                                        $usermail=$userrow['email'];


                                        ?>

                                        <tr>
                                            <td><?php echo $fname; ?></td>
                                            <td><?php echo $lname; ?></td>
                                            <td><?php echo $usermail;?></td>




                                            <td><a href="../update/editResearchers.php?id=<?php echo $id; ?>"><span class="edit" title="Edit" style="color: #ff0084"> View </span></a></td>
                                            <td><a href="../delete/deleteResearchers.php?id=<?php echo $id; ?>"
                                                   onclick="return confirm('Are you sure you wish to delete this Record?');">
                                                    <span class="delete" title="Delete" style="color: #ff0084"> Delete </span></a></td>
                                        </tr>




                                    <?php } ?>

                                </table>







                            </div>
                    </div>









                </div>
            </div>


<br><br>
                <p><b>RESEARCHER DETAILS</b></p>


            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Details of Researchers of the system (have account)
                    </div>

                    <div class="panel-body">

                        <!-----view Researchers details------------------------------------------>

                        <?php
                        include('../../assets/includedFiles/connect.php');
                        $select=mysqli_query($bd,"SELECT * FROM researchers WHERE password is not NULL order by id desc");
                        //$select=mysql_query("SELECT * FROM researcher_details order by id desc");
                        $i=1;
                        ?>

                        <div class="display">

                            <table>
                                <tr>
                                    <th>FIRST  NAME : </th>
                                    <th>LAST  NAME : </th>
                                    <th>EMAIL : </th>


                                    <th>Update_Password</th>
                                    <th>Delete</th>


                                </tr>


                                <?php



                        while($userrow=mysqli_fetch_array($select))
                        {
                            $id=$userrow['id'];
                            $fname=$userrow['fname'];
                            $lname=$userrow['lname'];
                            $usermail=$userrow['email'];


                            ?>

                                <tr>
                                    <td><?php echo $fname; ?></td>
                                    <td><?php echo $lname; ?></td>
                                    <td><?php echo $usermail;?></td>




                                    <td><a href="../update/editResearchers.php?id=<?php echo $id; ?>"><span class="edit" title="Edit" style="color: #ff0084">Edit </span></a></td>
                                    <td><a href="../delete/deleteResearchers.php?id=<?php echo $id; ?>"
                                       onclick="return confirm('Are you sure you wish to delete this Record?');">
                                        <span class="delete" title="Delete" style="color: #ff0084"> Delete </span></a></td>
                                </tr>




                        <?php } ?>

                            </table>


                        <!---close new researcher------------------------------------------------------>

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
