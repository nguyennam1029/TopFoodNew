<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Đăng kí</title>
    <link rel="stylesheet" href="app.css" />
  </head>
  <body>
    <div class="modal">
      <div class="modal-overlay"></div>
      <div class="modal-content">
        <a href="index.html" class="modal-close">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
            stroke-width="2"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              d="M6 18L18 6M6 6l12 12"
            />
          </svg>
        </a>
        <div class="modal-main">
          <form method="post" action="insert_signup.php" class="form-field">
            <img
              src="./images/Vector.png"
              alt=""
              class="form-field--background"
            />
            <h1 class="form-heading">Đăng Ký</h1>
            <div style="padding: 0 30px">
              <div class="form-login--name">
                <input
                  type="text"
                  class="form-input"
                  placeholder=" "
                  name="name"
                />
                <label for="" class="form-label">Full Name</label>
              </div>

              <div class="form-login--name">
                <input
                  type="email"
                  class="form-input"
                  placeholder=" "
                  name="email"
                />
                <label for="" class="form-label">Email</label>
              </div>
              <div class="form-signup">
                <div class="form-login--name form-signup--mr">
                  <input
                    type="password"
                    class="form-input"
                    placeholder=" "
                    name="password"
                  />
                  <label for="" class="form-label">Password</label>
                </div>
                <div class="form-login--name">
                  <input type="password" class="form-input" placeholder=" " />
                  <label for="" class="form-label">Confirm Password</label>
                </div>

              </div>

              <div class="form-rules">
                <input type="checkbox" class="form-checkmark--input" />
                <p class="form-checkmark--text form-rules--text">
                  Tôi đông ý với điều khoản của Movie - Platform
                </p>
              </div>

              <div class="form-btn">
                <button class="formt-btn--shared formt-btn--login">
                  Sign up
                </button>
              </div>

              <div class="create-account">
                <span class="create-account--text">
                  Don’t have account ?
                  <a
                    href="form_login.html"
                    target="_selfe"
                    class="create-account--link"
                    >Login</a
                  >
                </span>
              </div>
              <div class="sign-with">
                <p class="sign-with--text">Sign in with</p>
                <div class="sign-with--list">
                  <a href="#" class="sign-with--link">
                    <img
                      class="sign-with--icon"
                      src="./images/Googel.png"
                      alt=""
                    />
                  </a>
                  <a href="#" class="sign-with--link">
                    <img
                      class="sign-with--icon"
                      src="./images/Insta.png"
                      alt=""
                    />
                  </a>
                  <a href="#" class="sign-with--link">
                    <img
                      class="sign-with--icon"
                      src="./images/Twitter.png"
                      alt=""
                    />
                  </a>
                </div>
              </div>
            </div>

            <img
              src="./images/DownWave.png"
              alt=""
              class="form-field--background"
            />
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
