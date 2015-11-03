<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
             <li class="header">Accept Sport</li>
            <li>
                <a href="<?php echo base_url('index.php/AcceptControllers/viewHome')?>">
                    <i class="fa fa-list"></i>
                    <span>Request Management</span>
                </a>
            </li>

            <li>
                <a href="<?php echo base_url('index.php/AcceptControllers/uptable')?>">
                    <i class="ion ion-ios-people-outline"></i>
                    <span>View Requests</span>
                </a>
            </li>
            <li>
                <a href="<?php echo base_url('index.php/AcceptControllers/uptableAccepted')?>">
                    <i class="fa fa-edit"></i>
                    <span>Accepted Requests</span>
                </a>
            </li>
            <li>
                <a href="<?php echo base_url('index.php/AcceptControllers/uptableReject')?>">
                    <i class="fa fa-edit"></i> <span>Rejected Requests</span>
                </a>
            </li>

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>