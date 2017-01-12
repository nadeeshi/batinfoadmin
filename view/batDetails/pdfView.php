<?php


error_reporting(E_ALL ^ E_DEPRECATED);
@mysql_connect("localhost","root","") or die("could not connect");

@mysql_select_db("project") or die("could not find");
require('../../../assets/fpdf/fpdf.php');

$count = 0;
//if($_GET['batid']>=0){

//$query = mysql_query("SELECT * FROM fulldemo WHERE id = '".$_GET['id']."';") or die("could not search");
//$query = mysql_query("SELECT * FROM fulldemo WHERE  bat_id= "$id;" ) or die("could not search");
//include('../include_files/connect.php');
//$id=$_GET['id'];






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


        $output = '<div> '.'name :  '.$scientificName.'</br> </br> kingdom :  '. $kingdom.'</br></br>class :'.$class;




}

class PDF extends FPDF
{


// Page header
    function Header()
    {
        // Logo

        global $scientificName;


        // Arial bold 15
        $this->SetFont('Arial','B',15);
        // Move to the right
        $this->Cell(80);
        // Title
        $this->Cell(30,10,$scientificName,0,0,'C');
        // Line break
        $this->Ln(45);


    }

// Page footer
    function Footer()
    {
        // Position at 1.5 cm from bottom
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial','I',8);
        // Page number
        $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
    }
}


global $kingdom;
    global $phylum;
    global $class;

// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);

$pdf->Cell(0,10,'Kingdom is  : '.$kingdom,0,1);
    $pdf->Cell(0,10,'Phylum is  : '.$phylum,0,1);
    $pdf->Cell(0,10,'Bat class is  : '.$class,0,1);



$pdf->Output();


?>
<?php } ?>