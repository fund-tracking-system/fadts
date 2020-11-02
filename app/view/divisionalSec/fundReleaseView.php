<?php include VIEW.'includes/header.php' ?>
<?php include VIEW.'includes/sidebar.php' ?>


<div class="all_bacground_clor">

   <div class="SearchByCriteriaform1">

      <form method="post" action="/fadts/divisional/nicSearchModel" id="fundReleaseSearch">

         <fieldset class="BackgroundFS">

            <h2>ALTERNATE FUND RELEASE</h2>

            <fieldset class="searchBar">
               <div class="form-row ">
                  <label for="NID-number" class="searchBarLable"><b>NIC Number:</b></label>
                  <input class="form-control searchInput" id='NID-number' placeholder="Type NIC here"
                     name="nic"></input>
                  <button type="submit" name="nicSubmit" class="btn btn-primary btnNav">Search</button>
               </div>
            </fieldset>

         </fieldset>

      </form>

      <form>
         <fieldset class=" BackgroundFS">
            <div class="tbleMargin">
               
               <?php if(isset($_GET['result'])){ 
                        $row = $_GET['result'];
               ?>
               <table id="resultTable" class="display nowrap">
                  <thead>
                  <tr>
                     <th><B>Fund Name</B></th>
                     <th><B>Amount</B></th>
                     <th><B>Action</B></th>
                  </tr>
                  </thead>

                  <?php while($row){?>   

                  <tbody>
                  <tr>
                     <td>Alfreds Futterkiste</td>
                     <td>Disabled </td>
                     <td><button type="submit" name="release" class="btn btn-primary">Release</button></td>
                  </tr>
                  </tbody>

                  <?php } ?>

                  <tfoot>
                  <tr>
                     <th><B>Fund Name</B></th>
                     <th><B>Amount</B></th>
                     <th><B>Action</B></th>
                  </tr>
                  </tfoot>

                  <?php //if(count($posts)>0):?>
                <?php //foreach($posts as $post):?>
                <tr>
                    <th><?php //echo $post->title;?></th>
                    <td><?php //echo $post->text;?></td>
                    <td><?php //echo $post->date;?></td>
                    <td>
                        <?php //echo anchor("Admin/viewSingle/{$post->id}",'View',['class'=>'badge badge-success']); ?>
                        <?php //echo anchor("Admin/update/{$post->id}",'Update',['class'=>'badge badge-warning']); ?>
                        <?php //echo anchor("Admin/delete/{$post->id}",'Delete',['class'=>'badge badge-danger']); ?>
                    </td>
                </tr>
                <?php //endforeach;?>
                <?php //else: ?>
                <tr>
                    <td>No Records Found!</td>
                </tr>
                <?php //endif; ?>

               </table>

               <?php } ?>

         </fieldset>
   </div>
   </form>
</div>
</div>

<script>
$(document).ready(function() {
   $("#resultTable").DataTable();
});
</script>

<?php include VIEW.'includes/footer.php' ?>