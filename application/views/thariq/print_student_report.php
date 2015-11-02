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

                        echo"<h1><P><u><center>STUDENT DETAILS</center></u></h1></P>";
                        echo "</a><br>";

                        echo"<h1><P><u>Student Information</u></h1></P>";
                        echo "</a><br><br>";

                        echo "<label> Index No    :-  $result->Index_No ";
                        echo "</a><br><br>";
                        echo "Full Name :-  $result->Student_FullName";
                        echo "</a><br><br>";
                        echo "Name With Initials :-   $result->Student_Name_Initials";
                        echo "</a><br><br>";
                        echo "Date Of Birth(DD/MM/YYYY) :-   $result->Student_DOB";
                        echo "</a><br><br>";
                        echo  "Religion :-   $result->Student_Religion";
                        echo "</a><br><br>";
                        echo  "Age :-   $result->Student_Age";
                        echo "</a><br><br>";
                        echo "Contact No :-   $result->Student_Contact_No";
                        echo "</a><br><br>";
                        echo  "Distance from home to School:-   $result->Student_Distance";
                        echo "</a><br><br>";
                        echo  "Amount of Donation paid :-   $result->Student_Donation";
                        echo "</a><br><br>";
                        echo  "Date Joined:-   $result->Student_Date_Joined";
                        echo "</a><br><br>";
                        echo  "Medium of Study :-   $result->Student_Medium";
                        echo "</a><br><br>";
                        echo  "Grade :-   $result->Student_Grade";
                        echo "</a><br><br>";
                        echo  "Results Obtained in the Interview/Scholarship/O/L :-   $result->Student_Results";
                        echo "</a><br><br>";
                        echo  "Nursery Education/Previous School :-   $result->Student_Prev_School";
                        echo "</a><br><br>";
                        echo  "Siblings studying in this School :-   $result->Student_Siblings";
                        echo "</a><br><br>";
                        echo  "Mode Of Transport to School :-   $result->Student_Transport";
                        echo "</a><br><br>";
                        echo "In case of Emergency - ContactNo/Address/Email :-  $result->Student_Emergency";
                        echo "</a><br><br>";
                        echo "Home Address :-   $result->Student_Address";
                        echo "</a><br><br>";
                        echo "Extra Curricular Activities :-   $result->Student_Activities";
                        echo "</a><br><br>";
                        echo  "Special Needs Required :-   $result->Student_Special_Needs";
                        echo "</a><br><br>";
                        echo  "Other :-   $result->Student_Other";
                        echo "</a><br><br>";




                        echo"<h1><P><u>Parents' Information</u></h1></P>";
                        echo "</a><br>";

                        echo"<h1><P><u>Father</u></h1></P>";
                        echo "</a><br><br>";

                        echo "<label> Name    :-  $result->Student_Father_Name ";
                        echo "</a><br><br>";
                        echo "NIC :-  $result->Student_Father_NIC";
                        echo "</a><br><br>";
                        echo "Age :-   $result->Student_Father_Age";
                        echo "</a><br><br>";
                        echo "Religion :-   $result->Student_Father_Religion";
                        echo "</a><br><br>";
                        echo  "Date Of Birth :-   $result->Student_Father_DOB";
                        echo "</a><br><br>";
                        echo  "Occupation :-   $result->Student_Father_Occu";
                        echo "</a><br><br>";
                        echo "Designation :-   $result->Student_Father_Desig";
                        echo "</a><br><br>";
                        echo  "Work Place Details :-   $result->Student_Father_Workplace";
                        echo "</a><br><br>";
                        echo  "Monthly Income :-   $result->Student_Father_Income";
                        echo "</a><br><br>";
                        echo  "Educational Qualifications :-   $result->Student_Father_Edu";
                        echo "</a><br><br>";
                        echo  "Email :-   $result->Student_Father_Email";
                        echo "</a><br><br>";
                        echo  "Contact No :-   $result->Student_Father_ContactNo";
                        echo "</a><br><br>";
                        echo  "Old Boy of the School :-   $result->Student_Father_Oldboy";
                        echo "</a><br><br>";
                        echo  "Home Address :-   $result->Student_Father_Address";
                        echo "</a><br><br>";
                        echo  "Other :-   $result->Student_Father_Other";
                        echo "</a><br><br>";


                        echo"<h1><P><u>Mother</u></h1></P>";
                        echo "</a><br><br>";

                        echo "<label> Name    :-  $result->Student_Mother_Name ";
                        echo "</a><br><br>";
                        echo "NIC :-  $result->Student_Mother_NIC";
                        echo "</a><br><br>";
                        echo "Age :-   $result->Student_Mother_Age";
                        echo "</a><br><br>";
                        echo "Religion :-   $result->Student_Mother_Religion";
                        echo "</a><br><br>";
                        echo  "Date Of Birth :-   $result->Student_Mother_DOB";
                        echo "</a><br><br>";
                        echo  "Occupation/Housewife :-   $result->Student_Mother_Occu";
                        echo "</a><br><br>";
                        echo "Designation/Housewife :-   $result->Student_Mother_Desig";
                        echo "</a><br><br>";
                        echo  "Work Place Details/Housewife :-   $result->Student_Mother_Workplace";
                        echo "</a><br><br>";
                        echo  "Monthly Income :-   $result->Student_Mother_Income";
                        echo "</a><br><br>";
                        echo  "Educational Qualifications :-   $result->Student_Mother_Edu";
                        echo "</a><br><br>";
                        echo  "Email :-   $result->Student_Mother_Email";
                        echo "</a><br><br>";
                        echo  "Contact No :-   $result->Student_Mother_ContactNo";
                        echo "</a><br><br>";
                        echo  "School Attended :-   $result->Student_Mother_School";
                        echo "</a><br><br>";
                        echo  "Home Address :-   $result->Student_Mother_Address";
                        echo "</a><br><br>";
                        echo  "Other :-   $result->Student_Mother_Other";
                        echo "</a><br><br>";


                        echo"<h1><P><u>Guardian</u></h1></P>";
                        echo "</a><br><br>";

                        echo "<label> Name    :-  $result->Student_Guardi_Name ";
                        echo "</a><br><br>";
                        echo "NIC :-  $result->Student_Guardi_NIC";
                        echo "</a><br><br>";
                        echo "Age :-   $result->Student_Guardi_Age";
                        echo "</a><br><br>";
                        echo "Profession :-   $result->Student_Guardi_Profession";
                        echo "</a><br><br>";
                        echo "Contact :-   $result->Student_Guardi_ContactNo";
                        echo "</a><br><br>";
                        echo "Address :-   $result->Student_Guardi_Address";
                        echo "</a><br><br>";


                        echo"<h1><P><u>Documents Submitted</u></h1></P>";
                        echo "</a><br><br>";

                        echo "<label> Birth Certificate    :-  $result->Student_Doc_BirthCerti ";
                        echo "</a><br><br>";
                        echo "Certificates from previous School/Nursery :-  $result->Student_Doc_Student_PreviousCerti";
                        echo "</a><br><br>";
                        echo "Letter from Gramasevaka :-   $result->Student_Doc_Gramasevaka";
                        echo "</a><br><br>";
                        echo "School fee receipt :-   $result->Student_Doc_FeeReceipt";
                        echo "</a><br><br>";
                        echo  "Electrical/Water/Telephone bills in parents name :-   $result->Student_Doc_Bills";
                        echo "</a><br><br>";
                        echo "Deeds of properties in parents name :-  $result->Student_Doc_Deeds";
                        echo "</a><br><br>";


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