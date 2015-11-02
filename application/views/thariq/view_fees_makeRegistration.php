<div class="content-wrapper" xmlns="http://www.w3.org/1999/html">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            School Fees

        </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Main row -->
        <div class="row">
            <!-- Left col -->
             <form name="myForm" action="<?= site_url('sites/fees_save'); ?>" onsubmit="return validateForm()" method="post">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Registration Form</h3>
                    </div>
                    <div class="box-body">
                        <section class="col-md-4 ">
                            <!-- Input addon -->


                            </br>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input type="text" id="indxID" name="txt_indexID" class="form-control" placeholder="Index Number">
                            </div>
                            </br></br>

                            </br>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input type="text" class="form-control" id="stuName" name="txt_fees_StudentName"
                                       placeholder="Name Of Student"  required maxlength="100">
                            </div>
                            </br></br></br>


                            </br>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input type="number" class="form-control" id="stuGrade" name="txt_fees_Grade" min="1" max="13"
                                       placeholder="Student Grade">
                            </div>
                            </br></br></br>

                            <script>
                                $('#indxID').keypress(function(event){
                                    var keycode = (event.keyCode ? event.keyCode : event.which);
                                    //check if it is the enter key pressed
                                    if(keycode == '13'){
                                        signatureID={ "txt_indexID":$(this).val()};
                                        var indxID = JSON.stringify(signatureID);



                                        $('#tbSendTblDataToServer').val('JSON array to send to server: \n\n' + indxID.replace(/},/g, "},\n"));

                                        $.ajax({
                                            type: "POST",
                                            url: "<?=site_url('sites/getNameByID') ?>",
                                            data: "txt_indexID=" + indxID,
                                            success: function (data) {
                                                obj = JSON.parse(data);
                                                $('#stuName').val(obj.message);
                                                //$('#stuGrade').val(obj.message[0][1]);
                                            }
                                        });

                                        $.ajax({
                                            type: "POST",
                                            url: "<?=site_url('sites/getGradeByID') ?>",
                                            data: "txt_indexID=" + indxID,
                                            success: function (data) {
                                                obj = JSON.parse(data);

                                                $('#stuGrade').val(obj.message);
                                            }
                                        });
                                    }
                                    event.stopPropagation();
                                });

                            </script>



                        </section>

                    <!-- right col -->
                    <section class="col-lg-4 connectedSortable">

                        </br>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                            <input type="number" class="form-control" name="txt_fees_ReceiptNo"  placeholder="Receipt No:" min="1">
                        </div>
                        </br></br></br>


                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                            <input type="number" class="form-control" name="txt_fees_AmountFigures"  placeholder="Amount Received (Rupees in figures)" min="1">
                        </div>
                        </br></br></br>


                        <textarea name="txt_fees_AmountWords" rows="3" cols="54" placeholder="Amount Received (Rupees in words)"></textarea>

                        </br></br></br>


                        <input type="submit" name="btn_fees_makeRegistration" button class="btn btn-block btn-primary"></button>


                    </section>


                    <!-- 3rd col -->

                <section class="col-lg-4 connectedSortable">

                    </br>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                        <input type="text" class="form-control" name="txt_fees_Date" data-provide="datepicker" placeholder="Date">
                    </div>
                    </br></br></br>

                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                        <input type="number" class="form-control" name="txt_fees_ReceivedYear" placeholder="Received for Year" min="1">
                    </div>
                    </br></br></br>

                    <div class="form-group" >
                        <label>Received for Term</label>
                        <select class="form-control" name="txt_fees_ReceivedTerm">
                            <option></option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>

                        </select>
                    </div></br></br>


                    <input type="reset" value="Cancel" name="btn__fees_cancel" button class="btn btn-block btn-primary"></button>

                </section>


            </form>

            <!-- /.row (main row) -->
                    </div></section>




    <!-- /.content -->
</div><!-- /.content-wrapper -->



<script type="text/javascript">
    function validateForm() {
        var x = document.forms["myForm"]["txt_indexID"].value;
        var y = document.forms["myForm"]["txt_fees_StudentName"].value;
        var m = document.forms["myForm"]["txt_fees_ReceiptNo"].value;
        var n = document.forms["myForm"]["txt_fees_Date"].value;
        var i = document.forms["myForm"]["txt_fees_AmountFigures"].value;
        var j = document.forms["myForm"]["txt_fees_AmountWords"].value;
        var k = document.forms["myForm"]["txt_fees_ReceivedYear"].value;
        var l = document.forms["myForm"]["txt_fees_ReceivedTerm"].value;

        if (x == null ||  y == null  || m == "" || n == null || i == null ||  j == null || k == "" || l == "") {
            alert("Fields Cannot Be Empty !");
            return false;
        }
    }
</script>


