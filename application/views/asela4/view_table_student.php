<div class="content-wrapper" xmlns="http://www.w3.org/1999/html">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container">
            <h1>
                Registered Students
            </h1>
        </div>

        <br>

            <form action="<?=base_url('index.php/controller_sport/get_SID_data_to_table'); ?>" method="post" >
                <div class="col-sm-4">
                <select class="form-control" name="drpSport5" id="drp" onclick="pay()" >
                    <option value="4">Cricket</option>
                    <option value="5">Football</option>
                    <option value="6">Swimming</option>
                    <option value="7">Rugby</option>
                    <option value="8">Hockey</option>
                </select>
        </div>
        <div class="col-sm-4">
            <input type="submit" name="submit_btn" value="Search Registered Students" class="btn btn-primary">
        </div>
        <br>
        </form>

        <br>

    </section>

    <section class="content">
        <div class="container">


            <br>

            <table class="table table-condensed">
                <thead>
                <tr>
                    <th align="center">Index No</th>
                    <th align="center">Name</th>
                    <th align="center">Date Of Enrolment</th>
                    <th align="center">phone No.</th>
                    <th align="center">Sport</th>
                    <th align="center">Amount Paid Balance</th>
                    <th align="center">Balance Outstanding</th>

                </tr>
                </thead>
                <tbody>

                <?php foreach($result as $result): ?>
                    <tr>

                        <td><?=$ind=$result['index_no']; ?></td>
                        <td><?=$ind=$result['name']; ?></td>
                        <td><?=$ind=$result['start_date']; ?></td>
                        <td><?=$ind=$result['phone']; ?></td>
                        <td><?=$ind=$result['sname']; ?></td>
                        <td><?=$ind=$result['paid']; ?></td>
                        <td><?=$ind=$result['balance']; ?></td>

                    </tr>
                <?php endforeach; ?>

            </table>
    </section>

            <div class="container">
                <form action="<?=base_url('index.php/controller_sport/get_balance_data_to_table'); ?>" method="post" >
                    <div class="col-sm-6">
                        <br>
                        <label >Students Liable For Payments:</label>
                        <input type="submit" name="submit_btn" value="Search" class="btn btn-primary">
                    </div>
                </form>



                <form action="<?=base_url('index.php/controller_sport/get_data_to_table'); ?>" method="post" >
                    <div class="col-sm-6">
                        <br>
                        <label>View All Registered Students:</label>
                        <input type="submit" name="submit_btn" value="Search" class="btn btn-primary">
                    </div>
                </form>
            </div>
    <br>

        </div>


</div><!-- /.content-wrapper -->