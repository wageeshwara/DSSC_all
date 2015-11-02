<html>
<head>
    <meta charset="UTF-8">
    <title>DSSC | Report</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="<?php echo base_url()?>bootstrap/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="<?php echo base_url()?>bootstrap/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />


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
                     <img src="<?php echo base_url() ?>bootstrap/dsimg.jpg" alt="..." class='margin' />
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

                    <style>
                        .dottedUnderline { border-bottom: 1px dotted; }
                    </style>

                    <?php
                    foreach($results as $result){


                        echo"<h1><P><u><center>RECEIPT</center></u></h1></P>";
                        echo "</a><br><br>";

                        echo "<label><font size='4'>Index Number :  <i> <span class='dottedUnderline'>$result->index_no</i></span> <P align='right'>Receipt No: <i><span class='dottedUnderline'>  $result->receipt_no</i></span></P>";
                        echo "</a><br></font>";
                        echo  "<label><font size='4'>Rs: <i><span class='dottedUnderline'> $result->amount_figures </i></span> <P align='right'>Date:  <i><span class='dottedUnderline'> $result->date</i></span></P>";
                        echo "</a><br><br>";


                        echo "<label><font size='4'>Received from  <i><span class='dottedUnderline'> $result->student_name </i></span> of Grade <i><span class='dottedUnderline'> $result->grade </i></span> an amount of <i><span class='dottedUnderline'> $result->amount_words </i></span> being school fees for the term <i><span class='dottedUnderline'> $result->received_term </i></span> of year <i><span class='dottedUnderline'> $result->received_year </i></span> .  ";
                        echo "</a><br><br>";


                    }
                    ?>


                    </tbody>
                </table>
            </div><!-- /.col -->
        </div><!-- /.row -->


    </section><!-- /.content -->



</div><!-- ./wrapper -->
<!-- AdminLTE App -->
<script src="<?php echo base_url()?>bootstrap/dist/js/app.min.js" type="text/javascript"></script>
</body>
</html>