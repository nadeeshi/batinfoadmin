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
    <script src="../../assets/js/edit_del_confimtions.js"></script>

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
                        <h4>view  Details of Bats</h4>

                        <div style="margin-top: 20px;">

                            <?php
                            include('../../assets/includedFiles/connect.php');
                            $select=mysqli_query($bd,"SELECT * FROM bat_info order by bat_id desc");
                            $i=1;
                            ?>
                            <div class="display">

                                <table>
                                    <tr>
                                        <th>BATS  NAME : </th>
                                        <th>BAT ORDER : </th>
                                        <th>KINGDOM</th>

                                        <th>View</th>
                                        <th>Edit</th>
                                        <th>Delete</th>


                                    </tr>


                                    <?php



                                    while($userrow=mysqli_fetch_array($select))
                                    {
                                        $id=$userrow['bat_id'];
                                        $scientificName=$userrow['scientific_name'];
                                        $bat_order = $userrow['bat_order'];
                                        $kingdom=$userrow['kingdom'];


                                        ?>

                                        <tr>
                                            <td><?php echo $scientificName; ?></td>
                                            <td><?php echo $bat_order; ?></td>
                                            <td><?php echo $kingdom; ?></td>

                                            <td><a href="viewBats.php?id=<?php echo $id; ?>">
                                                    <span class="view" title="View"> View </span></a></td>



                                            <td><a href="../../controller/update/editBats.php?id=<?php echo $id; ?>"><span class="edit" title="Edit"> Edit </span></a></td>

                                            <td><a href="../../controller/delete/deleteBats.php?id=<?php echo $id; ?>"
                                                   onclick="return confirm('Are you sure you wish to delete this Record?');">
                                                    <span class="delete" title="Delete"> Delete </span></a></td>
                                        </tr>
                                    <?php } ?>

                                </table>







                            </div>
                        </div>

                    </div>
                </div>


            </div>

        </div>



    </div>
</div>
<div id="footer-sec"><b>Group 23-UCSC Group Project</b></div>




</body>
</html>






























