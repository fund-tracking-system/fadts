<?php 
   session_start();
   if(!isset($_SESSION['userid'])){
      header("Location:/fadts/home/index");
      exit(); 
   }
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Work Bench</title>

    <meta name="viewpoint" content="width=device-width,initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.4/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.flash.min.js"></script>



    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script> -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>	 -->

    <!-- <script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.html5.min.js"></script>
   <script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.print.min.js"></script> -->
    <link rel="stylesheet" type="text/css" href="/fadts/app/css/main.css">
    <link rel="stylesheet" type="text/css" href="/fadts/app/css/fill.css">

    
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/yourcode.js"></script>

   
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.min.js"></script>
    
    <script type="text/javascript" src="/fadts/app/js/main.js"></script>
    <script type="text/javascript" src="/fadts/app/js/selectstyle.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
   
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
    



    <script>
     $(function() {
        $('#nav li a').click(function() {
           $('#nav li').removeClass();
           $($(this).attr('href')).addClass('active');
        });
     });
    </script>


    <style>
    .error {
        color: red;
        font-size: small;
        font-style: italic;
        margin-left: 550px;
        margin-top: -75px;
    }

    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    input[type=number] {
        -moz-appearance: textfield;
    }
    </style>

</head>

<body>
    <div>
        <nav>
            <img class="logo" src="/fadts/app/view/includes/logo.PNG" alt="logo_icon">
            <ul>
                <li><a href="/fadts/includes/index" class="nav_link"><B>Home</B></a></li>

                <li><a href="/fadts/calender/ViewCalender" class="nav_link"><B>Calender</B></a></li>
               
   

                <li><a href="/fadts/includes/userProfile" class="nav_link"><B>Profile</B></a></li>

                <li><a class="log_button" href="/fadts/home/index" class="nav_link"><B>LOGOUT</B></a>
                </li>
            </ul>
        </nav>
    </div>
    