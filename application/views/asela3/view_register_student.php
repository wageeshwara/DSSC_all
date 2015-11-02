<div class="content-wrapper" xmlns="http://www.w3.org/1999/html">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container">
            <h1>
                Register Student
            </h1>

        <br>
        <br>

        <div class="col-sm-4">

            <script>
            function check()
            {
                 if (!a.txtIndex.value)
                 {
                    alert ("Please Enter a Index Number!");
                    return (false);
                 }

                return (true);

            }
            </script>

            <form name="a"  action="<?=base_url('index.php/Controller_sport/getLableData');?>" method="post">
                <label for="usr">Index Number:</label>
                <input  type="number" name="txtIndex" class="form-control" id="txtIndexID" value="Index Number">
                <br>
                <input type="submit" value="Search" class="btn btn-primary" onclick="return check();">

            </form>

        </div>
        </div>

    </section>


    <section class="content">

    </section>

</div><!-- /.content-wrapper -->