<?php
$this->load->view("Common/header");
?>

<div class="content-wrapper">
  <section class="content"> 
    <!-- Small boxes (Stat box) --> 
    
    <!-- Main row -->
    <section class="content-header">
      <h1> Approve Budget </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Approve Budget</li>
      </ol>
    </section>
    <div class="row">
      <?php
if(isset($status))
{
	$state=$status;
	

?>
      <?php  if($state==1)
	   { ?>
      <div class="col-md-12">
        <div class="alert alert-success alert-dismissable">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <h4> <i class="icon fa fa-check"></i> Alert!</h4>
          The Record is successfully added. </div>
      </div>
      <?php  }
				  else
				  { ?>
      <div class="col-md-12">
        <div class="alert alert-danger alert-dismissable">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <h4><i class="icon fa fa-ban"></i> Alert!</h4>
          Error Occured. Please check the input. </div>
      </div>
      <?php  }
}?>
      <?php

// Open form and set URL for submit form
echo form_open('Budget/data_updated');
?>
      <?php


foreach($budget as $object)
{
?>
      <!-- Left col --> 
      <!-- left column --> 
      <div id="mydiv">
      <!--/.col (left) -->
      <div class="col-md-6"> 
        <!-- general form elements -->
        <div class="box box-primary"> 
          
          <!-- form start -->
          
          <div class="box-body">
            <div class="form-group">
              <label for="exampleInputPassword1">Event Name</label>
              <p style="font-size:14px">
                <?php  echo $object->EventName; ?>
              </p>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1"> School society/club holding the event</label>
              <?php 
			$data= array(
			'name' => 'u_uid',
		
			'style'=>'display:none;',
			
			'value'=>$object->UId
			); 
			echo form_input($data);?>
              <p style="font-size:14px">
                <?php  echo $object->Society; ?>
              </p>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Teacher in charge</label>
              <p style="font-size:14px">
                <?php  echo $object->TeacherCharge; ?>
              </p>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">president of the society</label>
              <p style="font-size:14px">
                <?php  echo $object->President; ?>
              </p>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Treasurer of the society</label>
              <p style="font-size:14px">
                <?php  echo $object->Treasurer; ?>
              </p>
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
                <p style="font-size:14px">
                  <?php  echo $object->RaMaterial; ?>
                </p>
                <!-- <input type="text" class="form-control" name="txtDate" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask required/>--> 
              </div>
              <!-- /.input group --> 
            </div>
            <div class="form-group">
              <label>Groceries</label>
              <div class="input-group">
                <p style="font-size:14px">
                  <?php  echo $object->Grocerie; ?>
                </p>
                <!-- <input type="text" class="form-control" name="txtDate" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask required/>--> 
              </div>
              <!-- /.input group --> 
            </div>
            <div class="form-group">
              <label>Labor payments</label>
              <div class="input-group">
                <p style="font-size:14px">
                  <?php  echo $object->Labor; ?>
                </p>
                <!-- <input type="text" class="form-control" name="txtDate" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask required/>--> 
              </div>
              <!-- /.input group --> 
            </div>
            <div class="form-group">
              <label>Refreshments</label>
              <div class="input-group">
                <p style="font-size:14px">
                  <?php  echo $object->Refreshment; ?>
                </p>
                <!-- <input type="text" class="form-control" name="txtDate" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask required/>--> 
              </div>
              <!-- /.input group --> 
            </div>
            <div class="form-group">
              <label>Media</label>
              <div class="input-group">
                <p style="font-size:14px">
                  <?php  echo $object->Media; ?>
                </p>
                <!-- <input type="text" class="form-control" name="txtDate" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask required/>--> 
              </div>
              <!-- /.input group --> 
            </div>
            <div class="form-group">
              <label>Transportation</label>
              <div class="input-group">
                <p style="font-size:14px">
                  <?php  echo $object->Transportation; ?>
                </p>
                <!-- <input type="text" class="form-control" name="txtDate" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask required/>--> 
              </div>
              <!-- /.input group --> 
            </div>
            <div class="form-group">
              <label>Printouts/Photocopy</label>
              <div class="input-group">
                <p style="font-size:14px">
                  <?php  echo $object->Printouts; ?>
                </p>
                <!-- <input type="text" class="form-control" name="txtDate" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask required/>--> 
              </div>
              <!-- /.input group --> 
            </div>
            <div class="form-group">
              <label>Gifts</label>
              <div class="input-group">
                <p style="font-size:14px">
                  <?php  echo $object->Gifts; ?>
                </p>
                <!-- <input type="text" class="form-control" name="txtDate" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask required/>--> 
              </div>
              <!-- /.input group --> 
            </div>
            <!-- /.form group -->
            
            <div class="form-group">
              <label for="exampleInputPassword1">Others</label>
              <p style="font-size:14px">
                <?php  echo $object->Others; ?>
              </p>
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
              <p style="font-size:14px">
                <?php  echo $object->TotalIncome; ?>
              </p>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Expected Total Expenses</label>
              <p style="font-size:14px">
                <?php  echo $object->TotalExpenses; ?>
              </p>
            </div>
          </div>
          <!-- /.box-body -->
          
          
        </div>
        <!-- /.box --> 
         </div>
      </div>
      <div class="box-footer"> 
          <input type="button" value="Print Div" class="btn btn-primary" onclick="PrintElem('#mydiv')" />
          </div>
      <!--/.col (left) -->
      <?php  } ?>
      <?php echo form_close();?> </div>
    
    <!-- /.row (main row) --> 
    
  </section>
  <!-- /.content --> 
</div>
<!-- /.content-wrapper -->
<?php
$this->load->view("Common/Script_footer");
?>
