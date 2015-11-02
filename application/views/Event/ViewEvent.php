<?php
$this->load->view("Common/header");
?> 
<div class="content-wrapper"> 
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1> View Event </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">View Event</li>
      </ol>
    </section>
    
    <!-- Main content -->
    <section class="content"> 
      <!-- Small boxes (Stat box) --> 
      
      <!-- Main row -->
      <div class="row">
        <?php


foreach($events as $object)
{
?>
        
        <!-- Left col --> 
        <!-- left column -->
        <div class="col-md-6"> 
          <!-- general form elements -->
          <div class="box box-primary"> 
            
            <!-- form start -->
            
            <div class="box-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Event Name</label>
                <p style="font-size:14px"><?php  echo $object->EventName; ?></p>
              </div>
              <hr/>
              <div class="form-group">
                <label>Date</label>
                <div class="input-group">
                 
                  <p style="font-size:14px"><?php  echo $object->EventDate; ?></p>
                </div>
                <!-- /.input group --> 
              </div>
              <!-- /.form group -->
              <hr/>
              <div class="form-group">
                <label for="exampleInputPassword1">Venue</label>
                <p style="font-size:14px"><?php  echo $object->Venue; ?></p>
              </div>
            </div>
            <!-- /.box-body --> 
            
          </div>
          <!-- /.box --> 
          
        </div>
        <!--/.col (left) -->
        <div class="col-md-6"> 
          <!-- general form elements -->
          <div class="box box-primary"> 
            
            <!-- form start -->
            
            <div class="box-body">
              <div class="form-group">
                <label for="exampleInputEmail1"> School society/club holding the event</label>
                <p style="font-size:14px"><?php echo $object->HoldLoc; ?></p>
              </div>
              <hr/>
              <div class="form-group">
                <label for="exampleInputPassword1">Teacher in charge</label>
                <p style="font-size:14px"><?php  echo $object->Incharge; ?></p>
              </div>
              <hr/>
              <div class="form-group">
                <label for="exampleInputPassword1">president of the society</label>
                <p style="font-size:14px"><?php  echo $object->President; ?></p>
              </div>
            </div>
            <!-- /.box-body --> 
            
          </div>
          <!-- /.box --> 
          
        </div>
        <!--/.col (left) -->
        <div class="col-md-12"> 
          <!-- general form elements -->
          <div class="box box-primary"> 
            
            <!-- form start -->
            
            <div class="box-body">
              <div class="form-group">
                <label for="exampleInputEmail1"> Cheif Guest</label>
                <p style="font-size:14px"><?php  echo $object->ChiefGuest;?></p>
              </div>
              <hr/>
              <div class="form-group">
                <label for="exampleInputPassword1">Expected Budget</label>
                <p style="font-size:14px"><?php  echo $object->ExpecBudget; ?></p>
              </div>
            </div>
            <!-- /.box-body --> 
            
          </div>
          <!-- /.box --> 
          
        </div>
        <!--/.col (left) -->
        
        <?php } ?>
      </div>
      
      <!-- /.row (main row) --> 
      
    </section>
    <!-- /.content --> 
  </div>
  <!-- /.content-wrapper -->
<?php
$this->load->view("Common/footer");
?> 