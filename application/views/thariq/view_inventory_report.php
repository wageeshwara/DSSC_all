<!DOCTYPE html>

<div class="content-wrapper" xmlns="http://www.w3.org/1999/html">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Inventory Control

        </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Main row -->
        <div class="row">
            <!-- Left col -->
            <form action="<?= site_url('printController_t/inventory_select'); ?>" method="post" name="searchForm" onsubmit="return validateForm()">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Print Inventory Report</h3>
                    </div>
                    <div class="box-body">
                        <section class="col-md-4 ">
                            <!-- Input addon -->

                            </br></br></br>

                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input type="number" class="form-control" name="txtitem_Id"
                                       placeholder="Enter Item ID">

                            </div>
                            </br>

                            <input type="submit" name="btn_search"  button class="btn btn-block btn-primary"  value="Generate Report" ></button>



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
        var x = document.forms["searchForm"]["txtitem_Id"].value;
        if (x == null || x == "") {
            alert("Enter Item ID !");
            return false;
        }
    }
</script>

<script type="text/javascript">
function validate(evt) {
var theEvent = evt || window.event;
var key = theEvent.keyCode || theEvent.which;
key = String.fromCharCode( txtitem_Id );
var regex = /[0-9]|\./;
if( !regex.test(txtitem_Id) ) {
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
