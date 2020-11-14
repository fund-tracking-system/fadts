<?php include VIEW.'includes/header.php' ?>
<?php include VIEW.'includes/sidebar.php' ?>

<div class="all_bacground_clor">

    <div class="SearchByCriteriaform1">

        <form>
            <fieldset class="BackgroundFS">
                <h2>SELECT FUND </h2>

            <fieldset class="tableBar">
                <div class="tbleMargin">

                    <table id="resultTable" class="display nowrap">
                        <thead>
                            <tr>
                                <th><B>Fund Name</B></th>
                                <th><B>Amount Per-Person(Rs)</B></th>
                                <th><B>Published Date</B></th>
                                <th><B>View</B></th>
                            </tr>
                        </thead>

                        <tbody>

                            <tr>
                                <td><B>Corona Fund(May)</B></td>
                                <td><B>5000.00</B></td>
                                <td><B>2020-05-22</B></td>
                                <td><a class="btn btn-primary" style="margin-left:40%;"><B>VIEW</B></a>
                                </td>
                            </tr>
                            <tr>
                                <td><B>Drought Fund(August)</B></td>
                                <td><B>3500.00</B></td>
                                <td><B>2020-08-02</B></td>
                                <td><a class="btn btn-primary" style="margin-left:40%;"><B>VIEW</B></a>
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