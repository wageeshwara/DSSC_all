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
                <th>Event Name</th>
                <th>Society/Club Name</th>
                <th>Teacher in charge </th>
                <th> President of the club</th>
                <th>Treasurer of the club</th>
                
                
                <th>View</th>
               
              </tr>
            </thead>
            <tbody>
              <?php   foreach($budgets as $object) { ?>
              <tr><td><?php echo $object->EventName; ?></td>
                <td><?php echo $object->Society; ?></td>
                <td><?php echo $object->TeacherCharge; ?></td>
                <td><?php echo $object->President; ?></td>
                <td><?php echo $object->Treasurer; ?></td>
               
               
                <td><a href="<?php echo site_url('Budget/CertifyBudget/'.$object->UId.'') ?>"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span></a></td>
                
              </tr>
              <?php  }   ?>
            </tbody>
            <tfoot>
              <tr>
              <th>Event Name</th>
                <th>Society/Club Name</th>
                <th>Teacher in charge </th>
                <th> President of the club</th>
                <th>Treasurer of the club</th>
                
                
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
