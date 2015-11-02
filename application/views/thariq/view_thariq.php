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
            <!-- <form name="myForm" action="<?= site_url('sites/fees_save'); ?>" onsubmit="return validateForm()" method="post">-->
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Registration Form</h3>
                    </div>
                    <div class="box-body">
                        <section class="col-md-4 ">
                            <!-- Input addon -->



                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input type="text" id="indxID" name="txt_indexID" class="form-control" placeholder="Index Number">
                            </div>
                            </br></br>

                            </br>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input type="text" class="form-control" id="stuName" name="txt_fees_StudentName"
                                       placeholder="Name Of Student">
                            </div>
                            </br></br></br>


                            </br>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input type="number" class="form-control" id="stuGrade" name="txt_fees_Grade"
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
                                            url: "<?=site_url('site/getNameByID') ?>",
                                            data: "txt_indexID=" + indxID,
                                            success: function (data) {
                                                obj = JSON.parse(data);
                                                $('#stuName').val(obj.message);
                                                //$('#stuGrade').val(obj.message[0][1]);
                                            }
                                        });

                                        $.ajax({
                                            type: "POST",
                                            url: "<?=site_url('site/getGradeByID') ?>",
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




                            <input type="submit" name="btn_fees_makeRegistration" button class="btn btn-block btn-primary"></button>


                        </section>


                        <!-- 3rd col -->

                        <section class="col-lg-4 connectedSortable">




                            <input type="button" value="Cancel" name="btn__fees_cancel" button class="btn btn-block btn-primary"></button>

                        </section>


            </form>

            <!-- /.row (main row) -->
                    </div></section>




    <!-- /.content -->
</div><!-- /.content-wrapper -->




<script type="text/javascript">
    function validateForm() {
        var x = document.forms["myForm"]["txt_fees_IndexNumber"].value;
        var y = document.forms["myForm"]["txt_fees_StudentName"].value;
        var m = document.forms["myForm"]["txt_fees_ReceiptNo"].value;
        var n = document.forms["myForm"]["txt_fees_Date"].value;
        var i = document.forms["myForm"]["txt_fees_AmountFigures"].value;
        var j = document.forms["myForm"]["txt_fees_AmountWords"].value;

        if (x == null || x == "" || y == null || y == "" || m == null || m == "" || n == null || n == "" || i == null || i == "" || j == null || j == "") {
            alert("Fill Empty Fileds !");
            return false;
        }
    }
</script>


