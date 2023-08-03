let eyeicon = document.getElementById("eyeicon");
let userPassword = document.getElementById("userPassword");

eyeicon.onclick = function () {
  if (userPassword.type == "password") {
    userPassword.type = "test";
    eyeicon.src = "icons/eye-open.png";
  } else {
    userPassword.type = "password";
    eyeicon.src = "icons/eye-close.png";
  }
};
