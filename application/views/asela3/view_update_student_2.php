<div class="content-wrapper" xmlns="http://www.w3.org/1999/html">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container">
            <h1>
                Update Registered Details
            </h1>


            <br>

            <script>
                function pay() {

                    var x = document.getElementById("drp").value;

                    if(x==4)
                    {
                        document.getElementById("txtpaymentID").value = 1000;
                    }

                    else if(x==5)
                    {
                        document.getElementById("txtpaymentID").value = 500;
                    }

                    else if(x==6)
                    {
                        document.getElementById("txtpaymentID").value = 800;
                    }

                    else if(x==7)
                    {
                        document.getElementById("txtpaymentID").value = 600;
                    }

                    else if(x==8)
                    {
                        document.getElementById("txtpaymentID").value = 900;
                    }

                    else
                    {
                        document.getElementById("txtpaymentID").value = 0;
                    }
                }

                function haveToPay()
                {
                    var y = document.getElementById("txtpaymentID").value;
                    var z = document.getElementById("txtpaidID").value;

                    var b=y-z;

                    if(b>=0) {
                        document.getElementById("txtHaveToPayID").value = b;
                    }

                    else
                    {
                        document.getElementById("txtHaveToPayID").value = 0;
                    }

                }


            </script>

            <form action="<?=base_url('index.php/Controller_sport/update_student');?>" method="post">
            <div class="col-sm-6">

                    <?php

                    foreach($aaa as $row)
                    {
                        $index=$row['index_no'];
                        $startdate=$row['start_date'];
                        $end=$row['end_date'];
                        $paid=$row['paid'];
                        $balance=$row['balance'];
                        $sid=$row['sid'];

                    }
                    ?>




                    <label for="usr">Index:</label>
                    <input type="number" name="txtIndex2" class="form-control" id="txtIndexID" value="<?php echo $index ?>" readonly >

                    <br>

                    <label for="usr">Sport ID:</label>
                    <input type="number" name="txtSprt2" class="form-control" id="txtSprt2ID" value="<?php echo $sid ?>" readonly >

                    <br>


                    <label for="sel1">Select Sport:</label>
                <select class="form-control" name="drpSport3" id="drp" onclick="pay()" >
                    <option value="4">Cricket</option>
                    <option value="5">Football</option>
                    <option value="6">Swimming</option>
                    <option value="7">Rugby</option>
                    <option value="8">Hockey</option>
                </select>

                <br>

                <label for="txtStartID">Date Of Enrolment:</label>
                <input type="date" name="txtStart2" class="form-control" id="txtStartID" value="<?php echo $startdate ?>" >

                <br>

                <label for="txtEndID">Date Of Resignation:</label>
                <input type="date" name="txtEnd2" class="form-control" id="txtEndID" value="<?php echo $end ?>">

                <br>

                <label for="usr">Payment:</label>
                <input type="number" name="txtpayment2" class="form-control" id="txtpaymentID" onclick="pay()" readonly >

                <br>

                <label for="txtpaidID">Amount Paid Balance:</label>
                <input type="number" name="txtpaid2" class="form-control" id="txtpaidID"value="<?php echo $paid ?>">

                <br>

                <label for="usr">Balance Outstanding:</label>
                <input type="number" name="txtHaveToPay2" class="form-control" id="txtHaveToPayID" onclick="haveToPay()" >

                    <br>

                <input type="submit" name="sbtBnt2" value="Update" class="btn btn-primary"></button>
                <br>
                    <br>
                    <br>
            </div>

                </form>





    </section>

</div><!-- /.content-wrapper -->