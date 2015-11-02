<div class="content-wrapper" xmlns="http://www.w3.org/1999/html">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container">
            <h1>
                Register Student
            </h1>


        <br>

        <div class="col-sm-4">
            <form  action="<?=base_url('index.php/controller_sport/register_controller');?>" method="post">

            <?php

            foreach($aaa as $row)
            {
                $id=$row['index_no'];
                $name=$row['name'];
                $address=$row['address'];
                $tell=$row['phone'];
            }
            ?>


            <label for="usr">Index Number:</label>
            <input type="number" name="txtIndex" class="form-control" id="usr" value="<?php echo $id ?>" readonly>

            <br>

            <label for="usr">Name:</label>
            <input type="text" name="txtName" class="form-control" id="usr" value="<?php echo $name ?>" readonly>

            <br>

            <label for="usr">Address:</label>
            <input type="text" name="txtAdd" class="form-control" id="usr" value="<?php echo $address ?>" readonly>

            <br>

            <label for="usr">Tel:</label>
            <input type="text" name="txtTel" class="form-control" id="usr" value="<?php echo $tell ?>" readonly>

            <br>
            </div>
            <div class="col-sm-2"></div>

            <script>
                function pay() {

                    var x = document.getElementById("drp").value;

                    if(x==4)
                    {
                        document.getElementById("txtPayID").value = 1000;
                    }

                    else if(x==5)
                    {
                        document.getElementById("txtPayID").value = 500;
                    }

                    else if(x==6)
                    {
                        document.getElementById("txtPayID").value = 800;
                    }

                    else if(x==7)
                    {
                        document.getElementById("txtPayID").value = 600;
                    }

                    else if(x==8)
                    {
                        document.getElementById("txtPayID").value = 900;
                    }


                    else
                    {
                        document.getElementById("txtPayID").value = 0;
                    }
                }

                function haveToPay()
                {
                    var y = document.getElementById("txtPayID").value;
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

            <div class="col-sm-4">
            <label for="sel1">Select Sport:</label>
            <select class="form-control" name="drpSport" id="drp" onclick="pay()" >
                <option value="4">Cricket</option>
                <option value="5">Football</option>
                <option value="6">Swimming</option>
                <option value="7">Rugby</option>
                <option value="8">Hockey</option>
            </select>

            <br>

                <label for="usr">Payment:</label>
                <input type="text" name="txtPay" class="form-control" id="txtPayID"  readonly>

                <br>

                <label for="usr">Amount Paid Balance:</label>
                <input type="number" name="txtpaid" class="form-control" id="txtpaidID">

                <br>

                <label for="usr">Balance Outstanding:</label>
                <input type="number" name="txtHaveToPay" class="form-control" id="txtHaveToPayID" onclick="haveToPay()">

                <br>

                <input type="submit" name="sbtBnt" value="Submit" class="btn btn-primary">
                <br>

                </form>
        </div>
        </div>



    </section>

</div><!-- /.content-wrapper -->