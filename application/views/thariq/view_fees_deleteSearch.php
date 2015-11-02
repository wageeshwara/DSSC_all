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
            <form action="<?= site_url('sites/fees_delete'); ?>" method="post" name="searchForm" onsubmit="return validateForm()">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Delete Record</h3>
                    </div>
                    <div class="box-body">
                        <section class="col-md-4 ">
                            <!-- Input addon -->

                            </br></br></br>

                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input type="number" class="form-control" name="txt_fees_indexno"
                                       placeholder="Enter Index No">

                            </div>
                            </br>

                            <input type="submit" name="btn_delete" button class="btn btn-block btn-primary"  value="Delete"></button>



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

<!-- Text box validation -->

<script type="text/javascript">
    function validateForm() {
        var x = document.forms["searchForm"]["txt_fees_indexno"].value;
        if (x == null || x == "") {
            alert("Enter Index No !");
            return false;
        }
    }
</script>

<script type="text/javascript">
    function validate(evt) {
        var theEvent = evt || window.event;
        var key = theEvent.keyCode || theEvent.which;
        key = String.fromCharCode( txt_fees_indexno );
        var regex = /[0-9]|\./;
        if( !regex.test(txt_fees_indexno) ) {
            theEvent.returnValue = false;
            if(theEvent.preventDefault) theEvent.preventDefault();
        }
    }
</script>
