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
            <form action="<?= site_url('sites/nonAcc_save'); ?>" method="post">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Registration Form</h3>
                    </div>
                    <div class="box-body">
                        <section class="col-md-4 ">
                            <!-- Input addon -->

                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input type="text" class="form-control" name="txt_nonAcc_SignatureNo"
                                       placeholder="Signature No">
                            </div>
                            </br>

                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input type="text" name="txt_nonAcc_Name" class="form-control" placeholder="Full Name">
                            </div>
                            </br>

                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input type="text" name="txt_nonAcc_Age" class="form-control" placeholder="Age">
                            </div>
                            </br>

                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input type="text" name="txt_nonAcc_Contact_No" class="form-control" placeholder="Contact No">
                            </div>
                            </br>



                            <div class="form-group" >
                                <label>Select Gender</label>
                                <select class="form-control" name="txt_nonAcc_Gender">
                                    <option></option>
                                    <option>Male</option>
                                    <option>Female</option>

                                </select>
                            </div>



                            <div class="form-group" >
                                <label>Civil Status</label>
                                <select class="form-control" name="txt_nonAcc_Civil_Status">
                                    <option></option>
                                    <option>Single</option>
                                    <option>Married</option>
                                </select>
                            </div>
                            </br>

                            <textarea name="txt_nonAcc_Address" rows="3" cols="54" placeholder="Address"></textarea>
                            </br>

                            </br>

                            <div class="input-group">

                                <textarea name="txt_nonAcc_Skills" rows="3" cols="54" placeholder="Interpersonal Skills"></textarea>
                            </div>
                            </br>



                        </section>

                    <!-- right col -->
                    <section class="col-lg-4 connectedSortable">

                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                            <input type="text" class="form-control" name="txt_nonAcc_NIC" placeholder="NIC">
                        </div>
                        </br>

                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            <input type="text" class="form-control" name="txt_nonAcc_DOB"  placeholder="Date Of Birth(DD/MM/YYYY)">
                        </div>
                        </br>

                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                            <input type="text" class="form-control" name="txt_nonAcc_Religion" placeholder="Religion">
                        </div>
                        </br>

                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            <input type="text" class="form-control" name="txt_nonAcc_Date_Joined" data-provide="datepicker" placeholder="Date Joined">
                        </div>
                        </br>

                        <div class="form-group" >
                            <label>Language Known</label>
                            <select class="form-control" name="txt_nonAcc_LanguageKnown">
                                <option></option>
                                <option>Sinhala</option>
                                <option>English</option>
                                <option>Tamil</option>
                                <option>Sinhala & English</option>
                                <option>Sinhala & Tamil</option>
                                <option>Tamil & English</option>
                                <option>Sinhala, English & Tamil</option>
                            </select>
                        </div>
                        </br>

                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                            <input type="text" class="form-control" name="txt_nonAcc_Edu_Quali" placeholder="Educational Qualification">
                        </div>
                        </br>

                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                            <input type="text" class="form-control" name="txt_nonAcc_Prof_Quali" placeholder="Professional Qualification">
                        </div>
                        </br>

                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                            <input type="text" class="form-control" name="txt_nonAcc_Desig" placeholder="Designation">
                        </div>
                        </br>

                        <div class="input-group">

                            <textarea name="txt_nonAcc_ExtraActivities" rows="3" cols="54" placeholder="Co/Extra Curricular Activities"></textarea>
                        </div>
                        </br>

                        </br>


                        <input type="submit" name="btn_nonAcc_makeRegistration" button class="btn btn-block btn-primary"></button>


                    </section>


                    <!-- 3rd col -->
                <section class="col-lg-4 connectedSortable">

                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                        <input type="text" class="form-control" name="txt_nonAcc_Salary" placeholder="Salary">
                    </div>
                    </br>

                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                        <input type="text" class="form-control" name="txt_nonAcc_Date_Appoint" data-provide="datepicker" placeholder="Date Of Appointment">
                    </div>
                    </br>



                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                        <input type="text" class="form-control" name="txt_nonAcc_Email" placeholder="Email Address">
                    </div>
                    </br>

                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                        <input type="text" class="form-control" name="txt_nonAcc_Health" placeholder="Health">
                    </div>
                    </br>


                    <textarea name="txt_nonAcc_Work_Exp" rows="3" cols="54" placeholder="Work Experience"></textarea>

                    </br>
                    </br>


                    <textarea name="txt_nonAcc_Achievements" rows="3" cols="54" placeholder="Achievements"></textarea>

                    </br></br>


                    <textarea name="txt_nonAcc_Reference" rows="3" cols="54" placeholder="References"></textarea>

                    </br>
                    </br>

                    <textarea name="txt_nonAcc_Other" rows="3" cols="54" placeholder="Other"></textarea>

                    </br></br>

                    <input type="button" value="Cancel" name="btn__nonAcc_makLeave" button class="btn btn-block btn-primary"></button>

                </section>


            </form>

            <!-- /.row (main row) -->
    </section>




    <!-- /.content -->
</div><!-- /.content-wrapper -->



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

