//divisionalsec
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
    var $formAddDisaster = $("#formAddDisaster");
    if($formAddDisaster.length){
        $formAddDisaster.validate({
            rules: {
                type:  "required",
                name:  "required", 
                region : "required",
                description:"required",
                date: {
                    required: true,
                    date: true
                }
            },
            messages: {
                type:"This field is required",
                name:"This field is required", 
                region:"This field is required",
                description:"required field",
                date: {
                    required: "This field is required",
                    date: "Date should be correct format"
                },

            }
      });
    }
  });


  $(function(){
    var $formAddDisaster = $("#formViewOfficerHistory");
    if($formAddDisaster.length){
        $formAddDisaster.validate({
            rules: {
                nid: {
                    required: true,
                    // maxlength: 12,
                    // minlength:10,
                    nidvalidator:true
                }
            },
            messages: {
                nid: {
                    required: "This field is required",
                    // maxlength: "Please enter no more than 12 or 10 characters",
                    // minlength: "Please enter at most 10 or 12 characters"
                }

            }
      });
    }
  });




  $(function(){
    var $formAddDisaster = $("#formUpdateVillage");
    if($formAddDisaster.length){
        $formAddDisaster.validate({
            rules: {
                nic: {
                    required: true,
                    nidvalidator:true
                }
            },
            messages: {
                nic:"This field is required"
                
            }
      });
    }
  });


  $(function(){
    var $formAddDisaster = $("#updateVillage");
    if($formAddDisaster.length){
        $formAddDisaster.validate({
            rules: {
                address:  "required",
                monthlyIncome:  "required"
               
            },
            messages: {
                address:"This field cannot be empty",
                monthlyIncome:"This field cannot be empty"

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
                nid: {
                    required: true,
                    nidvalidator:true
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
                }
            },
            messages: {
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
                }
            }
      });
    }  
  });



  $(function(){
    var $formPeople = $("#formUpdate");
    if($formPeople.length){
        $formPeople.validate({
            rules: {
                name: {
                    lettersonly:true,
                    required:true
                },
                address:"required",
                trustee:{
                    required:true,
                    nidvalidator:true
                },
                phone: {
                    number: true,
                    minlength:10,
                    maxlength:10
                },
                phone_two:{
                    minlength:10,
                    maxlength:10,
                    number:true
                }
            },
            messages: {
                name:{
                    required:"This field Cannot be blank",
                    lettersonly:"Please enter letters only"
                },
                address: "This field is required",
                trustee:{
                    required: "Enter trustee  NID",
                },
                phone: {
                    number: "Phone number must have numbers",
                    minlength: "This number has less than 10 numbers",
                    maxlength: "This number has more than 10 numbers"
                },
                phone_two: {
                    number: "Phone number must have numbers",
                    minlength: "This number has less than 10 numbers",
                    maxlength: "This number has more than 10 numbers"
                }
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


      
      
      