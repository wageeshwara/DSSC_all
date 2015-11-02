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
            <form action="<?= site_url('sites/inventory_saveMaster'); ?>" name="searchForm" onsubmit="return validateForm()" method="post" >
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Inventory Master Database</h3>
                    </div>
                    <div class="box-body">
                        <section class="col-md-4 ">
                            <!-- Input addon -->

                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input type="number" class="form-control" name="txt_inventoryMaster_ItemID"
                                       placeholder="Item ID">
                            </div>
                            </br></br></br>






                        </section>

                    <!-- right col -->
                    <section class="col-lg-4 connectedSortable">

                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                            <input type="text" class="form-control" name="txt_inventoryMaster_ItemName"  placeholder="Item Name">
                        </div>
                        </br></br></br>




                        <input type="submit" name="btn_inventory_makeRegistration" button class="btn btn-block btn-primary"></button>


                    </section>


                    <!-- 3rd col -->

                <section class="col-lg-4 connectedSortable">

                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                        <input type="text" class="form-control" name="txt_inventoryMaster_Description" placeholder="Item Description">
                    </div>
                    </br></br></br>






                </section>


            </form>

            <!-- /.row (main row) -->
    </section>




    <!-- /.content -->
</div><!-- /.content-wrapper -->



<script type="text/javascript">
    function validateForm() {
        var x = document.forms["searchForm"]["txt_inventoryMaster_ItemID"].value;
        var y = document.forms["searchForm"]["txt_inventoryMaster_ItemName"].value;
        var z = document.forms["searchForm"]["txt_inventoryMaster_Description"].value;

        if (x == null || y == "" || z == "") {
            alert("Fill Empty Fields !");
            return false;
        }
    }
</script>


