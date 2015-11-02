<div class="content-wrapper" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container">
        <h1>
            Marking Of Attendance <br><br>
        </h1>

            <form action="<?=base_url('index.php/controller_table/getAttenData'); ?>" method="post" >
                <input type="submit" name="submit_btn" value="List of Teachers" class="btn btn-primary">
            </form>

        </div>

        <br>
        <!--search-->
        <div class="col-sm-4">
            <form action="<?=base_url('index.php/controller_table/search'); ?>" method="post" >
            <div class="input-group">
                <input  type="number" class="form-control" placeholder="Search Signature Number" name="search">
                <div class="input-group-btn">
                    <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                </div>
            </div>
            </form>
            <br>
        </div>
    </section>


    <section class="content">
        <div class="container">
        <table class="table table-condensed">
            <thead>
            <tr>
                <th>Teacher ID</th>
                <th>Date</th>
                <th>Phone</th>
                <th>Attendance</th>
                <th>Name</th>
                <th>Signature No</th>
                <th>Mark As</th>

            </tr>
            </thead>
            <tbody>
            <?php foreach($result as $result): ?>
                <tr>

                    <td><?=$result['tid']; ?></td>
                    <td><?=$result['date']; ?></td>
                    <td><?=$result['tel']; ?></td>
                    <td><?=$result['p']; ?></td>
                    <td><?=$result['name']; ?></td>
                    <td><?=$result['signo']; ?></td>
                    <td><a href="<?php echo base_url('index.php/controller_table/updateAttendance?tid=').$result['tid']; ?>"><button type="button"  class="btn btn-primary">Absent</button></a></td>

                </tr>
            <?php endforeach; ?>
        </table>
    </div>
    </section>



</div><!-- /.content-wrapper -->
