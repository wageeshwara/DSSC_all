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
            <form action="<?= site_url('sites/inventory_update'); ?>" method="post">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Update Inventory</h3>
                    </div>
                    <div class="box-body">
                        <section class="col-md-4 ">
                            <!-- Input addon -->


                            <?php
                            foreach($s_result as $result) {


                                echo "</br >Item ID";
                                echo "<div class='input-group'>
                                <span class='input-group-addon'><i class='fa fa-envelope'></i></span>
                                <input type='number' name='txt_inven_ItemID' class='form-control' value='$result->item_id' readonly>


                                </div></br></br >";


                                echo "Item Name";
                                echo "<div class='input-group'>
                                <span class='input-group-addon'><i class='fa fa-envelope'></i></span>
                                <input type='text' name='txt_inven_ItemName' class='form-control' value='$result->item_name' readonly>


                                </div></br></br >";


                                echo "Item Description";
                                echo "<textarea name='txt_inven_ItemDesc' rows='3' cols='54'>$result->item_description</textarea></br></br >";


                                echo "Quantity";
                                echo "<div class='input-group'>
                                <span class='input-group-addon'><i class='fa fa-envelope'></i></span>
                                <input type='number' name='txt_inven_Quantity' class='form-control' value='$result->quantity'> </div></br ></br >";


                                echo "Unit Price";
                                echo "<div class='input-group'>
                                <span class='input-group-addon'><i class='fa fa-envelope'></i></span>
                                <input type='number' name='txt_inven_UnitPrice' class='form-control' value='$result->unit_price'> </div></br ></br >";

                                echo "Total Price";
                                echo "<div class='input-group'>
                                <span class='input-group-addon'><i class='fa fa-envelope'></i></span>
                                <input type='number' name='txt_inven_TotalPrice' class='form-control' value='$result->total_price'> </div></br ></br >";


                            }
                            ?>

                        </section>

                    <!-- right col -->
                    <section class="col-lg-4 connectedSortable">


                        <?php
                        foreach($s_result as $result) {


                            echo "</br>Date Ordered";
                            echo "<div class='input-group'>
                                <span class='input-group-addon'><i class='fa fa-calendar'></i></span>
                                <input type='text' name='txt_inven_DateOrdered'  class='form-control'  value='$result->date_ordered' readonly>
                                </div></br></br>";

                            echo "Date Received";
                            echo "<div class='input-group'>
                                <span class='input-group-addon'><i class='fa fa-calendar'></i></span>
                                <input type='text' name='txt_inven_DateReceived'  class='form-control'  value='$result->date_received' readonly>
                                </div></br></br>";


                            echo "Warranty";
                            echo "<div class='input-group'>
                                <span class='input-group-addon'><i class='fa fa-envelope'></i></span>
                                <input type='text' name='txt_inven_Warranty' class='form-control' value='$result->warranty' readonly> </div></br></br></br >";

                            echo "Mode Of Payment";
                            echo "<div class='input-group'>
                                <span class='input-group-addon'><i class='fa fa-envelope'></i></span>
                                <input type='text' name='txt_inven_PaymentMode' class='form-control' value='$result->payment_mode' readonly>
                                </div></br></br>";

                            echo "Item Condition";
                            echo "<div class='input-group'>
                                <span class='input-group-addon'><i class='fa fa-envelope'></i></span>
                                <input type='text' name='txt_inven_Condition' class='form-control' value='$result->item_condition' readonly>
                                </div></br></br></br>";


                             }
                        ?>

                        <input type="submit" value="Update" name="btn_inven_update" button class="btn btn-block btn-primary"></button>

                    </section>


                    <!-- 3rd col -->

                <section class="col-lg-4 connectedSortable">


                    <?php
                    foreach($s_result as $result) {


                        echo "</br>Supplier Name";
                        echo "<div class='input-group'>
                                <span class='input-group-addon'><i class='fa fa-envelope'></i></span>
                                <input type='text' name='txt_inven_SupplierName' class='form-control' value='$result->supplier_name'> </div></br></br >";


                        echo "Supplier Contact No";
                        echo "<div class='input-group'>
                                <span class='input-group-addon'><i class='fa fa-envelope'></i></span>
                                <input type='number' name='txt_inven_SupplierContactNo' class='form-control' value='$result->supplier_phone' > </div></br></br >";


                        echo "Supplier Address";
                        echo "<textarea name='txt_inven_SupplierAddr' rows='3' cols='54'>$result->supplier_addr</textarea></br></br >";


                        echo "Supplier Email";
                        echo "<div class='input-group'>
                                <span class='input-group-addon'><i class='fa fa-envelope'></i></span>
                                <input type='text' name='txt_inven_SupplierEmail' class='form-control' value='$result->supplier_mail'> </div></br></br >";


                        echo "Contact Person";
                        echo "<div class='input-group'>
                                <span class='input-group-addon'><i class='fa fa-envelope'></i></span>
                                <input type='text' name='txt_inven_ContactPerson' class='form-control' value='$result->contact_person'> </div></br></br></br >";


                    }
                    ?>


                    <input type="button" value="Cancel" href="<?php echo base_url();?>site/view_inventory_Update" name="btn__inventory_cancel" button class="btn btn-block btn-primary"></button>

                </section>


            </form>

            <!-- /.row (main row) -->
    </section>




    <!-- /.content -->
</div><!-- /.content-wrapper -->




