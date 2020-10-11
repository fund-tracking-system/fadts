$(function(){
    var $formElement = $("#formAddEligibilityList");
    if($formElement.length){
        $formElement.validate({
            rules: {
                select_region: "required",    
            },
            messages: {    
               select_region: "You Should Select region",
            }
      });
    }
  });
  