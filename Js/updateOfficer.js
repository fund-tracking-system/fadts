$(function(){
    var $formupdateOfficer = $("#formUpdateOfficer");
    if($formupdateOfficer.length){
        $formupdateOfficer.validate({
            rules: {
                id: {
                    required: true,
                    minlength:5
                }
            },
            messages: {
            	id: {
                    required: "This field is required",
                    minlength: "Please enter correct UserID"
                },
            }
        });
    }
});


$(function(){
    var $formupdateOfficer1 = $("#formUpdateOfficer1");
    if($formupdateOfficer1.length){
        $formupdateOfficer1.validate({
            rules: {
                region: "required",
                position: "required",   
            },
            messages: {
               region: "You Should Select Region",    
               position: "You Should Select Position",  
            }
      });
    }
  });
