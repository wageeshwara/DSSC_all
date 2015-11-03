<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
             Houses
            <small>Sports</small>
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
                        <a href="<?php echo base_url('index.php/sportsMeetController/viewHousePanel')?>"><span class="info-box-icon bg-light-blue-active"><i class="ion ion-ios-people-outline"></i></span></a>

                        <div class="info-box-content">
                            <span class="info-box-text"></span>
                            <span class="info-box-number">Select Panel</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </section>
                <section class="col-lg-7 connectedSortable">
                    <div class="info-box">
                        <a href="fillUpdateTextBoxShura"><span class="info-box-icon bg-light-blue-active"><i class="fa fa-edit"></i></span></a>

                        <div class="info-box-content">
                            <span class="info-box-text"></span>
                            <span class="info-box-number">Update Panel</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </section>
                <section class="col-lg-7 connectedSortable">
                    <div class="info-box">
                        <a href="fillDeleteTextBoxShura"><span class="info-box-icon bg-light-blue-active"><i class="fa fa-edit"></i></span></a>

                        <div class="info-box-content">
                            <span class="info-box-text"></span>
                            <span class="info-box-number">Delete Panel</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </section>

                <section class="col-lg-7 connectedSortable">
                    <div class="info-box">
                        <?php $houseID=1; ?>
                        <a href="<?php echo base_url('index.php/sportsMeetController/shuraProgressFill?houseID=').$houseID; ?>"><span class="info-box-icon bg-light-blue-active"><i class="fa fa-edit"></i></span></a>
                        <div class="info-box-content">
                            <span class="info-box-text"></span>
                            <span class="info-box-number">Progress</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </section>

                <section class="col-lg-7 connectedSortable">
                    <div class="info-box">
                        <?php $houseID=1; ?>
                        <a href="<?php echo base_url('index.php/sportsMeetController/report?houseID=').$houseID; ?>"><span class="info-box-icon bg-light-blue-active"><i class="fa fa-edit"></i></span></a>

                        <div class="info-box-content">
                            <span class="info-box-text"></span>
                            <span class="info-box-number">Genarate Report</span>
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