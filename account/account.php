<div class = "container" id = "container">
    <div class = "content" id = "content">
        <div class = "company" id = "company">
            <div class = "item" id = "item">
                <h2 class = "logo"><img src = "/Images/logo-white.png" alt="Logo">KKYB PC Build</h2>
                <div class = "text-item">
                    <h2>Welcome! <br><span>To Our Website</span></h2>
                    <p>Come to start to build your PC.<br>KKYB, your best choice.</p>
                    <div class="social-icon">
                        <a href="https://youtu.be/dQw4w9WgXcQ?si=Wjozno-d3n1FDnKi"><i class='bx bxl-facebook'></i></a>
                        <a href="https://youtu.be/dQw4w9WgXcQ?si=Wjozno-d3n1FDnKi"><i class='bx bxl-instagram'></i></a>
                        <a href="https://youtu.be/dQw4w9WgXcQ?si=Wjozno-d3n1FDnKi"><i class='bx bxl-tiktok' ></i></a>
                        <a href="https://youtu.be/dQw4w9WgXcQ?si=Wjozno-d3n1FDnKi"><i class='bx bxl-whatsapp'></i></a>
                    </div>                    
                </div>
            </div>
        </div>
        <div class = "login-section" id = "login-section">
            <div class = "form-box login" id = "form-box login">
                <form id = "loginForm" action = "index.php" method = "post">
                    <h2>Login</h2>
                    <div class = "input-box" id = "input-box">
                        <span class = "icon" id = "icon"><i class='bx bxs-user'></i></span>
                        <input id = "userName" name = "userName" type = "text">
                        <label>Username</label>
                        <div id="userNameError" class="error"><?= $errors['userName'] ?? '' ?></div>
                    </div>
                    <div class = "input-box" id = "input-box">
                        <span class = "icon" id = "icon"><i class='bx bxs-lock'></i></span>
                        <input id = "password" name = "password" type = "password">
                        <label>Password</label>
                        <div id="passwordError" class="error"><?= $errors['password'] ?? '' ?></div>
                    </div>
                    <div class = "checkbox">

                    </div>
                    <input class = "btn login" name = "login" type = "submit" value = "Login">
                    <div class = "create-account" id = "create-account">
                        <p>Create A New Account? <a href = "#" class = "register-link">Sign Up</a></p>
                    </div>
                </form>
            </div>
            <div class = "form-box register" id = "form-box register">
                <form id = "registerForm" action = "index.php" method = "post">
                    <h2>Sign Up</h2>
                    <div class = "input-box" id = "input-box">
                        <span class = "icon" id = "icon"><i class='bx bxs-user'></i></span>
                        <input id = "newUserName" name = "newUserName" type = "text">
                        <label>Username</label>
                        <div id="newUserNameError" class="error"><?= $errors['newUserName'] ?? '' ?></div>
                    </div>
                    <div class = "input-box" id = "input-box">
                        <span class = "icon" id = "icon"><i class='bx bxs-envelope'></i></span>
                        <input id = "email" name = "email" type = "text">
                        <label>Email</label>
                        <div id="emailError" class="error"><?= $errors['email'] ?? '' ?></div>
                    </div>
                    <div class = "input-box" id = "input-box">
                        <span class = "icon" id = "icon"><i class='bx bxs-lock'></i></span>
                        <input id = "newPassword" name = "newPassword" type = "password">
                        <label>Password</label>
                        <div id="newPasswordError" class="error"><?= $errors['newPassword'] ?? '' ?></div>
                    </div>
                    <div class = "input-box" id = "input-box">
                        <span class = "icon" id = "icon"><i class='bx bxs-lock'></i></span>
                        <input id = "confirmPassword" name = "confirmPassword" type = "password">
                        <label>Confirm Password</label>
                        <div id="confirmPasswordError" class="error"><?= $errors['confirmPassword'] ?? '' ?></div>
                    </div>
                    <div class = "checkbox">
                        <label for = ""><input id = "agree" name = "agree" type = "checkbox">I agree with that.</label><br>
                        <div id="agreeError" class = "error agreeError"><?= $errors['agree'] ?? '' ?></div>
                    </div>
                    <input class = "btn register" name = "register" type = "submit" value = "Sign Up">
                    <div class = "create-account" id = "create-account">
                        <p>Already Have An Account? <a href = "#" class = "login-link">Login</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>