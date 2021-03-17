<?php include VIEW.'includes/header.php' ?>
<?php include VIEW.'includes/sidebar.php' ?>

<div class="all_bacground_clor">

    <div class="SearchByCriteriaform1">
        
        <form>
            <fieldset class="BackgroundFS">
                <h2>SELECTED PERSON LIST</h2>

                <fieldset class="tableBar">
                    <div class="tbleMargin">

                        <table id="resultTable" class="display">
                            <thead>
                                <tr>
                                    <th><B>NIC Number</B></th>
                                    <th><B>Name</B></th>
                                    <th><B>Address</B></th>
                                    <th><B>Phone Num.</B></th>
                                    <th><B>View</B></th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php foreach($_SESSION['personList'] as $person){ ?>
                                 <tr>
                                    <td><B style="margin-left:30%;"><?php echo $person['id']?></B></input>
                                    </td>
                                    <td><B style="margin-left:30%;"><?php echo $person['name']?></B></td>
                                    <td><B style="margin-left:30%;"><?php echo $person['address']?></B></td>
                                    <td><B style="margin-left:30%;"><?php echo $person['phone'] ?></B></td>
                                    <td><a href="/fadts/village/victimSelect?disasterId=<?php echo $disaster['disasterId'] ?>"
                                            class="btn btn-primary" style="margin-left:20%;"><B>ADD VICTIM</B></a>
                                    </td>
                                </tr>
                                <?php    } unset($_SESSION['personList']); ?>

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