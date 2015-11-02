<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">Sport</li>
            <li>
                <a href="<?php echo base_url('controller_sport')?>">
                    <i class="fa fa-list"></i>
                    <span>Sport Menu</span>
                </a>
            </li>

            <li>
                <a href="<?php echo base_url('index.php/controller_sport/load_register_button')?>">
                    <i class="ion ion-ios-people-outline"></i>
                    <span>Register Student</span>
                </a>
            </li>
            <li>
                <a href="<?php echo base_url('index.php/controller_sport/load_update_button')?>">
                    <i class="fa fa-edit"></i>
                    <span>Update Registered Student</span>
                </a>
            </li>
            <li>
                <a href="<?php echo base_url('index.php/controller_sport/load_delete_button')?>">
                    <i class="fa fa-edit"></i> <span>Delete Registered Student</span>
                </a>
            </li>
            <li>
                <a href="<?php echo base_url('index.php/controller_sport/get_data_to_table')?>">
                    <i class="fa fa-file-text-o"></i> <span>View Registered Students</span>
                </a>
            </li>
            <li>
                <a href="<?php echo base_url('index.php/controller_sport/view_report')?>">
                    <i class="fa fa-file-text-o"></i> <span>Generate Report</span>
                </a>
            </li>

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>