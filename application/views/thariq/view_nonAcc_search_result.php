<div class="content-wrapper" xmlns="http://www.w3.org/1999/html">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Non Academic Staff Management

        </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Main row -->
        <div class="row">
            <!-- Left col -->

                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Results Found</h3>
                    </div>
                    <div class="box-body">
                        <section class="col-md-4 ">
                            <!-- Input addon -->

                            </br></br></br>
                        </section>
                            <section class="col-lg-6 connectedSortable">

                            <?php
                            foreach($s_result as $result){
                                //echo "<a href='".base_url()."index.php/site/edit?id=".$result->Emp_ID."'>";

                                echo"<h1><P><u>NON ACADEMIC STAFF DETAILS</u></h1></P>";
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
                                echo  "Interpersonal Skills:-   $result->NonAcc_Skills";
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
                                echo  "Designation:-   $result->NonAcc_Designation";
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
                                echo  "Achievements:-   $result->NonAcc_Achievement";
                                echo "</a><br><br>";
                                echo  "References:-   $result->NonAcc_References";
                                echo "</a><br><br>";
                                echo  "Other :-   $result->NonAcc_Other";


                            }


                            ?>


                        </section>

                        <!-- 3rd col -->
                        <section class="col-lg-4 connectedSortable">

                        </section>



            <!-- /.row (main row) -->
    </section>




    <!-- /.content -->
</div><!-- /.content-wrapper -->