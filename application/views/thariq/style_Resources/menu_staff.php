<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active">
                <a href="<?php echo base_url('sites/viewRegistration');?>">
                    <i class="fa fa-dashboard"></i>
                    <span>Home</span>
                </a>
            </li>
            <li>
                <a href="<?php echo base_url('sites/viewMakeRegistration');?>">
                    <i class="fa fa-edit"></i>
                    <span>Make a Registration</span>
                </a>
            </li>
            <li>
                <a href="<?php echo base_url('sites/viewSearch');?>">
                    <i class="fa fa-files-o"></i>
                    <span>Search Staff</span>
                    <span class="label label-primary pull-right"></span>
                </a>
            </li>
            <li>
                <a href="<?php echo base_url('sites/viewUpdate');?>">
                    <i class="fa fa-th"></i> <span>Edit Staff</span> <small class="label pull-right bg-green"></small>
                </a>
            </li>
            <li>
                <a href="<?php echo base_url('sites/viewDelete');?>">
                    <i class="fa fa-calendar"></i> <span>Delete Staff</span>
                    <small class="label pull-right bg-red"></small>
                </a>
            </li>
            <li>
                <a href="<?php echo base_url('printController_t/view_Report');?>">
                    <i class="fa fa-files-o"></i>
                    <span>Staff Report</span>
                    <span class="label label-primary pull-right"></span>
                </a>
            </li>

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>