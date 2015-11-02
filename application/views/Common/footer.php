  <footer class="main-footer">
    <div class="pull-right hidden-xs"> <b>Version</b> 2.0 </div>
    <strong>Copyright &copy; 2015.</strong> All rights reserved. </footer>
</div>
<!-- ./wrapper --> 

<!-- jQuery 2.1.3 --> 
<script src="<?= base_url()?>bootstrap/plugins/jQuery/jQuery-2.1.3.min.js"></script>
<!-- Bootstrap 3.3.2 JS --> 
<script src="<?= base_url()?>bootstrap/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<!-- DATA TABES SCRIPT --> 
<script src="<?= base_url()?>bootstrap/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
<script src="<?= base_url()?>bootstrap/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
<!-- SlimScroll --> 
<script src="<?= base_url()?>bootstrap/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<!-- FastClick --> 
<script src='<?= base_url()?>bootstrap/plugins/fastclick/fastclick.min.js'></script>
<!-- AdminLTE App --> 
<script src="<?= base_url()?>bootstrap/dist/js/app.min.js" type="text/javascript"></script>
<!-- AdminLTE for demo purposes --> 
<script src="<?= base_url()?>bootstrap/dist/js/demo.js" type="text/javascript"></script>
<!-- page script --> 
<script type="text/javascript">
      $(function () {
        $("#example1").dataTable();
        $('#example2').dataTable({
          "bPaginate": true,
          "bLengthChange": false,
          "bFilter": false,
          "bSort": true,
          "bInfo": true,
          "bAutoWidth": false
        });
      });
	  
	  $('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('whatever') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-title').text('Remove Event ')
  modal.find('.modal-body input').val(recipient)
 

        
})
 
    </script>
</body>
</html>