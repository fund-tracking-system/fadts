$(function(){
    var $formFund= $("#formFundDetails");
    if($formFund.length){
        $formfund.validate({
            rules: {
                select_fund: "required",
                select_region: "required"
                
            },
            messages: {
               select_fund: "You Should Select Fund",    
               select_region: "You Should Select region",
                
            }
      });
    }
  });
  