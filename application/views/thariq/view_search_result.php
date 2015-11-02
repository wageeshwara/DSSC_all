<div class="content-wrapper" xmlns="http://www.w3.org/1999/html">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Staff Management

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
                            <section class="col-lg-4 connectedSortable">

                            <?php
                            foreach($s_result as $result){
                                //echo "<a href='".base_url()."index.php/site/edit?id=".$result->Emp_ID."'>";

                                echo"<h1><P><u>STAFF DETAILS</u></h1></P>";
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


                        </section>

                        <!-- 3rd col -->
                        <section class="col-lg-4 connectedSortable">

                        </section>



            <!-- /.row (main row) -->
    </section>




    <!-- /.content -->
</div><!-- /.content-wrapper -->