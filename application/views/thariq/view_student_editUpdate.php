<div class="content-wrapper" xmlns="http://www.w3.org/1999/html">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Student Management - Edit Student

        </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Main row -->
        <div class="row">
            <!-- Left col -->
            <form action="<?= site_url('sites/student_update'); ?>" method="post">
                <div class="box box-primary">
                    <div class="box-header">

                    </div>

                    <h3 class="box-title">Student Information</h3>

                    <div class="box-body">
                        <section class="col-md-4 ">
                            <!-- Input addon -->


                            <?php
                            foreach($s_result as $result) {


                                echo"</br>";

                                echo"Index No";
                               echo" <div class='input-group' >
                                <span class='input-group-addon' ><i class='fa fa-envelope' ></i ></span >
                                <input type = 'text' class='form-control' name = 'txt_student_index_no'
                                       value='$result->Index_No' readonly >
                            </div ></br>";


                                echo"Full Name";
                                echo" <div class='input-group' >
                                <span class='input-group-addon' ><i class='fa fa-envelope' ></i ></span >
                                <input type = 'text' class='form-control' name = 'txt_student_FullName'
                                       value='$result->Student_FullName' readonly >
                            </div ></br>";


                                echo"Name With Initials";
                                echo" <div class='input-group' >
                                <span class='input-group-addon' ><i class='fa fa-envelope' ></i ></span >
                                <input type = 'text' class='form-control' name = 'txt_student_NameInitials'
                                       value='$result->Student_Name_Initials' readonly >
                            </div ></br>";



                                echo"Date Of Birth(DD/MM/YYYY)";
                                echo" <div class='input-group' >
                                <span class='input-group-addon' ><i class='fa fa-calendar'></i ></span >
                                <input type = 'text' class='form-control' name = 'txt_student_DOB'
                                       value='$result->Student_DOB' readonly >
                            </div ></br>";


                                echo"Religion";
                                echo" <div class='input-group' >
                                <span class='input-group-addon' ><i class='fa fa-envelope' ></i ></span >
                                <input type = 'text' class='form-control' name = 'txt_student_religion'
                                       value='$result->Student_Religion' >
                            </div ></br>";


                                echo"Age";
                                echo" <div class='input-group' >
                                <span class='input-group-addon' ><i class='fa fa-envelope' ></i ></span >
                                <input type = 'text' class='form-control' name = 'txt_student_Age'
                                       value='$result->Student_Age' readonly >
                            </div ></br>";


                                echo"Contact No";
                                echo" <div class='input-group' >
                                <span class='input-group-addon' ><i class='fa fa-envelope' ></i ></span >
                                <input type = 'text' class='form-control' name = 'txt_student_contactNo'
                                       value='$result->Student_Contact_No'  >
                            </div ></br>";


                                echo"Distance from home to School";
                                echo" <div class='input-group' >
                                <span class='input-group-addon' ><i class='fa fa-envelope' ></i ></span >
                                <input type = 'text' class='form-control' name = 'txt_student_distance'
                                       value='$result->Student_Distance'  >
                            </div ></br>";


                                echo"Amount of Donation paid";
                                echo" <div class='input-group' >
                                <span class='input-group-addon' ><i class='fa fa-envelope' ></i ></span >
                                <input type = 'text' class='form-control' name = 'txt_student_donation'
                                       value='$result->Student_Donation'  >
                            </div ></br>";


                            }
                            ?>


                        </section>




                        <!-- right col -->

                        <section class="col-lg-4 connectedSortable">


                            <?php
                            foreach($s_result as $result) {


                                echo"</br>";

                                echo"Date Joined";
                               echo "<div class='input-group' >
                                <span class='input-group-addon' ><i class='fa fa-calendar' ></i ></span >
                                <input type = 'text' class='form-control' name = 'txt_student_DateJoined'  value='$result->Student_Date_Joined' readonly >
                            </div >
                            </br >";



                                echo "Medium of Study";
                                echo"<div class='form-group'>
                                <select class='form-control' name='txt_student_medium'>
                                    <option>$result->Student_Medium</option>
                                    <option>Sinhala</option>
                                    <option>English</option>
                                    <option>Tamil</option>

                                </select>
                            </div>
                            </br>";



                                echo"Grade";
                                echo "<div class='input-group' >
                                <span class='input-group-addon' ><i class='fa fa-envelope' ></i ></span >
                                <input type = 'text' class='form-control' name = 'txt_student_Grade'  value='$result->Student_Grade' readonly >
                            </div >
                            </br >";


                                echo"Results Obtained in the Interview/Scholarship/O/L";
                                echo "<div class='input-group' >
                                <span class='input-group-addon' ><i class='fa fa-envelope' ></i ></span >
                                <input type = 'text' class='form-control' name = 'txt_student_result'  value='$result->Student_Results' readonly >
                            </div >
                            </br >";


                                echo"Nursery Education/Previous School";
                                echo "<div class='input-group' >
                                <span class='input-group-addon' ><i class='fa fa-envelope' ></i ></span >
                                <input type = 'text' class='form-control' name = 'txt_student_NurserySchool'  value='$result->Student_Prev_School' readonly >
                            </div >
                            </br >";


                                echo "Siblings studying in this School";
                                echo"<div class='form-group'>
                                <select class='form-control' name='txt_student_siblings'>
                                    <option>$result->Student_Siblings</option>
                                    <option>Yes</option>
                                    <option>No</option>


                                </select>
                            </div>
                            </br>";


                                echo"Mode Of Transport to School";
                                echo "<div class='input-group' >
                                <span class='input-group-addon' ><i class='fa fa-envelope' ></i ></span >
                                <input type = 'text' class='form-control' name = 'txt_student_transport'  value='$result->Student_Transport'  >
                            </div >
                            </br >";


                            }
                            ?>



                        </section>


                        <!-- 3rd col -->
                        <section class="col-lg-4 connectedSortable">


                                <?php
                                foreach($s_result as $result) {


                                    echo"</br>";


                                    echo"In case of Emergency - ContactNo/Address/Email";
                                    echo "<div class='input-group' >
                                <span class='input-group-addon' ><i class='fa fa-envelope' ></i ></span >
                                <input type = 'text' class='form-control' name = 'txt_student_emergency'  value='$result->Student_Emergency' >
                            </div >
                            </br >";


                                    echo"Home Address";
                                   echo" <textarea name='txt_student_address' rows='4' cols='54' >$result->Student_Address</textarea>";


                                    echo"</br></br>";

                                    echo"Extra Curricular Activities";
                                    echo" <textarea name='txt_student_Aactivities' rows='4' cols='54' >$result->Student_Activities</textarea>";


                                    echo"</br></br>";

                                    echo"Special Needs Required";
                                    echo" <textarea name='txt_student_specialNeeds' rows='4' cols='54' >$result->Student_Special_Needs</textarea>";


                                    echo"</br></br>";

                                    echo"Other";
                                    echo" <textarea name='txt_student_other' rows='4' cols='54'>$result->Student_Other</textarea>";


                                }
                                ?>



                        </section>



            <!-- /.row (main row) -->
    </section>



    <!-------------------------------------- Parent Information ------------------------------->

    <!-- Main content -->
    <section class="content">
        <!-- Main row -->
        <div class="row">
            <!-- Left col -->

                <div class="box box-primary">
                    <div class="box-header">

                    </div>

                    <h3 class="box-title">Parents' Information</h3>

                    <div class="box-body">
                        <section class="col-md-4 ">

                            <!-- Input addon -->

                            <h3 class="box-title">Father</h3>


                            <?php
                            foreach($s_result as $result) {


                                echo"</br>";


                                echo"Name";
                                echo "<div class='input-group' >
                                <span class='input-group-addon' ><i class='fa fa-envelope'></i ></span >
                                <input type = 'text' class='form-control' name = 'txt_student_FatherName'  value='$result->Student_Father_Name' readonly >
                            </div >
                            </br >";


                                echo"NIC";
                                echo "<div class='input-group' >
                                <span class='input-group-addon' ><i class='fa fa-envelope' ></i ></span >
                                <input type = 'text' class='form-control' name = 'txt_student_FatherNIC'  value='$result->Student_Father_NIC' readonly >
                            </div >
                            </br >";


                                echo"Age";
                                echo "<div class='input-group' >
                                <span class='input-group-addon' ><i class='fa fa-envelope' ></i ></span >
                                <input type = 'text' class='form-control' name = 'txt_student_FatherAge'  value='$result->Student_Father_Age' readonly >
                            </div >
                            </br >";


                                echo"Religion";
                                echo "<div class='input-group' >
                                <span class='input-group-addon' ><i class='fa fa-envelope' ></i ></span >
                                <input type = 'text' class='form-control' name = 'txt_student_fatherReligion'  value='$result->Student_Father_Religion'  >
                            </div >
                            </br >";




                                echo"Date Of Birth";
                                echo "<div class='input-group' >
                                <span class='input-group-addon' ><i class='fa fa-calendar'></i ></span >
                                <input type = 'text' class='form-control' name = 'txt_student_FatherDOB'  value='$result->Student_Father_DOB' readonly >
                            </div >
                            </br >";


                                echo"Occupation";
                                echo "<div class='input-group' >
                                <span class='input-group-addon' ><i class='fa fa-envelope'></i ></span >
                                <input type = 'text' class='form-control' name = 'txt_student_fatherOccupation'  value='$result->Student_Father_Occu'  >
                            </div >
                            </br >";


                                echo"Designation";
                                echo "<div class='input-group' >
                                <span class='input-group-addon' ><i class='fa fa-envelope' ></i ></span >
                                <input type = 'text' class='form-control' name = 'txt_student_fatherDesignation'  value='$result->Student_Father_Desig'  >
                            </div >
                            </br >";


                                echo"Work Place Details";
                                echo "<div class='input-group' >
                                <span class='input-group-addon' ><i class='fa fa-envelope'></i ></span >
                                <input type = 'text' class='form-control' name = 'txt_student_fatherWorkDetails'  value='$result->Student_Father_Workplace'  >
                            </div >
                            </br >";


                                echo"Monthly Income";
                                echo "<div class='input-group' >
                                <span class='input-group-addon' ><i class='fa fa-envelope' ></i ></span >
                                <input type = 'text' class='form-control' name = 'txt_student_fatherIncome'  value='$result->Student_Father_Income'  >
                            </div >
                            </br >";


                                echo"Educational Qualifications";
                                echo "<div class='input-group' >
                                <span class='input-group-addon' ><i class='fa fa-envelope' ></i ></span >
                                <input type = 'text' class='form-control' name = 'txt_student_fatherEducation'  value='$result->Student_Father_Edu'  >
                            </div >
                            </br >";


                                echo"Email";
                                echo "<div class='input-group' >
                                <span class='input-group-addon' ><i class='fa fa-envelope' ></i ></span >
                                <input type = 'text' class='form-control' name = 'txt_student_fatherEmail'  value='$result->Student_Father_Email'  >
                            </div >
                            </br >";


                                echo"Contact No";
                                echo "<div class='input-group' >
                                <span class='input-group-addon' ><i class='fa fa-envelope' ></i ></span >
                                <input type = 'text' class='form-control' name = 'txt_student_fatherContact'  value='$result->Student_Father_ContactNo'  >
                            </div >
                            </br >";


                                echo"Old Boy of the School";
                                echo "<div class='input-group' >
                                <span class='input-group-addon' ><i class='fa fa-envelope' ></i ></span >
                                <input type = 'text' class='form-control' name = 'txt_student_FatherOldboy'  value='$result->Student_Father_Oldboy' readonly >
                            </div >
                            </br >";


                                echo"Home Address";
                                echo" <textarea name='txt_student_fatherAddress' rows='4' cols='54' >$result->Student_Father_Address</textarea>";

                                echo"</br></br>";


                                echo"Other";
                                echo" <textarea name='txt_student_fatherOther' rows='4' cols='54' >$result->Student_Father_Other</textarea>";



                            }
                            ?>



                        </section>



                        <!-- right col -->

                        <section class="col-lg-4 connectedSortable">

                            <h3 class="box-title">Mother</h3>


                            <?php
                            foreach($s_result as $result) {


                                echo"</br>";

                                echo"Name";
                                echo "<div class='input-group' >
                                <span class='input-group-addon' ><i class='fa fa-envelope' ></i ></span >
                                <input type = 'text' class='form-control' name = 'txt_student_MotherName'  value='$result->Student_Mother_Name' readonly >
                            </div >
                            </br >";


                                echo"NIC";
                                echo "<div class='input-group' >
                                <span class='input-group-addon' ><i class='fa fa-envelope' ></i ></span >
                                <input type = 'text' class='form-control' name = 'txt_student_MotherNIC'  value='$result->Student_Mother_NIC' readonly >
                            </div >
                            </br >";



                                echo"Age";
                                echo "<div class='input-group' >
                                <span class='input-group-addon' ><i class='fa fa-envelope' ></i ></span >
                                <input type = 'text' class='form-control' name = 'txt_student_MotherAge'  value='$result->Student_Mother_Age' readonly >
                            </div >
                            </br >";


                                echo"Religion";
                                echo "<div class='input-group' >
                                <span class='input-group-addon' ><i class='fa fa-envelope' ></i ></span >
                                <input type = 'text' class='form-control' name = 'txt_student_motherReligion' value='$result->Student_Mother_Religion'  >
                            </div >
                            </br >";


                                echo"Date Of Birth";
                                echo "<div class='input-group' >
                                <span class='input-group-addon' ><i class='fa fa-calendar'></i ></span >
                                <input type = 'text' class='form-control' name = 'txt_student_MotherDOB'  value='$result->Student_Mother_DOB' readonly >
                            </div >
                            </br >";


                                echo"Occupation/Housewife";
                                echo "<div class='input-group' >
                                <span class='input-group-addon' ><i class='fa fa-envelope' ></i ></span >
                                <input type = 'text' class='form-control' name = 'txt_student_motherOccupation'  value='$result->Student_Mother_Occu'  >
                            </div >
                            </br >";


                                echo"Designation/Housewife";
                                echo "<div class='input-group' >
                                <span class='input-group-addon' ><i class='fa fa-envelope'></i ></span >
                                <input type = 'text' class='form-control' name = 'txt_student_motherDesignation'  value='$result->Student_Mother_Desig'  >
                            </div >
                            </br >";


                                echo"Work Place Details/Housewife";
                                echo "<div class='input-group' >
                                <span class='input-group-addon' ><i class='fa fa-envelope' ></i ></span >
                                <input type = 'text' class='form-control' name = 'txt_student_motherWorkDetails'  value='$result->Student_Mother_Workplace'  >
                            </div >
                            </br >";


                                echo"Monthly Income";
                                echo "<div class='input-group' >
                                <span class='input-group-addon' ><i class='fa fa-envelope' ></i ></span >
                                <input type = 'text' class='form-control' name = 'txt_student_motherIncome'  value='$result->Student_Mother_Income' >
                            </div >
                            </br >";


                                echo"Educational Qualifications";
                                echo "<div class='input-group' >
                                <span class='input-group-addon' ><i class='fa fa-envelope' ></i ></span >
                                <input type = 'text' class='form-control' name = 'txt_student_motherEducation'  value='$result->Student_Mother_Edu'  >
                            </div >
                            </br >";


                                echo"Email";
                                echo "<div class='input-group' >
                                <span class='input-group-addon' ><i class='fa fa-envelope'></i ></span >
                                <input type = 'text' class='form-control' name = 'txt_student_motherEmail'  value='$result->Student_Mother_Email'  >
                            </div >
                            </br >";


                                echo"Contact No";
                                echo "<div class='input-group' >
                                <span class='input-group-addon' ><i class='fa fa-envelope'></i ></span >
                                <input type = 'text' class='form-control' name = 'txt_student_motherContact'  value='$result->Student_Mother_ContactNo' >
                            </div >
                            </br >";


                                echo"School Attended";
                                echo "<div class='input-group' >
                                <span class='input-group-addon' ><i class='fa fa-envelope'></i ></span >
                                <input type = 'text' class='form-control' name = 'txt_student_MotherSchool'  value='$result->Student_Mother_School' readonly >
                            </div >
                            </br >";


                                echo"Home Address";
                                echo" <textarea name='txt_student_motherAddress' rows='4' cols='54' >$result->Student_Mother_Address</textarea>";

                                echo"</br></br>";

                                echo"Other";
                                echo" <textarea name='txt_student_motherOther' rows='4' cols='54' >$result->Student_Mother_Other</textarea>";



                            }

                                ?>


                        </section>

                            </div>




                        <!-- 3rd col -->


                        <section class="col-lg-4 connectedSortable">


                            <h3 class="box-title">Guardian</h3>


                                <?php
                                foreach($s_result as $result) {


                                    echo"</br>";


                                    echo"Name";
                                 echo "<div class='input-group' >
                                <span class='input-group-addon' ><i class='fa fa-envelope' ></i ></span >
                                <input type = 'text' class='form-control' name = 'txt_student_guardiName'  value='$result->Student_Guardi_Name' >
                            </div >
                            </br >";


                                    echo"NIC";
                                    echo "<div class='input-group' >
                                <span class='input-group-addon' ><i class='fa fa-envelope'></i ></span >
                                <input type = 'text' class='form-control' name = 'txt_student_guardiNIC'  value='$result->Student_Guardi_NIC'  >
                            </div >
                            </br >";



                                    echo"Age";
                                    echo "<div class='input-group' >
                                <span class='input-group-addon' ><i class='fa fa-envelope'></i ></span >
                                <input type = 'text' class='form-control' name = 'txt_student_guardiAge'  value='$result->Student_Guardi_Age'  >
                            </div >
                            </br >";


                                    echo"Profession";
                                    echo "<div class='input-group' >
                                <span class='input-group-addon' ><i class='fa fa-envelope'></i ></span >
                                <input type = 'text' class='form-control' name = 'txt_student_guardiProfession'  value='$result->Student_Guardi_Profession'  >
                            </div >
                            </br >";


                                    echo"Contact No";
                                    echo "<div class='input-group' >
                                <span class='input-group-addon' ><i class='fa fa-envelope'></i ></span >
                                <input type = 'text' class='form-control' name = 'txt_student_guardiContact' value='$result->Student_Guardi_ContactNo'  >
                            </div >
                            </br >";


                                    echo"Address";
                                    echo" <textarea name='txt_student_guardiAddress' rows='4' cols='54' >$result->Student_Guardi_Address</textarea>";

                                    echo"</br></br>";



                                }

                                ?>


                        </section>





    <!-- /.content -->

</div><!-- /.content-wrapper -->


    </section>


    <!-------------------------------------- Other Information ------------------------------->


    <!-- Main content -->
    <section class="content">
        <!-- Main row -->
        <div class="row">
            <!-- Left col -->

            <div class="box box-primary">
                <div class="box-header">

                </div>

                <h3 class="box-title">Other Information</h3>

                <div class="box-body">
                    <section class="col-md-4 ">

                        <!-- Input addon -->

                        <h3 class="box-title">Documents Submitted</h3>
                        </br>



                            <?php
                            foreach($s_result as $result) {



                                echo "Birth Certificate";
                                echo"<div class='form-group'>
                                <select class='form-control' name='txt_student_birthCertifi'>
                                    <option>$result->Student_Doc_BirthCerti</option>
                                    <option>Yes</option>
                                    <option>No</option>

                                </select>
                            </div>
                            </br>";


                                echo "Certificates from previous School/Nursery";
                                echo"<div class='form-group'>
                                <select class='form-control' name='txt_student_previousCertifi'>
                                    <option>$result->Student_Doc_Student_PreviousCerti</option>
                                    <option>Yes</option>
                                    <option>No</option>

                                </select>
                            </div>
                            </br>";



                                }

                                 ?>



                    </section>



                    <!-- right col -->

                    <section class="col-lg-4 connectedSortable">

                        </br> </br> </br></br>



                        <?php
                        foreach($s_result as $result) {



                            echo "Letter from Gramasevaka";
                            echo"<div class='form-group'>
                                <select class='form-control' name='txt_student_gramasevaka'>
                                    <option>$result->Student_Doc_Gramasevaka</option>
                                    <option>Yes</option>
                                    <option>No</option>

                                </select>
                            </div>
                            </br>";


                            echo "School fee receipt";
                            echo"<div class='form-group'>
                                <select class='form-control' name='txt_student_receipt'>
                                    <option>$result->Student_Doc_FeeReceipt</option>
                                    <option>Yes</option>
                                    <option>No</option>

                                </select>
                            </div>
                            </br>";


                        }

                        ?>

                        </br></br>

                        <input type="submit" name="btn_student_update" value="Update" button class="btn btn-block btn-primary"></button>



                    </section>


                    <!-- 3rd col -->

                    <section class="col-lg-4 connectedSortable">

                        </br> </br> </br></br>


                        <?php
                        foreach($s_result as $result) {



                            echo "Electrical/Water/Telephone bills in parents name";
                            echo"<div class='form-group'>
                                <select class='form-control' name='txt_student_bills'>
                                    <option>$result->Student_Doc_Bills</option>
                                    <option>Yes</option>
                                    <option>No</option>

                                </select>
                            </div>
                            </br>";


                            echo "Deeds of properties in parents name";
                            echo"<div class='form-group'>
                                <select class='form-control' name='txt_student_deeds'>
                                    <option>$result->Student_Doc_Deeds</option>
                                    <option>Yes</option>
                                    <option>No</option>

                                </select>
                            </div>
                            </br>";



                        }

                        ?>


                        </br></br>


                        <input type="button" name="btn_student_cancel"  value="Cancel"  button class="btn btn-block btn-primary"></button>


                    </section>


    </section>


    </form>

</div>

    </section>





<script type="text/javascript">
    function validate(evt) {
        var theEvent = evt || window.event;
        var key = theEvent.keyCode || theEvent.which;
        key = String.fromCharCode( txtSignatureNo );
        var regex = /[0-9]|\./;
        if( !regex.test(txtSignatureNo) ) {
            theEvent.returnValue = false;
            if(theEvent.preventDefault) theEvent.preventDefault();
        }
    }
</script>

