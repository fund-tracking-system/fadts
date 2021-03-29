<?php
 
$controller = $_SESSION['controller'];

switch($controller){

   case "audit": // auditor's sidebar elements
?>

<div class="dashboard sidebar" id="sidebar">
   <!-- <a href="#" class="dashboard sidebar_link">
      <span class="material-icons">home</span>Home
   </a> -->
   <a href="/fadts/audit/officerHistoryView" class="dashboard sidebar_link">
      <span class="material-icons">account_box</span>View Officer History
   </a>
   <a href="/fadts/audit/eligibilityHistoryView" class="dashboard sidebar_link">
      <span class="material-icons">account_box</span>View Eligibility History
   </a>
   <a href="/fadts/audit/personHistoryView" class="dashboard sidebar_link">
      <span class="material-icons">account_box</span>View Person History
   </a>
   <a href="/fadts/audit/ViewDisasterDetails" class="dashboard sidebar_link">
      <span class="material-icons">menu_book</span>View Disaster Details
   </a>
   <a href="/fadts/audit/ViewFundDetails" class="dashboard sidebar_link">
      <span class="material-icons">menu_book</span>View Fund Details
   </a>
   <a href="/fadts/audit/ViewSearchPeople" class="dashboard sidebar_link">
      <span class="material-icons">person_search</span>Search People Data
   </a>
   <a href="/fadts/audit/viewHistoryRecord" class="dashboard sidebar_link">
      <span class="material-icons">find_in_page</span>View History Records
   </a>
   <a href="/fadts/audit/ADhelpview" class="dashboard sidebar_link">
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

<div class="dashboard sidebar" id="sidebar">
   <a href="/fadts/divisional/ViewAddPeople" class="dashboard sidebar_link">
      <span class="material-icons">person_add</span>Add People Data
   </a>
   <a href="/fadts/divisional/updatePeople" class="dashboard sidebar_link">
      <span class="material-icons">person</span>Update People Data
   </a>
   <a href="/fadts/divisional/searchPeople" class="dashboard sidebar_link">
      <span class="material-icons">person_search</span>Search People Data
   </a>
   <a href="/fadts/divisional/ViewFundDetailsModel" class="dashboard sidebar_link">
      <span class="material-icons">menu_book</span>View Fund Details
   </a>
   <a href="/fadts/divisional/fundRelease" class="dashboard sidebar_link">
      <span class="material-icons">post_add</span>Alternate Fund Release
   </a>
   <a href="/fadts/divisional/addDisaster" class="dashboard sidebar_link">
      <span class="material-icons">create_new_folder</span>Add New Disaster
   </a>
   <a href="/fadts/divisional/ViewDisasterDetails" class="dashboard sidebar_link">
      <span class="material-icons">menu_book</span>View Disaster Details
   </a>
   <a href="/fadts/divisional/DShelpview" class="dashboard sidebar_link">
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

<div class="dashboard sidebar" id="sidebar">
   <!-- <a href="#" class="dashboard sidebar_link">
      <span class="material-icons">home</span>Home
   </a> -->
   <a href="/fadts/ministry/viewOfficerView" class="dashboard sidebar_link">
      <span class="material-icons">person_search</span>View Officer
   </a>
   <a href="/fadts/ministry/addOfficerView" class="dashboard sidebar_link">
      <span class="material-icons">person_add</span>Add Officer
   </a>
   <a href="/fadts/ministry/updateOfficerView" class="dashboard sidebar_link">
      <span class="material-icons">person</span>Update Officer
   </a>
   <a href="/fadts/ministry/loadFundDetails" class="dashboard sidebar_link">
      <span class="material-icons">menu_book</span>View Fund Details
   </a>
   <a href="/fadts/ministry/createFundView" class="dashboard sidebar_link">
      <span class="material-icons">create_new_folder</span>Create Fund
   </a>   
   <a href="/fadts/ministry/viewEligibilityView" class="dashboard sidebar_link">
      <span class="material-icons">menu_book</span>View Eligibility
   </a>
   <a href="/fadts/ministry/viewAdddPeopleToFundElighibleList" class="dashboard sidebar_link">
      <span class="material-icons">group_add</span>Add To Eligibility
   </a>   
   <a href="/fadts/ministry/searchPeople" class="dashboard sidebar_link">
      <span class="material-icons">person_search</span>Search People Data
   </a>
   <a href="/fadts/ministry/addDisaster" class="dashboard sidebar_link">
      <span class="material-icons">create_new_folder</span>Add New Disaster
   </a>
   <a href="/fadts/ministry/loadDisasterDetailsModel" class="dashboard sidebar_link">
      <span class="material-icons">menu_book</span>View Disaster Details
   </a>
   <a href="/fadts/ministry/MShelpview" class="dashboard sidebar_link">
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


<div class="dashboard sidebar" id="sidebar">
<!--  
   <a href="/fadts/includes/notificationView" class="dashboard sidebar_link">
      <span class="material-icons">menu_book</span>Notification View
   </a>   -->

   <a href="/fadts/village/updatePeople" class="dashboard sidebar_link">
      <span class="material-icons">person</span>Update People Data
   </a>
   <a href="/fadts/village/searchViewLoadModel" class="dashboard sidebar_link">
      <span class="material-icons">person_search</span>Search People Data
   </a>
   <a href="/fadts/village/loadDisasterDetailsModel" class="dashboard sidebar_link">
      <span class="material-icons">menu_book</span>View Disaster Details
   </a>
   <a href="/fadts/village/loadFundDetails" class="dashboard sidebar_link">
      <span class="material-icons">menu_book</span>View Fund Details
   </a>   
   <a href="/fadts/village/fundRelease" class="dashboard sidebar_link">
      <span class="material-icons">how_to_reg</span>Fund Release
   </a>
   <a href="/fadts/village/addDisasterVictim" class="dashboard sidebar_link">
      <span class="material-icons">person_add</span>Add Disaster Victims
   </a>
   <a href="/fadts/village/helpview" class="dashboard sidebar_link">
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