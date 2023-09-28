//inputs
const email = document.querySelector("#email");
const password = document.querySelector("#password");

//label

const email_label = document.querySelector("#email_label");
const password_label = document.querySelector("#password_label");

//showpassword

const iconPassword = document.querySelector("#showpassword");
const iconButton = iconPassword.querySelector("button");

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

function showpassword(e) {
  e.preventDefault();
  showandHidePassword();
  togglePassword();
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

email.addEventListener("input", emailOnchange);
password.addEventListener("input", passwordOnChange);
iconPassword.addEventListener("click", (e) => {
  showpassword(e);
});
