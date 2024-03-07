<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Chat App | PHP & JavaScript</title>
    <link rel="stylesheet" href="signin.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
  </head>
  <body>
    <div class="wrapper">
      <div class="form-container">
        <div class="error-text">This is Error Text!</div>
        <div class="form">
          <span class="heading">Get in touch</span>
          <input placeholder="Name" type="text" class="input" />
          <input
            placeholder="Password"
            id="password"
            type="password"
            class="input"
          />

          <div class="button-container">
            <div class="send-button">Sign in</div>
            <div class="reset-button-container">
              <div id="reset-btn" class="reset-button">Sign Up</div>
            </div>
          </div>
          <p style="color: #ff7a01">
            Don't have an account? <a href="#" class="signup">Sign Up</a>
          </p>
        </div>
      </div>
    </div>
    <script src="./javascript/hide-pass.js"></script>
  </body>
</html>
