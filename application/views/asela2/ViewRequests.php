<div class="content-wrapper" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container">
            <h1>
                View Requests<br><br>
            </h1>

        </div>

    </section>


    <section class="content">
        <div class="container">
            <table class="table table-condensed">
                <thead>
                <tr>
                    <th>house ID</th>
                    <th>president</th>
                    <th>wise president</th>
                    <th>secretary</th>
                    <th>wise secretary</th>
                    <th>Mark As</th>

                </tr>
                </thead>
                <tbody>
                <?php foreach($result as $result): ?>
                    <tr>
                        <td><?=$result['houseID']; ?></td>
                        <td><?=$result['president']; ?></td>
                        <td><?=$result['wpresident']; ?></td>
                        <td><?=$result['secretary']; ?></td>
                        <td><?=$result['wsecretary']; ?></td>

                        <td><a href="<?php echo base_url('index.php/AcceptControllers/view?houseID=').$result['houseID']; ?>"><button type="button"  class="btn btn-danger">View</button></a></td>

                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </section>



</div><!-- /.content-wrapper -->
