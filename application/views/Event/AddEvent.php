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
$attributes = array('id' => 'myform');
// Open form and set URL for submit form
echo form_open('Event/data_submitted', $attributes);
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
			'name' => 'u_name',
			'placeholder' => 'Please Enter Event Name',
			'class' => 'form-control',
			'required'=>'required'
			); 
			echo form_input($data);?>
            
            </div>
            <div class="form-group">
              <label>Date</label>
              <div class="input-group">
                <div class="input-group-addon"> <i class="fa fa-calendar"></i> </div>
                <?php 
			$data= array(
			'name' => 'u_date',
			'placeholder' => 'Please Enter Event Date',
			'class' => 'form-control',
			'id' => 'date-format',
			'required'=>'required',
			'data-inputmask'=>"'alias': 'dd/mm/yyyy'",
			'data-mask'=>'data-mask'
			); 
			echo form_input($data);?>
            <label id="myLabel" style="color:#F00"></label>
               <!-- <input type="text" class="form-control" name="txtDate" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask required/>-->
              </div>
              <!-- /.input group --> 
            </div>
            <!-- /.form group -->
            
            <div class="form-group">
              <label for="exampleInputPassword1">Venue</label>
                <?php 
			$data= array(
			'name' => 'u_venue',
			'placeholder' => 'Please Enter Event Venue',
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
              <label for="exampleInputEmail1"> Cheif Guest</label>
               <?php 
			$data= array(
			'name' => 'u_guest',
			'placeholder' => 'Chief Guest',
			'class' => 'form-control',
			'required'=>'required'
			
			); 
			echo form_input($data);?>
            
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Expected Budget</label>
               <?php 
			$data= array(
			'name' => 'u_budget',
			'placeholder' => 'Budget',
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
