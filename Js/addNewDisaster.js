$(function(){
    var $formElement = $("#formAddDisaster");
    if($formElement.length){
        $formElement.validate({
            rules: {
                disaster: "required",
                disaster_name: "required",
                date: {
                    required: true,
                    date: true
                },
                description: "required"
            },
            messages: {
                disaster: "This field is required",
                disaster_name: "This field is required",
                date: {
                    required: "This field is required",
                    date: "Date should be correct format"
                },
                description: "This field is required",           
            }
      });
    }
  });
  