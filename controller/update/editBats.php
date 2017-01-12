<?php
require_once('../../assets/includedFiles/auth.php');
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>edit bats</title>

    <link rel="stylesheet" href="../../assets/css/in_up_del_css/edit_form_style.css">
    <link rel="stylesheet" href="../../assets/css/in_up_del_css/style_insert_del_edit.css"/>
    <link rel="stylesheet" href="../../assets/css/in_up_del_css/insert_form_css.css">
    <link rel="stylesheet" href="../../assets/css/in_up_del_css/insert_form.css">
    <link href="../../assets/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/navbar1n2.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/footer.css" rel="stylesheet">
    <script src="../assets/bootstrap/jquary.js"></script>
    <script src="../assets/bootstrap/bootstrapjs.js"></script>
    <script src="../../assets/js/jquery-1.10.2.js"></script>
    <script src="../../assets/js/validate_text_fields.js"></script>


    <style></style>
</head>

<body >


<div class="col-sm-8 col-sm-push-2 col-xs-12 insert-form">
<div class="head-form">
    <h2>Edit Bats Details</h2>
</div>

<?php
require_once('../../assets/includedFiles/connect.php');

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$scientific_name = $_GET['id'];

$result = mysqli_query($bd, "SELECT * FROM bat_info WHERE scientific_name= '$scientific_name' ");

$details = mysqli_fetch_array($result);

if (!$details) {
    // printf("Error: %s\n", mysqli_error($dbc));
    echo "<p class='msg'>Error Occur! <p>";

    echo '<br><br><a href="../../view/batDetails/listOfBats.php"><button class="my-button">Try Again</button></a>';
    exit();
}

mysqli_close($bd);
?>



<form id="form" method="post" action="edit_core_bats.php">


    <div class="form-group clearfix">
        <div>

            <a class="link" onclick="return myFunction();" >

                <!-- button, make disabled text fields editable -->

                <span class="glyphicon_my glyphicon glyphicon-pencil " ><span class="edit">Edit</span></span>

            </a>
        </div>


        <!--print curretnt bat`s name -->


        <p class="lbl sname_control">  <?php echo $details['scientific_name'] ?></p>

        <!-- hidden text field to send the scientific_name to update form-->
        <input type="hidden"  id="sname" name="scientific_name" value="<?php echo $details['scientific_name'] ?>" required />


    </div>


    <div class="form-group clearfix">
        <label class="lbl " >Order<span class="red-star" >*</span></label>

        <input type="text"  id="bat_order" name="bat_order" class="form-control " value="<?php echo $details['bat_order'] ?>" required disabled />


    </div>

    <div class="form-group clearfix">
        <label class="lbl " >Kingdom<span class="red-star" >*</span></label>

        <input type="text"  id="kingdom" name="kingdom" class="form-control " value="<?php echo $details['kingdom'] ?>" required disabled />


    </div>
    <div class="form-group clearfix">
        <label class="lbl " for="emp_id">Genus</label>

        <input class="required form-control " id="genus" name="genus" type="text" value="<?php echo $details['genus'] ?>" required disabled/>

    </div>

    <div class="form-group clearfix">
        <label class="lbl" for="name">Phylum<span class="red-star" >*</span></label>

        <input id="phylum" name="phylum" type="text" class="form-control " value="<?php echo $details['phylum'] ?>" disabled/>

    </div>


    <div class="form-group clearfix">
        <label class="lbl " for="email">Family<span class="red-star" >*</span> </label>

        <input id="family" name="family" type="text" class="form-control " value="<?php echo $details['family'] ?>" required disabled/>

    </div>
    <div class="form-group clearfix">
        <label class="lbl " for="emp_id">Sub Family<span class="red-star" >*</span></label>

        <input class=" form-control " id="sbfamily" name="sub_family" type="text" value="<?php echo $details['sub_family'] ?>" required disabled/>

    </div>

    <div c lass="form-group clearfix">
        <label class="lbl" for="name">Class<span class="red-star" >*</span></label>

        <input id="bat_class" name="bat_class" type="text" class="form-control " value="<?php echo $details['bat_class'] ?>" required disabled/>

    </div>


    <div class="form-group clearfix">
        <label class="lbl " for="email">Species<span class="red-star" >*</span></label>

        <input id="species" name="species" type="text" class="form-control " value="<?php echo $details['species'] ?>" required disabled/>


    </div>
    <div class="form-group clearfix">
        <label class="lbl " for="emp_id">Common Name(s)<span class="red-star" >*</span></label>

        <textarea class="form-control my-text " id="common_names" name="common_names" rows="5" cols="50" required disabled><?php echo $details['common_names'] ?></textarea>


    </div>

    <div class="form-group clearfix">
        <label class="lbl" for="name">Synonyms</label>

        <textarea class="form-control my-text" id="synonyms" name="synonyms" rows="5" cols="50" required disabled><?php echo $details['synonyms'] ?></textarea>


    </div>


    <div class="form-group clearfix">
        <label class="lbl " for="email">Roosts Types<span class="red-star" >*</span></label>
        <textarea class="form-control my-text " id="roost" name="roost" rows="5" cols="50" required disabled><?php echo $details['roost'] ?></textarea>


    </div>
    <div class="form-group clearfix">
        <label class="lbl" for="emp_id">Conservation Status<span class="red-star" >*</span></label>

        <input id="conservation_status" name="conservation_status" type="text" class=" form-control" value="<?php echo $details['conservation_status'] ?>" required disabled/>




    </div>

    <div class="form-group clearfix">
        <label class="lbl" for="name">Countries Occurrence<span class="red-star" >*</span></label>

        <textarea class="form-control my-text " id="country_occurence" name="country_occurence" rows="5" cols="50" required disabled><?php echo $details['country_occurence'] ?></textarea>


    </div>


    <div class="form-group clearfix">
        <label class="lbl" for="email">Diet & Feeding<span class="red-star" >*</span></label>

        <textarea class="form-control my-text " id="feeding" name="feeding" rows="5" cols="50" required disabled> <?php echo $details['feeding'] ?> </textarea>





    </div>
    <div class="form-group clearfix">
        <label class="lbl " for="emp_id">Breeding & Habbits<span class="red-star" >*</span></label>

        <textarea class="form-control my-text " id="breeding" name="breeding" rows="5" cols="50" required disabled> <?php echo $details['breeding'] ?> </textarea>




    </div>

    <div class="form-group clearfix">
        <label class=" lbl" for="name">Major Threats<span class="red-star" >*</span>  </label>

        <textarea class="form-control my-text " id="threats" name="threats" rows="5" cols="50" required disabled> <?php echo $details['threats'] ?> </textarea>




    </div>
    <div class="form-group clearfix">
        <label class=" lbl" for="name">Conservation Actions</label>

        <textarea class="form-control my-text " id="conservation_action" name="conservation_action" rows="5" cols="50" disabled> <?php echo $details['conservation_action'] ?> </textarea>

    </div>




    <div class="form-group clearfix">
        <label class="lbl " for="email">Measurements<span class="red-star" >*</span></label>

        <textarea class="form-control my-text " id="measurements" name="measurements" rows="5" cols="50" required disabled> <?php echo $details['measurements'] ?> </textarea>




    </div>
    <div class="form-group clearfix">
        <label class=" lbl " for="email">Other Details</label>

        <textarea class="form-control my-text " id="other_details" name="other_details" rows="5" cols="50" disabled> <?php echo $details['other_details'] ?> </textarea>



    </div>
    <div class="col-xs-8">
        <input type="submit" class="my-button submit_btn_edit" value ="Submit" id ="myBtn" disabled />

    </div>



</form>

<script>
    //make disabled text fields editable

    function myFunction() {
        document.getElementById("myBtn").disabled = false;



        document.getElementById("bat_order").disabled = false;


        document.getElementById("kingdom").disabled = false;


        document.getElementById("genus").disabled = false;


        document.getElementById("phylum").disabled = false;


        document.getElementById("family").disabled = false;


        document.getElementById("sbfamily").disabled = false;

        document.getElementById("bat_class").disabled = false;


        document.getElementById("species").disabled = false;


        document.getElementById("common_names").disabled = false;


        document.getElementById("synonyms").disabled = false;

        document.getElementById("roost").disabled = false;


        document.getElementById("conservation_status").disabled = false;

        document.getElementById("country_occurence").disabled = false;


        document.getElementById("feeding").disabled = false;


        document.getElementById("breeding").disabled = false;


        document.getElementById("threats").disabled = false;

        document.getElementById("conservation_action").disabled = false;


        document.getElementById("measurements").disabled = false;

        document.getElementById("other_details").disabled = false;

    }



</script>
</div>
<div class="col-xs-10 col-xs-push-2">
    <?php include "../IncludedFiles/footer.php" ?>
</div>
</body>
</html>


















<?php
ob_start();
include('../../assets/includedFiles/connect.php');
if(isset($_GET['id']))
{
    $id=$_GET['id'];
    if(isset($_POST['update']))
    {


        $scientificName=$_POST['scientificName'];
        $kingdom=$_POST['kingdom'];
        $phylum=$_POST['phylum'];
        $class=$_POST['class'];
        $orderr=$_POST['orderr'];
        $genus=$_POST['genus'];
        $family=$_POST['family'];
        $subFamily=$_POST['subFamily'];
        $speciesAuthority=$_POST['speciesAuthority'];
        $commonNames=$_POST['commonNames'];
        $synonyms=$_POST['synonyms'];
        $redListCategory=$_POST['redListCategory'];
        $distribution=$_POST['distribution'];
        $oioCountries=$_POST['oioCountries'];
        $population=$_POST['population'];
        $roosts=$_POST['roosts'];
        $commonFood=$_POST['commonFood'];
        $bibliography=$_POST['bibliography'];
        $conservation=$_POST['conservation'];


        $updated=mysqli_query($bd,"UPDATE bats_details SET
        scientificName='$scientificName', kingdom='$kingdom', phylum='$phylum'  ,class='$class' ,orderr='$orderr' ,genus='$genus',
         family='$family',subFamily='$subFamily',speciesAuthority='$speciesAuthority',commonNames='$commonNames', synonyms='$synonyms',
           redListCategory='$redListCategory',distribution='$distribution',oioCountries='$oioCountries',population='$population',
            roosts='$roosts',commonFood='$commonFood',bibliography='$bibliography',conservation='$conservation' WHERE id='$id'")or die();
        if($updated)
        {
            $msg="Successfully Updated!!";
            header('Location:newBat.php');
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
                <h1 class="page-head-line" style="color: #500a6f">Bats Details</h1>
                <h1 class="page-subhead-line">All bats details </h1>

            </div>
        </div>


        <div class="row">
            <div class="col-md-10">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Insert data to the Database
                    </div>

                    <div class="panel-body">
                        <h4 style="color: #cc006a">Update Bat details</h4>
                        <div style="margin-top: 20px;">
                            <?php
                            if(isset($_GET['id']))
                            {
                                $id=$_GET['id'];
                                $getselect=mysqli_query($bd,"SELECT * FROM bat_info WHERE bat_id='$id'");
                                while($profile=mysqli_fetch_array($getselect))
                                {

                                    $scientificName=$profile['scientificName'];
                                    $kingdom=$profile['kingdom'];
                                    $phylum=$profile['phylum'];
                                    $class=$profile['class'];
                                    $orderr=$profile['orderr'];
                                    $genus=$profile['genus'];
                                    $family=$profile['family'];
                                    $subFamily=$profile['subFamily'];
                                    $speciesAuthority=$profile['speciesAuthority'];
                                    $commonNames=$profile['commonNames'];
                                    $synonyms=$profile['synonyms'];
                                    $redListCategory=$profile['redListCategory'];
                                    $distribution=$profile['distribution'];
                                    $oioCountries=$profile['oioCountries'];
                                    $population=$profile['population'];
                                    $roosts=$profile['roosts'];
                                    $commonFood=$profile['commonFood'];
                                    $bibliography=$profile['bibliography'];
                                    $conservation=$profile['conservation'];

                                    ?>
                                    <div class="display">
                                        <form action="" method="post" name="insertform">
                                            <div class="col-xs-12">
                                                <label for="name"  id="preinput" class="col-xs-5"> SCIENTIFIC NAME : </label>
                                                <input type="text"   name="scientificName" required placeholder="Enter  name"
                                                       value="<?php echo $scientificName; ?>" id="inputid" class="col-xs-7"/>
                                            </div>

                                            <div class="col-xs-12">
                                                <label  for="kingdom"  id="preinput" class="col-xs-5"> KINGDOM : </label>
                                                <input type="text"   name="kingdom" required placeholder="Enter  kingdom"
                                                       value="<?php echo $kingdom; ?>" id="inputid" class="col-xs-7"/>
                                            </div>
                                            <div class="col-xs-12">
                                                <label for="phylum" id="preinput" class="col-xs-5"> PHYLUM : </label>
                                                <input type="text"   name="phylum"  placeholder="Enter  phylum"
                                                       value="<?php echo $phylum; ?>" id="inputid" class="col-xs-7"/>
                                            </div>
                                            <div class="col-xs-12">
                                                <label  for="class"  id="preinput" class="col-xs-5"> CLASS : </label>
                                                <input type="text"   name="class"  placeholder="Enter class"
                                                       value="<?php echo $class; ?>" id="inputid" class="col-xs-7"/>
                                            </div>
                                            <div class="col-xs-12">
                                                <label  for="orderr"  id="preinput" class="col-xs-5"> ORDER : </label>
                                                <input type="text"   name="orderr"  placeholder="Enter order"
                                                       value="<?php echo $orderr; ?>" id="inputid" class="col-xs-7"/>
                                            </div>
                                            <div class="col-xs-12">
                                                <label  for="genus"  id="preinput" class="col-xs-5"> GENUS : </label>
                                                <input type="text"   name="genus"  placeholder="Enter genus"
                                                       value="<?php echo $genus; ?>" id="inputid" class="col-xs-7"/>
                                            </div>
                                            <div class="col-xs-12">
                                                <label  for="family"  id="preinput" class="col-xs-5"> FAMILY : </label>
                                                <input type="text"   name="family" required placeholder="Enter family"
                                                       value="<?php echo $family; ?>" id="inputid" class="col-xs-7"/>
                                            </div>
                                            <div class="col-xs-12">
                                                <label  for="subFamily"  id="preinput" class="col-xs-5"> SUB FAMILY : </label>
                                                <input type="text"   name="subFamily"  placeholder="Enter subFamily"
                                                       value="<?php echo $subFamily; ?>" id="inputid" class="col-xs-7"/>
                                            </div>
                                            <div class="col-xs-12">
                                                <label  for="speciesAuthority"  id="preinput" class="col-xs-5"> SPECIES AUTHORITY : </label>
                                                <input type="text"   name="speciesAuthority"  placeholder="Enter speciesAuthority"
                                                       value="<?php echo $speciesAuthority; ?>" id="inputid" class="col-xs-7"/>
                                            </div>
                                            <div class="col-xs-12">
                                                <label  for="commonNames"  id="preinput" class="col-xs-5"> COMMON NAMES : </label>
                                                <textarea name="commonNames" id="inputid" style="height: 200px" class="col-xs-7"><?php echo $commonNames?></textarea>
                                            </div>
                                            <div class="col-xs-12">
                                                <label  for="synonyms"  id="preinput" class="col-xs-5"> SYNONYMS : </label>
                                                <!--<textarea    style="height: 200px" name="synonyms"  placeholder="Enter synonyms"
                                                       value="" id="inputid" class="col-xs-7"></textarea>-->

                                                <textarea name="synonyms" id="preinput" style="height: 200px" class="col-xs-7"><?php echo $synonyms?></textarea>
                                            </div>
                                            <div class="col-xs-12">
                                                <label  for="redListCategory"  id="preinput" class="col-xs-5"> RED LIST CATEGORY : </label>
                                                <input type="text"   name="redListCategory"  placeholder="Enter redListCategory"
                                                       value="<?php echo $redListCategory; ?>" id="inputid" class="col-xs-7"/>
                                            </div>

                                            <div class="col-xs-12">
                                                <label  for="distribution"  id="preinput" class="col-xs-5"> DISTRIBUTION : </label>
                                                <textarea name="distribution" id="inputid" style="height: 200px" class="col-xs-7"><?php echo $distribution?></textarea>
                                            </div>

                                            <div class="col-xs-12">
                                                <label  for="oioCountries"  id="preinput" class="col-xs-5"> OIO COUNTRIES : </label>
                                                <textarea name="oioCountries" id="inputid" style="height: 200px" class="col-xs-7"><?php echo $oioCountries?></textarea>
                                            </div>

                                            <div class="col-xs-12">
                                                <label  for="population"  id="preinput" class="col-xs-5"> POPULATION : </label>
                                                <textarea name="population" id="inputid" style="height: 200px" class="col-xs-7"><?php echo $population?></textarea>
                                            </div>

                                            <div class="col-xs-12">
                                                <label  for="roosts"  id="preinput" class="col-xs-5"> ROOSTS : </label>
                                                <input type="text"   name="roosts"  placeholder="Enter roosts"
                                                       value="<?php echo $roosts; ?>" id="inputid" class="col-xs-7"/>
                                            </div>

                                            <div class="col-xs-12">
                                                <label  for="commonFood"  id="preinput" class="col-xs-5"> COMMON FOOD : </label>
                                                <textarea name="commonFood" id="inputid" style="height: 200px" class="col-xs-7"><?php echo $commonFood?></textarea>
                                            </div>

                                            <div class="col-xs-12">
                                                <label  for="bibliography"  id="preinput" class="col-xs-5"> BIBLIOGRAPHY : </label>
                                                <textarea name="bibliography" id="inputid" style="height: 200px" class="col-xs-7"><?php echo $bibliography?></textarea>
                                            </div>
                                            <div class="col-xs-12">
                                                <label  for="conservation"  id="preinput" class="col-xs-5"> CONSERVATION : </label>
                                                <textarea name="conservation" id="inputid" style="height: 200px" class="col-xs-7"><?php echo $conservation?></textarea>
                                            </div>





                                            <div class="col-xs-12">
                                                <br>
                                                <input type="submit" style="width: 300px" name="update" value="Update" id="inputid1" />
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