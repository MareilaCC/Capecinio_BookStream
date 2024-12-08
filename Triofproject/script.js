const eyeIcon = document.getElementById("eye");
const passwordField = document.getElementById("password");
eyeIcon.addEventListener("click", () => {
  if (passwordField.type === "password" && passwordField.value) {
    passwordField.type = "text";
    eyeIcon.classList.remove("fa-eye");
    eyeIcon.classList.add("fa-eye-slash");
  } else {
    passwordField.type = "password";
    eyeIcon.classList.remove("fa-eye-slash");
    eyeIcon.classList.add("fa-eye");
  }
});

const loginButton = document.querySelector('.login-button');
const registerButton = document.querySelector('.register-button');
const registerPage = document.querySelector('.register-page');
const welcomePage = document.querySelector('.welcome-page');

loginButton.addEventListener('click', () => {
    welcomePage.style.display = 'none';
    (document.querySelector('.login-page')).style.display = 'block';
    registerPage.style.display = 'none';
});

registerButton.addEventListener('click', () => {
    welcomePage.style.display = 'none';
    (document.querySelector('.login-page')).style.display = 'none';
    registerPage.style.display = 'block';
});