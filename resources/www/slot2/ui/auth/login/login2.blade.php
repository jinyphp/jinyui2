<style>
.login-section-wrapper {
    display: -webkit-box;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    flex-direction: column;
    padding: 68px 100px;
    background-color: #fff;
}

@media (max-width: 991px) {
    .login-section-wrapper {
        padding-left: 50px;
        padding-right: 50px;
    }
}

@media (max-width: 575px) {
    .login-section-wrapper {
        padding-top: 20px;
        padding-bottom: 20px;
        min-height: 100vh;
    }
}



.brand-wrapper {
    padding-top: 7px;
    padding-bottom: 8px;
}

.brand-wrapper .logo {
    height: 25px;
}

.login-wrapper {
    width: 300px;
    max-width: 100%;
    padding-top: 24px;
    padding-bottom: 24px;
}
@media (max-width: 575px) {
    .login-wrapper {
        width: 100%;
    }
}
.login-wrapper .form-control::-webkit-input-placeholder {
    color: #b0adad;
}
.login-wrapper .form-control::-moz-placeholder {
    color: #b0adad;
}
.login-wrapper .form-control:-ms-input-placeholder {
    color: #b0adad;
}
.login-wrapper .form-control::-ms-input-placeholder {
    color: #b0adad;
}
.login-wrapper .form-control::placeholder {
    color: #b0adad;
}

.login-wrapper a.forgot-password-link {
    color: #080808;
    font-size: 14px;
    text-decoration: underline;
    display: inline-block;
    margin-bottom: 54px;
}
@media (max-width: 575px) {
    .login-wrapper a.forgot-password-link {
        margin-bottom: 16px;
    }
}

.login-wrapper-footer-text {
    font-size: 16px;
    color: #000;
    margin-bottom: 0;
}


.login-title {
    font-size: 30px;
    color: #000;
    font-weight: bold;
    margin-bottom: 25px;
}



/* 폼입력 */
.login-wrapper label {
    font-size: 14px;
    font-weight: bold;
    color: #b0adad;
}
.login-wrapper .form-control {
    border: none;
    border-bottom: 1px solid #e7e7e7;
    border-radius: 0;
    padding: 9px 5px;
    min-height: 40px;
    font-size: 18px;
    font-weight: normal;
}

/*로그인 버튼*/
.login-wrapper .login-btn {
    padding: 13px 20px;
    background-color: #fdbb28;
    border-radius: 0;
    font-size: 20px;
    font-weight: bold;
    color: #fff;
    margin-bottom: 14px;
}
.login-wrapper .login-btn:hover {
    border: 1px solid #fdbb28;
    background-color: #fff;
    color: #fdbb28;
}


.login-img {
    width: 100%;
    height: 100vh;
    -o-object-fit: cover;
    object-fit: cover;
    -o-object-position: left;
    object-position: left;
}
.footer-link {
    position: absolute;
    bottom: 1rem;
    text-align: center;
    width: 100%;
}
</style>

<x-www-docs>
    <main>
        <div class="container-fluid-fluid">
            <div class="row ">
                <div class="col-sm-6">
                    <div class="login-section-wrapper">
                        <div class="brand-wrapper">
                            <img src="https://www.bootstrapdash.com/demo/login-template-free-1/assets/images/logo.svg" alt="logo" class="logo">
                        </div>

                        <div class="login-wrapper my-auto">
                            <h1 class="login-title">Log in</h1>
                            <form action="#!">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" class="form-control" placeholder="email@example.com">
                            </div>
                            <div class="form-group mb-4">
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" class="form-control" placeholder="enter your passsword">
                            </div>
                                <input name="login" id="login" class="btn login-btn" type="button" value="Login">
                            </form>

                            <a href="#!" class="forgot-password-link">Forgot password?</a>
                            <p class="login-wrapper-footer-text">Don't have an account? <a href="#!" class="text-reset">Register here</a></p>
                        </div>

                    </div>
                </div>

                <div class="col-sm-6 px-0 d-none d-sm-block">
                    <img src="https://www.bootstrapdash.com/demo/login-template-free-1/assets/images/login.jpg" alt="login image" class="login-img">
                    <p class="text-white font-weight-medium text-center flex-grow align-self-end footer-link">
                        <a href="#" target="_blank" class="text-white">login templates</a> from Jinyui
                    </p>
                </div>
            </div>
        </div>
    </main>
</x-www-docs>
