<html>
<head>
    <meta charset="UTF-8">
    <title>DSSC | Report</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="<?php echo base_url()?>/bootstrap/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="<?php echo base_url()?>/bootstrap/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />


</head>
<body onload="window.print();" >
<div class="wrapper">
    <!-- Main content -->
    <section class="invoice">
        <!-- title row -->
        <div class="row">
            <div class="col-xs-12">
                <h2 class="page-header">
                    <small class="pull-right">Date: <?php echo (new \DateTime())->format('Y-m-d');?></small>
                    <img src="<?php echo base_url() ?>/bootstrap/dsimg.jpg" alt="..." class='margin' />
                    <address>
                        <strong>D. S. Senanayake College</strong><br>
                        62 R G Senanayake Mawatha<br>
                        Colombo 00700<br>
                        011 2 698253
                    </address>
                </h2>

            </div><!-- /.col -->
        </div>
        <!-- info row -->
        <div class="row invoice-info">
            <div class="col-sm-4 invoice-col">


            </div><!-- /.col -->
        </div><!-- /.row -->

        <!-- Table row -->
        <div class="row">
            <div class="col-xs-12 table-responsive">
                <table class="table table-striped">
                    <thead>
                    </thead>
                    <tbody>

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
                        $id=$row['houseID'];

                    }

                    if($id=1){$house='SHURA';} elseif($id=2){$house='METHTHA';} elseif($id=3){$house='WEERA';} elseif($id=4){$house='SHANTHA';};

                        echo"<br><br>";
                        echo"<h1><P><u><center>$house PANEL DETAILS</center></u></h1></P>";
                        echo "<label> president &nbsp; &nbsp;:- $president";
                        echo "</a><br><br>";
                        echo "<label>Wise president   :- $wpresident  ";
                        echo "</a><br><br>";
                        echo "secretary               :- $secretary";
                        echo "</a><br><br>";
                        echo  "wise secretary :-   $wsecretary";
                        echo "</a><br><br>";
                        echo  "treasurer :-   $treasurer";
                        echo "</a><br><br>";
                        echo  "wise treasurer :-   $wtreasurer";
                        echo "</a><br><br>";
                    echo  "Panel Member 1 :-   $p1";
                    echo "</a><br><br>";
                    echo  "Panel Member 2 :-   $p2";
                    echo "</a><br><br>";
                    echo  "Panel Member 3 :-   $p3";
                    echo "</a><br><br>";
                    echo  "Panel Member 4 :-   $p4";
                    echo "</a><br><br>";
                    echo  "Panel Member 5 :-   $p5";
                    echo "</a><br><br>";
                    ?>

                    </tbody>
                </table>
            </div><!-- /.col -->
        </div><!-- /.row -->

    </section><!-- /.content -->
</div><!-- ./wrapper -->
<!-- AdminLTE App -->
<script src="<?php echo base_url()?>/bootstrap/dist/js/app.min.js" type="text/javascript"></script>
</body>
</html>