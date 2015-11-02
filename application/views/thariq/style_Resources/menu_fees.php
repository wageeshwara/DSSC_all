<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active">
                <a href="<?php echo base_url('sites/view_fees_Registration');?>">
                    <i class="fa fa-dashboard"></i>
                    <span>Home</span>
                </a>
            </li>
            <li>
                <a href="<?php echo base_url('sites/view_fees_MakeRegistration');?>">
                    <i class="fa fa-edit"></i>
                    <span>Add a Fee Record</span>
                </a>
            </li>
            <li>
                <a href="<?php echo base_url('sites/view_fees_Search');?>">
                    <i class="fa fa-files-o"></i>
                    <span>Search Record</span>
                    <span class="label label-primary pull-right"></span>
                </a>
            </li>
            <li>
                <a href="<?php echo base_url('sites/view_fees_Update');?>">
                    <i class="fa fa-th"></i> <span>Edit Record</span> <small class="label pull-right bg-green"></small>
                </a>
            </li>
            <li>
                <a href="<?php echo base_url('sites/view_fees_Delete');?>">
                    <i class="fa fa-calendar"></i> <span>Delete Record</span>
                    <small class="label pull-right bg-red"></small>
                </a>
            </li>
            <li>
                <a href="<?php echo base_url('printController_t/view_fees_Report');?>">
                    <i class="fa fa-files-o"></i>
                    <span>School Fee Receipt</span>
                    <span class="label label-primary pull-right"></span>
                </a>
            </li>

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>