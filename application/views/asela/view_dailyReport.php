<div class="content-wrapper" xmlns="http://www.w3.org/1999/html">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container">
            <h1>
                Daily Report
            </h1>
        </div>

        <br>
        <div class="col-sm-4">
        <form action="<?=base_url('index.php/controller_table/dailyReport'); ?>" method="post" >
            <input type="date" name="date" value="" class="form-control "  ><br>
        </div>
            <div class="col-sm-4">
            <input type="submit" name="submit_btn" value="Search" class="btn btn-primary">
                </div>
            <br>
        </form>
            <br>


    </section>


    <section class="content">
        <div class="container">



            <table class="table table-condensed">
                <thead>
                <tr>
                    <th>Teacher ID</th>
                    <th>Signature No</th>
                    <th>Date</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Attendance</th>

                </tr>
                </thead>
                <tbody>
                <?php foreach($result as $result): ?>
                    <tr>

                        <td><?=$ind=$result['tid']; ?></td>
                        <td><?=$ind=$result['signo']; ?></td>
                        <td><?=$ind=$result['date']; ?></td>
                        <td><?=$ind=$result['name']; ?></td>
                        <td><?=$ind=$result['tel']; ?></td>
                        <td><?=$ind=$result['p']; ?></td>

                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </section>

</div><!-- /.content-wrapper -->