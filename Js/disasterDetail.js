$(function(){
    var $formDisasterDetails = $("#formDisasterDetails");
    if($formDisasterDetails.length){
        $formDisasterDetails.validate({
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
  