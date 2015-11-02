<?php
$this->load->view("Common/header");
?>
<!-- Content Wrapper. Contains page content -->

<div class="content-wrapper"> 
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1> Dashboard </h1>
  </section>
  
  <!-- Main content -->
  <section class="content"> 
    
    <!-- Small boxes (Stat box) --> 
    
    <!-- Main row -->
    <div class="row">
     
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Events List</h3>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="exampleModalLabel">Remove Event</h4>
                  </div>
                  <div class="modal-body">
                  
                  <?php

// Open form and set URL for submit form
echo form_open('Event/remove_data');
?>
                      <input type="hidden"  name="txtUId"/>
                      
                      
                        <p style="font-size:18px;">Are you sure about removing the record</p>
                     
                      <div class="form-group">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-default" name="submit"  id="submit" >Yes</button>
                      </div>
                       
         <?php echo form_close();?>
                  </div>
                  <div class="modal-footer"> </div>
                </div>
              </div>
            </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Event Date</th>
                <th>Event Name</th>
                <th>Venue</th>
                <th>Incharge</th>
                <th>President</th>
                 <th>Add Budget</th>
                <th>Edit</th>
                <th>Remove</th>
              </tr>
            </thead>
            <tbody>
              <?php   foreach($events as $object) { ?>
              <tr>
                <td><?php echo $object->EventDate; ?></td>
                <td><?php echo $object->EventName; ?></td>
                <td><?php echo $object->Venue; ?></td>
                <td><?php echo $object->Incharge; ?></td>
                <td><?php echo $object->President; ?></td>
                 <td><a href="<?php echo site_url('Budget/AddBudget/'.$object->UId.'/'.$object->President.'/'.$object->EventName.'') ?>"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a></td>
               
                <td><a href="<?php echo site_url('Event/EditEvent/'.$object->UId.'') ?>"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span></a></td>
                  <td>
                  
                  <button type="button" class="btn btn-primary" data-toggle="modal" id="submit_form" data-target="#exampleModal" data-whatever="<?php echo $object->UId; ?>"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span></button>
                  
                </td>
              </tr>
              <?php  }   ?>
            </tbody>
            <tfoot>
              <tr>
                <th>Event Date</th>
                <th>Event Name</th>
                <th>Venue</th>
                <th>Incharge</th>
                <th>President</th>
                
                <th>Edit</th>
                <th>Remove</th>
              </tr>
            </tfoot>
          </table>
        </div>
        <!-- /.box-body --> 
      </div>
      <!-- /.box --> 
    </div>
    
    <!-- /.row (main row) --> 
    
  </section>
  <!-- /.content --> 
</div>
<!-- /.content-wrapper -->
<?php
$this->load->view("Common/footer");
?>
