<?php
 
$controller = $_SESSION['controller'];

switch($controller){

   case "audit": // auditor's sidebar elements
?>

<div class="dashboard sidebar">
   <!-- <a href="#" class="dashboard sidebar_link">
      <span class="material-icons">home</span>Home
   </a> -->
   <a href="/fadts/audit/officerHistoryView" class="dashboard sidebar_link">
      <span class="material-icons">corporate_fare</span>View Officer History
   </a>
   <a href="/fadts/audit/ViewDisasterDetails" class="dashboard sidebar_link">
      <span class="material-icons">corporate_fare</span>View Disaster Details
   </a>
   <a href="/fadts/audit/ViewFundDetails" class="dashboard sidebar_link">
      <span class="material-icons">corporate_fare</span>View Fund
   </a>
   <a href="/fadts/audit/ViewSearchPeople" class="dashboard sidebar_link">
      <span class="material-icons">corporate_fare</span>Search People Data
   </a>
   <a href="/fadts/audit/viewHistoryRecord" class="dashboard sidebar_link">
      <span class="material-icons">corporate_fare</span>View History Records
   </a>
   <a href="#" class="dashboard sidebar_link">
      <span class="material-icons">help_center</span>Help
   </a>
   <a href="/fadts/home/index" class="dashboard sidebar_link">
      <span class="material-icons">exit_to_app</span>Logout
   </a>
</div>

<?php

   break;

   case "divisional":  // divisional secretary's sidebar elements 
   
?>

<div class="dashboard sidebar">
   <a href="/fadts/divisional/ViewAddPeople" class="dashboard sidebar_link">
      <span class="material-icons">person_add</span>Add People Data
   </a>
   <a href="/fadts/divisional/updatePeople" class="dashboard sidebar_link">
      <span class="material-icons">person</span>Update People Data
   </a>
   <a href="/fadts/divisional/ViewSearchBycriteria" class="dashboard sidebar_link">
      <span class="material-icons">person_search</span>Search People Data
   </a>
   <a href="/fadts/divisional/ViewFundDetailsModel" class="dashboard sidebar_link">
      <span class="material-icons">menu_book</span>View Fund Details
   </a>
   <a href="/fadts/divisional/fundRelease" class="dashboard sidebar_link">
      <span class="material-icons">post_add</span>Alternate Fund Release
   </a>
   <a href="/fadts/divisional/ViewAddNewDisaster" class="dashboard sidebar_link">
      <span class="material-icons">create_new_folder</span>Add  New Disaster
   </a>
   <a href="/fadts/divisional/ViewDisasterDetails" class="dashboard sidebar_link">
      <span class="material-icons">menu_book</span>Disaster Details
   </a>
   <a href="#" class="dashboard sidebar_link">
      <span class="material-icons">help_center</span>Help
   </a>
   <a href="/fadts/home/index" class="dashboard sidebar_link">
      <span class="material-icons">exit_to_app</span>Logout
   </a>
</div>

<?php 

   break; 

   case "ministry":  // ministry's sidebar elements
   
?>

<div class="dashboard sidebar">
   <!-- <a href="#" class="dashboard sidebar_link">
      <span class="material-icons">home</span>Home
   </a> -->
   <a href="/fadts/ministry/addOfficerView" class="dashboard sidebar_link">
      <span class="material-icons">corporate_fare</span>Add Officer
   </a>
   <a href="/fadts/ministry/ViewUpdateOfficer" class="dashboard sidebar_link">
      <span class="material-icons">corporate_fare</span>Update Officer
   </a>
   <a href="/fadts/ministry/ViewCreateFund" class="dashboard sidebar_link">
      <span class="material-icons">corporate_fare</span>Create Fund
   </a>
   <a href="/fadts/ministry/viewAdddPeopleToFundElighibleList" class="dashboard sidebar_link">
      <span class="material-icons">corporate_fare</span>Add People to Fund Eligible List
   </a>
   <a href="/fadts/ministry/viewFund" class="dashboard sidebar_link">
      <span class="material-icons">corporate_fare</span>View Fund
   </a>   
   <a href="/fadts/ministry/viewPeople" class="dashboard sidebar_link">
      <span class="material-icons">corporate_fare</span>Search People Data
   </a>
   <a href="/fadts/ministry/ViewAddNewDisaster" class="dashboard sidebar_link">
      <span class="material-icons">corporate_fare</span>Add New Disaster
   </a>
   <a href="/fadts/ministry/ViewDisasterDetails" class="dashboard sidebar_link">
      <span class="material-icons">corporate_fare</span>View Disaster Details
   </a>
   <a href="#" class="dashboard sidebar_link">
      <span class="material-icons">help_center</span>Help
   </a>
   <a href="/fadts/home/index" class="dashboard sidebar_link">
      <span class="material-icons">exit_to_app</span>Logout
   </a>
</div>

<?php 

   break;

   case "village":   // village officer's sidebar elements
      
?>


<div class="dashboard sidebar">
   <!-- <a href="#" class="dashboard sidebar_link">
      <span class="material-icons">home</span>Home
   </a> -->
   <a href="/fadts/village/updatePeople" class="dashboard sidebar_link">
      <span class="material-icons">person</span>Update People Data
   </a>
   <a href="/fadts/village/ViewSearchPeople" class="dashboard sidebar_link">
      <span class="material-icons">person_search</span>Search People Data
   </a>
   <a href="/fadts/village/viewDisasterDetails" class="dashboard sidebar_link">
      <span class="material-icons">menu_book</span>View Disaster Details
   </a>
   <a href="/fadts/village/ViewViewFund" class="dashboard sidebar_link">
      <span class="material-icons">menu_book</span>View Fund
   </a>   
   <a href="/fadts/village/ViewGetFundEligible" class="dashboard sidebar_link">
      <span class="material-icons">how_to_reg</span>Fund Release
   </a>
   <a href="/fadts/village/ViewGetAddVictimsToDisaster" class="dashboard sidebar_link">
      <span class="material-icons">person_add</span>Add Disaster Victims
   </a>
   <a href="#" class="dashboard sidebar_link">
      <span class="material-icons">help_center</span>Help
   </a>
   <a href="/fadts/home/index" class="dashboard sidebar_link">
      <span class="material-icons">exit_to_app</span>Logout
   </a>
</div>

<?php 
   
   break; 

   }

?>