

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
            <form action="<?= site_url('sites/update'); ?>" method="post">
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
                                <input type='text' name='txtempid' class='form-control' value='$result->Emp_ID' readonly>


                                </div></br>";

                                echo "Signature No";
                                echo "<div class='input-group'>
                                <span class='input-group-addon'><i class='fa fa-envelope'></i></span>
                                <input type='text' name='txtsigno' class='form-control' value='$result->Sig_No'>
                                </div></br>";

                                echo "Name";
                                echo "<div class='input-group'>
                                <span class='input-group-addon'><i class='fa fa-envelope'></i></span>
                                <input type='text' name='txtname' class='form-control' value='$result->Name' readonly>
                                </div></br>";

                                echo "Age";
                                echo "<div class='input-group'>
                                <span class='input-group-addon'><i class='fa fa-envelope'></i></span>
                                <input type='text' name='txtage' class='form-control' value='$result->Age' readonly>
                                </div></br>";

                                echo "Contact No";
                                echo "<div class='input-group'>
                                <span class='input-group-addon'><i class='fa fa-envelope'></i></span>
                                <input type='text' name='txtcontcno' class='form-control' value='$result->Contact_No'>
                                </div></br>";

                                echo "Gender";
                                echo "<div class='input-group'>
                                <span class='input-group-addon'><i class='fa fa-envelope'></i></span>
                                <input type='text' name='txtgender' class='form-control' value='$result->Gender' readonly>
                                </div></br>";

                                echo "Civil Status";
                               echo"<div class='form-group'>
                                <select class='form-control' name='txtcivilstat'>
                                    <option>$result->Civil_Status</option>
                                    <option>Single</option>
                                    <option>Married</option>

                                </select>
                            </div>
                            </br>";

                                echo "Address";
                                echo "<textarea name='txtaddress' rows='3' cols='54'>$result->Address</textarea>";

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
                                <input type='text' name='txtnic' class='form-control' value='$result->NIC' readonly>
                                </div></br>";

                                echo "Date Of Birth";
                                echo "<div class='input-group'>
                                <span class='input-group-addon'><i class='fa fa-envelope'></i></span>
                                <input type='text' name='txtdob' class='form-control' value='$result->DOB' readonly>
                                </div></br>";

                                echo "Religion";
                                echo "<div class='input-group'>
                                <span class='input-group-addon'><i class='fa fa-envelope'></i></span>
                                <input type='text' name='txtreligion' class='form-control' value='$result->Religion'>
                                </div></br>";

                                echo "Date Joined";
                                echo "<div class='input-group'>
                                <span class='input-group-addon'><i class='fa fa-envelope'></i></span>
                                <input type='text' name='txtdatejoined'  class='form-control'  value='$result->Date_Joined' readonly>
                                </div></br>";

                                echo "Medium";
                                echo"<div class='form-group'>
                                <select class='form-control' name='txtmedium'>
                                    <option>$result->Medium</option>
                                    <option>Sinhala</option>
                                    <option>English</option>
                                    <option>Tamil</option>

                                </select>
                            </div>
                            </br>";

                                echo "Educational Qualification";
                                echo "<div class='input-group'>
                                <span class='input-group-addon'><i class='fa fa-envelope'></i></span>
                                <input type='text' name='txteduqual' class='form-control' value='$result->Edu_Qualif'>
                                </div></br>";

                                echo "Professional Qualification";
                                echo "<div class='input-group'>
                                <span class='input-group-addon'><i class='fa fa-envelope'></i></span>
                                <input type='text' name='txtprofqual' class='form-control' value='$result->Prof_Qualif'>
                                </div></br>";

                                echo "Designation";
                                echo "<div class='input-group'>
                                <span class='input-group-addon'><i class='fa fa-envelope'></i></span>
                                <input type='text' name='txtdesig' class='form-control' value='$result->Designation'>
                                </div></br>";


                            }
                            ?>



                            <input type="submit" name="btn_update" button class="btn btn-block btn-primary"  value="Update"></button>



                        </section>

                            <!-- 3rd col -->
                            <section class="col-lg-4 connectedSortable">

                                </br></br></br>

                            <?php
                            foreach($s_result as $result) {

                                echo "Salary";
                                echo "<div class='input-group'>
                                <span class='input-group-addon'><i class='fa fa-envelope'></i></span>
                                <input type='text' name='txtsal' class='form-control' value='$result->Salary'>
                                </div></br>";

                                echo "Date Of Appointment";
                                echo "<div class='input-group'>
                                <span class='input-group-addon'><i class='fa fa-calendar'></i></span>
                                <input type='text' name='txtdateofappoi' class='form-control' value='$result->Date_Appoint' readonly>
                                </div></br>";

                                echo "Main Subject";
                                echo "<div class='input-group'>
                                <span class='input-group-addon'><i class='fa fa-envelope'></i></span>
                                <input type='text' name='txtmainsub' class='form-control' value='$result->Main_Sub'>
                                </div></br>";

                                echo "Other Subject";
                                echo "<div class='input-group'>
                                <span class='input-group-addon'><i class='fa fa-envelope'></i></span>
                                <input type='text' name='txtothersub' class='form-control' value='$result->Other_Sub'>
                                </div></br>";

                                echo "Email Address";
                                echo "<div class='input-group'>
                                <span class='input-group-addon'><i class='fa fa-envelope'></i></span>
                                <input type='text' name='txtemail' class='form-control' value='$result->Email'>
                                </div></br>";

                                echo "</br>";

                                echo "Work Experience";
                                echo "<textarea name='txtworkexp' rows='3' cols='54'>$result->Work_Exp</textarea>";

                                echo "</br></br>";

                                echo "Other";
                                echo "<textarea name='txtother' rows='3' cols='54'>$result->Other</textarea>";




}
                            ?>

                                </br></br>
                                <input type="button" value="Cancel" name="btn_makLeave" button class="btn btn-block btn-primary"></button>

                            </section>


            </form>

            <!-- /.row (main row) -->
    </section>




    <!-- /.content -->
</div><!-- /.content-wrapper -->
