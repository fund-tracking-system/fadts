const form = document.getElementById("form");

const username = document.getElementById("username");
const password = document.getElementById("password");
const email = document.getElementById("email");
const newpassword = document.getElementById("newpassword");
const reEnter = document.getElementById("reEnter");




form.addEventListener( 'submit', (e)=>{
e.preventDefault();
  checkInputs();
  });
// form.addEventListener( 'submit', (e)=>{
//   e.preventDefault();
//     checkInputsPW();
    
// });
// form.addEventListener( 'submit', (e)=>{
//   e.preventDefault();
//     reEnterPW();
    
//   });

function checkInputs()
{
  const usernameValue = username.value.trim();
  const passwordValue = password.value.trim();
  
  var matches = usernameValue.match(/\d+/g); //CHECK USERNAME HAVE NUMBERS
  window.location="/fadts/home/indexModel"
    //Check Username is Valid

//   if (usernameValue === "") {
//     setErrorFor(username, "Username cannot be blank");
//   } else if (usernameValue.length < 3) {
//     setErrorFor(username, "Username too short");
//   }else if (matches != null){
// setErrorFor(username, "Username cannot contain numbers");
//   } 
//   else {
//     setSuccessFor(username);
//   }

//   //Check Password is Valid

//   if (passwordValue === "") {
//     setErrorFor(password, "Password cannot be blank");
//   } else if (passwordValue.length < 6) {
//     setErrorFor(password, "password should contain at least 6 characters");
//   } else {
//     setSuccessFor(password);
//   }
// }


  
// function checkInputsPW(){
//   const usernameValue = username.value.trim();
//   const emailValue = email.value.trim();

//   //Check Username is Valid

//   if (usernameValue === ""){
//       setErrorFor(username, "Username cannot be blank");
//   } else if (usernameValue.length < 3) {
//       setErrorFor(username, "Username too short");
//   } else {
//       setSuccessFor(username);
//   }

//   //Check Password is Valid

//   const re = /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;

//   if (emailValue === ""){
//       setErrorFor(email, "Password cannot be blank");
//   } else if (re.test(emailValue)){
//       setSuccessFor(email);
//   } else{
//       setErrorFor(email, "Should enter a valid email");
//   }
// }



  
// function reEnterPW() {
//   const newpasswordValue = newpassword.value.trim();
//   const reEnterValue = reEnter.value.trim();



//   if (newpasswordValue === ""){
//     setErrorFor(newpassword, "Newpassword cannot be blank");
//   }
//   else {
//     setSuccessFor(newpassword);
// }

  
// if (reEnterValue === ""){
//   setErrorFor(reEnter, "password Re Enter cannot be blank");
// }
// else {
//   setSuccessFor(reEnter);
//   }
//   if (newpasswordValue != reEnter) {
//     setErrorFor(reEnter, "Password not Matched");
//   }
//   else {
//     setSuccessFor(reEnter);
//   }
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