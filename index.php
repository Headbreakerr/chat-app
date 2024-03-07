<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Chat App | JavaScript & PHP</title>
    <link rel="stylesheet" href="style.css" />
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
      <section class="form signup">
        <div class="card">
          <div class="card-header">
            <div class="text-header">Register</div>
          </div>
          <div class="card-body">
            <div class="error-text">This is Error Text!</div>
            <form action="#">
              <div class="form-group field input">
                <label for="username">Username:</label>
                <input
                  required=""
                  class="form-control"
                  name="username"
                  id="username"
                  type="text"
                />
              </div>
              <div class="form-group field input">
                <label for="email">Email:</label>
                <input
                  required=""
                  class="form-control"
                  name="email"
                  id="email"
                  type="email"
                />
              </div>
              <div class="form-group field input">
                <label for="address">Address</label>
                <input
                  required=""
                  class="form-control"
                  name="address"
                  id="address"
                  type="text"
                />
              </div>
              <div class="form-group field input">
                <label for="password">Password</label>
                <div class="password-container">
                  <input
                    required=""
                    class="form-control"
                    name="password"
                    id="password"
                    type="password"
                  />
                  <i class="fas fa-eye"></i>
                </div>
              </div>

              <div class="form-group field image">
                <label for="image">Choose an Image:</label>
                <input
                  type="file"
                  name="image"
                  id="image"
                  required=""
                  class="form-control"
                />
              </div>
              <div class="field button">
              <input type="submit" class="btn" value="submit" />
              </div>
              <div class="form-text">
                <p>
                  Already Signed up?
                  <a href="#" class="form-link">Login Here</a>
                </p>
              </div>
            </form>
          </div>
        </div>
      </section>
    </div>
    <script src="./javascript/hide-pass.js"></script>
    <script src="./javascript/signup.js"></script>
  </body>
</html>
