<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Inventory
            <small>Control</small>
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Main row -->
        <div class="row">
            <!-- Left col -->
            <section class="col-lg-2 connectedSortable">

            </section>
            <!-- Middle col -->
            <div class="col-md-7">

                <section class="col-lg-7 connectedSortable">
                    <div class="info-box">
                        <a href="<?php echo base_url('inventoryController')?>"><span class="info-box-icon bg-maroon"><i class="fa fa-list"></i></span></a>

                        <div class="info-box-content">
                            <span class="info-box-text"></span>
                            <span class="info-box-number">Inventory Add Item</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </section>

                <section class="col-lg-7 connectedSortable">
                    <div class="info-box">
                        <a href="<?php echo base_url('inventoryController/searchItem')?>"><span class="info-box-icon bg-green"><i class="fa fa-archive"></i></span></a>

                        <div class="info-box-content">
                            <span class="info-box-text"></span>
                            <span class="info-box-number">Inventory Edit Item</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </section>


                <section class="col-lg-7 connectedSortable">
                    <div class="info-box">
                        <a href="<?php echo base_url('sites/view_inventory_search') ?>"><span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span></a>

                        <div class="info-box-content">
                            <span class="info-box-text"></span>
                            <span class="info-box-number">Search Inventory</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </section>

                <section class="col-lg-7 connectedSortable">
                    <div class="info-box">
                        <a href="<?php echo base_url('printController_t/view_inventory_Report') ?>"><span class="info-box-icon bg-purple"><i class="fa fa-file-text-o"></i></span></a>

                        <div class="info-box-content">
                            <span class="info-box-text"></span>
                            <span class="info-box-number">Inventory Control Report</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </section>
                <section class="col-lg-7 connectedSortable">
                    <div class="info-box">
                        <a href="<?php echo base_url('sites/view_inventory_Master') ?>" <span class="info-box-icon bg-black"><i class="fa fa-check-square-o"></i></span></a>

                        <div class="info-box-content">
                            <span class="info-box-text"></span>
                            <span class="info-box-number">Inventory Master Database</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </section>

                <section class="col-lg-7 connectedSortable">
                    <div class="info-box">
                        <a href="<?php echo base_url('sites/view_inventory_Update') ?>"><span class="info-box-icon bg-blue"><i class="fa fa-edit"></i></span></a>

                        <div class="info-box-content">
                            <span class="info-box-text"></span>
                            <span class="info-box-number">Edit Inventory Details</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </section>
                <section class="col-lg-7 connectedSortable">
                    <div class="info-box">
                        <a href="<?php echo base_url('sites/view_inventory_Delete') ?>"><span class="info-box-icon bg-green"><i class="fa fa-archive"></i></span></a>

                        <div class="info-box-content">
                            <span class="info-box-text"></span>
                            <span class="info-box-number">Delete Inventory</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </section>

                <section class="col-lg-7 connectedSortable">
                    <div class="info-box">
                        <a href="<?php echo base_url('sites/view_inventory_MakeRegistration') ?>"><span class="info-box-icon bg-red"><i class="fa fa-star-o"></i></span></a>

                        <div class="info-box-content">
                            <span class="info-box-text"></span>
                            <span class="info-box-number">Make a Inventory Registration</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </section>

                <section class="col-lg-7 connectedSortable">
                    <div class="info-box">
                        <a href="<?php echo base_url('inventoryController')?>"><span class="info-box-icon bg-maroon"><i class="fa fa-list"></i></span></a>

                        <div class="info-box-content">
                            <span class="info-box-text"></span>
                            <span class="info-box-number">Inventory Add item</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </section>
                <section class="col-lg-7 connectedSortable">
                    <div class="info-box">
                        <a href="<?php echo base_url('inventoryController/searchItem')?>"><span class="info-box-icon bg-maroon"><i class="fa fa-list"></i></span></a>

                        <div class="info-box-content">
                            <span class="info-box-text"></span>
                            <span class="info-box-number">Inventory Add price</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </section>
            </div>
            <!-- /.Left col -->
            <!-- right col (We are only adding the ID to make the widgets sortable)-->
            <section class="col-lg-3 connectedSortable">

            </section>
            <!-- right col -->
        </div>
        <!-- /.row (main row) -->
    </section>
    <!-- /.content -->
</div><!-- /.content-wrapper -->