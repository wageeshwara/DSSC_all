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
            <form id="addItemForm" accept-charset="utf-8">
                <section class="col-lg-6 connectedSortable">
                    <div class="box box-primary">
                        <div class="box-header">
                            <h3 class="box-title">Registration Form</h3>
                        </div>
                        <div class="box-body">

                            <!-- Input addon -->

                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input type="number" class="form-control numbersOnly" name="txt_inventory_ItemID" id="txt_inventory_ItemID"
                                       placeholder="Item ID">
                            </div>

                            </br></br>

                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input type="text" name="txt_inventory_ItemName" id="txt_inventory_ItemName" class="form-control"
                                       placeholder="Item Name"  required maxlength="200">
                            </div>

                            </br></br>

                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-edit"></i></span>
                                <textarea class="form-control" rows="3" cols="54" id="txt_inventory_ItemDesc"
                                          name="txt_inventory_ItemDesc"
                                          placeholder="Item Description"></textarea>
                            </div>
                            </br></br>

                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input type="number" name="txt_inventory_Quantity" class="numbersOnly form-control"
                                       placeholder="Quantity">
                            </div>
                            </br></br>


                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                <input type="text" class="form-control" name="txt_inventory_DateOrdered"
                                       data-provide="datepicker" placeholder="Date Ordered">
                            </div>
                            </br></br>


                            <!-- /.row (main row) -->
                        </div>

                    </div>
                </section>

                <section class="col-lg-6 connectedSortable">
                    <div class="box box-primary">

                        <div class="box-body">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input type="text" class="form-control" name="txt_inventory_SupplierName"
                                       placeholder="Supplier Name">
                            </div>
                            </br></br>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input type="number" class="form-control" name="txt_inventory_SupplierContactNo"
                                       placeholder="Supplier Contact No">
                            </div>
                            </br></br>


                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-edit"></i></span>
                                <textarea class="form-control" rows="3" cols="54" id="txt_inventory_SupplierAddr"
                                          name="txt_inventory_SupplierAddr"
                                          placeholder="Supplier Address"></textarea>
                            </div>

                            </br></br>

                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input type="text" class="form-control" name="txt_inventory_SupplierEmail"
                                       placeholder="Supplier Email">
                            </div>
                            </br></br>

                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input type="text" class="form-control" name="txt_inventory_ContactPerson"
                                       placeholder="Contact Person">
                            </div>
                            </br></br>

                            <div class="input-group-btn">
                                <button type="submit" name="btn_inventory_makeRegistration"
                                        class="btn btn-group-lg btn-primary">Add Item
                                </button>
                            </div>
                            <div class="input-group-btn">
                                <button type="RESET" value="Cancel" name="btn__inventory_cancel"
                                        class="btn btn-group-lg btn-primary"> Cancel
                                </button>
                            </div>

                        </div>
                    </div>
                </section>
            </form>
    </section>


    <!-- /.content -->
</div><!-- /.content-wrapper -->


<script type="text/javascript">
    function validate(evt) {
        var theEvent = evt || window.event;
        var key = theEvent.keyCode || theEvent.which;
        key = String.fromCharCode(txt_inventory_ItemNo);
        var regex = /[0-9]|\./;
        if (!regex.test(txt_inventory_ItemNo)) {
            theEvent.returnValue = false;
            if (theEvent.preventDefault) theEvent.preventDefault();
        }
    }
</script>
<!--<script src="--><? //=base_url('js/jquery.js'); ?><!--"></script>-->
<script type="text/javascript">
    $(document).ready(function () {
        jQuery('.numbersOnly').keyup(function () {
            this.value = this.value.replace(/[^0-9\.]/g, '');
        });

        $('#addItemForm').submit(function () {

            var form = $(this);
            form.children('button').prop('disabled', true);

            var faction = "<?= site_url('inventoryController/addItems'); ?>"
            var fdata = form.serialize();

            $.post(faction, fdata, function (rdata) {
                var json = $.parseJSON(rdata);
                if (json.isSuccessful) {
                    document.getElementById("addItemForm").reset();
                    $('#success').modal('show');
                } else {
                    $('#error').modal('show');
                }
                form.children('button').prop('disabled', false);
            });
            return false;
        });

        $('.content').fadeIn(400);

        $('#txt_inventory_ItemID').keypress(function(event){
            var keycode = (event.keyCode ? event.keyCode : event.which);
            if(keycode == '13'){
                itemID={ "itemID":$(this).val()};
                var itemIDs = JSON.stringify(itemID);

                $('#tbSendTblDataToServer').val('JSON array to send to server: \n\n' + itemIDs.replace(/},/g, "},\n"));

                $.ajax({
                    type: "POST",
                    url: "<?=site_url('inventoryController/searchItems') ?>",
                    data: "itemID=" + itemIDs,
                    success: function (data) {
                        obj = JSON.parse(data);
                        $('#txt_inventory_ItemName').val(obj.message[0][0]);
                        $('#txt_inventory_ItemDesc').val(obj.message[0][1]);
                    }
                });
            }
            event.stopPropagation();
        });
    });
</script>
<div class="example-modal">
    <div class="modal modal-success" id="success" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Success</h4>
                </div>
                <form id="editLeave" accept-charset="utf-8">
                    <div class="modal-body">
                        <div class="container-fluid">
                            <p>The NEW Item has been added!</p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success pull-left" data-dismiss="modal">Close</button>
                    </div>
            </div>
            </form>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
</div>
<div class="example-modal">
    <div class="modal modal-danger" id="error" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Error</h4>
                </div>
                <form id="editLeave" accept-charset="utf-8">
                    <div class="modal-body">
                        <div class="container-fluid">
                            <strong>Adding Item failed!!</strong>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
                    </div>
            </div>
            </form>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
</div>


