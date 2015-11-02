

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
            <form action="<?= site_url('sites/nonAcc_update'); ?>" method="post">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Update Staff</h3>
                    </div>
                    <div class="box-body">
                        <section class="col-md-4 ">
                            <!-- Input addon -->



                            <!--
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input type="text" class="form-control" name="txtEmp_ID"
                                       placeholder="Enter Employee No">

                            </div>
                            </br>

                            -->

                            <!-- <input type="submit" name="btn_search"  button class="btn btn-block btn-primary"  value="Search"></button>-->

                            </br></br></br>



                            <?php
                            foreach($s_result as $result) {


                                echo "Employee ID";
                                echo "<div class='input-group'>
                                <span class='input-group-addon'><i class='fa fa-envelope'></i></span>
                                <input type='text' name='txt_nonAcc_empid' class='form-control' value='$result->NonAcc_Emp_ID' readonly>


                                </div></br>";

                                echo "Signature No";
                                echo "<div class='input-group'>
                                <span class='input-group-addon'><i class='fa fa-envelope'></i></span>
                                <input type='text' name='txt_nonAcc_signo' class='form-control' value='$result->NonAcc_Sig_No'>
                                </div></br>";

                                echo "Name";
                                echo "<div class='input-group'>
                                <span class='input-group-addon'><i class='fa fa-envelope'></i></span>
                                <input type='text' name='txt_nonAcc_name' class='form-control' value='$result->NonAcc_Name' readonly>
                                </div></br>";

                                echo "Age";
                                echo "<div class='input-group'>
                                <span class='input-group-addon'><i class='fa fa-envelope'></i></span>
                                <input type='text' name='txt_nonAcc_age' class='form-control' value='$result->NonAcc_Age' readonly>
                                </div></br>";

                                echo "Contact No";
                                echo "<div class='input-group'>
                                <span class='input-group-addon'><i class='fa fa-envelope'></i></span>
                                <input type='text' name='txt_nonAcc_contcno' class='form-control' value='$result->NonAcc_Contact_No'>
                                </div></br>";

                                echo "Gender";
                                echo "<div class='input-group'>
                                <span class='input-group-addon'><i class='fa fa-envelope'></i></span>
                                <input type='text' name='txt_nonAcc_gender' class='form-control' value='$result->NonAcc_Gender' readonly>
                                </div></br>";

                                echo "Civil Status";
                               echo"<div class='form-group'>
                                <select class='form-control' name='txt_nonAcc_civilstat'>
                                    <option>$result->NonAcc_Civil_Status</option>
                                    <option>Single</option>
                                    <option>Married</option>

                                </select>
                            </div>";

                                echo "Address";
                                echo "<textarea name='txt_nonAcc_address' rows='3' cols='54'>$result->NonAcc_Address</textarea>";

                                echo "</br></br>";

                                echo "Interpersonal Skills";
                                echo "<textarea name='txt_nonAcc_skills' rows='3' cols='54'>$result->NonAcc_Skills</textarea>";

                            }
                            ?>

                        </section>

                        <!-- right col -->
                        <section class="col-lg-4 connectedSortable">

                            </br></br></br>

                            <?php
                            foreach($s_result as $result) {

                                echo "NIC";
                                echo "<div class='input-group'>
                                <span class='input-group-addon'><i class='fa fa-calendar'></i></span>
                                <input type='text' name='txt_nonAcc_nic' class='form-control' value='$result->NonAcc_NIC' readonly>
                                </div></br>";

                                echo "Date Of Birth";
                                echo "<div class='input-group'>
                                <span class='input-group-addon'><i class='fa fa-envelope'></i></span>
                                <input type='text' name='txt_nonAcc_dob' class='form-control' value='$result->NonAcc_DOB' readonly>
                                </div></br>";

                                echo "Religion";
                                echo "<div class='input-group'>
                                <span class='input-group-addon'><i class='fa fa-envelope'></i></span>
                                <input type='text' name='txt_nonAcc_religion' class='form-control' value='$result->NonAcc_Religion'>
                                </div></br>";

                                echo "Date Joined";
                                echo "<div class='input-group'>
                                <span class='input-group-addon'><i class='fa fa-envelope'></i></span>
                                <input type='text' name='txt_nonAcc_datejoined'  class='form-control'  value='$result->NonAcc_Date_Joined' readonly>
                                </div></br>";

                                echo "Language Known";
                                echo"<div class='form-group'>
                                <select class='form-control' name='txt_nonAcc_language'>
                                    <option>$result->NonAcc_Language</option>
                                    <option>Sinhala</option>
                                    <option>English</option>
                                    <option>Tamil</option>
                                    <option>Sinhala & English</option>
                                    <option>Sinhala & Tamil</option>
                                    <option>Tamil & English</option>
                                    <option>Sinhala, English & Tamil</option>

                                </select>
                            </div>
                            </br>";

                                echo "Educational Qualification";
                                echo "<div class='input-group'>
                                <span class='input-group-addon'><i class='fa fa-envelope'></i></span>
                                <input type='text' name='txt_nonAcc_eduqual' class='form-control' value='$result->NonAcc_Edu_Qualif'>
                                </div></br>";

                                echo "Professional Qualification";
                                echo "<div class='input-group'>
                                <span class='input-group-addon'><i class='fa fa-envelope'></i></span>
                                <input type='text' name='txt_nonAcc_profqual' class='form-control' value='$result->NonAcc_Prof_Qualif'>
                                </div></br>";

                                echo "Designation";
                                echo "<div class='input-group'>
                                <span class='input-group-addon'><i class='fa fa-envelope'></i></span>
                                <input type='text' name='txt_nonAcc_desig' class='form-control' value='$result->NonAcc_Designation'>
                                </div></br></br>";

                                echo "Co/Extra Curricular Activities";
                                echo "<textarea name='txt_nonAcc_activities' rows='3' cols='54'>$result->NonAcc_Activities</textarea>";

                                echo "</br></br></br>";



                            }
                            ?>



                            <input type="submit" name="btn_nonAcc_update" button class="btn btn-block btn-primary"  value="Update"></button>



                        </section>

                            <!-- 3rd col -->
                            <section class="col-lg-4 connectedSortable">

                                </br></br></br>

                            <?php
                            foreach($s_result as $result) {

                                echo "Salary";
                                echo "<div class='input-group'>
                                <span class='input-group-addon'><i class='fa fa-envelope'></i></span>
                                <input type='text' name='txt_nonAcc_sal' class='form-control' value='$result->NonAcc_Salary'>
                                </div></br>";

                                echo "Date Of Appointment";
                                echo "<div class='input-group'>
                                <span class='input-group-addon'><i class='fa fa-calendar'></i></span>
                                <input type='text' name='txt_nonAcc_dateofappoi' class='form-control' value='$result->NonAcc_Date_Appoint' readonly>
                                </div></br>";

                                echo "Email Address";
                                echo "<div class='input-group'>
                                <span class='input-group-addon'><i class='fa fa-envelope'></i></span>
                                <input type='text' name='txt_nonAcc_email' class='form-control' value='$result->NonAcc_Email'>
                                </div></br>";

                                echo "Health";
                                echo "<div class='input-group'>
                                <span class='input-group-addon'><i class='fa fa-envelope'></i></span>
                                <input type='text' name='txt_nonAcc_health' class='form-control' value='$result->NonAcc_Health'>
                                </div></br>";

                                //echo "</br>";

                                echo "Work Experience";
                                echo "<textarea name='txt_nonAcc_workexp' rows='3' cols='54'>$result->NonAcc_Work_Exp</textarea>";

                                echo "</br></br>";

                                echo "Achievements";
                                echo "<textarea name='txt_nonAcc_achieve' rows='3' cols='54'>$result->NonAcc_Achievement</textarea>";

                                echo "</br></br>";

                                echo "References";
                                echo "<textarea name='txt_nonAcc_references' rows='3' cols='54'>$result->NonAcc_References</textarea>";

                                echo "</br></br>";

                                echo "Other";
                                echo "<textarea name='txt_nonAcc_other' rows='3' cols='54'>$result->NonAcc_Other</textarea>";




}
                            ?>

                                </br></br></br>
                                <input type="button" value="Cancel" name="btn_makLeave"  button class="btn btn-block btn-primary"></button>

                            </section>


            </form>

            <!-- /.row (main row) -->
    </section>




    <!-- /.content -->
</div><!-- /.content-wrapper -->
