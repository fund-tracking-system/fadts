$(function(){
    var $formUpdatePeople = $("#formUpdatePeople");
    if($formUpdatePeople.length){
        $formUpdatePeople.validate({
            rules: {
                nid: {
                    required: true,
                    maxlength: 12,
                    minlength:10
                }
            },
            messages: {
            	nid: {
                    required: "NID Number cannot be blank",
                    maxlength: "NID Number is too short,Please enter a correct NID",
                    minlength: "Please enter correct NID"
                },
            }
        });
    }
});