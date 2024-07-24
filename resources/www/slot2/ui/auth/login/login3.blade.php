<style>
	/* ###### 7.9 Signin  ###### */
.az-signin-wrapper {
    flex: 1;
    display: flex;
    align-items: center;
    justify-content: center;
}

.az-card-signin {
    height: 560px;
    padding: 20px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    background-color: rgba(255, 255, 255, 0.5);
}

@media (min-width: 480px) {
    .az-card-signin {
        border: 1px solid #cdd4e0;
        width: 360px;
        padding: 30px 35px;
    }
}

.az-signin-header h2 {
    font-weight: 500;
    color: #5b47fb;
    letter-spacing: -1px;
}

.az-signin-header h4 {
    font-weight: 400;
    color: #1c273c;
    margin-bottom: 25px;
}

.az-signin-header label {
    color: #7987a1;
}

.az-signin-header .form-control {
    color: #1c273c;
    font-weight: 500;
    border-width: 2px;
    border-color: #cdd4e0;
}

.az-signin-header .form-control:focus {
    border-color: #b4bdce;
    box-shadow: none;
}

.az-signin-header .form-control::placeholder {
    font-weight: 400;
    color: #97a3b9;
}

.az-signin-header .btn,
.az-signin-header .sp-container-fluid button,
.sp-container-fluid .az-signin-header button {
    margin-top: 25px;
}

.az-signin-footer p {
    color: #7987a1;
}

.az-signin-footer p:first-child {
    margin-bottom: 5px;
}

.az-signin-footer p:last-child {
    margin-bottom: 0;
}

.az-signin-footer a {
    color: #1c273c;
    font-weight: 700;
}

.az-signin-footer a:hover,
.az-signin-footer a:focus {
    color: #5b47fb;
}
</style>
<x-theme-app>
    <div class="az-signin-wrapper">
        <div class="az-card-signin">
          <h1 class="az-logo">az<span>i</span>a</h1>
          <div class="az-signin-header">
            <h2>Welcome back!</h2>
            <h4>Please sign in to continue</h4>
  
            <form action="index.html">
              <div class="form-group">
                <label>Email</label>
                <input type="text" class="form-control" placeholder="Enter your email" value="demo@bootstrapdash.com">
              </div><!-- form-group -->

              <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" placeholder="Enter your password" value="thisisademo">
              </div><!-- form-group -->

              <button class="btn btn-primary">Sign In</button>
            </form>
          </div><!-- az-signin-header -->
          <div class="az-signin-footer">
            <p><a href="">Forgot password?</a></p>
            <p>Don't have an account? <a href="page-signup.html">Create an Account</a></p>
          </div><!-- az-signin-footer -->
        </div><!-- az-card-signin -->
      </div>
</x-theme-app>