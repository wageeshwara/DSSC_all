<div class="content-wrapper" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
    <!-- Content Header (Page header) -->
    <section class="content-header">

        <?php $a="deletePanelShura"?>

        <form action="<?=base_url('index.php/SportsMeetController/$a');?>" method="get">

            <?php

            foreach($aaa as $row)
            {
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
                $comment=$row['comment'];

            }
            ?>

            <h1>
               your requst is <?php if($status==1){echo "Pending";} elseif($status==2){echo "Accept";} elseif($status==3){echo "Rejected";} ?> <br> <br>
            </h1>

            <div class="row">
                <div class="col-sm-6" >
                    President:<br>
                    <input type="text"  name="president" id="president" size="40"  value="<?php   echo $president; ?>" readonly>
                    <br><br>
                    Wise President:<br>
                    <input type="text" name="wpresident" id="wpresident" size="40"  value="<?php  echo $wpresident; ?>"readonly>
                    <br><br>
                    Secretary:<br>
                    <input type="text" name="secretary" id="secretary" size="40"  value="<?php  echo $secretary; ?>"readonly>
                    <br><br>
                    Wise Secretary:<br>
                    <input type="text" name="wsecretary" id="wsecretary" size="40"  value="<?php  echo $wsecretary; ?>"readonly>
                    <br><br>
                    Treasurer:<br>
                    <input type="text" name="treasurer" id="treasurer"  size="40"  value="<?php  echo $treasurer; ?>"readonly>
                    <br><br>
                    Wise Treasurer:<br>
                    <input type="text" name="wtreasurer" id="wtreasurer" size="40"  value="<?php  echo $wtreasurer; ?>"readonly>
                    <br><br>
                </div>


                <div class="col-sm-6">
                    Panel member 1:<br>
                    <input type="text" name="pm1" id="pm1" size="40" value="<?php  echo $p1; ?>" readonly>
                    <br><br>
                    Panel member 2:<br>
                    <input type="text" name="pm2" id="pm2" size="40" value="<?php  echo $p2; ?>" readonly>
                    <br><br>
                    Panel member 3:<br>
                    <input type="text" name="pm3" id="pm3" size="40" value="<?php  echo $p3; ?>" readonly>
                    <br><br>
                    Panel member 4:<br>
                    <input type="text" name="pm4" id="pm4" size="40" value="<?php  echo $p4; ?>" readonly>
                    <br><br>
                    Panel member 5<br>
                    <input type="text" name="pm5" id="pm5" size="40" value="<?php  echo $p5; ?>" readonly>
                    <br><br>
                    Comment<br>
                    <textarea class="form-control" name="comment" rows="3" id="comment"><?php echo $comment; ?></textarea>
                    <br><br>
                </div>
            </div>

        </form>

    </section>

</div><!-- /.content-wrapper -->
