jQuery.validator.addMethod("lettersonly", function(value, element) {
return this.optional(element) || /^[a-z\s]+$/i.test(value);
}, "Only alphabetical characters");

$(function(){
    var $formElement = $("#formAddVictims");
    if($formElement.length){
        $formElement.validate({
            rules: {
                disaster:"required",
                name:{
                    required:true,
                    lettersonly: true
                },
                nid:{
                    required: true,
                    maxlength: 12,
                    minlength:10
                }
            },
            messages: {
                disaster:"This field is required",
                name: {
                    required: "This field is required",
                    lettersonly:"Please enter letters only"
                },
                nid: {
                    required: "This field is required",
                    maxlength: "Please enter a correct NID",
                    minlength: "Please enter correct NID"
                },
            }
      });
    }
  });
  