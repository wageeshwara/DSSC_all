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

// Open form and set URL for submit form
echo form_open('Event/data_updated');
?>
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
               
                
			    <?php 
			$data= array(
			'name' => 'u_uid',
		
			'style'=>'display:none;',
			
			'value'=>$object->UId
			); 
			echo form_input($data);?>
				
                   <?php 
			$data= array(
			'name' => 'u_name',
			'placeholder' => 'Enter Event Name',
			'class' => 'form-control',
			'required'=>'required',
			'value'=>$object->EventName
			); 
			echo form_input($data);?>
             
              </div>
              <hr/>
              <div class="form-group">
                <label>Date</label>
                <div class="input-group">
                 <div class="input-group-addon"> <i class="fa fa-calendar"></i> </div>
                <?php 
			$data= array(
			'name' => 'u_date',
			'placeholder' => 'Please Enter Event Date',
			'class' => 'form-control',
			'required'=>'required',
			'data-inputmask'=>"'alias': 'dd/mm/yyyy'",
			'data-mask'=>'data-mask',
			'value'=>$object->EventDate
			); 
			echo form_input($data);?>
                
                </div>
               
                <!-- /.input group --> 
              </div>
              <!-- /.form group -->
              <hr/>
              <div class="form-group">
                <label for="exampleInputPassword1">Venue</label>
                    <?php 
			$data= array(
			'name' => 'u_venue',
			'placeholder' => 'Please Enter Event Venue',
			'class' => 'form-control',
			'required'=>'required',
			'value'=>$object->Venue
			
			); 
			echo form_input($data);?>
               
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
                  <?php 
			$data= array(
			'name' => 'u_hold',
			'placeholder' => 'School society/club',
			'class' => 'form-control',
			'required'=>'required',
			'value'=>$object->HoldLoc
			
			); 
			echo form_input($data);?>
                
                
              
              </div>
              <hr/>
              <div class="form-group">
                <label for="exampleInputPassword1">Teacher in charge</label>
                <?php 
			$data= array(
			'name' => 'u_teacher',
			'placeholder' => 'Incharge Teacher',
			'class' => 'form-control',
			'required'=>'required',
			'value'=>$object->Incharge
			
			); 
			echo form_input($data);?>
               
              </div>
              <hr/>
              <div class="form-group">
                <label for="exampleInputPassword1">president of the society</label>
                  <?php 
			$data= array(
			'name' => 'u_president',
			'placeholder' => 'President',
			'class' => 'form-control',
			'required'=>'required',
			'value'=>$object->President
			
			); 
			echo form_input($data);?>
                
            
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
                <?php 
			$data= array(
			'name' => 'u_guest',
			'placeholder' => 'Chief Guest',
			'class' => 'form-control',
			'required'=>'required',
			'value'=>$object->ChiefGuest
			
			); 
			echo form_input($data);?>
                
              
              </div>
              <hr/>
              <div class="form-group">
                <label for="exampleInputPassword1">Expected Budget</label>
                  <?php 
			$data= array(
			'name' => 'u_budget',
			'placeholder' => 'Budget',
			'class' => 'form-control',
			'required'=>'required',
			'value'=>$object->ExpecBudget
			
			); 
			echo form_input($data);?>
                
               
          <div class="box-footer">
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
          </div>
              </div>
            </div>
            <!-- /.box-body --> 
            
          </div>
          <!-- /.box --> 
          
        </div>
        <!--/.col (left) -->
        
        <?php } ?>
         <?php echo form_close();?>
      </div>
      
      <!-- /.row (main row) --> 
      
    </section>
    <!-- /.content --> 
  </div>
  <!-- /.content-wrapper -->
<?php
$this->load->view("Common/footer");
?> 