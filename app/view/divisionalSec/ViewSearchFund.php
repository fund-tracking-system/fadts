<?php include VIEW.'includes/header.php' ?>
<?php include VIEW.'includes/sidebar.php' ?>

<div class="all_bacground_clor">
    <div class="SearchByCriteriaform1">
    <fieldset class="tableBar">

    <div class="tbleMargin">



<h2 style="margin-top:20px;margin-bottom:30px;">Recipient List</h2>
<table id="resultTable" class="display nowrap">
    <thead>
        <tr>
            <th><B>Name </B></th>
            <th><B>description</B></th>
            <th><B>Region</B></th>
            <th><B>date</B></th>
            <th><B>Amount Per Person</B></th>
        </tr> 
    </thead>
    <tbody>
    <?php 
                $searchYear=$_SESSION['year'];
        foreach($_SESSION['fundSearch'] as $fund){   

        
                $date=$data['publishedTime'];
                $month = date("m",strtotime($date));

                $fundYear=date("y",strtotime($date));
                if($fundYear<$searchYear){

                

     ?>
        <tr>

             
             
             ?></td>
           
        </tr>

        <?php    } }
    
?>

    </tbody>

</table>
<div>









    </fieldset>


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
<?php include VIEW.'includes/footer.php' ?>