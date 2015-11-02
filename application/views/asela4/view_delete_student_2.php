<div class="content-wrapper" xmlns="http://www.w3.org/1999/html">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container">
            <h1>
                Delete Registered Details
            </h1>

            <br>

            <form action="<?=base_url('index.php/controller_sport/delete_student');?>" method="post">
                <div class="col-sm-6">

                    <?php

                    foreach($aaa as $row)
                    {
                        $name=$row['name'];
                        $index=$row['index_no'];
                        $startdate2=$row['start_date'];
                        $end=$row['end_date'];
                        $paid=$row['paid'];
                        $balance=$row['balance'];
                        $sid=$row['sid'];

                    }
                    ?>

                    <label for="usr">Name:</label>
                    <input type="text" name="txtName3" class="form-control" id="txtIndexID" value="<?php echo $name ?>" readonly >

                    <br>

                    <label for="usr">Index:</label>
                    <input type="number" name="txtIndex3" class="form-control" id="txtIndexID" value="<?php echo $index ?>" readonly >

                    <br>

                    <label for="usr">Sport ID:</label>
                    <input type="number" name="txtSprt3" class="form-control" id="txtSprt2ID" value="<?php echo $sid ?>" readonly >

                    <br>

                    <label for="txtStartID">Date Of Enrolment:</label>
                    <input type="text" name="txtStart3" class="form-control" id="txtStartID" value="<?php echo $startdate2 ?>" readonly >

                    <br>

                    <label for="txtEndID">Date Of Resignation:</label>
                    <input type="text" name="txtEnd3" class="form-control" id="txtEndID" value="<?php echo $end ?>" readonly>

                    <br>


                    <label for="txtpaidID">Amount Paid Balance:</label>
                    <input type="number" name="txtpaid3" class="form-control" id="txtpaidID" value="<?php echo $paid ?>" readonly>

                    <br>

                    <label for="usr">Balance Outstanding:</label>
                    <input type="number" name="txtHaveToPay3" class="form-control" id="txtHaveToPayID" value="<?php echo $balance ?>" readonly >

                    <br>

                    <input type="submit" name="sbtBnt3" value="Delete" class="btn btn-primary"></button>
                    <br>
                    <br>
                    <br>
                </div>


            </form>
</div>




    </section>

</div><!-- /.content-wrapper -->