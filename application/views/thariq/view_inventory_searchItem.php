<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Inventory
            <small>Management</small>
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Main row -->
        <div class="row" style="display:none;">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title"></h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="itemList-table" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Item ID</th>
                                <th>Item Name</th>
                                <th>Item Condition</th>
                                <th>Supplier Name</th>
                                <th>Supplier No</th>
                                <th>Supplier Mail</th>
                                <th>Contact Person</th>
                                <th>Quantity</th>
                                <th>Unit Price</th>
                                <th>Total Price</th>
                                <th>Date Odored</th>
                                <th>Date Received</th>
                                <th>Warranty</th>
                                <th>Payment Mode</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            </tbody>
                            <tfoot>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
        </div>

        <!-- /.row (main row) -->
    </section>
    <!-- /.content -->
</div><!-- /.content-wrapper -->
<script>
    $(document).ready(function () {

        var oTable = $('#itemList-table').dataTable();  //Initialize the datatable
        function tableLoad() {
            $.ajax({
                url: '<?= site_url('inventoryController/dbSelect'); ?>',
                dataType: 'json',
                success: function (s) {
                    oTable.fnClearTable();
                    for (var i = 0; i < s.length; i++) {
                        oTable.fnAddData([
                            s[i][0],
                            s[i][1],
                            s[i][2],
                            s[i][3],
                            s[i][4],
                            s[i][5],
                            s[i][6],
                            s[i][7],
                            s[i][8],
                            s[i][9],
                            s[i][10],
                            s[i][11],
                            s[i][12],
                            s[i][13],
                            "<button type='button' class='btn btn-success btn-xs' data-toggle='modal' data-target='#updateItem'>Edit</button>"
                        ]);

                    } // End For

                },
                error: function (e) {
                    console.log(e.responseText);
                }
            });
        }

        window.onload = tableLoad();

        $('#itemList-table tbody').on('click', 'button', function () {
            var parentRow = $(this).parents('tr')[0];

            document.getElementById('txt_inventory_ItemID').value = $('td:eq(0)', parentRow).html();
            document.getElementById('txt_inventory_ItemName').value = $('td:eq(1)', parentRow).html();
        });


        $('#addPrice').submit(function () {

            var form = $(this);
            form.children('button').prop('disabled', true);

            var faction = "<?= site_url('inventoryController/addPrice'); ?>"
            var fdata = form.serialize();

            $.post(faction, fdata, function (rdata) {
                var json = $.parseJSON(rdata);
                if (json.isSuccessful) {
                    document.getElementById("addPrice").reset();
                    $('#updateItem').modal('toggle');
                    tableLoad();
                } else {
                    $('#updateItem').modal('toggle');
                    alert("Error!!");
                }
                form.children('button').prop('disabled', false);
            });
            return false;
        });


        $('#delete').click(function () {
            var itemID = document.getElementById('txt_inventory_ItemID').value;

            item = {"itemID": itemID};
            var item = JSON.stringify(item);
            $('#tbSendTblDataToServer').val('JSON array to send to server: \n\n' + item.replace(/},/g, "},\n"));

            $.ajax({
                type: "POST",
                url: "<?=site_url('inventoryController/removeItem') ?>",
                data: "item=" + item,
                success: function (data) {
                    obj = JSON.parse(data);
                    if (obj.isSuccessful) {
                        $('#updateItem').modal('toggle');
                        tableLoad();
                    }
                    else {
                        $('#updateItem').modal('toggle');
                        alert("error");
                    }
                }
            });
        });

        $('.received').datepicker();

    });
</script>
<style>
    .datepicker{z-index:1151 !important;}
</style>
<div class="example-modal">
    <div class="modal" id="updateItem" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Edit item details</h4>
                </div>
                <form id="addPrice" accept-charset="utf-8">
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="recipient-name" class="control-label">Item ID :</label>
                                        <input type="text" class="form-control" name="txt_inventory_ItemID"
                                               id="txt_inventory_ItemID" readonly/>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="recipient-name" class="control-label">Item Name:</label>
                                        <input type="text" class="form-control" name="txt_inventory_ItemName"
                                               id="txt_inventory_ItemName" readonly/>
                                    </div>
                                </div>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                    <input type="number" name="txt_inventory_UnitPrice" class="form-control"
                                           placeholder="Unit Price">
                                </div>
                                </br>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                    <input type="number" name="txt_inventory_TotalPrice" class="form-control"
                                           placeholder="Total Price">
                                </div>
                                </br>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                    <input type="text" class="form-control" name="txt_inventory_DateReceived"
                                           data-provide="datepicker" placeholder="Date Received" id="received">
                                </div>
                            </br>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input type="text" name="txt_inventory_Warranty" class="form-control"
                                       placeholder="Warranty">
                            </div>
                            <div class="form-group">
                                <label>Mode Of Payment</label>
                                <select class="form-control" name="txt_inventory_PaymentMode">
                                    <option></option>
                                    <option>Cash</option>
                                    <option>Check</option>
                                    <option>Credit Card</option>

                                </select>
                            </div>
                            </br>
                            <div class="form-group">
                                <label>Item Condition</label>
                                <select class="form-control" name="txt_inventory_Condition">
                                    <option></option>
                                    <option>Brand New</option>
                                    <option>Used</option>

                                </select>
                            </div>
                            </br>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                        <button type="button" name="delete" id="delete" class="btn btn-danger">Delete</button>
                        <button type="submit" name="addPrice" id="addPrice" class="btn btn-success">Add Price
                        </button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
</div>
