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

                        echo"<h1><P><u><center>STAFF DETAILS</center></u></h1></P>";
                        echo "</a><br><br>";

                        echo "<label> Employee ID    :-  $result->Emp_ID ";
                        echo "</a><br><br>";
                        echo "Signature No :-  $result->Sig_No";
                        echo "</a><br><br>";
                        echo "Name :-   $result->Name";
                        echo "</a><br><br>";
                        echo  "Age :-   $result->Age";
                        echo "</a><br><br>";
                        echo  "Contact No :-   $result->Contact_No";
                        echo "</a><br><br>";
                        echo  "Gender :-   $result->Gender";
                        echo "</a><br><br>";
                        echo "Civil Status :-   $result->Civil_Status";
                        echo "</a><br><br>";
                        echo  "Address:-   $result->Address";
                        echo "</a><br><br>";
                        echo  "NIC :-   $result->NIC";
                        echo "</a><br><br>";
                        echo  "Date Of Birth :-   $result->DOB";
                        echo "</a><br><br>";
                        echo  "Religion :-   $result->Religion";
                        echo "</a><br><br>";
                        echo  "Date Joined :-   $result->Date_Joined";
                        echo "</a><br><br>";
                        echo  "Medium :-   $result->Medium";
                        echo "</a><br><br>";
                        echo  "Educational Qualification :-   $result->Edu_Qualif";
                        echo "</a><br><br>";
                        echo  "Professional Qualification :-   $result->Prof_Qualif";
                        echo "</a><br><br>";
                        echo  "Designation:-   $result->Designation";
                        echo "</a><br><br>";
                        echo  "Salary :-   $result->Salary";
                        echo "</a><br><br>";
                        echo  "Date Appointed :-   $result->Date_Appoint";
                        echo "</a><br><br>";
                        echo  "Main Subject :-   $result->Main_Sub";
                        echo "</a><br><br>";
                        echo  "Other Subject :-   $result->Other_Sub";
                        echo "</a><br><br>";
                        echo  "Email:-   $result->Email";
                        echo "</a><br><br>";
                        echo  "Work Experience :-   $result->Work_Exp";
                        echo "</a><br><br>";
                        echo  "Other :-   $result->Other";


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