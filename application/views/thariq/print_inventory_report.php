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
                    foreach($results as $result){
                        //echo "<a href='".base_url()."index.php/site/edit?id=".$result->Emp_ID."'>";

                        echo"<h1><P><u><center>INVENTORY DETAILS</center></u></h1></P>";
                        echo "</a><br><br>";

                        echo "<label><font size='4'> Item ID    :-  $result->item_id ";
                        echo "</a><br><br>";
                        echo "Item Name :-  $result->item_name";
                        echo "</a><br><br>";
                        echo "Item Description :-   $result->item_description";
                        echo "</a><br><br>";
                        echo  "Quantity :-   $result->quantity";
                        echo "</a><br><br>";
                        echo  "Unit Price :-   $result->unit_price";
                        echo "</a><br><br>";
                        echo  "Total Price :-   $result->total_price";
                        echo "</a><br><br>";
                        echo "Date Ordered :-   $result->date_ordered";
                        echo "</a><br><br>";
                        echo  "Date Received:-   $result->date_received";
                        echo "</a><br><br>";
                        echo  "Warranty:-   $result->warranty";
                        echo "</a><br><br>";
                        echo  "Mode Of Payment :-   $result->payment_mode";
                        echo "</a><br><br>";
                        echo  "Item Condition :-   $result->item_condition";
                        echo "</a><br><br>";
                        echo  "Supplier Name :-   $result->supplier_name";
                        echo "</a><br><br>";
                        echo  "Supplier Contact No :-   $result->supplier_phone";
                        echo "</a><br><br>";
                        echo  "Supplier Address :-   $result->supplier_addr";
                        echo "</a><br><br>";
                        echo  "Supplier Email :-   $result->supplier_mail";
                        echo "</a><br><br>";
                        echo  "Contact Person :-   $result->contact_person</font>";
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
<script src="<?php echo base_url()?>/bootstrap/dist/js/app.min.js" type="text/javascript"></script>
</body>
</html>