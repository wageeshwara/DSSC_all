<div class="content-wrapper" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
    <!-- Content Header (Page header) -->
    <section class="content-header">

        <h1>
                Search Panel Members

        </h1>

        <?php
        if(isset($aaa)) {
            foreach ($aaa as $row) {
                $president = $row['president'];
                $wpresident = $row['wpresident'];
                $secretary = $row['secretary'];
                $wsecretary = $row['wsecretary'];
                $treasurer = $row['treasurer'];
                $wtreasurer = $row['wtreasurer'];
                $p1 = $row['p1'];
                $p2 = $row['p2'];
                $p3 = $row['p3'];
                $p4 = $row['p4'];
                $p5 = $row['p5'];
                $year=$row['year'];
            }
        }
        ?>



            <div class="row">
                <div class="col-sm-12" >
                    <br>  <br>  <br>
                    <form action="<?=base_url('index.php/SportsMeetController/search'); ?>" method="get" >
                        <div class="col-sm-1" ></div>
                        <div class="col-sm-4" >
                        <input type="number" name="date" value="" class="form-control "  ></div>
                        <div class="col-sm-1" >
                            <select name="house" size="" >
                                <option value="1">Shura</option>
                                <option value="2">Meththa</option>
                                <option value="3">Weera</option>
                                <option value="4">Shantha</option>
                            </select>
                        </div>
                        <div class="col-sm-2" >  &nbsp;
                            <input type="submit" name="submit_btn" value="Search" class="btn btn-primary"></div>


                </div>

                <div class="col-sm-6" >
                    <br>  <br>
                    President:<br>
                    <input type="text"  name="president" id="president" size="40"  value="<?php if(isset($president)) {echo $president;} ?>" readonly>
                    <br><br>
                    Wise President:<br>
                    <input type="text" name="wpresident" id="wpresident" size="40"  value="<?php if(isset($wpresident)) {echo $wpresident;} ?>"readonly>
                    <br><br>
                    Secretary:<br>
                    <input type="text" name="secretary" id="secretary" size="40"  value="<?php if(isset($secretary)) {echo $secretary;} ?>"readonly>
                    <br><br>
                    Wise Secretary:<br>
                    <input type="text" name="wsecretary" id="wsecretary" size="40"  value="<?php if(isset($wsecretary)) {echo $wsecretary;} ?>"readonly>
                    <br><br>
                    Treasurer:<br>
                    <input type="text" name="treasurer" id="treasurer"  size="40"  value="<?php if(isset($treasurer)) {echo $treasurer;} ?>"readonly>
                    <br><br>
                    Wise Treasurer:<br>
                    <input type="text" name="wtreasurer" id="wtreasurer" size="40"  value="<?php if(isset($wtreasurer)) {echo $wtreasurer;} ?>"readonly>
                    <br><br>
                </div>

                <div class="col-sm-6">
                    <br><br>
                    Panel member 1:<br>
                    <input type="text" name="pm1" id="pm1" size="40" value="<?php if(isset($p1)) {echo $p1;}  ?>" readonly>
                    <br><br>
                    Panel member 2:<br>
                    <input type="text" name="pm2" id="pm2" size="40" value="<?php if(isset($p2)) {echo $p2;}  ?>" readonly>
                    <br><br>
                    Panel member 3:<br>
                    <input type="text" name="pm3" id="pm3" size="40" value="<?php if(isset($p3)) {echo $p3;}  ?>" readonly>
                    <br><br>
                    Panel member 4:<br>
                    <input type="text" name="pm4" id="pm4" size="40" value="<?php if(isset($p4)) {echo $p4;}   ?>" readonly>
                    <br><br>
                    Panel member 5<br>
                    <input type="text" name="pm5" id="pm5" size="40" value="<?php if(isset($p5)) {echo $p5;}  ?>" readonly>
                    <br><br>
                    Panel member 5<br>
                    <input type="text" name="year" id="year" size="40" value="<?php if(isset($year)) {echo $year;}  ?>" readonly>
                    <br><br>
                    <br><br>
                </div>
                </div>
        </form>

    </section>

</div><!-- /.content-wrapper -->
