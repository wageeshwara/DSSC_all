  <footer class="main-footer">
    <div class="pull-right hidden-xs"> <b>Version</b> 2.0 </div>
    <strong>Copyright &copy; 2015.</strong> All rights reserved. </footer>
</div>
<!-- ./wrapper --> 

<!-- jQuery 2.1.3 -->
    <script src="<?= base_url()?>bootstrap/plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="<?= base_url()?>bootstrap/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- InputMask -->
    <script src="<?= base_url()?>bootstrap/plugins/input-mask/jquery.inputmask.js" type="text/javascript"></script>
    <script src="<?= base_url()?>bootstrap/plugins/input-mask/jquery.inputmask.date.extensions.js" type="text/javascript"></script>
    <script src="<?= base_url()?>bootstrap/plugins/input-mask/jquery.inputmask.extensions.js" type="text/javascript"></script>
    <!-- date-range-picker -->
    <script src="<?= base_url()?>bootstrap/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
    <!-- bootstrap color picker -->
    <script src="<?= base_url()?>bootstrap/plugins/colorpicker/bootstrap-colorpicker.min.js" type="text/javascript"></script>
    <!-- bootstrap time picker -->
    <script src="<?= base_url()?>bootstrap/plugins/timepicker/bootstrap-timepicker.min.js" type="text/javascript"></script>
    <!-- SlimScroll 1.3.0 -->
    <script src="<?= base_url()?>bootstrap/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- iCheck 1.0.1 -->
    <script src="<?= base_url()?>bootstrap/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='<?= base_url()?>bootstrap/plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url()?>bootstrap/dist/js/app.min.js" type="text/javascript"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?= base_url()?>bootstrap/dist/js/demo.js" type="text/javascript"></script>
    <!-- Page script -->
    <script type="text/javascript">
      $(function () {
        //Datemask dd/mm/yyyy
        $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
        //Datemask2 mm/dd/yyyy
        $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
        //Money Euro
        $("[data-mask]").inputmask();

        //Date range picker
        $('#reservation').daterangepicker();
        //Date range picker with time picker
        $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
        //Date range as a button
        $('#daterange-btn').daterangepicker(
                {
                  ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract('days', 1), moment().subtract('days', 1)],
                    'Last 7 Days': [moment().subtract('days', 6), moment()],
                    'Last 30 Days': [moment().subtract('days', 29), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract('month', 1).startOf('month'), moment().subtract('month', 1).endOf('month')]
                  },
                  startDate: moment().subtract('days', 29),
                  endDate: moment()
                },
        function (start, end) {
          $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
        );

        //iCheck for checkbox and radio inputs
        $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
          checkboxClass: 'icheckbox_minimal-blue',
          radioClass: 'iradio_minimal-blue'
        });
        //Red color scheme for iCheck
        $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
          checkboxClass: 'icheckbox_minimal-red',
          radioClass: 'iradio_minimal-red'
        });
        //Flat red color scheme for iCheck
        $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
          checkboxClass: 'icheckbox_flat-green',
          radioClass: 'iradio_flat-green'
        });

        //Colorpicker
        $(".my-colorpicker1").colorpicker();
        //color picker with addon
        $(".my-colorpicker2").colorpicker();

        //Timepicker
        $(".timepicker").timepicker({
          showInputs: false
        });
      });
	  
	  $(function() {
    //hang on event of form with id=myform
    $("#myform").submit(function(e) {
		 var inputDate = new Date($("#date-format").val());
		var todaysDate = new Date();

		if(inputDate.setHours(0,0,0,0) < todaysDate.setHours(0,0,0,0))
		{
			$("#myLabel").text("The Event Date should be future Date");
			e.preventDefault();
			}
		
        

    });

});
    </script>
    <script type="text/javascript">

    function PrintElem(elem)
    {
        Popup($(elem).html());
    }

    function Popup(data) 
    {
        var mywindow = window.open('', 'my div', 'height=400,width=800');
        mywindow.document.write('<html><head><title>my div</title>');
        /*optional stylesheet*/ //mywindow.document.write('<link rel="stylesheet" href="main.css" type="text/css" />');
        mywindow.document.write('</head><body >');
        mywindow.document.write(data);
        mywindow.document.write('</body></html>');

        mywindow.document.close(); // necessary for IE >= 10
        mywindow.focus(); // necessary for IE >= 10

        mywindow.print();
        mywindow.close();

        return true;
    }

var value, min=0, max=100000;

function isNumberPressed(k) {
    // 48-57 are number 0-9 on a normal keyboard, 96-105 are keypad numbers
    return (k > 47 && k < 58) || (k > 95 && k < 106) ? true : false;
}

function isValidNumber(v){
    // Check if a valid number is entered
    return (parseInt(v, 10) >= min && parseInt(v, 10) <= max) ? true : false;
}

$(document).ready(function() {
    $("#test").keydown(function(e) {
        // See if a valid key is pressed
        if(isNumberPressed(e.keyCode)){
            if(isValidNumber($(this).val())) value = $(this).val();
        } 
        // Do nothing if unallowed keys are pressed
        else if(e.keyCode != 46 && e.keyCode != 8) return false;
    }).keyup(function(){
        // If the value, including the latest number that's added, is not valid (to high or to low), show the old value again
        if(isValidNumber($(this).val()) == false){
            $(this).val(value);
        }
    });
});
</script>
</body>
</html>