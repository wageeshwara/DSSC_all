<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active">
                <a href="<?php echo base_url('sites/view_inventory_Registration');?>">
                    <i class="fa fa-dashboard"></i>
                    <span>Home</span>
                </a>
            </li>
            <li>
                <a href="<?php echo base_url('inventoryController/addItem');?>">
                    <i class="fa fa-edit"></i>
                    <span>Inventory Add Item</span>
                </a>
            </li>

            <li>
                <a href="<?php echo base_url('inventoryController/searchItem');?>">
                    <i class="fa fa-th"></i> <span>Inventory Edit Item</span> <small class="label pull-right bg-green"></small>
                </a>
            </li>

            <li>
                <a href="<?php echo base_url('sites/view_inventory_Search');?>">
                    <i class="fa fa-files-o"></i>
                    <span>Search Inventory</span>
                    <span class="label label-primary pull-right"></span>
                </a>
            </li>


            <li>
                <a href="<?php echo base_url('printController_t/view_inventory_Report');?>">
                    <i class="fa fa-files-o"></i>
                    <span>Inventory Control Report</span>
                    <span class="label label-primary pull-right"></span>
                </a>
            </li>

            <li>
                <a href="<?php echo base_url('sites/view_inventory_Master');?>">
                    <i class="fa fa-files-o"></i>
                    <span>Inventory Master Database</span>
                    <span class="label label-primary pull-right"></span>
                </a>
            </li>

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>