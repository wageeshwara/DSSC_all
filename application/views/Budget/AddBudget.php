<?php
$this->load->view("Common/header");
?>
<div class="content-wrapper"> 
<section class="content">
  <!-- Small boxes (Stat box) -->
  
  <!-- Main row -->
  <section class="content-header">
      <h1> Add Event </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Add Budget</li>
      </ol>
    </section>
  <div class="row">
    <?php
if(isset($status))
{
	$state=$status;
	

?>
       <?php  if($state==1)
	   { ?> <div class="col-md-12">
      <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h4>	<i class="icon fa fa-check"></i> Alert!</h4>
                    The Record is successfully added.
                  </div> </div>
                  <?php  }
				  else
				  { ?>
                   <div class="col-md-12">
                   <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                    Error Occured. Please check the input.
                  </div>
                   </div>
                  <?php  }
}?>
    <?php

// Open form and set URL for submit form
echo form_open('Budget/data_submitted');
?>
   
      <!-- Left col --> 
      <!-- left column -->
      
      <!--/.col (left) -->
      <div class="col-md-6"> 
        <!-- general form elements -->
        <div class="box box-primary"> 
          
          <!-- form start -->
          
          <div class="box-body">
          <div class="form-group">
              <label for="exampleInputEmail1">Event Name</label>
            <?php 
			$data= array(
			'name' => 'u_name',
			'placeholder' => 'Please Enter Event Name',
			'class' => 'form-control',
			'required'=>'required',
			'value'=>$EventName,
			'Disabled'=>true
			); 
			echo form_input($data);?>
            
            </div>
            <div class="form-group">
             <?php 
			$data= array(
			'name' => 'event_uid',
		
			'style'=>'display:none;',
			
			'value'=>$EventID
			); 
			echo form_input($data);?>
              <label for="exampleInputEmail1"> School society/club holding the event</label>
                 <?php 
			$data= array(
			'name' => 'u_school',
			'placeholder' => 'School society/club',
			'class' => 'form-control',
			'required'=>'required'
			
			); 
			echo form_input($data);?>
            
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Teacher in charge</label>
                <?php 
			$data= array(
			'name' => 'u_teacher',
			'placeholder' => 'Incharge Teacher',
			'class' => 'form-control',
			'required'=>'required'
			
			); 
			echo form_input($data);?>
             
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">president of the society</label>
               <?php 
			$data= array(
			'name' => 'u_president',
			'placeholder' => 'President',
			'class' => 'form-control',
			'required'=>'required',
			'value'=>$President,
			'Disabled'=>true
			
			); 
			echo form_input($data);?>
            
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Treasurer of the society</label>
               <?php 
			$data= array(
			'name' => 'u_treasurer',
			'placeholder' => 'Treasurer',
			'class' => 'form-control',
			'required'=>'required'
			
			); 
			echo form_input($data);?>
            
            </div>
          </div>
          <!-- /.box-body --> 
          
        </div>
        <!-- /.box --> 
        
      </div>
      <div class="col-md-6"> 
        <!-- general form elements -->
        <div class="box box-primary"> 
          
          <!-- form start -->
          
          <div class="box-body">
            <h3>Expenses</h3>
            <div class="form-group">
              <label>Raw materials</label>
              <div class="input-group">
                <div class="input-group-addon"> <i class="fa fa-calendar"></i> </div>
                <?php 
			$data= array(
			'name' => 'u_raw',
			'placeholder' => 'Please Enter Raw materials',
			'class' => 'form-control',
			'required'=>'required',
			'type'=>'number',
			'id'=>'test'
			
			
			); 
			echo form_input($data);?>
               <!-- <input type="text" class="form-control" name="txtDate" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask required/>-->
              </div>
              <!-- /.input group --> 
            </div>
            <div class="form-group">
              <label>Groceries</label>
              <div class="input-group">
                <div class="input-group-addon"> <i class="fa fa-calendar"></i> </div>
                <?php 
			$data= array(
			'name' => 'u_groceries',
			'placeholder' => 'Please Enter Groceries',
			'class' => 'form-control',
			'required'=>'required',
			'type'=>'number',
			'id'=>'test'
			
			); 
			echo form_input($data);?>
               <!-- <input type="text" class="form-control" name="txtDate" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask required/>-->
              </div>
              <!-- /.input group --> 
            </div>
            <div class="form-group">
              <label>Labor payments</label>
              <div class="input-group">
                <div class="input-group-addon"> <i class="fa fa-calendar"></i> </div>
                <?php 
			$data= array(
			'name' => 'u_labor',
			'placeholder' => 'Please Enter Labor payments',
			'class' => 'form-control',
			'required'=>'required'
			
			); 
			echo form_input($data);?>
               <!-- <input type="text" class="form-control" name="txtDate" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask required/>-->
              </div>
              <!-- /.input group --> 
            </div>
            <div class="form-group">
              <label>Refreshments</label>
              <div class="input-group">
                <div class="input-group-addon"> <i class="fa fa-calendar"></i> </div>
                <?php 
			$data= array(
			'name' => 'u_refreshments',
			'placeholder' => 'Please Enter Refreshments',
			'class' => 'form-control',
			'required'=>'required'
			
			); 
			echo form_input($data);?>
               <!-- <input type="text" class="form-control" name="txtDate" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask required/>-->
              </div>
              <!-- /.input group --> 
            </div>
            <div class="form-group">
              <label>Media</label>
              <div class="input-group">
                <div class="input-group-addon"> <i class="fa fa-calendar"></i> </div>
                <?php 
			$data= array(
			'name' => 'u_media',
			'placeholder' => 'Please Enter Media',
			'class' => 'form-control',
			'required'=>'required'
			
			); 
			echo form_input($data);?>
               <!-- <input type="text" class="form-control" name="txtDate" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask required/>-->
              </div>
              <!-- /.input group --> 
            </div>
            <div class="form-group">
              <label>Transportation</label>
              <div class="input-group">
                <div class="input-group-addon"> <i class="fa fa-calendar"></i> </div>
                <?php 
			$data= array(
			'name' => 'u_transportation',
			'placeholder' => 'Please Enter Transportation',
			'class' => 'form-control',
			'required'=>'required'
			
			); 
			echo form_input($data);?>
               <!-- <input type="text" class="form-control" name="txtDate" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask required/>-->
              </div>
              <!-- /.input group --> 
            </div>
            <div class="form-group">
              <label>Printouts/Photocopy</label>
              <div class="input-group">
                <div class="input-group-addon"> <i class="fa fa-calendar"></i> </div>
                <?php 
			$data= array(
			'name' => 'u_photoscopy',
			'placeholder' => 'Please Enter Printouts/Photocopy',
			'class' => 'form-control',
			'required'=>'required'
			
			); 
			echo form_input($data);?>
               <!-- <input type="text" class="form-control" name="txtDate" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask required/>-->
              </div>
              <!-- /.input group --> 
            </div>
            <div class="form-group">
              <label>Gifts</label>
              <div class="input-group">
                <div class="input-group-addon"> <i class="fa fa-calendar"></i> </div>
                <?php 
			$data= array(
			'name' => 'u_gifts',
			'placeholder' => 'Please Enter Gifts',
			'class' => 'form-control',
			'required'=>'required'
			
			); 
			echo form_input($data);?>
               <!-- <input type="text" class="form-control" name="txtDate" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask required/>-->
              </div>
              <!-- /.input group --> 
            </div>
            <!-- /.form group -->
            
            <div class="form-group">
              <label for="exampleInputPassword1">Others</label>
                <?php 
			$data= array(
			'name' => 'u_other',
			'placeholder' => 'Please Enter Others',
			'class' => 'form-control',
			'required'=>'required'
			
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
              <label for="exampleInputPassword1">Expected Total income</label>
               <?php 
			$data= array(
			'name' => 'u_expect_total_income',
			'placeholder' => 'Expected Total income',
			'class' => 'form-control',
			'required'=>'required'
			
			); 
			echo form_input($data);?>
              
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Expected Total Expenses</label>
               <?php 
			$data= array(
			'name' => 'u_total_budget',
			'placeholder' => 'Expected Total Expenses',
			'class' => 'form-control',
			'required'=>'required'
			
			); 
			echo form_input($data);?>
              
            </div>
          </div>
          <!-- /.box-body -->
          
          <div class="box-footer">
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
          </div>
        </div>
        <!-- /.box --> 
        
      </div>
      <!--/.col (left) -->
    
    <?php echo form_close();?>
  </div>
  
  <!-- /.row (main row) --> 
  
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php
$this->load->view("Common/Script_footer");
?>
