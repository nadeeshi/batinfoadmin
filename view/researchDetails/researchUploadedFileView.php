
<?php
require_once('../../assets/includedFiles/auth.php');
?>




<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>BatFacts.com</title>




    <!--<link rel="stylesheet" href="researchDetails.css" type="text/css" />-->


</head>
<body>
<?php include("../../assets/includedFiles/template.php")?>

<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line" style="color: #500a6f"><b>Research Details</b></h1>
                <h1 class="page-subhead-line">All Research details </h1>

            </div>
        </div>


        <div class="row">
            <div class="col-md-11">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Insert Research Paper to the Database
                    </div>

                    <div class="panel-body">
                        <h4 style="color: #cc006a">Add New Research Paper</h4>
                        <div style="margin-top: 20px;">








<div id="body">
	<table width="100%" border="1">
    <tr>
    <th colspan="4">your uploads...<label><a href="../../controller/insert/researchDetails.php">upload new files...</a></label></th>
    </tr>
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
        </tr>
        <?php
	}
	?>
    </table>
    
</div></div>
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