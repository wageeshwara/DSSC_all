<div class="content-wrapper" xmlns="http://www.w3.org/1999/html">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container">
            <h1>
                Select Student<br>
            </h1>
        </div>

        <br>
        <!--search-->
        <div class="col-sm-4">
            <form action="<?=base_url('index.php/SportsMeetController/GetSelectStudent'); ?>" method="post" >
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
                    <th>index_no</th>
                    <th>name</th>
                    <th>address</th>
                    <th>parent</th>
                    <th>phone</th>


                </tr>
                </thead>
                <tbody>
                <?php foreach($result as $result): ?>
                    <tr>

                        <td><?=$ind=$result['index_no']; ?></td>
                        <td><?=$ind=$result['name']; ?></td>
                        <td><?=$ind=$result['address']; ?></td>
                        <td><?=$ind=$result['parent']; ?></td>
                        <td><?=$ind=$result['phone']; ?></td>
                        <td><a href="<?php echo base_url('index.php/SportsMeetController/upPresent?name=').$result['name']; ?>"><button type="button"  class="btn btn-primary">Select</button></a></td>

                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </section>

</div><!-- /.content-wrapper -->