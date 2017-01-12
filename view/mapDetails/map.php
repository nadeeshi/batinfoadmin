
<?php
require_once('../../assets/includedFiles/auth.php');
?>




<?php
error_reporting(E_ALL ^ E_DEPRECATED);
@mysql_connect("localhost","root","") or die("could not connect");

@mysql_select_db("project") or die("could not find");


?>


<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>BatFacts.com</title>


    <style>



        input[type=submit]{
            padding:0.4em;
        }

        #gmap_canvas{
            width:100%;
            height:30em;
            border-style: outset;
        }

    </style>


</head>
<body>
<?php include("../../assets/includedFiles/template.php")?>

<div id="page-wrapper">
<div id="page-inner">
<div class="row">
    <div class="col-md-12">
        <h1 class="page-head-line" style="color: #500a6f"><b>Bat Details</b></h1>
        <h1 class="page-subhead-line">Using Google Map </h1>

    </div>
</div>


<div class="row">
<div class="col-md-11">
<div class="panel panel-default">
<div class="panel-heading">
     see bat details using Map
</div>

<div class="panel-body">
    <h4 style="color: #cc006a">View Bat Population</h4>
    <div style="margin-top: 20px;">





<?php
if($_POST){


    if(isset($_POST['address'])){
        $searchq = $_POST['address'];
        //echo $searchq;
        $searchq = preg_replace("#[^0-9a-z]#i","",$searchq);
        if(!empty($searchq)){

            $query = mysql_query("SELECT * FROM bat_info WHERE scientific_name = '$searchq';") or die("could not search");
            $count = mysql_num_rows($query);
            $kk = array();
            if($count == 0){
                $output = 'there is no search results!!';
            }else{
                while($row = mysql_fetch_array($query)){
                    $fname = $row['scientific_name'];
                    $lplace1 = $row['locations'];
                    $id = $row['bat_id'];
                    //$img = $row['location'];
                    //$des = $row['description'];


                    //echo '<p><img src="'.$row['location'].'"></p>';
                    //$output = '<div>'.$fname.' -> '.$lplace1.'</div>'.$des ;
                    //echo $output;
                    //echo '<p><img src="'.$row['description'].'"></p>';

                    $places_ar = explode(",",$lplace1);
                    $length = count($places_ar);
                }
                $ll = array();
                $ln = array();
                $fd = array();


                foreach($places_ar as $lplace){

                    $data_arr = geocode($lplace);

                    if($data_arr){

                        $latitude = $data_arr[0];
                        array_push($ll, $latitude);
                        $longitude = $data_arr[1];
                        array_push($ln, $longitude);
                        $formatted_address = $data_arr[2];
                        array_push($fd, $formatted_address);

                        $ljn = json_encode($ll);
                        $lgjn = json_encode($ln);
                        $fjn = json_encode($fd);

                    }else{
                        echo "No map found.";
                    }
                }

                if($length!=0){
                    ?>


                    <div id="gmap_canvas">Loading map...</div>


                    <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyAnFdtTApWgyi6Rv96ouN1uCTmwctBOsic"></script>
                    <script type="text/javascript">

                        var php1 = <?php echo $ljn;?>;
                        var php2 = <?php echo $lgjn;?>;
                        var php3 = <?php echo $fjn;?>;
                        var cnt = <?php echo $length?>;

                        function init_map() {
                            var myOptions = {
                                zoom: 7,
                                center: new google.maps.LatLng(7.8731, 80.7718),
                                mapTypeId: google.maps.MapTypeId.ROADMAP
                            };
                            map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);


                            for(i = 0; i < cnt; i++){
                                var marker = new google.maps.Marker({
                                    map: map,
                                    animation: google.maps.Animation.BOUNCE,

                                    position: new google.maps.LatLng(php1[i],php2[i])

                                });
                                infowindow = new google.maps.InfoWindow({
                                    content: php3[i]
                                });
                                infowindow.open(map, marker);

                            }

                        }

                        google.maps.event.addDomListener(window, 'load', init_map);
                    </script>
                <?php
                }
            }
        }else{echo 'nothing';
            break;
        }
    }else{echo 'nothing';}



}





function geocode($address){


    $address = urlencode($address);
    $url = "http://maps.google.com/maps/api/geocode/json?address={$address}";
    $resp_json = file_get_contents($url);
    $resp = json_decode($resp_json, true);


    if($resp['status']='OK'){


        $lati = $resp['results'][0]['geometry']['location']['lat'];
        $longi = $resp['results'][0]['geometry']['location']['lng'];
        $formatted_address = $resp['results'][0]['formatted_address'];


        if($lati && $longi && $formatted_address){


            $data_arr = array();

            array_push(
                $data_arr,
                $lati,
                $longi,
                $formatted_address
            );

            return $data_arr;

        }else{
            return false;
        }

    }else{
        return false;
    }
}


?>



<form action="" method="post">
    <!--<input type='text' name='address' placeholder='Enter any address here' />-->

    <select id="places" name="address">
        <option value="Cynopterusbrachyotis">cn</option>
        <option value="name">name</option>
        <option value="opel">Opel</option>
        <option value="audi">Audi</option>
    </select>














    <input type='submit' value='Geocode!' />

</form>


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