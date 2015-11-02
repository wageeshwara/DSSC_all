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
            <form action="<?= site_url('sites/inventory_save'); ?>" method="post">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Registration Form</h3>
                    </div>
                    <div class="box-body">
                        <section class="col-md-4 ">
                            <!-- Input addon -->

                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input type="number" class="form-control" name="txt_inventory_ItemID"
                                       placeholder="Item ID">
                            </div>
                            </br></br></br>

                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input type="text" name="txt_inventory_ItemName" class="form-control" placeholder="Item Name">
                            </div>
                            </br></br></br>

                            <textarea name="txt_inventory_ItemDesc" rows="3" cols="54" placeholder="Item Description"></textarea>

                            </br></br></br>

                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input type="number" name="txt_inventory_Quantity" class="form-control" placeholder="Quantity">
                            </div>
                            </br></br></br>


                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input type="number" name="txt_inventory_UnitPrice" class="form-control" placeholder="Unit Price">
                            </div>
                            </br></br></br>

                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input type="number" name="txt_inventory_TotalPrice" class="form-control" placeholder="Total Price">
                            </div>
                            </br></br></br>




                        </section>

                    <!-- right col -->
                    <section class="col-lg-4 connectedSortable">

                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            <input type="text" class="form-control" name="txt_inventory_DateOrdered" data-provide="datepicker" placeholder="Date Ordered">
                        </div>
                        </br></br></br>

                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            <input type="text" class="form-control" name="txt_inventory_DateReceived" data-provide="datepicker" placeholder="Date Received">
                        </div>
                        </br></br></br>


                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                            <input type="text" name="txt_inventory_Warranty" class="form-control" placeholder="Warranty">
                        </div>
                        </br></br></br>


                        <div class="form-group" >
                            <label>Mode Of Payment</label>
                            <select class="form-control" name="txt_inventory_PaymentMode">
                                <option></option>
                                <option>Cash</option>
                                <option>Check</option>
                                <option>Credit Card</option>

                            </select>
                        </div></br>


                        <div class="form-group" >
                            <label>Item Condition</label>
                            <select class="form-control" name="txt_inventory_Condition">
                                <option></option>
                                <option>Brand New</option>
                                <option>Used</option>

                            </select>
                        </div>
                        </br></br>


                        <input type="submit" name="btn_inventory_makeRegistration" button class="btn btn-block btn-primary"></button>


                    </section>


                    <!-- 3rd col -->

                <section class="col-lg-4 connectedSortable">

                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                        <input type="text" class="form-control" name="txt_inventory_SupplierName" placeholder="Supplier Name">
                    </div>
                    </br></br></br>


                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                        <input type="number" class="form-control" name="txt_inventory_SupplierContactNo" placeholder="Supplier Contact No">
                    </div>
                    </br></br></br>


                    <textarea name="txt_inventory_SupplierAddr" rows="3" cols="54" placeholder="Supplier Address"></textarea>


                    </br></br></br>

                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                        <input type="text" class="form-control" name="txt_inventory_SupplierEmail" placeholder="Supplier Email">
                    </div>
                    </br></br></br>



                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                        <input type="text" class="form-control" name="txt_inventory_ContactPerson" placeholder="Contact Person">
                    </div>
                    </br></br></br>



                    <input type="button" value="Cancel" name="btn__inventory_cancel" button class="btn btn-block btn-primary"></button>

                </section>


            </form>

            <!-- /.row (main row) -->
    </section>




    <!-- /.content -->
</div><!-- /.content-wrapper -->



<script type="text/javascript">
    function validate(evt) {
        var theEvent = evt || window.event;
        var key = theEvent.keyCode || theEvent.which;
        key = String.fromCharCode(txt_inventory_ItemNo);
        var regex = /[0-9]|\./;
        if( !regex.test(txt_inventory_ItemNo) ) {
            theEvent.returnValue = false;
            if(theEvent.preventDefault) theEvent.preventDefault();
        }
    }
</script>


