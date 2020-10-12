$(function(){
    var $formElgibilityList= $("#formAddEligibilityList");
    if($formElgibilityList.length){
        $formElgibilityList.validate({
            rules: {
                select_region: "required",    
            },
            messages: {    
               select_region: "You Should Select region",
            }
      });
    }
  });
  