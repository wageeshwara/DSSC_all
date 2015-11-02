<div class="content-wrapper" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
    <!-- Content Header (Page header) -->
    <section class="content-header">

        <h1>
            Requst Details <br> <br>
        </h1>



            <?php

            foreach($aaa as $row)
            {
                $houseID=$row['houseID'];
                $president=$row['president'];
                $wpresident=$row['wpresident'];
                $secretary=$row['secretary'];
                $wsecretary=$row['wsecretary'];
                $treasurer=$row['treasurer'];
                $wtreasurer=$row['wtreasurer'];
                $p1=$row['p1'];
                $p2=$row['p2'];
                $p3=$row['p3'];
                $p4=$row['p4'];
                $p5=$row['p5'];
                $status=$row['status'];
                $presidentID=$row['pid'];
                $wpresidentID=$row['wpid'];
                $secretaryID=$row['sid'];
                $wsecretaryID=$row['wsid'];
                $treasurerID=$row['tid'];
                $wtreasurerID=$row['wtid'];
                $p1ID=$row['p1id'];
                $p2ID=$row['p2id'];
                $p3ID=$row['p3id'];
                $p4ID=$row['p4id'];
                $p5ID=$row['p5id'];

            }
            ?>

            <div class="row">
                <div class="col-sm-6" >
                    House ID:<br>
                    <input type="text"  name="houseID" id="house" size="40"  value="<?php   echo $houseID; ?>" readonly> &nbsp; &nbsp;
                    <br><br>
                    President:<br>
                    <input type="text"  name="presidentID" id="presidentID"  value="<?php   echo $presidentID; ?>"  size="10"  readonly> &nbsp; &nbsp;
                    <input type="text"  name="president" id="president"  value="<?php   echo $president; ?>" size="40" readonly> &nbsp; &nbsp;
                    <a href="<?php echo base_url('index.php/AcceptControllers/president?presidentID=').$presidentID; ?>"><button type="button"  class="btn btn-primary">Details</button></a>
                    <br><br>
                    Wise President:<br>
                    <input type="text" name="wpresidentID" id="wpresidentID" value="<?php   echo $wpresidentID; ?>" size="10" readonly> &nbsp; &nbsp;
                    <input type="text" name="wpresident" id="wpresident"  value="<?php   echo $wpresident; ?>" size="40" readonly> &nbsp; &nbsp;
                    <a href="<?php echo base_url('index.php/AcceptControllers/wpresident?wpresidentID=').$wpresidentID; ?>"><button type="button"  class="btn btn-primary">Details</button></a>
                    <br><br>
                    Secretary:<br>
                    <input type="text" name="secretaryID" id="secretaryID" value="<?php   echo $secretaryID; ?>" size="10" readonly> &nbsp; &nbsp;
                    <input type="text" name="secretary" id="secretary"  value="<?php   echo $secretary; ?>" size="40" readonly> &nbsp; &nbsp;
                    <a href="<?php echo base_url('index.php/AcceptControllers/secretary?secretaryID=').$secretaryID; ?>"><button type="button"  class="btn btn-primary">Details</button></a>
                    <br><br>
                    Wise Secretary:<br>
                    <input type="text" name="wsecretaryID" id="wsecretaryID" value="<?php   echo $wsecretaryID; ?>" size="10" readonly> &nbsp; &nbsp;
                    <input type="text" name="wsecretary" id="wsecretary"  value="<?php   echo $wsecretary; ?>" size="40" readonly> &nbsp; &nbsp;
                    <a href="<?php echo base_url('index.php/AcceptControllers/wsecretary?wsecretaryID=').$wsecretaryID; ?>"><button type="button"  class="btn btn-primary">Details</button></a>
                    <br><br>
                    Treasurer:<br>
                    <input type="text" name="treasurerID" id="treasurerID" value="<?php   echo $treasurerID; ?>" size="10" readonly> &nbsp; &nbsp;
                    <input type="text" name="treasurer" id="treasurer"  value="<?php   echo $treasurer; ?>" size="40" readonly> &nbsp; &nbsp;
                    <a href="<?php echo base_url('index.php/AcceptControllers/treasurer?treasurerID=').$treasurerID; ?>"><button type="button"  class="btn btn-primary">Details</button></a>
                    <br><br>
                    Wise Treasurer:<br>
                    <input type="text" name="wtreasurerID" id="wtreasurerID" value="<?php   echo $wtreasurerID; ?>" size="10" readonly> &nbsp; &nbsp;
                    <input type="text" name="wtreasurer" id="wtreasurer"  value="<?php   echo $wtreasurer; ?>" size="40" readonly> &nbsp; &nbsp;
                    <a href="<?php echo base_url('index.php/AcceptControllers/wtreasurer?wtreasurerID=').$wtreasurerID; ?>"><button type="button"  class="btn btn-primary">Details</button></a>
                    <br><br>
                </div>


                <div class="col-sm-6">
                    Panel member 1:<br>
                    <input type="text" name="pm1ID" id="pm1ID" value="<?php   echo $p1ID; ?>" size="10" readonly> &nbsp; &nbsp;
                    <input type="text" name="pm1" id="pm1" value="<?php  echo $p1; ?>" size="40" readonly> &nbsp; &nbsp;
                    <a href="<?php echo base_url('index.php/AcceptControllers/p1ID?p1ID=').$p1ID; ?>"><button type="button"  class="btn btn-primary">Details</button></a>
                    <br><br>
                    Panel member 2:<br>
                    <input type="text" name="pm2ID" id="pm2ID" value="<?php   echo $p2ID; ?>" size="10" readonly> &nbsp; &nbsp;
                    <input type="text" name="pm2" id="pm2" value="<?php  echo $p2; ?>" size="40" readonly> &nbsp; &nbsp;
                    <a href="<?php echo base_url('index.php/AcceptControllers/p2ID?p2ID=').$p2ID; ?>"><button type="button"  class="btn btn-primary">Details</button></a>
                    <br><br>
                    Panel member 3:<br>
                    <input type="text" name="pm3ID" id="pm3ID" value="<?php   echo $p3ID; ?>" size="10" readonly> &nbsp; &nbsp;
                    <input type="text" name="pm3" id="pm3" value="<?php  echo $p3; ?>" size="40" readonly> &nbsp; &nbsp;
                    <a href="<?php echo base_url('index.php/AcceptControllers/p3ID?p3ID=').$p3ID; ?>"><button type="button"  class="btn btn-primary">Details</button></a>
                    <br><br>
                    Panel member 4:<br>
                    <input type="text" name="pm4ID" id="pm4ID" value="<?php   echo $p4ID; ?>" size="10" readonly> &nbsp; &nbsp;
                    <input type="text" name="pm4" id="pm4" value="<?php  echo $p4; ?>" size="40" readonly> &nbsp; &nbsp;
                    <a href="<?php echo base_url('index.php/AcceptControllers/p4ID?p4ID=').$p4ID; ?>"><button type="button"  class="btn btn-primary">Details</button></a>
                    <br><br>
                    Panel member 5<br>
                    <input type="text" name="pm5ID" id="pm5ID" value="<?php   echo $p5ID; ?>" size="10" readonly> &nbsp; &nbsp;
                    <input type="text" name="pm5" id="pm5" value="<?php  echo $p5; ?>" size="40" readonly> &nbsp; &nbsp;
                    <a href="<?php echo base_url('index.php/AcceptControllers/p5ID?p5ID=').$p5ID; ?>"><button type="button"  class="btn btn-primary">Details</button></a>
                    <br>
                    <br><br>


                    <a href="<?php echo base_url('index.php/AcceptControllers/accept?houseID=').$houseID; ?>"><button type="button"  class="btn btn-primary">Accept</button></a>
                    &nbsp; &nbsp;
                    <a href="<?php echo base_url('index.php/AcceptControllers/reject2?houseID=').$houseID; ?>"><button type="button"  class="btn btn-danger">Reject</button></a>
                    <br><br>
                </div>
            </div>



    </section>

</div><!-- /.content-wrapper -->
