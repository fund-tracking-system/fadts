$(function(){
    var $formElement = $("#formAddOfficer");
    if($formElement.length){
        $formElement.validate({
            rules: {
                officer_id: "required",
                nid: {
                    required: true,
                    maxlength: 12,
                    minlength:10
                },
                name: "required",
                birth_date: {
                    required: true,
                    date: true
                },
                email: {
                    required: true,
                    email: true
                },
                region: "required",
                position: "required",
                civil_status: "required",
                phone_number: {
                    required: true,
                    number: true,
                    minlength:10,
                    maxlength:10
                }
            },
            messages: {
                officer_id: "This field is required",
                nid: {
                    required: "This field is required",
                    maxlength: "Please enter a correct NID",
                    minlength: "Please enter correct NID"
                },
                name: "This field is required",
                birth_date: {
                    required: "This field is required",
                    date: "Date should be correct format"
                },
                email: {
                    required: "Please enter user email",
                    email: "Your email address must be in the format of name@domain.com"
                },
                region: "This field is required",
                position: "This field is required",
                civil_status: "This field is required",
                phone_number: {
                    required: "This field is required",
                    number: "Phone number must have numbers",
                    minlength: "This number has less than 10 numbers",
                    maxlength: "This number has more than 10 numbers"
                },
            }
      });
    }
  });
  