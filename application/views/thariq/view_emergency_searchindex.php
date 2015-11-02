<!DOCTYPE html>

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
            <form action="<?= site_url('sites/emergency_index'); ?>" method="post" name="searchForm" onsubmit="return validateForm()">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Search Student Details</h3>
                    </div>
                    <div class="box-body">
                        <section class="col-md-4 ">
                            <!-- Input addon -->

                            </br></br></br>

                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input type="number" class="form-control" name="txt_emergency_index"
                                       placeholder="Enter Student Index No">

                            </div>
                            </br>

                            <input type="submit" name="btn_emergency_searchindex"  button class="btn btn-block btn-primary"  value="Search" ></button>



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
        var x = document.forms["searchForm"]["txt_emergency_index"].value;
        if (x == null || x == "") {
            alert("Enter Student Index No !");
            return false;
        }
    }
</script>

<script type="text/javascript">
function validate(evt) {
var theEvent = evt || window.event;
var key = theEvent.keyCode || theEvent.which;
key = String.fromCharCode( txt_emergency_index );
var regex = /[0-9]|\./;
if( !regex.test(txt_emergency_index) ) {
theEvent.returnValue = false;
if(theEvent.preventDefault) theEvent.preventDefault();
}
}
</script>




<!--
<script type="text/javascript">
function validateForm()
{

var z = document.forms["searchForm"]["txtEmp_ID"].value;
if(!z.match(/^\d+/))
{
alert("Please only enter numeric characters only for your Age! (Allowed input:0-9)")
}
}

</script>
-->
