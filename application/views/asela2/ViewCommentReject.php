<div class="content-wrapper" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
    <!-- Content Header (Page header) -->
    <section class="content-header">

        <h1>
            Comment <br> <br>
        </h1>

        <form name="a" action="<?=base_url('index.php/AcceptControllers/addCommentReject');?>" method="get">

            <div class="row">
                <div class="col-sm-6">
                    House name:<br>
                    <input type="text"  name="houseName" id="house" size="40"  value="<?php if($houseID == 1){echo "Shura";} elseif($houseID == 2){echo "Meththa";} elseif($houseID == 3) {echo "Weera";} elseif($houseID == 4){echo "shantha";} ; ?>" readonly> &nbsp; &nbsp;
                    <br><br>
                    House ID:<br>
                    <input type="text"  name="houseID" id="house" size="40"  value="<?php echo $houseID; ?>" readonly> &nbsp; &nbsp;
                    <br><br>
                    <label for="comment">Comment:</label>
                    <textarea class="form-control" name="comment" rows="5" id="comment"></textarea>
                    <br><br>
                    <input id="submit" name="submit" class="btn btn-success" type="submit" value="Submit"  onclick="return check();" > &nbsp; &nbsp;
                    <button type="button" name="btn10" id="btn10" class="btn btn-warning">Cancel</button>
                </div>
            </div>

        </form>


    </section>

</div><!-- /.content-wrapper -->
