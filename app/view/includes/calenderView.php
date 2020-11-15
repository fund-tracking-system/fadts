<?php include VIEW.'includes/header.php' ?>
<?php include VIEW.'includes/sidebar.php' ?>



<div class="calender" style="background-color:white" >
    <div id="calendar" style="padding: 10px;" ></div>
    </div>
</div>

  

<script>
    $(document).ready(function() {
    var calendar = $('#calendar').fullCalendar({
        height: 550,
        editable:true,
        eventColor: '#85e085',
        header:{
        left:'prev,next today',
        center:'title',
        right:'month,agendaWeek,agendaDay'
        },
        events: '/fadts/calender/loadEventModel?userid=<?php echo $_SESSION['userid']; ?>',
        selectable:true,
        selectHelper:true,
        select: function(start, end, allDay)
        {
            var title = prompt("Enter Your Event Title");
            if(title){
                var start = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");
                var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");
                $.ajax({
                    url:"/fadts/calender/addEventModel?userid=<?php echo $_SESSION['userid']; ?>",
                    type:"POST",
                    data:{title:title, start:start, end:end},
                    success:function(){
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
 