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
            <form action="<?= site_url('sites/save'); ?>" method="post">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Registration Form</h3>
                    </div>
                    <div class="box-body">
                        <section class="col-md-4 ">
                            <!-- Input addon -->

                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input type="text" class="form-control" name="txtSignatureNo"
                                       placeholder="Signature No">
                            </div>
                            </br>

                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input type="text" name="txtName" class="form-control" placeholder="Full Name">
                            </div>
                            </br>

                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input type="text" name="txtAge" class="form-control" placeholder="Age">
                            </div>
                            </br>

                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input type="text" name="txtContact_No" class="form-control" placeholder="Contact No">
                            </div>
                            </br>



                            <div class="form-group" >
                                <label>Select Gender</label>
                                <select class="form-control" name="txtGender">
                                    <option></option>
                                    <option>Male</option>
                                    <option>Female</option>

                                </select>
                            </div>
                            </br>


                            <div class="form-group" >
                                <label>Civil Status</label>
                                <select class="form-control" name="txtCivil_Status">
                                    <option></option>
                                    <option>Single</option>
                                    <option>Married</option>
                                </select>
                            </div>
                            </br>

                            <textarea name="txtAddress" rows="3" cols="54" placeholder="Address"></textarea>



                        </section>

                    <!-- right col -->
                    <section class="col-lg-4 connectedSortable">

                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                            <input type="text" class="form-control" name="txtNIC" placeholder="NIC">
                        </div>
                        </br>

                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            <input type="text" class="form-control" name="txtDOB"  placeholder="Date Of Birth(DD/MM/YYYY)">
                        </div>
                        </br>

                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                            <input type="text" class="form-control" name="txtReligion" placeholder="Religion">
                        </div>
                        </br>

                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            <input type="text" class="form-control" name="txtDate_Joined" data-provide="datepicker" placeholder="Date Joined">
                        </div>
                        </br>

                        <div class="form-group" >
                            <label>Medium</label>
                            <select class="form-control" name="txtMedium">
                                <option></option>
                                <option>Sinhala</option>
                                <option>English</option>
                                <option>Tamil</option>
                            </select>
                        </div>
                        </br>

                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                            <input type="text" class="form-control" name="txtEdu_Quali" placeholder="Educational Qualification">
                        </div>
                        </br>

                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                            <input type="text" class="form-control" name="txtProf_Quali" placeholder="Professional Qualification">
                        </div>
                        </br>

                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                            <input type="text" class="form-control" name="txtDesig" placeholder="Designation">
                        </div>
                        </br>



                        <input type="submit" name="btn_makLeave" button class="btn btn-block btn-primary"></button>


                    </section>


                    <!-- 3rd col -->
                <section class="col-lg-4 connectedSortable">

                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                        <input type="text" class="form-control" name="txtSalary" placeholder="Salary">
                    </div>
                    </br>

                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                        <input type="text" class="form-control" name="txtDate_Appoint" data-provide="datepicker" placeholder="Date Of Appointment">
                    </div>
                    </br>

                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                        <input type="text" class="form-control" name="txtMain_Sub" placeholder="Main Subject">
                    </div>
                    </br>

                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                        <input type="text" class="form-control" name="txtOther_Sub" placeholder="Other Subject">
                    </div>
                    </br>

                    </br>

                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                        <input type="text" class="form-control" name="txtEmail" placeholder="Email Address">
                    </div>
                    </br>

                    <div class="input-group">

                    <textarea name="txtWork_Exp" rows="3" cols="54" placeholder="Work Experience"></textarea>
                    </div>
                    </br>
                    <textarea name="txtOther" rows="3" cols="54" placeholder="Other"></textarea>

                    </br></br>

                    <input type="button" value="Cancel" name="btn_makLeave" button class="btn btn-block btn-primary"></button>

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

