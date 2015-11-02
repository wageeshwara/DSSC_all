<html>
<head>
    <meta charset="UTF-8">
    <title>DSSC | Report</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="<?php echo base_url()?>/bootstrap/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="<?php echo base_url()?>/bootstrap/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />


</head>
<body onload="window.print();" >
<div class="wrapper">
    <!-- Main content -->
    <section class="invoice">
        <!-- title row -->
        <div class="row">
            <div class="col-xs-12">
                <h2 class="page-header">
                    <small class="pull-right">Date: <?php echo (new \DateTime())->format('Y-m-d');?></small>
                     <img src="<?php echo base_url() ?>/bootstrap/dsimg.jpg" alt="..." class='margin' />
                    <address>
                        <strong>D. S. Senanayake College</strong><br>
                        62 R G Senanayake Mawatha<br>
                        Colombo 00700<br>
                        011 2 698253
                    </address>
                </h2>

            </div><!-- /.col -->
        </div>
        <!-- info row -->
        <div class="row invoice-info">
            <div class="col-sm-4 invoice-col">


            </div><!-- /.col -->
        </div><!-- /.row -->

        <!-- Table row -->
        <div class="row">
            <div class="col-xs-12 table-responsive">
                <table class="table table-striped">
                    <thead>
                    </thead>
                    <tbody>

                    <?php
                    foreach($results as $result){
                        //echo "<a href='".base_url()."index.php/site/edit?id=".$result->Emp_ID."'>";

                        echo"<h1><P><u><center>NON ACADEMIC STAFF DETAILS</center></u></h1></P>";
                        echo "</a><br><br>";

                        echo "<label> Employee ID    :-  $result->NonAcc_Emp_ID ";
                        echo "</a><br><br>";
                        echo "Signature No :-  $result->NonAcc_Sig_No";
                        echo "</a><br><br>";
                        echo "Name :-   $result->NonAcc_Name";
                        echo "</a><br><br>";
                        echo  "Age :-   $result->NonAcc_Age";
                        echo "</a><br><br>";
                        echo  "Contact No :-   $result->NonAcc_Contact_No";
                        echo "</a><br><br>";
                        echo  "Gender :-   $result->NonAcc_Gender";
                        echo "</a><br><br>";
                        echo "Civil Status :-   $result->NonAcc_Civil_Status";
                        echo "</a><br><br>";
                        echo  "Address:-   $result->NonAcc_Address";
                        echo "</a><br><br>";
                        echo  "Interpersonal Skills :-   $result->NonAcc_Skills";
                        echo "</a><br><br>";
                        echo  "NIC :-   $result->NonAcc_NIC";
                        echo "</a><br><br>";
                        echo  "Date Of Birth :-   $result->NonAcc_DOB";
                        echo "</a><br><br>";
                        echo  "Religion :-   $result->NonAcc_Religion";
                        echo "</a><br><br>";
                        echo  "Date Joined :-   $result->NonAcc_Date_Joined";
                        echo "</a><br><br>";
                        echo  "Language Known :-   $result->NonAcc_Language";
                        echo "</a><br><br>";
                        echo  "Educational Qualification :-   $result->NonAcc_Edu_Qualif";
                        echo "</a><br><br>";
                        echo  "Professional Qualification :-   $result->NonAcc_Prof_Qualif";
                        echo "</a><br><br>";
                        echo  "Designation :-   $result->NonAcc_Designation";
                        echo "</a><br><br>";
                        echo  "Co/Extra Curricular Activities:-   $result->NonAcc_Activities";
                        echo "</a><br><br>";
                        echo  "Salary :-   $result->NonAcc_Salary";
                        echo "</a><br><br>";
                        echo  "Date Appointed :-   $result->NonAcc_Date_Appoint";
                        echo "</a><br><br>";
                        echo  "Email:-   $result->NonAcc_Email";
                        echo "</a><br><br>";
                        echo  "Health:-   $result->NonAcc_Health";
                        echo "</a><br><br>";
                        echo  "Work Experience :-   $result->NonAcc_Work_Exp";
                        echo "</a><br><br>";
                        echo  "Achievements :-   $result->NonAcc_Achievement";
                        echo "</a><br><br>";
                        echo  "References :-   $result->NonAcc_References";
                        echo "</a><br><br>";
                        echo  "Other :-   $result->NonAcc_Other";



                    }


                    ?>


                    </tbody>
                </table>
            </div><!-- /.col -->
        </div><!-- /.row -->

    </section><!-- /.content -->
</div><!-- ./wrapper -->
<!-- AdminLTE App -->
<script src="<?php echo base_url()?>/bootstrap/dist/js/app.min.js" type="text/javascript"></script>
</body>
</html>