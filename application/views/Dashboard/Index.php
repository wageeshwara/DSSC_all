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
                  <th>Chief Guest</th>
                   <th>View Budget</th>
                  <th>View</th>
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
                  <td><?php echo $object->ChiefGuest; ?></td>
                   <td><a href="<?php echo site_url('Budget/ViewBudget/'.$object->UId.'') ?>"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span></a></td>
                  <td><a href="<?php echo site_url('Event/ViewEvent/'.$object->UId.'') ?>"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span></a></td>
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
                  <th>Chief Guest</th>
                   <th>View Budget</th>
                  <th>View</th>
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