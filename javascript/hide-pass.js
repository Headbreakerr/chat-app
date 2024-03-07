const passField = document.querySelector(".form input[type='password']");
const toggleBtn = document.querySelector(".form .field i");
const passInField = document.querySelector(".form #password");

toggleBtn.onclick = () => {
  if (passField.type == "password") {
    passField.type = "text";
    passField.classList.add("active");
  } else {
    passField.type = "password";
    passField.classList.remove("active");
  }
};
