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
                                    <th style="text-align: left;"><B>Person Full Name</B></th>
                                    <th><B>Address</B></th>
                                    <th><B>Region</B></th>
                                    <th><B>Contact</B></th>
                                    <th><B>View</B></th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php foreach($_SESSION['personList'] as $person){ 
                                    $pid = $person['personId'];
                                ?>
                                 <tr>
                                    <td style="margin-left:30%;text-align: left;"><B><?php echo $person['nid']?></B></input>
                                    </td>
                                    <td style="margin-left:30%;text-align: left;"><B><?php echo $person['name']?></B></td>
                                    <td style="margin-left:30%;text-align: left;"><B><?php echo $person['address']?></B></td>
                                    <td style="margin-left:30%;text-align: left;"><B><?php echo $person['Rname']?></B></td>
                                    <td style="margin-left:30%;text-align: left;"><B><?php echo $person['phone']?></B></td>
                                    
                                    <td><a href="/fadts/village/personDetailsModel?pid=<?php echo $pid ?>&view=criteriaResult" class="btn btn-primary" style="margin-left:20%">VIEW</a>
                                    </td>
                                    </form>
                                </tr>
                                <?php    } //unset($_SESSION['personList']); ?>

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
    $("#resultTable").DataTable({
        dom: 'Bfrtip',
        buttons: [
        'print','pdf'
    ]
    });
});
</script>

<?php include VIEW.'includes/footer.php'?>