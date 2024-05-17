const form = document.querySelector(".signup form"),
  continueBtn = form.querySelector(".button input[type='submit']"),
  errorText = form.querySelector(".error-text");

form.onsubmit = (e) => {
  e.preventDefault();
};

continueBtn.onclick = () => {
  // Log a message when the button is clicked
  console.log("Button clicked");

  let xhr = new XMLHttpRequest();
  xhr.open("POST", "php/signup.php", true);
  xhr.onload = () => {
    // Log the XHR status when the request is loaded
    console.log("XHR status:", xhr.status);
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        let data = xhr.response;
        console.log(data);
        if (data == "success") {
          errorText.textContent = data;
          errorText.style.display = "block";
          errorText.style.background = "green";
          console.log("Success!");
        } else {
          // Log the error message and display it

          console.log("Error:", data);
          errorText.textContent = data;
          errorText.style.display = "block";
        }
      }
    }
  };
  let formData = new FormData(form);
  xhr.send(formData);
};
