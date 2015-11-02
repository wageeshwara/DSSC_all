<div class="content-wrapper" xmlns="http://www.w3.org/1999/html">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Student Management - Admission Form

        </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Main row -->
        <div class="row">
            <!-- Left col -->
            <form action="<?= site_url('sites/student_save'); ?>" method="post">
                <div class="box box-primary">
                    <div class="box-header">

                    </div>

                    <h3 class="box-title">Student Information</h3>

                    <div class="box-body">
                        <section class="col-md-4 ">
                            <!-- Input addon -->

                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input type="text" class="form-control" name="txt_student_Index_no"
                                       placeholder="Index No">
                            </div>
                            </br>

                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input type="text" class="form-control" name="txt_student_FullName"
                                       placeholder="Full Name">
                            </div>
                            </br>

                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input type="text" class="form-control" name="txt_student_NameInitials"
                                       placeholder="Name With Initials">
                            </div>
                            </br>

                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                <input type="text" class="form-control" name="txt_student_DOB"
                                       placeholder="Date Of Birth(DD/MM/YYYY)">
                            </div>
                            </br>



                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input type="text" class="form-control" name="txt_student_Religion"
                                       placeholder="Religion">
                            </div>
                            </br>

                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input type="text" class="form-control" name="txt_student_Age"
                                       placeholder="Age">
                            </div>
                            </br>

                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input type="text" class="form-control" name="txt_student_ContactNo"
                                       placeholder="Contact No">
                            </div>
                            </br>

                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input type="text" class="form-control" name="txt_student_Distance"
                                       placeholder="Distance from home to School">
                            </div>
                            </br>

                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input type="text" class="form-control" name="txt_student_Donation"
                                       placeholder="Amount of Donation paid">
                            </div>
                            </br>


                        </section>




                        <!-- right col -->

                        <section class="col-lg-4 connectedSortable">


                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                <input type="text" class="form-control" name="txt_student_DateJoined" data-provide="datepicker" placeholder="Date Joined">
                            </div>
                            </br>


                            <div class="form-group" >
                                <label>Medium of Study</label>
                                <select class="form-control" name="txt_student_Medium">
                                    <option></option>
                                    <option>Sinhala</option>
                                    <option>English</option>
                                    <option>Tamil</option>

                                </select>
                            </div>


                            <div class="form-group" >
                                <label>Grade</label>
                                <select class="form-control" name="txt_student_Grade">
                                    <option></option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>12</option>
                                    <option>13</option>

                                </select>
                                </br>
                            </div>


                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input type="text" class="form-control" name="txt_student_result"
                                       placeholder="Results Obtained in the Interview/Scholarship/O/L">
                            </div>
                            </br></br>

                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input type="text" class="form-control" name="txt_student_NurserySchool"
                                       placeholder="Nursery Education/Previous School">
                            </div>
                            </br>

                            <div class="form-group" >
                                <label>Siblings studying in this School</label>
                                <select class="form-control" name="txt_student_Siblings">
                                    <option></option>
                                    <option>Yes</option>
                                    <option>No</option>


                                </select>
                            </div></br>

                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input type="text" class="form-control" name="txt_student_Transport"
                                       placeholder="Mode Of Transport to School">
                            </div>
                            </br></br>




                        </section>


                        <!-- 3rd col -->
                        <section class="col-lg-4 connectedSortable">

                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input type="text" class="form-control" name="txt_student_Emergency"
                                       placeholder="In case of Emergency - ContactNo/Address/Email">
                            </div>
                            </br>

                            <textarea name="txt_student_Address" rows="4" cols="54" placeholder="Home Address"></textarea>

                            </br></br>

                            <textarea name="txt_student_Activities" rows="4" cols="54" placeholder="Extra Curricular Activities"></textarea>

                            </br></br>

                            <textarea name="txt_student_SpecialNeeds" rows="4" cols="54" placeholder="Special Needs Required"></textarea>



                            </br></br>

                            <textarea name="txt_student_Other" rows="4" cols="54" placeholder="Other"></textarea>

                            </br></br>


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

                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input type="text" class="form-control" name="txt_student_FatherName"
                                       placeholder="Name">
                            </div>
                            </br>

                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input type="text" class="form-control" name="txt_student_FatherNIC"
                                       placeholder="NIC">
                            </div>
                            </br>

                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input type="text" class="form-control" name="txt_student_FatherAge"
                                       placeholder="Age">
                            </div>
                            </br>

                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input type="text" class="form-control" name="txt_student_FatherReligion"
                                       placeholder="Religion">
                            </div>
                            </br>

                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                <input type="text" class="form-control" name="txt_student_FatherDOB"
                                       placeholder="Date Of Birth(DD/MM/YYYY)">
                            </div>
                            </br>

                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input type="text" class="form-control" name="txt_student_FatherOccupation"
                                       placeholder="Occupation">
                            </div>
                            </br>

                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input type="text" class="form-control" name="txt_student_FatherDesignation"
                                       placeholder="Designation">
                            </div>
                            </br>

                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input type="text" class="form-control" name="txt_student_FatherWorkDetails"
                                       placeholder="Work Place Details">
                            </div>
                            </br>

                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input type="text" class="form-control" name="txt_student_FatherIncome"
                                       placeholder="Monthly Income">
                            </div>
                            </br>

                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input type="text" class="form-control" name="txt_student_FatherEducation"
                                       placeholder="Educational Qualifications">
                            </div>
                            </br>


                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input type="text" class="form-control" name="txt_student_FatherEmail"
                                       placeholder="Email">
                            </div>
                            </br>

                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input type="text" class="form-control" name="txt_student_FatherContact"
                                       placeholder="Contact No">
                            </div>
                            </br>


                            <div class="form-group" >
                                <label>Old Boy of the School</label>
                                <select class="form-control" name="txt_student_FatherOldboy">
                                    <option></option>
                                    <option>Yes</option>
                                    <option>No</option>
                                </select>

                                    </br>

                                    <textarea name="txt_student_FatherAddress" rows="4" cols="54" placeholder="Home Address"></textarea>

                                    </br></br>

                                     <textarea name="txt_student_FatherOther" rows="4" cols="54" placeholder="Other"></textarea>



                                </select>
                            </div>




                        </section>



                        <!-- right col -->

                        <section class="col-lg-4 connectedSortable">

                            <h3 class="box-title">Mother</h3>


                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input type="text" class="form-control" name="txt_student_MotherName"
                                       placeholder="Name">
                            </div>
                            </br>

                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input type="text" class="form-control" name="txt_student_MotherNIC"
                                       placeholder="NIC">
                            </div>
                            </br>

                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input type="text" class="form-control" name="txt_student_MotherAge"
                                       placeholder="Age">
                            </div>
                            </br>

                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input type="text" class="form-control" name="txt_student_MotherReligion"
                                       placeholder="Religion">
                            </div>
                            </br>

                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                <input type="text" class="form-control" name="txt_student_MotherDOB"
                                       placeholder="Date Of Birth(DD/MM/YYYY)">
                            </div>
                            </br>

                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input type="text" class="form-control" name="txt_student_MotherOccupation"
                                       placeholder="Occupation/Housewife">
                            </div>
                            </br>

                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input type="text" class="form-control" name="txt_student_MotherDesignation"
                                       placeholder="Designation/Housewife">
                            </div>
                            </br>

                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input type="text" class="form-control" name="txt_student_MotherWorkDetails"
                                       placeholder="Work Place Details/Housewife">
                            </div>
                            </br>

                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input type="text" class="form-control" name="txt_student_MotherIncome"
                                       placeholder="Monthly Income">
                            </div>
                            </br>

                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input type="text" class="form-control" name="txt_student_MotherEducation"
                                       placeholder="Educational Qualifications">
                            </div>
                            </br>


                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input type="text" class="form-control" name="txt_student_MotherEmail"
                                       placeholder="Email">
                            </div>
                            </br>

                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input type="text" class="form-control" name="txt_student_MotherContact"
                                       placeholder="Contact No">
                            </div>
                            </br></br>

                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input type="text" class="form-control" name="txt_student_MotherSchool"
                                       placeholder="School Attended">
                            </div>
                            </br>


                                <textarea name="txt_student_MotherAddress" rows="4" cols="54" placeholder="Home Address"></textarea>

                                </br></br>

                                <textarea name="txt_student_MotherOther" rows="4" cols="54" placeholder="Other"></textarea>

                        </section>

                            </div>




                        <!-- 3rd col -->


                        <section class="col-lg-4 connectedSortable">


                            <h3 class="box-title">Guardian</h3>

                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input type="text" class="form-control" name="txt_student_GuardiName"
                                       placeholder="Name">
                            </div>
                            </br>

                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input type="text" class="form-control" name="txt_student_GuardiNIC"
                                       placeholder="NIC">
                            </div>
                            </br>

                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input type="text" class="form-control" name="txt_student_GuardiAge"
                                       placeholder="Age">
                            </div>
                            </br>

                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input type="text" class="form-control" name="txt_student_GuardiProfession"
                                       placeholder="Profession">
                            </div>
                            </br>

                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input type="text" class="form-control" name="txt_student_GuardiContact"
                                       placeholder="Contact No">
                            </div>
                            </br></br>


                            <textarea name="txt_student_GuardiAddress" rows="4" cols="54" placeholder="Address"></textarea>



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

                        <div class="form-group" >
                            <label>Birth Certificate</label>
                            <select class="form-control" name="txt_student_BirthCertifi">
                                <option></option>
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        </div>

                        <div class="form-group" >
                            <label>Certificates from previous School/Nursery</label>
                            <select class="form-control" name="txt_student_PreviousCertifi">
                                <option></option>
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        </div>



                    </section>



                    <!-- right col -->

                    <section class="col-lg-4 connectedSortable">

                        </br> </br> </br></br>


                        <div class="form-group" >
                            <label>Letter from Gramasevaka</label>
                            <select class="form-control" name="txt_student_Gramasevaka">
                                <option></option>
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        </div>

                        <div class="form-group" >
                            <label>School fee receipt</label>
                            <select class="form-control" name="txt_student_Receipt">
                                <option></option>
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        </div>
                        </br> </br>

                        <input type="submit" name="btn_student_submit" button class="btn btn-block btn-primary"></button>




                    </section>


                    <!-- 3rd col -->
                    <section class="col-lg-4 connectedSortable">
                        </br> </br> </br></br>


                        <div class="form-group" >
                            <label>Electrical/Water/Telephone bills in parents name</label>
                            <select class="form-control" name="txt_student_Bills">
                                <option></option>
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        </div>


                        <div class="form-group" >
                            <label>Deeds of properties in parents name</label>
                            <select class="form-control" name="txt_student_Deeds">
                                <option></option>
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        </div>
                        </br> </br>

                        <input type="button" name="btn_student_cancel" value="Cancel" button class="btn btn-block btn-primary"></button>


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

