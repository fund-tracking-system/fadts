const form = document.getElementById("form");

const username = document.getElementById("username");
const password = document.getElementById("password");





form.addEventListener( 'submit', (e)=>{
// 
   var x = checkInputs();
   if(x===0){
  e.preventDefault();

}
  });

function checkInputs()
{
  const usernameValue = username.value.trim();
  const passwordValue = password.value.trim();
  var A=0;
  var B=0;
  var matches = usernameValue.match(/\d+/g); //CHECK USERNAME HAVE NUMBERS
  
    //Check Username is Valid

  if (usernameValue === "") {
    setErrorFor(username, "Username cannot be blank");
  }
   else if (usernameValue.length < 3) {
    setErrorFor(username, "Username too short");
  }
  else if (matches != null){
    setErrorFor(username, "Username cannot contain numbers");
  } 
  else {
    A=1;
    setSuccessFor(username); 

  }

  //Check Password is Valid

  if (passwordValue === "") 
  {
    setErrorFor(password, "Password cannot be blank");
  } 
  else if (passwordValue.length < 6) 
  {
    setErrorFor(password, "password should contain at least 6 characters");
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