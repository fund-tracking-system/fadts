$(function(){
    var $formElement = $("#formDisasterDetails");
    if($formElement.length){
        $formElement.validate({
            rules: {
                select_disaster: "required",
                select_region: "required"
                
            },
            messages: {
               select_disaster: "You Should Select Disaster",    
               select_region: "You Should Select region",
                
            }
      });
    }
  });
  