<div class="content-wrapper" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
    <!-- Content Header (Page header) -->
    <section class="content-header">

        <h1>
            Delete Panel - Weera House <br> <br>
        </h1>


        <form action="<?=base_url('index.php/SportsMeetController/deletePanelWeera');?>" method="get">

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

            }
            ?>

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
                    <br>
                    <br>
                    Status :<br>
                    <input type="text" name="pm6" id="pm6" size="40" value="<?php if($status==1){echo 'Pendind';} elseif($status==2){echo 'Accepted'; } else{echo 'Rejected';} ?>" readonly> &nbsp; &nbsp;
                    <br><br>
                    <input id="submit" name="submit" class="btn btn-danger" type="submit" value="Delete"> &nbsp; &nbsp;
                    <button type="button" name="btn10" id="btn10" class="btn btn-warning">Cancel</button>
                </div>
            </div>

        </form>

    </section>

</div><!-- /.content-wrapper -->

<div class="example-modal">
    <div class="modal" id="presidentModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Student List</h4>
                </div>
                <form id="studentList" accept-charset="utf-8">
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="box-body">
                                <table id="president-table" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>index_no</th>
                                        <th>name</th>
                                        <th>address</th>
                                        <th>parent</th>
                                        <th>phone</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>index_no</th>
                                        <th>name</th>
                                        <th>address</th>
                                        <th>parent</th>
                                        <th>phone</th>
                                        <th></th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
</div><div class="example-modal">
    <div class="modal" id="wpresidentModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Student List</h4>
                </div>
                <form id="studentList" accept-charset="utf-8">
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="box-body">
                                <table id="wpresident-table" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>index_no</th>
                                        <th>name</th>
                                        <th>address</th>
                                        <th>parent</th>
                                        <th>phone</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>index_no</th>
                                        <th>name</th>
                                        <th>address</th>
                                        <th>parent</th>
                                        <th>phone</th>
                                        <th></th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
</div>


<div class="example-modal">
    <div class="modal" id="secretaryModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Student List</h4>
                </div>
                <form id="studentList" accept-charset="utf-8">
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="box-body">
                                <table id="secretary-table" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>index_no</th>
                                        <th>name</th>
                                        <th>address</th>
                                        <th>parent</th>
                                        <th>phone</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>index_no</th>
                                        <th>name</th>
                                        <th>address</th>
                                        <th>parent</th>
                                        <th>phone</th>
                                        <th></th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
</div>

<div class="example-modal">
    <div class="modal" id="wsecretaryModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Student List</h4>
                </div>
                <form id="studentList" accept-charset="utf-8">
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="box-body">
                                <table id="wsecretary-table" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>index_no</th>
                                        <th>name</th>
                                        <th>address</th>
                                        <th>parent</th>
                                        <th>phone</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>index_no</th>
                                        <th>name</th>
                                        <th>address</th>
                                        <th>parent</th>
                                        <th>phone</th>
                                        <th></th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
</div>

<div class="example-modal">
    <div class="modal" id="treasurerModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Student List</h4>
                </div>
                <form id="studentList" accept-charset="utf-8">
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="box-body">
                                <table id="treasurer-table" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>index_no</th>
                                        <th>name</th>
                                        <th>address</th>
                                        <th>parent</th>
                                        <th>phone</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>index_no</th>
                                        <th>name</th>
                                        <th>address</th>
                                        <th>parent</th>
                                        <th>phone</th>
                                        <th></th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
</div>

<div class="example-modal">
    <div class="modal" id="wtreasurerModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Student List</h4>
                </div>
                <form id="studentList" accept-charset="utf-8">
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="box-body">
                                <table id="wtreasurer-table" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>index_no</th>
                                        <th>name</th>
                                        <th>address</th>
                                        <th>parent</th>
                                        <th>phone</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>index_no</th>
                                        <th>name</th>
                                        <th>address</th>
                                        <th>parent</th>
                                        <th>phone</th>
                                        <th></th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
</div>

<div class="example-modal">
    <div class="modal" id="pm1Modal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Student List</h4>
                </div>
                <form id="studentList" accept-charset="utf-8">
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="box-body">
                                <table id="pm1-table" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>index_no</th>
                                        <th>name</th>
                                        <th>address</th>
                                        <th>parent</th>
                                        <th>phone</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>index_no</th>
                                        <th>name</th>
                                        <th>address</th>
                                        <th>parent</th>
                                        <th>phone</th>
                                        <th></th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
</div>

<div class="example-modal">
    <div class="modal" id="pm2Modal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Student List</h4>
                </div>
                <form id="studentList" accept-charset="utf-8">
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="box-body">
                                <table id="pm2-table" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>index_no</th>
                                        <th>name</th>
                                        <th>address</th>
                                        <th>parent</th>
                                        <th>phone</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>index_no</th>
                                        <th>name</th>
                                        <th>address</th>
                                        <th>parent</th>
                                        <th>phone</th>
                                        <th></th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
</div>

<div class="example-modal">
    <div class="modal" id="pm3Modal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Student List</h4>
                </div>
                <form id="studentList" accept-charset="utf-8">
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="box-body">
                                <table id="pm3-table" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>index_no</th>
                                        <th>name</th>
                                        <th>address</th>
                                        <th>parent</th>
                                        <th>phone</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>index_no</th>
                                        <th>name</th>
                                        <th>address</th>
                                        <th>parent</th>
                                        <th>phone</th>
                                        <th></th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
</div>

<div class="example-modal">
    <div class="modal" id="pm4Modal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Student List</h4>
                </div>
                <form id="studentList" accept-charset="utf-8">
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="box-body">
                                <table id="pm4-table" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>index_no</th>
                                        <th>name</th>
                                        <th>address</th>
                                        <th>parent</th>
                                        <th>phone</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>index_no</th>
                                        <th>name</th>
                                        <th>address</th>
                                        <th>parent</th>
                                        <th>phone</th>
                                        <th></th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
</div>

<div class="example-modal">
    <div class="modal" id="pm5Modal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Student List</h4>
                </div>
                <form id="studentList" accept-charset="utf-8">
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="box-body">
                                <table id="pm5-table" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>index_no</th>
                                        <th>name</th>
                                        <th>address</th>
                                        <th>parent</th>
                                        <th>phone</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>index_no</th>
                                        <th>name</th>
                                        <th>address</th>
                                        <th>parent</th>
                                        <th>phone</th>
                                        <th></th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
</div>

<script>
    $(document).ready(function () {

        /*
         *loading database values to table using dataTable
         */
        function presidentTableLoad() {
            var oTable = $('#president-table').dataTable();  //Initialize the datatable
            oTable.fnClearTable();
            $.ajax({
                url: '<?= site_url('SportsMeetController/GetSelectStudent'); ?>',
                dataType: 'json',
                success: function (s) {
//                    console.log(s);
                    oTable.fnClearTable();
                    for (var i = 0; i < s.length; i++) {
                        oTable.fnAddData([
                            s[i][0],
                            s[i][1],
                            s[i][2],
                            s[i][3],
                            s[i][4],
                            "<button type='button' class='btn btn-warning btn-xs' data-toggle='modal' data-target='#conn'>Select</button>"
                        ]);
                    } // End For

                },
                error: function (e) {
                    console.log(e.responseText);
                }
            });
        }

        function wpresidentTableLoad() {
            var oTable = $('#wpresident-table').dataTable();  //Initialize the datatable
            oTable.fnClearTable();
            $.ajax({
                url: '<?= site_url('SportsMeetController/GetSelectStudent'); ?>',
                dataType: 'json',
                success: function (s) {
//                    console.log(s);
                    oTable.fnClearTable();
                    for (var i = 0; i < s.length; i++) {
                        oTable.fnAddData([
                            s[i][0],
                            s[i][1],
                            s[i][2],
                            s[i][3],
                            s[i][4],
                            "<button type='button' class='btn btn-warning btn-xs' data-toggle='modal' data-target='#conn'>Select</button>"
                        ]);
                    } // End For

                },
                error: function (e) {
                    console.log(e.responseText);
                }
            });
        }

        function secretaryTableLoad() {
            var oTable = $('#secretary-table').dataTable();  //Initialize the datatable
            oTable.fnClearTable();
            $.ajax({
                url: '<?= site_url('SportsMeetController/GetSelectStudent'); ?>',
                dataType: 'json',
                success: function (s) {
//                    console.log(s);
                    oTable.fnClearTable();
                    for (var i = 0; i < s.length; i++) {
                        oTable.fnAddData([
                            s[i][0],
                            s[i][1],
                            s[i][2],
                            s[i][3],
                            s[i][4],
                            "<button type='button' class='btn btn-warning btn-xs' data-toggle='modal' data-target='#conn'>Select</button>"
                        ]);
                    } // End For

                },
                error: function (e) {
                    console.log(e.responseText);
                }
            });
        }

        function wsecretaryTableLoad() {
            var oTable = $('#wsecretary-table').dataTable();  //Initialize the datatable
            oTable.fnClearTable();
            $.ajax({
                url: '<?= site_url('SportsMeetController/GetSelectStudent'); ?>',
                dataType: 'json',
                success: function (s) {
//                    console.log(s);
                    oTable.fnClearTable();
                    for (var i = 0; i < s.length; i++) {
                        oTable.fnAddData([
                            s[i][0],
                            s[i][1],
                            s[i][2],
                            s[i][3],
                            s[i][4],
                            "<button type='button' class='btn btn-warning btn-xs' data-toggle='modal' data-target='#conn'>Select</button>"
                        ]);
                    } // End For

                },
                error: function (e) {
                    console.log(e.responseText);
                }
            });
        }

        function treasurerTableLoad() {
            var oTable = $('#treasurer-table').dataTable();  //Initialize the datatable
            oTable.fnClearTable();
            $.ajax({
                url: '<?= site_url('SportsMeetController/GetSelectStudent'); ?>',
                dataType: 'json',
                success: function (s) {
//                    console.log(s);
                    oTable.fnClearTable();
                    for (var i = 0; i < s.length; i++) {
                        oTable.fnAddData([
                            s[i][0],
                            s[i][1],
                            s[i][2],
                            s[i][3],
                            s[i][4],
                            "<button type='button' class='btn btn-warning btn-xs' data-toggle='modal' data-target='#conn'>Select</button>"
                        ]);
                    } // End For

                },
                error: function (e) {
                    console.log(e.responseText);
                }
            });
        }

        function wtreasurerTableLoad() {
            var oTable = $('#wtreasurer-table').dataTable();  //Initialize the datatable
            oTable.fnClearTable();
            $.ajax({
                url: '<?= site_url('SportsMeetController/GetSelectStudent'); ?>',
                dataType: 'json',
                success: function (s) {
//                    console.log(s);
                    oTable.fnClearTable();
                    for (var i = 0; i < s.length; i++) {
                        oTable.fnAddData([
                            s[i][0],
                            s[i][1],
                            s[i][2],
                            s[i][3],
                            s[i][4],
                            "<button type='button' class='btn btn-warning btn-xs' data-toggle='modal' data-target='#conn'>Select</button>"
                        ]);
                    } // End For

                },
                error: function (e) {
                    console.log(e.responseText);
                }
            });
        }

        function pm1TableLoad() {
            var oTable = $('#pm1-table').dataTable();  //Initialize the datatable
            oTable.fnClearTable();
            $.ajax({
                url: '<?= site_url('SportsMeetController/GetSelectStudent'); ?>',
                dataType: 'json',
                success: function (s) {
//                    console.log(s);
                    oTable.fnClearTable();
                    for (var i = 0; i < s.length; i++) {
                        oTable.fnAddData([
                            s[i][0],
                            s[i][1],
                            s[i][2],
                            s[i][3],
                            s[i][4],
                            "<button type='button' class='btn btn-warning btn-xs' data-toggle='modal' data-target='#conn'>Select</button>"
                        ]);
                    } // End For

                },
                error: function (e) {
                    console.log(e.responseText);
                }
            });
        }

        function pm2TableLoad() {
            var oTable = $('#pm2-table').dataTable();  //Initialize the datatable
            oTable.fnClearTable();
            $.ajax({
                url: '<?= site_url('SportsMeetController/GetSelectStudent'); ?>',
                dataType: 'json',
                success: function (s) {
//                    console.log(s);
                    oTable.fnClearTable();
                    for (var i = 0; i < s.length; i++) {
                        oTable.fnAddData([
                            s[i][0],
                            s[i][1],
                            s[i][2],
                            s[i][3],
                            s[i][4],
                            "<button type='button' class='btn btn-warning btn-xs' data-toggle='modal' data-target='#conn'>Select</button>"
                        ]);
                    } // End For

                },
                error: function (e) {
                    console.log(e.responseText);
                }
            });
        }

        function pm3TableLoad() {
            var oTable = $('#pm3-table').dataTable();  //Initialize the datatable
            oTable.fnClearTable();
            $.ajax({
                url: '<?= site_url('SportsMeetController/GetSelectStudent'); ?>',
                dataType: 'json',
                success: function (s) {
//                    console.log(s);
                    oTable.fnClearTable();
                    for (var i = 0; i < s.length; i++) {
                        oTable.fnAddData([
                            s[i][0],
                            s[i][1],
                            s[i][2],
                            s[i][3],
                            s[i][4],
                            "<button type='button' class='btn btn-warning btn-xs' data-toggle='modal' data-target='#conn'>Select</button>"
                        ]);
                    } // End For

                },
                error: function (e) {
                    console.log(e.responseText);
                }
            });
        }

        function pm4TableLoad() {
            var oTable = $('#pm4-table').dataTable();  //Initialize the datatable
            oTable.fnClearTable();
            $.ajax({
                url: '<?= site_url('SportsMeetController/GetSelectStudent'); ?>',
                dataType: 'json',
                success: function (s) {
//                    console.log(s);
                    oTable.fnClearTable();
                    for (var i = 0; i < s.length; i++) {
                        oTable.fnAddData([
                            s[i][0],
                            s[i][1],
                            s[i][2],
                            s[i][3],
                            s[i][4],
                            "<button type='button' class='btn btn-warning btn-xs' data-toggle='modal' data-target='#conn'>Select</button>"
                        ]);
                    } // End For

                },
                error: function (e) {
                    console.log(e.responseText);
                }
            });
        }

        function pm5TableLoad() {
            var oTable = $('#pm5-table').dataTable();  //Initialize the datatable
            oTable.fnClearTable();
            $.ajax({
                url: '<?= site_url('SportsMeetController/GetSelectStudent'); ?>',
                dataType: 'json',
                success: function (s) {
//                    console.log(s);
                    oTable.fnClearTable();
                    for (var i = 0; i < s.length; i++) {
                        oTable.fnAddData([
                            s[i][0],
                            s[i][1],
                            s[i][2],
                            s[i][3],
                            s[i][4],
                            "<button type='button' class='btn btn-warning btn-xs' data-toggle='modal' data-target='#conn'>Select</button>"
                        ]);
                    } // End For

                },
                error: function (e) {
                    console.log(e.responseText);
                }
            });
        }




        /*
         *on more button click event
         *load table data values to modal text box
         */
        $('#president-table tbody').on('click', 'button', function () {
            var parentRow = $(this).parents('tr')[0];
            document.getElementById('president').value = $('td:eq(1)', parentRow).html();
            $('#presidentModal').modal('toggle');
        });

        $('#wpresident-table tbody').on('click', 'button', function () {
            var parentRow = $(this).parents('tr')[0];
            document.getElementById('wpresident').value = $('td:eq(1)', parentRow).html();
            $('#wpresidentModal').modal('toggle');
        });

        $('#secretary-table tbody').on('click', 'button', function () {
            var parentRow = $(this).parents('tr')[0];
            document.getElementById('secretary').value = $('td:eq(1)', parentRow).html();
            $('#secretaryModal').modal('toggle');
        });

        $('#wsecretary-table tbody').on('click', 'button', function () {
            var parentRow = $(this).parents('tr')[0];
            document.getElementById('wsecretary').value = $('td:eq(1)', parentRow).html();
            $('#wsecretaryModal').modal('toggle');
        });

        $('#treasurer-table tbody').on('click', 'button', function () {
            var parentRow = $(this).parents('tr')[0];
            document.getElementById('treasurer').value = $('td:eq(1)', parentRow).html();
            $('#treasurerModal').modal('toggle');
        });

        $('#wtreasurer-table tbody').on('click', 'button', function () {
            var parentRow = $(this).parents('tr')[0];
            document.getElementById('wtreasurer').value = $('td:eq(1)', parentRow).html();
            $('#wtreasurerModal').modal('toggle');
        });

        $('#pm1-table tbody').on('click', 'button', function () {
            var parentRow = $(this).parents('tr')[0];
            document.getElementById('pm1').value = $('td:eq(1)', parentRow).html();
            $('#pm1Modal').modal('toggle');
        });

        $('#pm2-table tbody').on('click', 'button', function () {
            var parentRow = $(this).parents('tr')[0];
            document.getElementById('pm2').value = $('td:eq(1)', parentRow).html();
            $('#pm2Modal').modal('toggle');
        });

        $('#pm3-table tbody').on('click', 'button', function () {
            var parentRow = $(this).parents('tr')[0];
            document.getElementById('pm3').value = $('td:eq(1)', parentRow).html();
            $('#pm3Modal').modal('toggle');
        });

        $('#pm4-table tbody').on('click', 'button', function () {
            var parentRow = $(this).parents('tr')[0];
            document.getElementById('pm4').value = $('td:eq(1)', parentRow).html();
            $('#pm4Modal').modal('toggle');
        });

        $('#pm5-table tbody').on('click', 'button', function () {
            var parentRow = $(this).parents('tr')[0];
            document.getElementById('pm5').value = $('td:eq(1)', parentRow).html();
            $('#pm5Modal').modal('toggle');
        });


        //loading table data on page loading
        // window.onload = tableLoad;
        //window.onload = wtableLoad;

        $('#btn1').click(function(){
            presidentTableLoad();
        });
        $('#btn2').click(function(){
            wpresidentTableLoad();
        });
        $('#btn11').click(function(){
            secretaryTableLoad();
        });
        $('#btn3').click(function(){
            wsecretaryTableLoad();
        });
        $('#btn4').click(function(){
            treasurerTableLoad();
        });
        $('#btn5').click(function(){
            wtreasurerTableLoad();
        });

        $('#btn6').click(function(){
            pm1TableLoad();
        });
        $('#btn7').click(function(){
            pm2TableLoad();
        });
        $('#btn8').click(function(){
            pm3TableLoad();
        });
        $('#btn9').click(function(){
            pm4TableLoad();
        });
        $('#btn10').click(function(){
            pm5TableLoad();
        });
    });
</script>