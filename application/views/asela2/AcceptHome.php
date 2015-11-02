<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Manage Houses
            <small>Requests</small>
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
                        <a href="<?php echo base_url('index.php/AcceptControllers/uptable')?>"><span class="info-box-icon bg-light-blue-active"><i class="ion ion-ios-people-outline"></i></span></a>

                        <div class="info-box-content">
                            <span class="info-box-text"></span>
                            <span class="info-box-number">View Requests </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </section>
                <section class="col-lg-7 connectedSortable">
                    <div class="info-box">
                        <a href="<?php echo base_url('index.php/AcceptControllers/uptableAccepted')?>"><span class="info-box-icon bg-light-blue-active"><i class="fa fa-edit"></i></span></a>

                        <div class="info-box-content">
                            <span class="info-box-text"></span>
                            <span class="info-box-number">Accepted Requests</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </section>
                <section class="col-lg-7 connectedSortable">
                    <div class="info-box">
                        <a href="<?php echo base_url('index.php/AcceptControllers/uptableReject')?>"><span class="info-box-icon bg-light-blue-active"><i class="fa fa-edit"></i></span></a>

                        <div class="info-box-content">
                            <span class="info-box-text"></span>
                            <span class="info-box-number">Delete Requests</span>
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