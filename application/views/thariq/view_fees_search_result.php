<div class="content-wrapper" xmlns="http://www.w3.org/1999/html">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            School Fees

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

                            <?php
                            foreach($s_result as $result){
                                //echo "<a href='".base_url()."index.php/site/edit?id=".$result->Emp_ID."'>";

                                echo"<h1><P><u><b>Fees Record Details</b></u></P>";
                                echo "</a><br>";

                                echo "<label><small><b> Name Of Student    :-  $result->student_name ";
                                echo "</a><br><br>";
                                echo "Index Number :-  $result->index_no";
                                echo "</a><br><br>";
                                echo "Grade :-   $result->grade";
                                echo "</a><br><br>";
                                echo  "Receipt No: :-   $result->receipt_no";
                                echo "</a><br><br>";
                                echo  "Amount Received (in figures) :- Rs.  $result->amount_figures";
                                echo "</a><br><br>";
                                echo "Amount Received (in words) :-   $result->amount_words";
                                echo "</a><br><br>";
                                echo  "Date:-   $result->date";
                                echo "</a><br><br>";
                                echo  "Received for Year:-   $result->received_year";
                                echo "</a><br><br>";
                                echo  "Received for Term :-   $result->received_term </b></small></h1>";

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