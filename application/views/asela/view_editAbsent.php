<div class="content-wrapper" xmlns="http://www.w3.org/1999/html">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container">
            <h1>
                Edit Today Absent List
            </h1>
        </div>

        <br>
        <!--search-->
        <div class="col-sm-4">
            <form action="<?=base_url('index.php/controller_table/searchEditAbsent'); ?>" method="post" >
                <div class="input-group">
                    <input  type="number" class="form-control" placeholder="Search Signature Number" name="search2">
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

                        <td><?=$ind=$result['tid']; ?></td>
                        <td><?=$ind=$result['date']; ?></td>
                        <td><?=$ind=$result['tel']; ?></td>
                        <td><?=$ind=$result['p']; ?></td>
                        <td><?=$ind=$result['name']; ?></td>
                        <td><?=$ind=$result['signo']; ?></td>
                        <td><a href="<?php echo base_url('index.php/controller_table/upAbsent?tid=').$result['tid']; ?>"><button type="button"  class="btn btn-primary">Present</button></a></td>

                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </section>

</div><!-- /.content-wrapper -->