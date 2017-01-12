<!DOCTYPE html>
<html>


<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>BatFacts.com</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="../../assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="../../assets/css/font-awesome.css" rel="stylesheet" />

    <!--CUSTOM BASIC STYLES-->
    <link href="../../assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="../../assets/css/custom.css" rel="stylesheet" />

    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />




    <!-- /. FOOTER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="../../assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="../../assets/js/bootstrapjs.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="../../assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="../../assets/js/custom.js"></script>



</head>



<body>
<div id="wrapper">

    <!--Nav Top -->
    <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="home.php">Admin Panel</a>
        </div>


        <div class="header-right">

            <a href="../../controller/insert/researcherDetails.php" class="btn btn-info" title="Researcher Request">
               <b> <?php
                ob_start();
                include("connect.php");
                $query = mysqli_query($bd,"SELECT count(*) as total FROM researchers WHERE password is  NULL ") ;
                $result = mysqli_fetch_array($query);
                echo $result['total'];
                ob_end_flush();
                ?></b><i class="fa fa-envelope-o fa-2x"></i></a>
            <a href="../../view/researchDetails/researchUploadedFileView.php" class="btn btn-primary" title="Research Details">
                <b><?php
                    ob_start();
                    include("connect.php");
                    $query = mysqli_query($bd,"select count(*) as total from tbl_uploads");
                    $result = mysqli_fetch_array($query);
                    echo $result['total'];
                    ob_end_flush();
                    ?>
                </b><i class="fa fa-bars fa-2x"></i></a>
            <!-- <a href="login.html" class="btn btn-danger" title="Logout"><i class="fa fa-exclamation-circle fa-2x"></i></a> -->
            <a href="../../index.php" class="logout">logout</a></p>

        </div>
    </nav>
    <!-- /. NAV TOP  -->





    <!--Nav Side Bar -->
    <nav class="navbar-default navbar-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav" id="main-menu">
                <li>
                    <div class="user-img-div">
                        <img src="../../assets/images/2.jpg" class="img-thumbnail" />

                        <div class="inner-text">
                            <?php
                            ob_start();
                            include("connect.php");

                            echo $_SESSION['SESS_FIRST_NAME'];

                            ?>

                            <br />
                            <small>online</small>
                        </div>
                    </div>

                </li>



                <li>
                    <a class="active-menu" href="../../assets/includedFiles/home.php"><i class="fa fa-dashboard "></i>Dashboard</a>
                </li>




                <li>
                    <a href="#"><i class="fa fa-desktop "></i>User Details <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="../../controller/insert/adminDetailsValidate.php">Admin Details</a>
                        </li>
                        <li>
                            <a href="../../controller/insert/researcherDetails.php">Researchers Details</a>
                        </li>



                    </ul>
                </li>





                <li>
                    <a href="#"><i class="fa fa-yelp "></i>Reaserch Details <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="../../view/researchDetails/researchUploadedFileView.php">list of Research</a>
                        </li>

                        <li>
                            <a href="../../controller/insert/researchDetails.php">Add New Research Details</a>
                        </li>

                    </ul>
                </li>




                <li>
                    <a href="../../controller/insert/bar_graph.php"><i class="fa fa-yelp "></i>Graph Details </a>

                </li>




                <li>
                    <a href="#"><i class="fa fa-yelp "></i>Bats Details <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">

                        <li>
                            <a href="../../view/batDetails/listOfBats.php">List of Bats</a>
                        </li>
                        <li>
                            <a href="../../controller/insert/newBat.php">Add New Bats</a>
                        </li>


                    </ul>
                </li>








                <li>
                    <a href="../../view/mapDetails/map.php"><i class="fa fa-yelp "></i>Map Details</a>
                </li>
                <li>
                    <a href="../../view/forum/forumTopics.php"><i class="fa fa-yelp "></i>Forum</a>
                </li>

            </ul>

        </div>

    </nav>
    <!-- /. NAV SIDE  -->






