$(function(){
    var $formElement = $("#formUpdateOfficer");
    if($formElement.length){
        $formElement.validate({
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
    var $formUpdate = $("#formUpdateOffice1");
    if($formUpdate.length){
        $formUpdate.validate({
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
