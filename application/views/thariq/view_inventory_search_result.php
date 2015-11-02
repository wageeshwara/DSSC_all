<div class="content-wrapper" xmlns="http://www.w3.org/1999/html">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Inventory Control

        </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Main row -->
        <div class="row">
            <!-- Left col -->

                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Results Found</h3>
                    </div>
                    <div class="box-body">
                        <section class="col-md-4 ">
                            <!-- Input addon -->

                            </br></br></br>
                        </section>
                            <section class="col-lg-6 connectedSortable">

                            <?php
                            foreach($s_result as $result){
                                //echo "<a href='".base_url()."index.php/site/edit?id=".$result->Emp_ID."'>";

                                echo"<h1><P><u><b>Inventory Details</b></u></P>";
                                echo "</a><br>";

                                echo "<label><small><b> Item ID    :-  $result->item_id ";
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
                                echo  "Contact Person :-   $result->contact_person </b></small></h1>";
                                echo "</a><br><br>";

                            }


                            ?>


                        </section>

                        <!-- 3rd col -->
                        <section class="col-lg-4 connectedSortable">

                        </section>



            <!-- /.row (main row) -->
    </section>




    <!-- /.content -->
</div><!-- /.content-wrapper -->