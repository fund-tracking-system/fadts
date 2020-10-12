
//addnewDisaster
$(function(){
    var $formDisasterAdd = $("#formAddDisaster");
    if($formDisasterAdd.length){
        $formDisasterAdd.validate({
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
  
  $(function(){
    var $formPeople = $("#formAddPeople");
    if($formPeople.length){
        $formPeople.validate({
            rules: {
                name: "required",
                nid: {
                    required: true,
                    maxlength: 12,
                    minlength:10
                },
                address: "required",
                birth_date: {
                    required: true,
                    date: true
                },
                email: {
                    required: true,
                    email: true
                },
                region: "required",
                job: "required",
                civil_status: "required",
                phone_number: {
                    required: true,
                    number: true,
                    minlength:10,
                    maxlength:10
                }
            },
            messages: {
                name: "This field is required",
                nid: {
                    required: "This field is required",
                    maxlength: "Please enter a correct NID",
                    minlength: "Please enter correct NID"
                },
                address: "This field is required",
                birth_date: {
                    required: "This field is required",
                    date: "Date should be correct format"
                },
                email: {
                    required: "Please enter user email",
                    email: "Your email address must be in the format of name@domain.com"
                },
                region: "This field is required",
                job: "This field is required",
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











      const form = document.getElementById("form");
      const username = document.getElementById("username");
      const password = document.getElementById("password");
      const email = document.getElementById("email");
      
      
      form.addEventListener( 'submit', (e)=>{
      e.preventDefault();
      checkInputsLogin();
      checkInputsForgotPW();
      });
      form.addEventListener( 'submit', (e)=>{
          e.preventDefault();
          
          checkInputsForgotPW();    
          });
      
      
      function checkInputsLogin(){
        const usernameValue = username.value.trim();
        const passwordValue = password.value.trim();
        
        var matches = usernameValue.match(/\d+/g); //CHECK USERNAME HAVE NUMBERS
      
        
        //Check Username is Valid
      
        if (usernameValue === "") {
          setErrorFor(username, "Username cannot be blank");
        } else if (usernameValue.length < 3) {
          setErrorFor(username, "Username too short");
        }else if (matches != null){
      setErrorFor(username, "Username cannot contain numbers");
        } 
        
        else {
          setSuccessFor(username);
        }
      
      
      
        //Check Password is Valid
      
        if (passwordValue === "") {
          setErrorFor(password, "Password cannot be blank");
        } else if (passwordValue.length < 6) {
          setErrorFor(password, "password should contain at least 6 characters");
        } else {
          setSuccessFor(password);
        }
       
      
      
      }
      
      function checkInputsForgotPW(){
          const usernameValue = username.value.trim();
          const emailValue = email.value.trim();
      
          //Check Username is Valid
      
          if (usernameValue === "") {
              setErrorFor(username, "Username cannot be blank");
          } else if (usernameValue.length < 3) {
              setErrorFor(username, "Username too short");
          } else {
              setSuccessFor(username);
          }
      
          //Check Password is Valid
      
          const re = /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
      
          if (emailValue === "") {
              setErrorFor(email, "Password cannot be blank");
          } else if (re.test(emailValue)) {
              setSuccessFor(email);
          } else {
              setErrorFor(email, "Should enter a valid email");
      
      }
      
      
      }
      
      
      
      
      function setErrorFor(input, message){
      const formGroup = input.parentElement;
      const small = formGroup.querySelector("small");
      small.innerText = message;
      formGroup.className = "form-group error";
      }
      
      
      
      function setSuccessFor(input){
        const formGroup = input.parentElement;
        formGroup.className = "form-group success";
      }
      
      
      
      
      