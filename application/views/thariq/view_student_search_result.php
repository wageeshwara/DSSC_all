<div class="content-wrapper" xmlns="http://www.w3.org/1999/html">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Student Management - Results Found

        </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Main row -->
        <div class="row">
            <!-- Left col -->
            <form action="<?= site_url('sites/view_student_Search'); ?>" method="post">
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
                                <input type = 'text' class='form-control' name = 'txt_student_Index_no'
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
                                <input type = 'text' class='form-control' name = 'txt_student_Religion'
                                       value='$result->Student_Religion' readonly >
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
                                <input type = 'text' class='form-control' name = 'txt_student_ContactNo'
                                       value='$result->Student_Contact_No' readonly >
                            </div ></br>";


                                echo"Distance from home to School";
                                echo" <div class='input-group' >
                                <span class='input-group-addon' ><i class='fa fa-envelope' ></i ></span >
                                <input type = 'text' class='form-control' name = 'txt_student_Distance'
                                       value='$result->Student_Distance' readonly >
                            </div ></br>";


                                echo"Amount of Donation paid";
                                echo" <div class='input-group' >
                                <span class='input-group-addon' ><i class='fa fa-envelope' ></i ></span >
                                <input type = 'text' class='form-control' name = 'txt_student_Donation'
                                       value='$result->Student_Donation' readonly >
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


                                echo"Medium of Study";
                                echo "<div class='input-group' >
                                <span class='input-group-addon' ><i class='fa fa-envelope' ></i ></span >
                                <input type = 'text' class='form-control' name = 'txt_student_Medium'  value='$result->Student_Medium' readonly >
                            </div >
                            </br >";



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


                                echo"Siblings studying in this School";
                                echo "<div class='input-group' >
                                <span class='input-group-addon' ><i class='fa fa-envelope' ></i ></span >
                                <input type = 'text' class='form-control' name = 'txt_student_Siblings'  value='$result->Student_Siblings' readonly >
                            </div >
                            </br >";


                                echo"Mode Of Transport to School";
                                echo "<div class='input-group' >
                                <span class='input-group-addon' ><i class='fa fa-envelope' ></i ></span >
                                <input type = 'text' class='form-control' name = 'txt_student_Transport'  value='$result->Student_Transport' readonly >
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
                                <input type = 'text' class='form-control' name = 'txt_student_Emergency'  value='$result->Student_Emergency' readonly >
                            </div >
                            </br >";


                                    echo"Home Address";
                                   echo" <textarea name='txt_student_Address' rows='4' cols='54' readonly>$result->Student_Address</textarea>";


                                    echo"</br></br>";

                                    echo"Extra Curricular Activities";
                                    echo" <textarea name='txt_student_Activities' rows='4' cols='54' readonly>$result->Student_Activities</textarea>";


                                    echo"</br></br>";

                                    echo"Special Needs Required";
                                    echo" <textarea name='txt_student_SpecialNeeds' rows='4' cols='54' readonly>$result->Student_Special_Needs</textarea>";


                                    echo"</br></br>";

                                    echo"Other";
                                    echo" <textarea name='txt_student_Other' rows='4' cols='54' readonly>$result->Student_Other</textarea>";


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
                                <input type = 'text' class='form-control' name = 'txt_student_FatherReligion'  value='$result->Student_Father_Religion' readonly >
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
                                <input type = 'text' class='form-control' name = 'txt_student_FatherOccupation'  value='$result->Student_Father_Occu' readonly >
                            </div >
                            </br >";


                                echo"Designation";
                                echo "<div class='input-group' >
                                <span class='input-group-addon' ><i class='fa fa-envelope' ></i ></span >
                                <input type = 'text' class='form-control' name = 'txt_student_FatherDesignation'  value='$result->Student_Father_Desig' readonly >
                            </div >
                            </br >";


                                echo"Work Place Details";
                                echo "<div class='input-group' >
                                <span class='input-group-addon' ><i class='fa fa-envelope'></i ></span >
                                <input type = 'text' class='form-control' name = 'txt_student_FatherWorkDetails'  value='$result->Student_Father_Workplace' readonly >
                            </div >
                            </br >";


                                echo"Monthly Income";
                                echo "<div class='input-group' >
                                <span class='input-group-addon' ><i class='fa fa-envelope' ></i ></span >
                                <input type = 'text' class='form-control' name = 'txt_student_FatherIncome'  value='$result->Student_Father_Income' readonly >
                            </div >
                            </br >";


                                echo"Educational Qualifications";
                                echo "<div class='input-group' >
                                <span class='input-group-addon' ><i class='fa fa-envelope' ></i ></span >
                                <input type = 'text' class='form-control' name = 'txt_student_FatherEducation'  value='$result->Student_Father_Edu' readonly >
                            </div >
                            </br >";


                                echo"Email";
                                echo "<div class='input-group' >
                                <span class='input-group-addon' ><i class='fa fa-envelope' ></i ></span >
                                <input type = 'text' class='form-control' name = 'txt_student_FatherEmail'  value='$result->Student_Father_Email' readonly >
                            </div >
                            </br >";


                                echo"Contact No";
                                echo "<div class='input-group' >
                                <span class='input-group-addon' ><i class='fa fa-envelope' ></i ></span >
                                <input type = 'text' class='form-control' name = 'txt_student_FatherContact'  value='$result->Student_Father_ContactNo' readonly >
                            </div >
                            </br >";


                                echo"Old Boy of the School";
                                echo "<div class='input-group' >
                                <span class='input-group-addon' ><i class='fa fa-envelope' ></i ></span >
                                <input type = 'text' class='form-control' name = 'txt_student_FatherOldboy'  value='$result->Student_Father_Oldboy' readonly >
                            </div >
                            </br >";


                                echo"Home Address";
                                echo" <textarea name='txt_student_FatherAddress' rows='4' cols='54' readonly>$result->Student_Father_Address</textarea>";

                                echo"</br></br>";


                                echo"Other";
                                echo" <textarea name='txt_student_FatherOther' rows='4' cols='54' readonly>$result->Student_Father_Other</textarea>";



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
                                <input type = 'text' class='form-control' name = 'txt_student_MotherReligion' value='$result->Student_Mother_Religion' readonly >
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
                                <input type = 'text' class='form-control' name = 'txt_student_MotherOccupation'  value='$result->Student_Mother_Occu' readonly >
                            </div >
                            </br >";


                                echo"Designation/Housewife";
                                echo "<div class='input-group' >
                                <span class='input-group-addon' ><i class='fa fa-envelope'></i ></span >
                                <input type = 'text' class='form-control' name = 'txt_student_MotherDesignation'  value='$result->Student_Mother_Desig' readonly >
                            </div >
                            </br >";


                                echo"Work Place Details/Housewife";
                                echo "<div class='input-group' >
                                <span class='input-group-addon' ><i class='fa fa-envelope' ></i ></span >
                                <input type = 'text' class='form-control' name = 'txt_student_MotherWorkDetails'  value='$result->Student_Mother_Workplace' readonly >
                            </div >
                            </br >";


                                echo"Monthly Income";
                                echo "<div class='input-group' >
                                <span class='input-group-addon' ><i class='fa fa-envelope' ></i ></span >
                                <input type = 'text' class='form-control' name = 'txt_student_MotherIncome'  value='$result->Student_Mother_Income' readonly >
                            </div >
                            </br >";


                                echo"Educational Qualifications";
                                echo "<div class='input-group' >
                                <span class='input-group-addon' ><i class='fa fa-envelope' ></i ></span >
                                <input type = 'text' class='form-control' name = 'txt_student_MotherEducation'  value='$result->Student_Mother_Edu' readonly >
                            </div >
                            </br >";


                                echo"Email";
                                echo "<div class='input-group' >
                                <span class='input-group-addon' ><i class='fa fa-envelope'></i ></span >
                                <input type = 'text' class='form-control' name = 'txt_student_MotherEmail'  value='$result->Student_Mother_Email' readonly >
                            </div >
                            </br >";


                                echo"Contact No";
                                echo "<div class='input-group' >
                                <span class='input-group-addon' ><i class='fa fa-envelope'></i ></span >
                                <input type = 'text' class='form-control' name = 'txt_student_MotherContact'  value='$result->Student_Mother_ContactNo' readonly >
                            </div >
                            </br >";


                                echo"School Attended";
                                echo "<div class='input-group' >
                                <span class='input-group-addon' ><i class='fa fa-envelope'></i ></span >
                                <input type = 'text' class='form-control' name = 'txt_student_MotherSchool'  value='$result->Student_Mother_School' readonly >
                            </div >
                            </br >";


                                echo"Home Address";
                                echo" <textarea name='txt_student_MotherAddress' rows='4' cols='54' readonly>$result->Student_Mother_Address</textarea>";

                                echo"</br></br>";

                                echo"Other";
                                echo" <textarea name='txt_student_MotherOther' rows='4' cols='54' readonly>$result->Student_Mother_Other</textarea>";



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
                                <input type = 'text' class='form-control' name = 'txt_student_GuardiName'  value='$result->Student_Guardi_Name' readonly >
                            </div >
                            </br >";


                                    echo"NIC";
                                    echo "<div class='input-group' >
                                <span class='input-group-addon' ><i class='fa fa-envelope'></i ></span >
                                <input type = 'text' class='form-control' name = 'txt_student_GuardiNIC'  value='$result->Student_Guardi_NIC' readonly >
                            </div >
                            </br >";



                                    echo"Age";
                                    echo "<div class='input-group' >
                                <span class='input-group-addon' ><i class='fa fa-envelope'></i ></span >
                                <input type = 'text' class='form-control' name = 'txt_student_GuardiAge'  value='$result->Student_Guardi_Age' readonly >
                            </div >
                            </br >";


                                    echo"Profession";
                                    echo "<div class='input-group' >
                                <span class='input-group-addon' ><i class='fa fa-envelope'></i ></span >
                                <input type = 'text' class='form-control' name = 'txt_student_GuardiProfession'  value='$result->Student_Guardi_Profession' readonly >
                            </div >
                            </br >";


                                    echo"Contact No";
                                    echo "<div class='input-group' >
                                <span class='input-group-addon' ><i class='fa fa-envelope'></i ></span >
                                <input type = 'text' class='form-control' name = 'txt_student_GuardiContact' value='$result->Student_Guardi_ContactNo' readonly >
                            </div >
                            </br >";


                                    echo"Address";
                                    echo" <textarea name='txt_student_GuardiAddress' rows='4' cols='54' readonly>$result->Student_Guardi_Address</textarea>";

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


                                echo"Birth Certificate";
                                echo "<div class='input-group' >
                                <span class='input-group-addon' ><i class='fa fa-envelope'></i ></span >
                                <input type = 'text' class='form-control' name = 'txt_student_BirthCertifi'  value='$result->Student_Doc_BirthCerti' readonly >
                            </div >
                            </br >";


                                echo"Certificates from previous School/Nursery";
                                echo "<div class='input-group' >
                                <span class='input-group-addon' ><i class='fa fa-envelope' ></i ></span >
                                <input type = 'text' class='form-control' name = 'txt_student_PreviousCertifi' value='$result->Student_Doc_Student_PreviousCerti' readonly >
                            </div >
                            </br >";



                                }

                                 ?>



                    </section>



                    <!-- right col -->

                    <section class="col-lg-4 connectedSortable">

                        </br> </br> </br></br>



                        <?php
                        foreach($s_result as $result) {


                            echo"Letter from Gramasevaka";
                            echo "<div class='input-group' >
                                <span class='input-group-addon' ><i class='fa fa-envelope'></i ></span >
                                <input type = 'text' class='form-control' name = 'txt_student_Gramasevaka'  value='$result->Student_Doc_Gramasevaka' readonly >
                            </div >
                            </br >";


                            echo"School fee receipt";
                            echo "<div class='input-group' >
                                <span class='input-group-addon' ><i class='fa fa-envelope' ></i ></span >
                                <input type = 'text' class='form-control' name = 'txt_student_Receipt'  value='$result->Student_Doc_FeeReceipt' readonly >
                            </div >
                            </br >";



                        }

                        ?>

                        </br></br>

                        <input type="submit" name="btn_student_cancel"  value="Cancel" button class="btn btn-block btn-primary"></button>



                    </section>


                    <!-- 3rd col -->

                    <section class="col-lg-4 connectedSortable">

                        </br> </br> </br></br>


                        <?php
                        foreach($s_result as $result) {


                            echo"Electrical/Water/Telephone bills in parents name";
                            echo "<div class='input-group' >
                                <span class='input-group-addon' ><i class='fa fa-envelope'></i ></span >
                                <input type = 'text' class='form-control' name = 'txt_student_Bills' value='$result->Student_Doc_Bills' readonly >
                            </div >
                            </br >";


                            echo"Deeds of properties in parents name";
                            echo "<div class='input-group' >
                                <span class='input-group-addon' ><i class='fa fa-envelope'></i ></span >
                                <input type = 'text' class='form-control' name = 'txt_student_Deeds'  value='$result->Student_Doc_Deeds' readonly >
                            </div >
                            </br >";


                        }

                        ?>


                        </br></br>





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

