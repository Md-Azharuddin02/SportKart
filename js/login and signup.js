// Toggle Form
const container = document.querySelector(".container");
const inputs = document.querySelectorAll(".form-box input[type = 'password']");
const icons = [...document.querySelectorAll(".form-icon")];
const spans = [...document.querySelectorAll(".form-box .top span")];
const section = document.querySelector("section");

spans.map((span) => {
  span.addEventListener("click", (e) => {
    const color = e.target.dataset.id;
    container.classList.toggle("active");
    section.classList.toggle("active");
    document.querySelector(":root").style.setProperty("--custom", color);
  });
});

Array.from(inputs).map((input) => {
  icons.map((icon) => {
    icon.innerHTML = `<img src="./images/eye.svg" alt="" />`;

    icon.addEventListener("click", () => {
      const type = input.getAttribute("type");
      if (type === "password") {
        input.setAttribute("type", "text");
        icon.innerHTML = `<img src="./images/hide.svg" alt="" />`;
      } else if (type === "text") {
        input.setAttribute("type", "password");
        icon.innerHTML = `<img src="./images/eye.svg" alt="" />`;
      }
    });
  });
});


// Form validation 

// for login form
function validation(){

const email = document.getElementById('email');
const login = document.getElementById('login');

let emailEx = /^([a-zA-Z])([_\-\.0-9a-zA-Z]+)@([_\-\.0-9a-zA-Z]+)\.([a-zA-Z]){2,7}$/;


if(emailEx.test(email)){
  document.getElementById('validEmail').innerHTML= " ";
  console.log("Email is valid");
}else{
  document.getElementById('validEmail').innerHTML= "* Your email is invalid";
  return false;
}

}

// for register form

function validRegister(){

const email2 = document.getElementById('email2');
const phone = document.getElementById('phone');
const passwordRegister = document.getElementById('passwordRegister');
const passwordConfirm = document.getElementById('passwordConfirm');
const signup = document.getElementById('signup');

let email2Ex =/^([a-zA-Z])([_\-\.0-9a-zA-Z]+)@([_\-\.0-9a-zA-Z]+)\.([a-zA-Z]){2,7}$/;

let phoneEx = /^([0-9]){10}$/;

let passwordRegisterEx = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{8,16}$/;


  if(email2Ex.test(email2)){
    document.getElementById('validEmail2').innerHTML= " ";
    console.log("Email is valid");
  }else{
    document.getElementById('validEmail2').innerHTML= "* Your email is invalid";
    return false;
  }
  
  if(passwordRegisterEx.test(passwordRegister)){
    document.getElementById('validPassword').innerHTML= " ";
    console.log("password is valid");
  }else{
    document.getElementById('validPassword').innerHTML= "* Password is invalid";
    return false;
  }

  if(passwordRegister.matches(passwordConfirm)){ //matche or matches
    document.getElementById('validPassword').innerHTML= " ";
    console.log("password is valid");
  }else{
    document.getElementById('validPassword').innerHTML= "* Password is invalid";
    return false;
  }

}


// OTP generation 

// function generateOTP()
// {

//     var digits = '0123456789';

//     var otpLength = 4;

//     var otp = '';

//     for(let i=1; i<=otpLength; i++)

//     {

//         var index = Math.floor(Math.random()*(digits.length));

//         otp = otp + digits[index];

//     }

//     return otp;

// }




  

