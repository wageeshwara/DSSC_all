<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">Attendance</li>
            <li>
                <a href="<?php echo base_url('index.php/Controller_table/viewHome')?>">
                    <i class="fa fa-list"></i>
                    <span>Attendance Menu</span>
                </a>
            </li>

            <li>
                <a href="<?php echo base_url('index.php/Controller_table/uptable')?>">
                    <i class="ion ion-ios-people-outline"></i>
                    <span>Attendance Marking</span>
                </a>
            </li>
            <li>
                <a href="<?php echo base_url('index.php/Controller_table/updateEditPresent')?>">
                    <i class="fa fa-edit"></i>
                    <span>Edit Today Present Members</span>
                </a>
            </li>
            <li>
                <a href="<?php echo base_url('index.php/Controller_table/updateEditAbsent')?>">
                    <i class="fa fa-edit"></i> <span>Edit Today Absent Members</span>
                </a>
            </li>
            <li>
                <a href="<?php echo base_url('index.php/Controller_table/updateDailyReport')?>">
                    <i class="fa fa-file-text-o"></i> <span>Daily Attendance Report</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-file-text-o"></i> <span>Monthly Attendance Report</span>
                </a>
            </li>

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>