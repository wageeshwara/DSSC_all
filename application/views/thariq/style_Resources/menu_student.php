<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active">
                <a href="<?php echo base_url('sites/view_student_Registration');?>">
                    <i class="fa fa-dashboard"></i>
                    <span>Home</span>
                </a>
            </li>
            <li>
                <a href="<?php echo base_url('sites/view_student_MakeRegistration');?>">
                    <i class="fa fa-edit"></i>
                    <span>Register Student</span>
                </a>
            </li>
            <li>
                <a href="<?php echo base_url('sites/view_student_Search');?>">
                    <i class="fa fa-files-o"></i>
                    <span>Search Student</span>
                    <span class="label label-primary pull-right"></span>
                </a>
            </li>
            <li>
                <a href="<?php echo base_url('sites/view_student_Update');?>">
                    <i class="fa fa-th"></i> <span>Edit Student</span> <small class="label pull-right bg-green"></small>
                </a>
            </li>
            <li>
                <a href="<?php echo base_url('sites/view_student_Delete');?>">
                    <i class="fa fa-calendar"></i> <span>Delete Student</span>
                    <small class="label pull-right bg-red"></small>
                </a>
            </li>
            <li>
                <a href="<?php echo base_url('printController_t/view_student_Report');?>">
                    <i class="fa fa-files-o"></i>
                    <span>Student Report</span>
                    <span class="label label-primary pull-right"></span>
                </a>
            </li>

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>