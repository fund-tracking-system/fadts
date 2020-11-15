//addnewDisaster-divisionalsec
jQuery.validator.addMethod("lettersonly", function(value, element) {        
    return this.optional(element) || /^[a-z\s]+$/i.test(value);
    }, "Only alphabetical characters");


jQuery.validator.addMethod("nidvalidator", function(value, element) {
    var validator = this;
    

    if (value.length>12 || value.length <10) {
        var errors = {};
        errors[element.name] = "Invalid NID";
        validator.showErrors(errors);
        return true;
    }
    if (value.length==11) {
        var errors = {};
        errors[element.name] = "Invalid NID";
        validator.showErrors(errors);
        return true;
    }
    else{
        return true;
    }
    

},'');

// jQuery.validator.addMethod("floatgross", function (value, element) {
//     return this.optional(element) || /^\d{0,4}(\.\d{0,2})?$/i.test(value);
// }, "You must include two decimal places");


$(function(){
    var $formDisasterAdd = $("#formAddDisaster");
    if($formDisasterAdd.length){
        $formDisasterAdd.validate({
            rules: {
                disaster: "required",
                disasterName: "required",
                date: {
                    required: true,
                    date: true
                },
                description: "required"
            },
            messages: {
                disaster: "This field is required",
                disasterName: "This field is required",
                date: {
                    required: "This field is required",
                    date: "Date should be correct format"
                },
                description: "This field is required",           
            }
      });
    }
  });
  
  
  //addpeople-divisionalsec
$(function(){
    var $formPeople = $("#formAddPeople");
    if($formPeople.length){
        $formPeople.validate({
            rules: {
                name: {
                    lettersonly:true,
                    required:true
                },
                nid: {
                    required: true,
                    // maxlength: 12,
                    // minlength:10,
                    nidvalidator:true
                },
                address: "required",
                b_date: {
                    required: true,
                    date: true
                },
                jobType: "required",
                headOfFamily:{
                    required:true,
                    nidvalidator:true
                },
                trustee:{
                    required:true,
                    nidvalidator:true
                },
                civilStatus: "required",
                phoneNumber1: {
                    required: true,
                    number: true,
                    minlength:10,
                    maxlength:10
                },
                phoneNumber2:{
                    minlength:10,
                    maxlength:10
                }
            },
            messages: {
                name:{
                    required:"This field is required",
                    lettersonly:"Please enter letters only"
                },
                nid: {
                    required: "This field is required",
                    // maxlength: "Please enter no more than 12 or 10 characters",
                    // minlength: "Please enter at most 10 or 12 characters"
                },
                address: "This field is required",
                b_date: {
                    required: "This field is required",
                    date: "Date should be correct format"
                },
                jobType: "This field is required",
                headOfFamily:{
                    required: "Enter family head NID",
                    maxlength: "Please enter a correct NID",
                    minlength: "Please enter correct NID"
                },
                trustee:{
                    required: "Enter trustee head NID",
                },
                civilStatus: "This field is required",
                phoneNumber1: {
                    required: "This field is required",
                    number: "Phone number must have numbers",
                    minlength: "This number has less than 10 numbers",
                    maxlength: "This number has more than 10 numbers"
                },
            }
      });
    }
  });



  jQuery.validator.addMethod("lettersonly", function(value, element) {
    return this.optional(element) || /^[a-z\s]+$/i.test(value);
    }, "Only alphabetical characters");
    

  
  
  //addOfficer
  $(function(){
    var $formAddOfficer = $("#formAddOfficer");
    if($formAddOfficer.length){
        $formAddOfficer.validate({
            rules: {
                officer_id: "required",
                nid: {
                    required: true,
                    maxlength: 12,
                    minlength:10
                },
                name: {
                    lettersonly:true,
                    required:true,
                },
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
                name:{
                    required:"This field is required",
                    lettersonly:"Please enter letters only"
                },
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
  
 

  jQuery.validator.addMethod("lettersonly", function(value, element) {
    return this.optional(element) || /^[a-z\s]+$/i.test(value);
    }, "Only alphabetical characters");
    
    $(function(){
        var $formAddVictims = $("#formAddVictims");
        if($formAddVictims.length){
            $formAddVictims.validate({
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
  
      $(function(){
        var $formFundCreate = $("#formCreateFund");
        if($formFundCreate.length){
            $formFundCreate.validate({
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
  

      $(function(){
        var $formCriteria = $("#formsearchCriteria");
        if($formCriteria.length){
            $formCriteria.validate({
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

    $(function(){
        var $formFund= $("#formFundDetails");
        if($formFund.length){
            $formFund.validate({
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


      $(function(){
        var $formupdateOfficer = $("#formUpdateOfficer");
        if($formupdateOfficer.length){
            $formupdateOfficer.validate({
                rules: {
                    id: {
                        required: true,
                        minlength:5
                    }
                },
                messages: {
                    id: {
                        required: "This field is required",
                        minlength: "Please enter correct UserID"
                    },
                }
            });
        }
    });
    
    
    $(function(){
        var $formupdateOfficer1 = $("#formUpdateOfficer1");
        if($formupdateOfficer1.length){
            $formupdateOfficer1.validate({
                rules: {
                    region: "required",
                    position: "required",   
                },
                messages: {
                   region: "You Should Select Region",    
                   position: "You Should Select Position",  
                }
          });
        }
      });


      $(function(){
        var $formupdateOfficer = $("#formUpdateOfficer");
        if($formupdateOfficer.length){
            $formupdateOfficer.validate({
                rules: {
                    id: {
                        required: true,
                        minlength:5
                    }
                },
                messages: {
                    id: {
                        required: "This field is required",
                        minlength: "Please enter correct UserID"
                    },
                }
            });
        }
    });
    
    
    $(function(){
        var $formupdateOfficer1 = $("#formUpdateOfficer1");
        if($formupdateOfficer1.length){
            $formupdateOfficer1.validate({
                rules: {
                    region: "required",
                    position: "required",   
                },
                messages: {
                   region: "You Should Select Region",    
                   position: "You Should Select Position",  
                }
          });
        }
      });




    //   $(document).ready(function() {

    //     $('#formAddPeople').submit(function(e) {
    //         e.preventDefault();
    //         var nid = $('#nid').val();
    //         var validate =this;
    //         if (nid.slice(-1)='v') {
    //             var errors = {};
    //             errors[element.name] = "Invalid NID";
    //             validator.showErrors(errors);
    //             return true;
    //         }

           
                
            
    //     });
      
    //   });
    
    
    






      
/****************************************************************
* Selector plug that made select tag in to custome select style *
*****************************************************************/


      
      
      