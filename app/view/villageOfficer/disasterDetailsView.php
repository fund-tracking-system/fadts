<?php include VIEW.'includes/header.php' ?>
<?php include VIEW.'includes/sidebar.php' ?>

<div class="all_bacground_clor">

    <div class="SearchByCriteriaform1">

        <form>
            <fieldset class="BackgroundFS">
                <h2>SELECT DISASTER</h2>
            <fieldset class="tableBar">
                <div class="tbleMargin">
                    <table id="resultTable" style="table-layout:fixed" class="display" >
                        <thead>
                            <tr>
                                <th><B>Disaster Name</B></th>
                                <th><B>Date</B></th>
                                <th><B>Affected Areas</B></th>
                                <th><B>Action</B></th>
                            </tr>
                        </thead>

                        <tbody>

                            <tr>
                                <td><B>Tsunami 2004</B></td>
                                <td><B>2004-12-26</B></td>
                                <td><B>southern,eastern and northern provices</B></td>
                                <td><a href="" class="btn btn-primary" style="margin-left:20%"><B>VIEW DISASTER</B></a>
                                </td>
                            </tr>
                            <tr>
                                <td><B>Flood 2003</B></td>
                                <td><B>2003-06-26</B></td>
                                <td><B>Whole Island</B></td>
                                <td><a href="" class="btn btn-primary" style="margin-left:20%"><B>VIEW DISASTER</B></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                 <div>
                </fieldset>           
            </fieldset>
        </form>


    </div>
</div>




<script>
$(document).ready(function() {
    $("#resultTable").DataTable();
});
</script>

<?php include VIEW.'includes/footer.php'?>