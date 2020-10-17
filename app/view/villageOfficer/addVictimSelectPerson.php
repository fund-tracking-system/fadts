<?php include VIEW.'header.php' ?>
<?php include VIEW.'villageOfficer/sidebar.php' ?>

<div class="all_bacground_clor">
    <div class="SearchByCriteriaform1">


      <form>
      <fieldset class="BackgroundFS">
               <h2>Add People Victimes Form</h2>


               <div class="form-row">
                  <label for="person-id" class="inputLable"><b>Person ID:</b></label>
                  <input class="form-control Input" id="person-id"placeholder="972810177v" ></input>
               </div>


               <div class="form-row">
                  <label for="name" class="inputLable"><b>Size of Damage:</b></label>
                  <input class="form-control Input" id="damage-amount"></input>
               </div>
               <div class="form-row">
                  <label for="name" class="inputLable"><b>Location:</b></label>
                  <input class="form-control Input" id="location"></input>
               </div>
               <div class="form-row">
                  <label for="name" class="inputLable"><b>Description:</b></label>
                  <textarea class="form-control Input txtWidth " id="description"></textarea>
               </div>


               <button type="submit" class="btn btn-primary siz">Add Person</button>
            </fieldset>
      
      </form>
   </div>

</div>

<?php include VIEW.'footer.php' ?>