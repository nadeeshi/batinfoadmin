<?php
require_once('../../assets/includedFiles/auth.php');
?>

<!DOCTYPE html>
<html>


<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>BatFacts.com</title>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>insert a new bat</title>



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





    <link rel="stylesheet" href="../../assets/css/in_up_del_css/style_insert_del_edit.css"/>
    <link rel="stylesheet" href="../../assets/css/in_up_del_css/insert_form_css.css">
    <link rel="stylesheet" href="../../assets/css/in_up_del_css/insert_form.css">



    <script src="../../assets/js/jquery-1.10.2.js"></script>
    <script src="../../assets/js/bootstrapjs.js"></script>
    <script type ="text/javascript" src="../../assets/js/multi_step_form.js"></script>
    <script src="../../assets/js/in_up_del_js/jquary.js"></script>
    <script src="../../assets/js/validate_text_fields.js"></script>
    <style></style>


</head>



<body>
<?php include "../../assets/includedFiles/template.php" ?>



<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line" style="color: #500a6f">Bats Details</h1>
                <h1 class="page-subhead-line">All Bats details </h1>

            </div>
        </div>


        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Insert data to the Database
                    </div>

                    <div class="panel-body">
                        <h4>Add New Bats details</h4>
                        <div style="margin-top: 20px;">


                            <!--insert new Bat details-->
                            <div class="display">



                                <form action="insertBat.php" method="post" name="insertform">


                              <fieldset id="first" class="my-fieldset">
                                  <div class="container-form">
                                      <div class="head-form">
                                          <h2>Insert New Bats</h2>
                                      </div>



                                      <?php
                                      //get already availabale bats, so user can see newly inserting bats is alraedy there
                                      require_once('../../assets/includedFiles/connect.php');
                                      $sql = "SELECT scientific_name FROM bat_info";
                                      $result = mysqli_query($bd,$sql);


                                      ?>




                                      <p class="subtitle">[ 1/3 ] <span class="red-star" >(* required )</span></p>
                                      <div class="form-group ">

                                          <label class= "lbl" >Scientific Name <span class="red-star" >*</span></label>
                                          <input type="text" name ="scientific_name" class="form-control my-text" id= "sname" aria-describedby="sname" required><br>

                                          <?php

                                          //get already availabale bats, so user can see newly inserting bats is alraedy there

                                          echo"<label id= 'alredy_bats' class ='lbl'>already availabale bats</label> <br> ";
                                          echo "<select id='selected'>";
                                          while ($row = mysqli_fetch_array($result)) {

                                              echo "<option class ='lbl' value=" . $row['scientific_name'] . "'>" . $row['scientific_name'] . "

                                </option>";
                                          }
                                          echo "</select>";

                                          //checking done
                                          mysqli_close($bd);
                                          ?>

                                      </div>


                                      <div class="form-group ">
                                          <label class= "lbl">Order<span class="red-star" >*</span></label>
                                          <input type="text" class="form-control my-text " name="bat_order" id="order" aria-describedby="order" required>
                                      </div>

                                      <div class="form-group ">
                                          <label class= "lbl">Kingdom<span class="red-star" >*</span></label>
                                          <input type="text" class="form-control my-text" name="kingdom" id="kingdom" aria-describedby="kingdom" required>

                                      </div>

                                      <div class="form-group ">
                                          <label class= "lbl">Genus<span class="red-star" >*</span></label>
                                          <input type="text" class="form-control my-text" name= "genus" id="genus" aria-describedby="genus" required>
                                      </div>
                                      <div class="form-group ">
                                          <label class= "lbl">Phylum<span class="red-star" >*</span></label>
                                          <input type="text" class="form-control my-text" name="phylum" id="phylum" aria-describedby="phylum" required>

                                      </div>

                                      <div class="form-group ">
                                          <label class= "lbl">Family<span class="red-star" >*</span></label>
                                          <input type="text" class="form-control my-text" name="family" id="family" aria-describedby="family" required>
                                      </div>
                                      <div class="form-group ">
                                          <label class= "lbl">Sub Family<span class="red-star" >*</span></label>
                                          <input type="text" class="form-control my-text" name= "sub_family" id="sbfamily" aria-describedby="sbfamily" required>

                                      </div>

                                      <div class="form-group ">
                                          <label class= "lbl">Class<span class="red-star" >*</span></label>
                                          <input type="text" class="form-control my-text" name="bat_class"  id="class" aria-describedby="class" required>
                                      </div>
                                      <div class="form-group">
                                          <label class= "lbl">Species<span class="red-star" >*</span></label>

                                          <input type="text" class="form-control my-text" name= "species" id="species" aria-describedby="species" required>
                                      </div>

                                      <div class="form-group ">
                                          <input type="button" id="next_btn1"  class="my-button next-btn-1 " value="Next >" onclick="next_step1()" />
                                      </div>



                                  </div>


                              </fieldset>
                              <fieldset id="second" class="my-fieldset">
                                  <p class="subtitle">[ 2/3 ]<span class="red-star" >(* required )</span></p>
                                  <div class="form-group ">
                                      <label class= "lbl">Common Name(s)<span class="red-star" >*</span></label>
                                      <textarea class="form-control my-text" name="common_names" id="cnames" rows="4" cols="50" required> </textarea>

                                  </div>

                                  <div class="form-group">
                                      <label class= "lbl">Synonyms</label>
                                      <textarea class="form-control my-text" name="synonyms" id="synonyms" rows="4" cols="50"  > </textarea>
                                  </div>
                                  <div class="form-group">
                                      <label class= "lbl">Roosts Types<span class="red-star" >*</span></label>

                                      <textarea class="form-control my-text" name="roost" id="roost" rows="4" cols="20" required> </textarea>

                                  </div>

                                  <div class="form-group">
                                      <label class= "lbl">Conservation Status<span class="red-star" >*</span></label>
                                      <input type="text" class="form-control my-text" name="conservation_status" id="conservation_status" aria-describedby="redlist" required>
                                  </div>
                                  <div class="form-group">
                                      <label class= "lbl">Countries Occurrence<span class="red-star" >*</span></label>
                                      <textarea class="form-control my-text" name="country_occurence" id="occurence" rows="4" cols="20"required > </textarea>

                                  </div>


                                  <div class="form-group">
                                      <input type="button" id="pre_btn1"  class="my-button  prev-btn-2 " value="< Previous" onclick="prev_step1()"/>
                                      <input type="button" name="next" class="my-button next-btn-2" id="next_btn2" value="Next >" onclick="next_step2()" />
                                  </div>


                              </fieldset>
                              <fieldset id="third" class="my-fieldset">
                                  <p class="subtitle">[ 3/3 ]<span class="red-star" >(* required )</span></p>
                                  <div class="form-group">
                                      <label class= "lbl">Diet & Feeding <span class="red-star" >*</span></label>
                                      <textarea class="form-control my-text" name="feeding" id="food" rows="4" cols="50" required></textarea>

                                  </div>

                                  <div class="form-group">
                                      <label class= "lbl">Breeding & Habbits<span class="red-star" >*</span></label>
                                      <textarea class="form-control my-text" name="breeding" id="breeding" rows="4" cols="20" required></textarea>
                                  </div>
                                  <div class="form-group">
                                      <label class= "lbl">Major Threats<span class="red-star" >*</span></label>
                                      <textarea class="form-control my-text" name= "threats" id="threats" rows="4" cols="20" required></textarea>

                                  </div>


                                  <div class="form-group">
                                      <label class= "lbl">Conservation Actions </label>
                                      <textarea class="form-control my-text" name="conservation_action" id="conseravtion" rows="4" cols="20" ></textarea>
                                  </div>



                                  <div class="form-group ">
                                      <label class= "lbl">Population<span class="red-star" >*</span></label>
                                      <input type="text" class="form-control my-text" name= "population" id="population" aria-describedby="population" required>

                                  </div>


                                  <div class="form-group">
                                      <label class= "lbl">Measurements<span class="red-star" >*</span></label>
                                      <textarea class="form-control my-text" name="measurements" id="measurements" rows="4" cols="20" required></textarea>


                                  </div>


                                  <div class="form-group">
                                      <label class= "lbl">Other Details</label>
                                      <textarea class="form-control my-text" name="other_details" id="otherDetails" rows="4" cols="20" ></textarea>
                                  </div>

                                  <div class=" col-xs-8">
                                      <input type="button" id="pre_btn2" class="prev-btn-3 my-button" value="< Previous" onclick="prev_step2()"/>
                                      <input type="submit" id="sub_btn" class="submit_btn_insert my-button" name="submit" value="Submit" onclick="validation(event)"/>

                                  </div>


                              </fieldset>

</form>
                                </div>















                                   <!-- <div class="col-xs-12">
                                        <label for="scientificName" id="preinput" class="col-xs-5"> * SCIENTIFIC NAME : </label>
                                        <input type="text"   name="scientificName" required placeholder="Enter bat  name" id="inputid" class="col-xs-7"/>
                                    </div>

                                    <div class="col-xs-12">
                                        <label for="kingdom" id="preinput" class="col-xs-5"> * KINGDOM : </label>
                                        <input type="text"   name="kingdom"  required placeholder="Enter kingdom name" id="inputid" class="col-xs-7"/>
                                    </div>

                                    <div class="col-xs-12">
                                        <label for="phylum" id="preinput" class="col-xs-5"> PHYLUM : </label>
                                        <input type="text"   name="phylum"  placeholder="Enter phylum" id="inputid" class="col-xs-7"/>
                                    </div>

                                    <div class="col-xs-12">
                                        <label for="class" id="preinput" class="col-xs-5"> CLASS : </label>
                                        <input type="text"   name="class"  placeholder="Enter class" id="inputid" class="col-xs-7"/>
                                    </div>

                                    <div class="col-xs-12">
                                        <label for="orderr" id="preinput" class="col-xs-5"> ORDER : </label>
                                        <input type="text"   name="orderr"  placeholder="Enter order" id="inputid" class="col-xs-7"/>
                                    </div>

                                    <div class="col-xs-12">
                                        <label for="genus" id="preinput" class="col-xs-5"> GENUS : </label>
                                        <input type="text"   name="genus" placeholder="Enter genus" id="inputid" class="col-xs-7"/>
                                    </div>

                                    <div class="col-xs-12">
                                        <label for="family" id="preinput" class="col-xs-5"> * FAMILY : </label>
                                        <input type="text"   name="family" required placeholder="Enter family" id="inputid" class="col-xs-7"/>
                                    </div>

                                    <div class="col-xs-12">
                                        <label for="subFamily" id="preinput" class="col-xs-5"> SUB FAMILY : </label>
                                        <input type="text"   name="subFamily"  placeholder="Enter subfamily" id="inputid" class="col-xs-7"/>
                                    </div>

                                    <div class="col-xs-12">
                                        <label  for="speciesAuthority" id="preinput" class="col-xs-5"> SPECIES AUTHORITY : </label>
                                        <input type="text"  name="speciesAuthority"  placeholder="Enter species authority" id="inputid" class="col-xs-7"/>
                                    </div>

                                    <div class="col-xs-12">
                                        <label for="commonNames" id="preinput" class="col-xs-5"> COMMON NAMES : </label>
                                        <textarea style="height: 200px" name="commonNames"  placeholder="Enter common names" id="inputid" class="col-xs-7"></textarea>
                                    </div>

                                    <div class="col-xs-12">
                                        <label for="synonyms" id="preinput" class="col-xs-5"> SYNONYMS : </label>
                                        <textarea type="text" style="height: 200px" name="synonyms"  placeholder="Enter synonyms" id="inputid" class="col-xs-7"></textarea>
                                    </div>

                                    <div class="col-xs-12">
                                        <label for="redListCategory" id="preinput" class="col-xs-5"> RED LIST CATEGORY : </label>
                                        <input type="text"   name="redListCategory"  placeholder="Enter red list category" id="inputid" class="col-xs-7"/>
                                    </div>

                                    <div class="col-xs-12">
                                        <label for="distribution" id="preinput" class="col-xs-5"> DISTRIBUTION : </label>
                                        <textarea type="text"  style="height: 200px" name="distribution"  placeholder="Enter distribution" id="inputid" class="col-xs-7"></textarea>
                                    </div>

                                    <div class="col-xs-12">
                                        <label for="oioCountries" id="preinput" class="col-xs-5"> OCCURRENCES IN OTHER COUNTRIES  : </label>
                                        <textarea type="text"  style="height: 200px" name="oioCountries"  placeholder="Enter Occurrences in other countries" id="inputid" class="col-xs-7"></textarea>
                                    </div>

                                    <div class="col-xs-12">
                                        <label for="population" id="preinput" class="col-xs-5"> POPULATION(L) : </label>
                                        <textarea type="text"  style="height: 200px" name="population"  placeholder="Enter population" id="inputid" class="col-xs-7"></textarea>
                                    </div>

                                    <div class="col-xs-12">
                                        <label for="roosts" id="preinput" class="col-xs-5"> ROOSTS : </label>
                                        <input type="text"   name="roosts"  placeholder="Enter roosts" id="inputid" class="col-xs-7"/>
                                    </div>

                                    <div class="col-xs-12">
                                        <label for="commonFood" id="preinput" class="col-xs-5"> COMMON FOOD : </label>
                                        <textarea type="text"  style="height: 200px" name="commonFood"  placeholder="Enter common food" id="inputid" class="col-xs-7"></textarea>
                                    </div>

                                    <div class="col-xs-12">
                                        <label for="bibliography" id="preinput" class="col-xs-5"> BIBLIOGRAPHY : </label>
                                        <textarea type="text"  style="height: 300px" name="bibliography"  placeholder="Enter bibliography" id="inputid" class="col-xs-7"></textarea>
                                    </div>

                                    <div class="col-xs-12">
                                        <label for="conservation" id="preinput" class="col-xs-5"> * CONSERVATION ACTION : </label>
                                        <textarea type="text"  style="height: 250px" name="conservation" required placeholder="Enter conservation action" id="inputid" class="col-xs-7"></textarea>
                                    </div>






                                    <div class="col-xs-12">
                                        <br>
                                        <input type="submit" style="width: 200px" name="send" value="Submit" id="inputid1"  />
                                    </div>
                                </form>-->

                            </div>
                            <!--close details------------------------------------------>





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
