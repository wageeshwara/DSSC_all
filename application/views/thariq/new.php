

<div class="content-wrapper" xmlns="http://www.w3.org/1999/html">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Staff Management

        </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Main row -->
        <div class="row">
            <!-- Left col -->
            <form action="<?= site_url('sites/search_update'); ?>" method="post">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Search Staff</h3>
                    </div>
                    <div class="box-body">
                        <section class="col-md-4 ">
                            <!-- Input addon -->

                            </br></br></br>

                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input type="text" class="form-control" name="txtEmp_ID"
                                       placeholder="Enter Employee No">

                            </div>
                            </br>

                            <input type="submit" name="btn_search" button class="btn btn-block btn-primary"  value="Search"></button>


                            <?php
                            foreach($s_result as $result) {
                                echo "Employee ID    :-  $result->Emp_ID";
                                echo "</a><br><br>";
                                echo "Signature No :-  $result->Sig_No";
                            }
                            ?>

                        </section>





                        <!-- 3rd col -->
                        <section class="col-lg-4 connectedSortable">

                            </br></br></br></br></br></br></br>


                        </section>


            </form>

            <!-- /.row (main row) -->
    </section>




    <!-- /.content -->
</div><!-- /.content-wrapper -->
