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
                <h1 class="page-head-line" style="color: #500a6f">Bats Details</h1>
                <h1 class="page-subhead-line">All bats details </h1>

            </div>

        </div>


        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        View data from the database
                    </div>
                    <!-- <a href="test.php">get pdf</a>-->


                    <div class="panel-body">
                        <h4 style="color: #00CA79">View  Details of Bats</h4>
                        <div style="margin-top: 20px;">


                            <?php
                            if(isset($_GET['id']))
                            {
                                include('../../assets/includedFiles/connect.php');
                                $id=$_GET['id'];
                                $getselect=mysqli_query($bd,"SELECT * FROM bat_info WHERE bat_id='$id'");
                                while($profile=mysqli_fetch_array($getselect))

                                {
                                    $id=$profile['bat_id'];
                                    $scientificName=$profile['scientific_name'];
                                    $kingdom=$profile['kingdom'];
                                    $phylum=$profile['phylum'];
                                    $class=$profile['bat_class'];
                                    $orderr=$profile['bat_order'];
                                    $genus=$profile['genus'];
                                    $family=$profile['family'];
                                    $subFamily=$profile['sub_family'];
                                    $speciesAuthority=$profile['species'];
                                    $commonNames=$profile['common_names'];
                                    $synonyms=$profile['synonyms'];


                                    $country_occurence=$profile['country_occurence'];
                                    $population=$profile['population'];
                                    $roost=$profile['roost'];

                                    $conservation=$profile['conservation_status'];

                                    $created=$profile['created'];


                                    ?>



                                    <p style="margin-left: 500px"><a target="_blank" href="pdfView.php?id=<?php echo $id; ?>">
                                            <span class="view" title="View" > Get PDF version </span></a></p>

                                    <div class="display">





                                        <p> SCIENTIFIC NAME : <span style="color: #cc006a"><?php echo  $scientificName; ?></span>

                                        </p>
                                        <br />
                                        <p> KINGDOM : <span style="color: #cc006a"><?php echo  $kingdom; ?></span>

                                        </p>
                                        <br />
                                        <p> PHYLUM : <span style="color: #cc006a"><?php echo  $phylum; ?></span>
                                        </p>
                                        <br />
                                        <p> CLASS : <span style="color: #cc006a"><?php echo   $class; ?></span>
                                        </p>
                                        <br />
                                        <p> ORDER : <span style="color: #cc006a"><?php echo  $orderr; ?></span>
                                        </p>
                                        <br />
                                        <p> GENUS : <span style="color: #cc006a"><?php echo  $genus; ?></span>
                                        </p>
                                        <br />
                                        <p> FAMILY : <span style="color: #cc006a"><?php echo  $family; ?></span>
                                        </p>
                                        <br />
                                        <p> SUB FAMILY : <span style="color: #cc006a"><?php echo  $subFamily; ?></span>
                                        </p>
                                        <br />
                                        <p> SPECIES AUTHORITY : <span style="color: #cc006a"><?php echo  $speciesAuthority; ?></span>
                                        </p>
                                        <br />
                                        <p> COMMON NAMES : <span style="color: #cc006a"><?php echo  $commonNames; ?></span>
                                        </p>
                                        <br />
                                        <p> SYNONYMS : <span style="color: #cc006a"><?php echo  $synonyms; ?></span>
                                        </p>
                                        <br />


                                        <p> COUNTRY OCCURENCE : <span style="color: #cc006a"><?php echo  $country_occurence; ?></span>
                                        </p>
                                        <br />
                                        <p> POPULATION : <span style="color: #cc006a"><?php echo  $population; ?></span>
                                        </p>
                                        <br />
                                        <p> ROOST : <span style="color: #cc006a"><?php echo  $roost; ?></span>
                                        </p>
                                        <br />

                                        <p> CONSERVATION : <span style="color: #cc006a"><?php echo  $conservation; ?></span>
                                        </p>
                                        <br />



                                        <p> CREATED ON : <span><?php echo $created; ?></span>
                                        </p>
                                        <br />
                                    </div>
                                <?php } }?>



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























<!DOCTYPE html>
<html>


<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>BatFacts.com</title>

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
<?php include "../../assets/includedFiles/template.php" ?>



<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line" style="color: #500a6f">Bats Details</h1>
                <h1 class="page-subhead-line">All bats details </h1>

            </div>
        </div>


        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        View data from the database
                    </div>

                    <div class="panel-body">
                        <h4 style="color: #00CA79">View  Details of Bats</h4>
                        <div style="margin-top: 20px;">


                            <?php
                            if(isset($_GET['id']))
                            {
                            include('../../assets/includedFiles/connect.php');
                            $id=$_GET['id'];
                            $getselect=mysqli_query($bd,"SELECT * FROM bat_info WHERE bat_id='$id'");
                            while($profile=mysqli_fetch_array($getselect))

                            {
                                $id=$profile['bat_id'];
                                $scientificName=$profile['scientific_name'];
                                $kingdom=$profile['kingdom'];
                                $phylum=$profile['phylum'];
                                $class=$profile['bat_class'];
                                $orderr=$profile['bat_order'];
                                $genus=$profile['genus'];
                                $family=$profile['family'];
                                $subFamily=$profile['sub_family'];
                                $speciesAuthority=$profile['species'];
                                $commonNames=$profile['common_names'];
                                $synonyms=$profile['synonyms'];


                                $country_occurence=$profile['country_occurence'];
                                $population=$profile['population'];
                                $roost=$profile['roost'];

                                $conservation=$profile['conservation_status'];

                                $created=$profile['created'];

                                ?>

                                <div class="display">
                                    <p> SCIENTIFIC NAME : <span style="color: #cc006a"><?php echo  $scientificName; ?></span>

                                    </p>
                                    <br />
                                    <p> KINGDOM : <span style="color: #cc006a"><?php echo  $kingdom; ?></span>

                                    </p>
                                    <br />
                                    <p> PHYLUM : <span style="color: #cc006a"><?php echo  $phylum; ?></span>
                                    </p>
                                    <br />
                                    <p> CLASS : <span style="color: #cc006a"><?php echo   $class; ?></span>
                                    </p>
                                    <br />
                                    <p> ORDER : <span style="color: #cc006a"><?php echo  $orderr; ?></span>
                                    </p>
                                    <br />
                                    <p> GENUS : <span style="color: #cc006a"><?php echo  $genus; ?></span>
                                    </p>
                                    <br />
                                    <p> FAMILY : <span style="color: #cc006a"><?php echo  $family; ?></span>
                                    </p>
                                    <br />
                                    <p> SUB FAMILY : <span style="color: #cc006a"><?php echo  $subFamily; ?></span>
                                    </p>
                                    <br />
                                    <p> SPECIES AUTHORITY : <span style="color: #cc006a"><?php echo  $speciesAuthority; ?></span>
                                    </p>
                                    <br />
                                    <p> COMMON NAMES : <span style="color: #cc006a"><?php echo  $commonNames; ?></span>
                                    </p>
                                    <br />
                                    <p> SYNONYMS : <span style="color: #cc006a"><?php echo  $synonyms; ?></span>
                                    </p>
                                    <br />


                                    <p> COUNTRY OCCURENCE : <span style="color: #cc006a"><?php echo  $country_occurence; ?></span>
                                    </p>
                                    <br />
                                    <p> POPULATION : <span style="color: #cc006a"><?php echo  $population; ?></span>
                                    </p>
                                    <br />
                                    <p> ROOST : <span style="color: #cc006a"><?php echo  $roost; ?></span>
                                    </p>
                                    <br />

                                    <p> CONSERVATION : <span style="color: #cc006a"><?php echo  $conservation; ?></span>
                                    </p>
                                    <br />



                                    <p> CREATED ON : <span><?php echo $created; ?></span>
                                    </p>
                                    <br />
                                </div>
                            <?php } }?>



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
