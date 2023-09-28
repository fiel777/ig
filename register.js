//inputs
const email = document.querySelector("#email");
const password = document.querySelector("#password");
const fullname = document.querySelector("#fullname");
const username = document.querySelector("#username");
const verifyCode = document.querySelector("#verification");

//label

const email_label = document.querySelector("#email_label");
const password_label = document.querySelector("#password_label");
const fullname_label = document.querySelector("#fullname_label");
const username_label = document.querySelector("#username_label");
const verification_label = document.querySelector("#verification_label");

//showpassword

const iconPassword = document.querySelector("#showpassword");
const iconButton = iconPassword.querySelector("button");

//button

const proceed = document.querySelector("#proceed");
const getbackBtn = document.querySelector("#getbackbtn");

// form

const step_one_form = document.querySelector("#first_step_reg");
const step_two_form = document.querySelector("#second_step_reg");

//count

const count = document.querySelector("#count");
var countNum = (count.innerHTML = "1");

function emailOnchange() {
  const emailValue = email.value;

  if (emailValue.length > 0) {
    email_label.style.top = "-0.45rem";
    email_label.style.background = "white";
  } else {
    email_label.style.top = "0.70rem";
    email_label.style.background = "none";
  }
}

function fullnameOnChange() {
  const fullnameValue = fullname.value;

  if (fullnameValue.length > 0) {
    fullname_label.style.top = "-0.45rem";
    fullname_label.style.background = "white";
  } else {
    fullname_label.style.top = "0.70rem";
    fullname_label.style.background = "none";
  }
}

function usernameOnChange() {
  const usernameValue = username.value;

  if (usernameValue.length > 0) {
    username_label.style.top = "-0.45rem";
    username_label.style.background = "white";
  } else {
    username_label.style.top = "0.70rem";
    username_label.style.background = "none";
  }
}

function showpassword(e) {
  e.preventDefault();
  showandHidePassword();
  togglePassword();
}

function passwordOnChange() {
  const passwordvalue = password.value;

  if (passwordvalue.length > 0) {
    password_label.style.top = "-0.45rem";
    iconPassword.style.display = "flex";
    password_label.style.background = "white";
  } else {
    password_label.style.top = "0.70rem";
    iconPassword.style.display = "none";
    password_label.style.background = "none";
  }
}

function verifyOnChange() {
  const verificationValue = verifyCode.value;

  if (verificationValue.length > 0) {
    verification_label.style.top = "-0.45rem";
    verification_label.style.background = "white";
  } else {
    verification_label.style.top = "0.70rem";
    verification_label.style.background = "none";
  }
}

function togglePassword() {
  if (iconButton.classList.contains("fa-eye-slash")) {
    iconButton.classList.remove("fa-eye-slash");
    iconButton.classList.add("fa-eye");
  } else {
    iconButton.classList.remove("fa-eye");
    iconButton.classList.add("fa-eye-slash");
  }
}

function showandHidePassword() {
  if (password.type === "password") {
    password.type = "text";
  } else {
    password.type = "password";
  }
}

var proceedNum = 1;

function proceedStep() {
  proceedNum++;
  console.log(proceedNum);

  if (proceedNum == 2) {
    step_one_form.style.display = "none";
    step_two_form.style.display = "flex";
    countNum++;
    count.innerHTML = countNum;
  }
}

function backStep() {
  proceedNum--;
  console.log(proceedNum);

  if (proceedNum == 1) {
    password.value = "";
    step_two_form.style.display = "none";
    step_one_form.style.display = "flex";
    countNum--;
    count.innerHTML = countNum;
  }
}

email.addEventListener("input", emailOnchange);
password.addEventListener("input", passwordOnChange);
fullname.addEventListener("input", fullnameOnChange);
username.addEventListener("input", usernameOnChange);
verifyCode.addEventListener("input", verifyOnChange);

iconPassword.addEventListener("click", (e) => {
  showpassword(e);
});

proceed.addEventListener("click", (e) => {
  proceedStep(e);
});

getbackBtn.addEventListener("click", (e) => {
  backStep(e);
});
