$(function(){
    var $formElement = $("#formsearchCriteria");
    if($formElement.length){
        $formElement.validate({
            rules: {
                nid: {
                    required: true,
                    maxlength: 12,
                    minlength:10
                }
            },
            messages: {
            	nid: {
                    required: "This field is required",
                    maxlength: "Please enter a correct NID",
                    minlength: "Please enter correct NID"
                },
            }
        });
    }
});