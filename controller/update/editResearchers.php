<?php
ob_start();
include('../../assets/includedFiles/connect.php');
if(isset($_GET['id']))
{
    $id=$_GET['id'];
    if(isset($_POST['update']))
    {
        $etitle = $_POST['eusertitle'];
        $efname=$_POST['efname'];
        $emname=$_POST['emname'];
        $elname=$_POST['elname'];
        $egender=$_POST['egender'];
        $enic=$_POST['enic'];
        $eadd1=$_POST['eadd1'];
        $eadd2=$_POST['eadd2'];
        $ecity=$_POST['ecity'];
        $ecountry=$_POST['ecountry'];
        $emajor=$_POST['emajor'];
        $eemail=$_POST['eemail'];
        $eq1name=$_POST['eq1name'];
        $eq1ins=$_POST['eq1ins'];
        $eq1year=$_POST['eq1year'];
        $eq2name=$_POST['eq2name'];
        $eq2ins=$_POST['eq2ins'];
        $eq2year=$_POST['eq2year'];
        $eother=$_POST['eother'];
        $epassword=$_POST['epassword'];



        $updated=mysqli_query($bd,"UPDATE researchers SET
         password='$epassword' WHERE id='$id'")or die();
        if($updated)
        {
            $msg="Successfully Updated!!";
            header('Location:../insert/researcherDetails.php');
        }
    }
}  //update ends here
ob_end_flush();
?>


<!DOCTYPE>
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
<?php include("../../assets/includedFiles/template.php")?>


<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">Researcher Details</h1>
                <h1 class="page-subhead-line">All memeber Researchers details </h1>

            </div>
        </div>


        <div class="row">
            <div class="col-md-8">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Insert data to the Database
                    </div>

                    <div class="panel-body">
                        <h4>Add New Researcher</h4>
                        <div style="margin-top: 20px;">
                            <?php
                            if(isset($_GET['id']))
                            {
                                $id=$_GET['id'];
                                $getselect=mysqli_query($bd,"SELECT * FROM researchers WHERE id='$id'");
                                while($profile=mysqli_fetch_array($getselect))
                                {

                                    $title = $profile['title'];
                                    $fname=$profile['fname'];
                                    $mname=$profile['mname'];
                                    $lname=$profile['lname'];
                                    $gender=$profile['gender'];
                                    $nic=$profile['nic'];
                                    $add1=$profile['add1'];
                                    $add2=$profile['add2'];
                                    $city=$profile['city'];
                                    $country=$profile['country'];
                                    $major=$profile['major'];
                                    $email=$profile['email'];
                                    $q1name=$profile['q1name'];
                                    $q1ins=$profile['q1ins'];
                                    $q1year=$profile['q1year'];
                                    $q2name=$profile['q2name'];
                                    $q2ins=$profile['q2ins'];
                                    $q2year=$profile['q2year'];
                                    $other=$profile['other'];
                                    $password=$profile['password'];


                                    ?>
                                    <div class="display">
                                        <form action="" method="post" name="insertform">
                                            <div class="col-xs-12">
                                                <label for="title"  id="preinput" class="col-xs-5"> Title : </label>
                                                <input type="text" name="etitle" required class="col-xs-7"
                                                       value="<?php echo $title; ?>" id="inputid" disabled/>
                                            </div>

                                            <div class="col-xs-12">
                                                <label for="fname"  id="preinput" class="col-xs-5"> FIRST NAME : </label>
                                                <input type="text" name="efname" required class="col-xs-7"
                                                       value="<?php echo $fname; ?>" id="inputid" disabled />
                                            </div>

                                            <div class="col-xs-12">
                                                <label for="mname"  id="preinput" class="col-xs-5"> MID NAME : </label>
                                                <input type="text" name="emname" required class="col-xs-7"
                                                       value="<?php echo $mname; ?>" id="inputid" disabled/>
                                            </div>

                                            <div class="col-xs-12">
                                                <label for="lname"  id="preinput" class="col-xs-5"> LAST NAME : </label>
                                                <input type="text" name="elname" required class="col-xs-7"
                                                       value="<?php echo $lname; ?>" id="inputid" disabled/>
                                            </div>

                                            <div class="col-xs-12">
                                                <label for="gender"  id="preinput" class="col-xs-5"> GENDER : </label>
                                                <input type="text" name="egender" required class="col-xs-7"
                                                       value="<?php echo $gender; ?>" id="inputid" disabled/>
                                            </div>

                                            <div class="col-xs-12">
                                                <label for="nic"  id="preinput" class="col-xs-5"> NIC : </label>
                                                <input type="text" name="enic" required class="col-xs-7"
                                                       value="<?php echo $nic; ?>" id="inputid" disabled/>
                                            </div>

                                            <div class="col-xs-12">
                                                <label for="add1"  id="preinput" class="col-xs-5"> ADDRESS 1 : </label>
                                                <input type="text" name="eadd1" required class="col-xs-7"
                                                       value="<?php echo $add1; ?>" id="inputid" disabled/>
                                            </div>

                                            <div class="col-xs-12">
                                                <label for="add2"  id="preinput" class="col-xs-5"> ADDRESS 2 : </label>
                                                <input type="text" name="eadd2" required class="col-xs-7"
                                                       value="<?php echo $add2; ?>" id="inputid" disabled/>
                                            </div>

                                            <div class="col-xs-12">
                                                <label for="city"  id="preinput" class="col-xs-5"> CITY: </label>
                                                <input type="text" name="ecity" required class="col-xs-7"
                                                       value="<?php echo $city; ?>" id="inputid" disabled/>
                                            </div>

                                            <div class="col-xs-12">
                                                <label for="country"  id="preinput" class="col-xs-5"> COUNTRY: </label>
                                                <input type="text" name="ecountry" required class="col-xs-7"
                                                       value="<?php echo $country; ?>" id="inputid" disabled/>
                                            </div>

                                            <div class="col-xs-12">
                                                <label for="major"  id="preinput" class="col-xs-5"> MAJOR: </label>
                                                <input type="text" name="emajor" required class="col-xs-7"
                                                       value="<?php echo $major; ?>" id="inputid" disabled/>
                                            </div>

                                            <div class="col-xs-12">
                                                <label for="email"  id="preinput" class="col-xs-5"> E-Mail: </label>
                                                <input type="text" name="eemail" required class="col-xs-7"
                                                       value="<?php echo $email; ?>" id="inputid" disabled/>
                                            </div>

                                            <div class="col-xs-12">
                                                <label  for="q1name"  id="preinput" class="col-xs-5"> QUALIFICATION 1 : </label>
                                                <input type="text" name="eq1name" required class="col-xs-7"
                                                       value="<?php echo $q1name; ?>" id="inputid" disabled/>
                                            </div>

                                            <div class="col-xs-12">
                                                <label for="q1ins" id="preinput" class="col-xs-5"> QUALIFICATION 1 INS : </label>
                                                <input type="text" name="eq1ins" required class="col-xs-7"
                                                       value="<?php echo $q1ins; ?>" id="inputid" disabled/>
                                            </div>

                                            <div class="col-xs-12">
                                                <label for="q1year" id="preinput" class="col-xs-5"> QUALIFICATION 1 YEAR : </label>
                                                <input type="text" name="eq1year" required class="col-xs-7"
                                                       value="<?php echo $q1year; ?>" id="inputid" disabled/>
                                            </div>

                                            <div class="col-xs-12">
                                                <label  for="q2name"  id="preinput" class="col-xs-5"> QUALIFICATION 2 : </label>
                                                <input type="text" name="eq2name" required class="col-xs-7"
                                                       value="<?php echo $q2name; ?>" id="inputid" disabled/>
                                            </div>

                                            <div class="col-xs-12">
                                                <label for="q2ins" id="preinput" class="col-xs-5"> QUALIFICATION 2 INS : </label>
                                                <input type="text" name="eq2ins" required class="col-xs-7"
                                                       value="<?php echo $q2ins; ?>" id="inputid" disabled/>
                                            </div>

                                            <div class="col-xs-12">
                                                <label for="q2year" id="preinput" class="col-xs-5"> QUALIFICATION 2 YEAR : </label>
                                                <input type="text" name="eq2year" required class="col-xs-7"
                                                       value="<?php echo $q2year; ?>" id="inputid" disabled/>
                                            </div>

                                            <div class="col-xs-12">
                                                <label for="other" id="preinput" class="col-xs-5"> OTHER : </label>
                                                <input type="text" name="other" required class="col-xs-7"
                                                       value="<?php echo $other; ?>" id="inputid" disabled/>
                                            </div>



                                            <div class="col-xs-12">
                                                <label for="password" id="preinput" class="col-xs-5"> PASSWORD : </label>
                                                <input type="text" name="epassword" required class="col-xs-7"
                                                       value="<?php echo $password; ?>" id="inputid" />
                                            </div>

                                            <div class="col-xs-12">
                                                <input type="submit" name="update" value="Update" id="inputid1" />
                                            </div>
                                        </form>
                                    </div>
                                <?php } } ?>
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