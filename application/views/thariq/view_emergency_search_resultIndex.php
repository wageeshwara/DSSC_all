<div class="content-wrapper" xmlns="http://www.w3.org/1999/html">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            In Case Of Emergency

        </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Main row -->
        <div class="row">
            <!-- Left col -->

            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Results Found</h3>
                </div>
                <div class="box-body">
                    <section class="col-md-4 ">
                        <!-- Input addon -->

                        </br></br></br>
                    </section>
                    <section class="col-lg-6 connectedSortable">

                        <style>
                            .dottedUnderline { border-bottom: 1px dotted; }
                        </style>

                        <?php
                        foreach($s_result as $result){
                            //echo "<a href='".base_url()."index.php/site/edit?id=".$result->Emp_ID."'>";

                            echo"<h1><P><b><u><font color='red'>Student Details</u></b></font></P>";
                            echo "</a><br><br>";

                            echo "<label><small><b><font color='red'> Name Of Student    :- </font> <span class='dottedUnderline'>$result->Student_FullName </span> ";
                            echo "</a><br><br>";
                            echo "<font color='red'>Address :-  </font> <span class='dottedUnderline'> $result->Student_Address </span> ";
                            echo "</a><br><br>";
                            echo "<font color='red'>Contact No :-  </font><span class='dottedUnderline'>  $result->Student_Contact_No </span> ";
                            echo "</a><br><br>";
                            echo  "<font color='red'>In Case Of Emergency :- </font> <span class='dottedUnderline'> $result->Student_Emergency <span class='dottedUnderline'></b></h1></small>";



                        }


                        ?>


                    </section>

                    <!-- 3rd col -->
                    <section class="col-lg-4 connectedSortable">

                    </section>



                    <!-- /.row (main row) -->
    </section>




    <!-- /.content -->
</div><!-- /.content-wrapper -->