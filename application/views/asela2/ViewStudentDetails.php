<div class="content-wrapper" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
    <!-- Content Header (Page header) -->
    <section class="content-header">

        <h1>
            Student Details <br> <br>
        </h1>

        <?php

        foreach($aaa as $row)
        {
            $index_no=$row['index_no'];
            $name=$row['name'];
            $address=$row['address'];
            $parent=$row['parent'];
            $phone=$row['phone'];
            $email=$row['email'];
            $age=$row['age'];
            $class=$row['class'];
        }
        ?>

        <div class="row">
            <div class="col-sm-6" >
                Student ID:<br>
                <input type="text"  name="houseID" id="house" size="40"  value="<?php   echo $index_no; ?>" readonly> &nbsp; &nbsp;
                <br><br>
                Name:<br>
                <input type="text"  name="president" id="president" size="40"  value="<?php   echo $name; ?>" readonly> &nbsp; &nbsp;
                <br><br>
                Address:<br>
                <input type="text" name="wpresident" id="wpresident" size="40"  value="<?php  echo $address; ?>"readonly> &nbsp; &nbsp;
                <br><br>
                Parent:<br>
                <input type="text" name="secretary" id="secretary" size="40"  value="<?php  echo $parent; ?>"readonly> &nbsp; &nbsp;
                <br><br>
            </div>


            <div class="col-sm-6">
                Telephone No:<br>
                <input type="text" name="pm1" id="pm1" size="40" value="<?php  echo $phone; ?>" readonly> &nbsp; &nbsp;
                <br><br>
                Email:<br>
                <input type="text" name="pm2" id="pm2" size="40" value="<?php  echo $email; ?>" readonly> &nbsp; &nbsp;
                <br><br>
                Age:<br>
                <input type="text" name="pm3" id="pm3" size="40" value="<?php  echo $age; ?>" readonly> &nbsp; &nbsp;
                <br><br>
                Class:<br>
                <input type="text" name="pm4" id="pm4" size="40" value="<?php  echo $class; ?>" readonly> &nbsp; &nbsp;
                <br><br>

            </div>
        </div>
    </section>
</div><!-- /.content-wrapper -->
