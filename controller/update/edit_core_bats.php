<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>edit bats</title>
        
         
        
        <link rel="stylesheet" href="../assets/css/in_up_del_css/style_insert_del_edit.css"/>
        <link rel="stylesheet" href="../assets/css/in_up_del_css/insert_form_css.css">
        <link rel="stylesheet" href="../assets/css/in_up_del_css/insert_form.css">
        <link rel="stylesheet" href="../assets/css/in_up_del_css/edit_del_page.css">

        <link href="../assets/bootstrap/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="../assets/css/forum.css" rel="stylesheet" type="text/css">
        <link href="../assets/css/navbar1n2.css" rel="stylesheet" type="text/css">
        <link href="../assets/css/footer.css" rel="stylesheet">
        
        <script src="../assets/bootstrap/jquary.js"></script>
        <script src="../assets/bootstrap/bootstrapjs.js"></script>
       
        <script src="../assets/js/in_up_del_js/jquary.js"></script>
        <script src="../assets/js/in_up_del_js/edit_del_confimtions.js"></script>
       
        <style></style>
       


    </head>
    <body>

        <div>
            <?php include '../IncludedFiles/navbarTemplate.php' ?>
        </div>

        <div class="col-sm-8 col-sm-push-2 col-xs-12 insert-form">
          <div class="height_default_edit">

          
            <?php
            require_once('mysqli_connect.php');

            if (mysqli_connect_errno()) {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }

            $scientific_name = mysqli_real_escape_string($dbc, $_POST['scientific_name']);
            $bat_order = mysqli_real_escape_string($dbc, $_POST['bat_order']);
            $kingdom = mysqli_real_escape_string($dbc, $_POST['kingdom']);
            $genus = mysqli_real_escape_string($dbc, $_POST['genus']);
            $phylum = mysqli_real_escape_string($dbc, $_POST['phylum']);
            $family = mysqli_real_escape_string($dbc, $_POST['family']);
            $sub_family = mysqli_real_escape_string($dbc, $_POST['sub_family']);
            $bat_class = mysqli_real_escape_string($dbc, $_POST['bat_class']);
            $species = mysqli_real_escape_string($dbc, $_POST['species']);
            $common_names = mysqli_real_escape_string($dbc, $_POST['common_names']);
            $synonyms = mysqli_real_escape_string($dbc, $_POST['synonyms']);
            $roost = mysqli_real_escape_string($dbc, $_POST['roost']);
            $conservation_status = mysqli_real_escape_string($dbc, $_POST['conservation_status']);
            $country_occurence = mysqli_real_escape_string($dbc, $_POST['country_occurence']);
            $feeding = mysqli_real_escape_string($dbc, $_POST['feeding']);
            $breeding = mysqli_real_escape_string($dbc, $_POST['breeding']);
            $threats = mysqli_real_escape_string($dbc, $_POST['threats']);
            $conservation_action = mysqli_real_escape_string($dbc, $_POST['conservation_action']);
            $measurements = mysqli_real_escape_string($dbc, $_POST['measurements']);
            $other_details = mysqli_real_escape_string($dbc, $_POST['other_details']);


            $query = "UPDATE bat_info SET 
                   
                   
                    bat_order='$bat_order',
                    kingdom='$kingdom',
                    genus='$genus',
                    phylum='$phylum', 
                    family= '$family',
                    sub_family='$sub_family',
                    bat_class='$bat_class',
                    species='$species',
                    common_names='$common_names',
                    synonyms='$synonyms',
                    roost='$roost',
                    conservation_status='$conservation_status',
                    country_occurence='$country_occurence', 
                    feeding='$feeding',
                    breeding='$breeding',
                    threats='$threats',
                    conservation_action='$conservation_action',
                    measurements='$measurements',
                    other_details='$other_details'

                    WHERE scientific_name = '$scientific_name'";

            mysqli_query($dbc, $query) or die("Something Went Wrong!!!");

            if ($dbc->query($query) === TRUE) {
                echo "<p class='msg'>Bat Succesfully Updated<p>";
                echo '<br><br><a href="edit_delete_home.php"><button class="my-button">Back</button></a>';
            } else {
                echo "<p class='msg'>Something Went Wrong!!!</p>";
                echo '<br><br><a href="edit_delete_home.php"><button class="my-button">Try Again</button></a>';

            }

            mysqli_close($dbc);


            
            ?>


        
        </div>
        </div>
<div class="col-xs-10 col-xs-push-2">
                <?php include "../IncludedFiles/footer.php" ?>
            </div>
    </body>
</html>