<main class="main-content">
    <section class="page-title-area">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-12 m-auto">
            <div class="page-title-content text-center">
              <h2 class="title">Login / Register</h2>
              <div class="bread-crumbs"><a href="<?= base_url('main');?>"><i class="las la-home"></i></a><span class="breadcrumb-sep"><i class="las la-angle-right"></i></span><span>Login / Register</span></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <section class="login-register-area">
      <div class="container">
        <div class="row">
          <div class="col-md-5 login-register-border">
            <div class="login-register-content">
              <div class="login-register-title mb-30">
                <h2>Login</h2>
                <p>Welcome back! Please enter your username and password to login. </p>
              </div>
              <div class="login-register-style login-register-pr">
                <form action="#" method="post">
                  <div class="login-register-input">
                    <input type="text" name="user-name" placeholder="Username or email address">
                  </div>
                  <div class="login-register-input">
                    <input type="password" name="user-password" placeholder="Password">
                    <div class="forgot">
                      <a href="#">Forgot?</a>
                    </div>
                  </div>
                  <div class="remember-me-btn">
                    <input type="checkbox">
                    <label>Remember me</label>
                  </div>
                  <div class="btn-style-3">
                    <button class="btn" onclick="window.location.href='my-account.html'" type="button">Login</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="col-md-7">
            <div class="login-register-content login-register-pl">
              <div class="login-register-title mb-30">
                  <h2>Register</h2>
                  <p>Create new account today to reap the benefits of a personalized shopping experience. </p>
              </div>
              <div class="login-register-style">
                <form action="#" method="post">
                  <div class="login-register-input">
                    <input type="text" name="user-name" placeholder="Username">
                  </div>
                  <div class="login-register-input">
                    <input type="text" name="user-name" placeholder="E-mail address">
                  </div>
                  <div class="login-register-input">
                    <input type="password" name="user-password" placeholder="Password">
                  </div>
                  <div class="login-register-paragraph">
                    <p>Your personal data will be used to support your experience throughout this website, to manage access to your account, and for other purposes described in our <a href="#">privacy policy.</a></p>
                  </div>
                  <div class="btn-style-3">
                    <button class="btn" onclick="window.location.href='my-account.html'" type="button">Register</button>
                  </div>
                </form>
                <!-- <div class="register-benefits">
                  <h3>Sign up today and you will be able to :</h3>
                  <p>The Loke Buyer Protection has you covered from click to delivery. Sign up <br>or sign in and you will be able to:</p>
                  <ul>
                    <li><i class="las la-check-circle"></i> Speed your way through checkout</li>
                    <li><i class="las la-check-circle"></i> Track your orders easily</li>
                    <li><i class="las la-check-circle"></i> Keep a record of all your purchases</li>
                  </ul>
                </div> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>