const form = document.getElementById("form");

// const username = document.getElementById("username");
const email = document.getElementById("email");
const password = document.getElementById("password");
const usernid = document.getElementById("usernid");
const newpassword=document.getElementById("newpassword");
const reEnter =document.getElementById("reEnter");


form.addEventListener( 'submit', (e)=>{
  var z = checkInputsReset();
 if(z===0)
 {
 e.preventDefault();
 }
});

form.addEventListener( 'submit', (e)=>{
   var y = checkInputs();
  if(y===0)
  {
  e.preventDefault();
  }
});

form.addEventListener( 'submit', (e)=>{
  
     var x = checkInputsForgot();
    if(x===0)
    {
    e.preventDefault();
    }
  });


  function checkInputs()
  {
    const emailValue = email.value.trim();
    const passwordValue = password.value.trim();
    var A=0;
    var B=0;
    
  //Check email is valid
    const re = /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
  
    if (emailValue === "") {
        setErrorFor(email, "Email cannot be blank");
    } else if (re.test(emailValue)) {
        setSuccessFor(email);
         var A=1;
    } else {
        setErrorFor(email, "Should enter a valid email");
    }
  
    //Check Password is Valid
  
    if (passwordValue === "") 
    {
      setErrorFor(password, "Password cannot be blank");
    } 
    else if (passwordValue.length < 5) 
    {
      setErrorFor(password, "password should contain at least 5 characters");
    } else
     {
      B=1;
      setSuccessFor(password);
      
    }
    if(A===1 && B==1){
      return 1;
    }
    else {
      return 0;
    }
  }
  

function checkInputsReset(){
  var e=0;
  var f=0;

 const newpasswordValue=newpassword.value.trim();
 const reEnterValue=reEnter.value.trim();

 if (newpasswordValue === "") 
 {
   setErrorFor(newpassword, " new Password cannot be blank");
 } 
 else if (newpasswordValue.length < 5) 
 {
   setErrorFor(newpassword, " New password should contain at least 5 characters");
 }
 else
 {
   e=1;
 }


 if (reEnterValue === "") 
 {
   setErrorFor(reEnter, " Re Entered Password cannot be blank");
 } 
 else if (reEnterValue.length < 5) 
 {
   setErrorFor(reEnter, "Re entered password should contain at least 5 characters");
 }
 else
 {
   f=1;

 }
 
if(reEnterValue===newpasswordValue&& e===1&&f===1)
{

  return 1;
}
else if(reEnterValue!=newpasswordValue){
  setErrorFor(reEnter, "Re entered password is not matching");
  setErrorFor(newpassword, " New password is not matching");
  return 0;

}
else
{
  return 0;
}

}



function checkInputsForgot(){
   const usernidValue=usernid.value.trim();
   const emailValue=email.value.trim();
   var c=0;
   var d=0;
  var matches =usernidValue.match(/\d+/g);

  if (usernidValue === "") {
    setErrorFor(usernid, "Usernid cannot be blank");
  }
  else if ((usernidValue.length != 10) && (usernidValue.length != 12)) {
    setErrorFor(usernid, "Should enter valid NID");
  }
  else if (usernidValue.length == 10 || usernidValue.length == 12) {
    if (usernidValue.length == 10 && (usernidValue.slice(-1) != 'v' && usernidValue.slice(-1) != 'V')) {
      setErrorFor(usernid, "Should enter valid NID");
    }
    if (usernidValue.length == 12 && (/[A-Za-z!@#$%+\-\^\\*\/<>\?\/\"\'\;\:]/.test(usernidValue))){
      setErrorFor(usernid, "Should enter valid NID");
    }   
  }
  else {
    c=1;
    setSuccessFor(usernid); 

  }




  const re = /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;

  if (emailValue === "") {
      setErrorFor(email, "Email cannot be blank");
  } else if (re.test(emailValue)) {
      setSuccessFor(email);
       var d=1;
  } else {
      setErrorFor(email, "Should enter a valid email");
  }
  


  if(c===1 && d===1){
    return 1;
  }
  else
  {
    return 0;
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