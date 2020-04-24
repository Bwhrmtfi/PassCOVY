var myInput = document.getElementById("password");

var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");
var passwordRe = document.getElementById("password-re");
var reInput = document.getElementById("retype_password");
var passwordNC = document.getElementById("message-re")
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }

  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }

  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}

reInput.onfocus = function() {
  document.getElementById("password-re").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
reInput.onblur = function() {
  document.getElementById("password-re").style.display = "none";
}

reInput.onkeyup = function() {
  if(myInput.value === reInput.value) {
    passwordNC.classList.remove("invalid");
    passwordNC.classList.add("valid");
    console.log(myInput.value)
    console.log(reInput.value)
  } else {
    passwordNC.classList.remove("valid");
    passwordNC.classList.add("invalid");
    passwordNC.innerHTML = "Password đã trùng";
  }
}
