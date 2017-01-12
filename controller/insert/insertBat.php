<?php
require_once('../../assets/includedFiles/auth.php');
?>

<?php
ob_start();
include("../../assets/includedFiles/connect.php");

//if(isset($_POST['send'])!=""){

    $scientific_name=mysql_real_escape_string($_POST['scientific_name']);
    $bat_order=mysql_real_escape_string($_POST['bat_order']);
    $kingdom=mysql_real_escape_string($_POST['kingdom']);
    $genus=mysql_real_escape_string($_POST['genus']);
    $phylum=mysql_real_escape_string($_POST['phylum']);
    $family=mysql_real_escape_string($_POST['family']);
    $sub_family=mysql_real_escape_string($_POST['sub_family']);
    $bat_class=mysql_real_escape_string($_POST['bat_class']);
    $species=mysql_real_escape_string($_POST['species']);
    $common_names=mysql_real_escape_string($_POST['common_names']);
    $synonyms=mysql_real_escape_string($_POST['synonyms']);
    $roost=mysql_real_escape_string($_POST['roost']);
    $conservation_status=mysql_real_escape_string($_POST['conservation_status']);
    $country_occurence=mysql_real_escape_string($_POST['country_occurence']);
    $feeding=mysql_real_escape_string($_POST['feeding']);
    $breeding=mysql_real_escape_string($_POST['breeding']);
    $threats=mysql_real_escape_string($_POST['threats']);
    $conservation_action=mysql_real_escape_string($_POST['conservation_action']);
    $population=mysql_real_escape_string($_POST['population']);
    $measurements=mysql_real_escape_string($_POST['measurements']);
    $other_details=mysql_real_escape_string($_POST['other_details']);


    $update=mysqli_query($bd,"INSERT INTO bat_info(scientific_name,bat_order,kingdom,genus,phylum,family,sub_family,
bat_class,species,common_names,synonyms,roost,conservation_status,country_occurence,feeding,breeding,threats,conservation_action,population,measurements,other_details,created)VALUES
                                      ('$scientific_name','$bat_order','$kingdom','$genus','$phylum','$family','$sub_family','$bat_class','$species','$common_names','$synonyms','$roost','$conservation_status','$country_occurence',
                                      '$feeding','$breeding','$threats','$conservation_action','$population','$measurements','$other_details',now())");

    if($update)
    {
        $msg="Successfully Updated!!";
        echo "<script type='text/javascript'>alert('$msg');</script>";
        header('Location:newBat.php');
    }
    else
    {
        $errormsg="Something went wrong, Try again";
        echo "<script type='text/javascript'>alert('$errormsg');</script>";

    //}
}
ob_end_flush();
?>