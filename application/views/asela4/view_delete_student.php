<div class="content-wrapper" xmlns="http://www.w3.org/1999/html">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container">
            <h1>
                Delete Registered Details
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

                <form name="a"  action="<?=base_url('index.php/controller_sport/fill_delete_textbox');?>" method="post">
                    <label for="usr">Index Number:</label>
                    <input  type="number" name="txtIndex" class="form-control" id="txtIndexID" value="Index Number">

                    <br>

                    <label for="sel1">Select Sport:</label>
                    <select class="form-control" name="drpSport2" id="drp2" onclick="pay()" >
                        <option value="4">Cricket</option>
                        <option value="5">Football</option>
                        <option value="6">Swimming</option>
                        <option value="7">Rugby</option>
                        <option value="8">Hockey</option>
                    </select>
                    <br>
                    <input type="submit" value="Search" class="btn btn-primary" onclick="return check();">

                </form>

            </div>
        </div>

    </section>


    <section class="content">

    </section>

</div><!-- /.content-wrapper -->