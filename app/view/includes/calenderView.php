<?php include VIEW.'includes/header.php' ?>
<?php include VIEW.'includes/sidebar.php' ?>



<div class="calender" style="background-color: #aac5f2" >
   
    
    
    <div id="calendar" ></div>
    </div>
</div>

  

<script>
    $(document).ready(function() {
    var calendar = $('#calendar').fullCalendar({
        height: 550,
        editable:true,
        header:{
        left:'prev,next today',
        center:'title',
        right:'month,agendaWeek,agendaDay'
        },
        events: '/fadts/calender/loadEventModel?userid=2',
        selectable:true,
        selectHelper:true,
        select: function(start, end, allDay)
        {
        var title = prompt("Enter Your Event Title");
        if(title)
        {
        var start = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");
        var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");
        var userid = 2;
        $.ajax({
        url:"/fadts/calender/addEventMode",
        type:"POST",
        data:{title:title, start:start, end:end, userid:userid},
        success:function()
        {
            calendar.fullCalendar('refetchEvents');
            alert("Added Successfully");
        }
        })
        }
        },
        editable:true,
        eventResize:function(event)
        {
        var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
        var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
        var title = event.title;
        var id = event.id;
        $.ajax({
        url:"/fadts/calender/updateEventModel",
        type:"POST",
        data:{title:title, start:start, end:end, id:id},
        success:function(){
        calendar.fullCalendar('refetchEvents');
        alert('Event Update');
        }
        })
        },

        eventDrop:function(event)
        {
        var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
        var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
        var title = event.title;
        var id = event.id;
        $.ajax({
        url:"/fadts/calender/updateEventModel",
        type:"POST",
        data:{title:title, start:start, end:end, id:id},
        success:function()
        {
        calendar.fullCalendar('refetchEvents');
        alert("Event Updated");
        }
        });
        },

        eventClick:function(event)
        {
        if(confirm("Are you sure you want to remove it?"))
        {
        var id = event.id;
        $.ajax({
        url:"/fadts/calender/deleteEventModel",
        type:"POST",
        data:{id:id},
        success:function()
        {
            calendar.fullCalendar('refetchEvents');
            alert("Event Removed");
        }
        })
        }
        },

    });
    });
    
    </script>

<?php include VIEW.'includes/footer.php' ?>
 