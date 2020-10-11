$(function(){
    var $formElement = $("#formCreateFund");
    if($formElement.length){
        $formElement.validate({
            rules: {
                fund_name: "required",
                fund_size: "required"
                
            },
            messages: {
               fund_name: "This field is required",    
               fund_size: "This field is required",
                
            }
      });
    }
  });
  