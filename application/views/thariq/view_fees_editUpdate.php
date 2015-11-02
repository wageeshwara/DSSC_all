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
            <form name="myForm" action="<?= site_url('sites/fees_update'); ?>" onsubmit="return validateForm()" method="post">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Update Record</h3>
                    </div>
                    <div class="box-body">
                        <section class="col-md-4 ">
                            <!-- Input addon -->


                            <?php
                            foreach($s_result as $result) {


                                echo "</br >Name Of Student";
                                echo "<div class='input-group'>
                                <span class='input-group-addon'><i class='fa fa-envelope'></i></span>
                                <input type='text' name='txt_fees_StuName' class='form-control' value='$result->student_name' readonly>
                                </div></br></br >";


                                echo "</br >Index Number";
                                echo "<div class='input-group'>
                                <span class='input-group-addon'><i class='fa fa-envelope'></i></span>
                                <input type='number' name='txt_fees_IndexNum' class='form-control' value='$result->index_no' readonly>
                                </div></br></br ></br >";

                                echo "Grade";
                                echo"<div class='input-group'>
                                <span class='input-group-addon'><i class='fa fa-envelope'></i></span>
                                <input type='number' name='txt_fees_grade' class='form-control' value='$result->grade' readonly>

                                </select>
                            </div>
                            </br></br >";




                                }
                            ?>

                        </section>



                    <!-- right col -->
                    <section class="col-lg-4 connectedSortable">

                            <?php
                            foreach($s_result as $result) {

                                echo "</br >Receipt No:";
                                echo "<div class='input-group'>
                                <span class='input-group-addon'><i class='fa fa-envelope'></i></span>
                                <input type='number' name='txt_fees_Receiptno' class='form-control' value='$result->receipt_no' readonly>
                                </div></br></br >";


                                echo "</br >Amount Received (Rupees in figures)";
                                echo "<div class='input-group'>
                                <span class='input-group-addon'><i class='fa fa-envelope'></i></span>
                                <input type='number' name='txt_fees_AmountFig' class='form-control' value='$result->amount_figures' min='1' >
                                </div></br></br >";

                                echo "</br >Amount Received (Rupees in words)";
                                echo "<textarea name='txt_fees_Amountwords' rows='3' cols='54'>$result->amount_words</textarea></br></br ></br ></br >";


                            }
                            ?>

                        <input type="submit"  value="Update" name="btn_fees_Update" button class="btn btn-block btn-primary"></button>




                    </section>


                    <!-- 3rd col -->

                <section class="col-lg-4 connectedSortable">


                            <?php
                            foreach($s_result as $result) {

                                echo "</br >Date";
                                echo "<div class='input-group'>
                                <span class='input-group-addon'><i class='fa fa-calendar'></i></span>
                                <input type='text' name='txt_fees_date' class='form-control' data-provide='datepicker' value='$result->date' >
                                </div></br></br >";

                                echo "</br >Received for Year";
                                echo "<div class='input-group'>
                                <span class='input-group-addon'><i class='fa fa-envelope'></i></span>
                                <input type='number' name='txt_fees_Receivedyear' class='form-control' value='$result->received_year' min='1' >
                                </div></br></br ></br >";

                                echo "Received for Term";
                                echo"<div class='form-group'>
                                <select class='form-control' name='txt_fees_Receivedterm'>
                                    <option>$result->received_term</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>

                                </select>
                            </div>
                            </br></br ></br ></br >";

                                }
                            ?>


                    <input type="button" value="Cancel" name="btn__fees_cancl" button class="btn btn-block btn-primary"></button>

                </section>


            </form>

            <!-- /.row (main row) -->
    </section>




    <!-- /.content -->
</div><!-- /.content-wrapper -->


<script type="text/javascript">
    function validateForm() {
        var x = document.forms["myForm"]["txt_fees_AmountFig"].value;
        var y = document.forms["myForm"]["txt_fees_Amountwords"].value;
        var m = document.forms["myForm"]["txt_fees_date"].value;
        var n = document.forms["myForm"]["txt_fees_Receivedyear"].value;
        var i = document.forms["myForm"]["txt_fees_Receivedterm"].value;


        if (x == "" ||  y == "" || m == "" || n == "" || i == "") {
            alert("Fields Cannot Be Empty !");
            return false;
        }
    }
</script>




