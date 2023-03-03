<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/login.css">
    <link rel="stylesheet" href="./assets/css/reset.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <title>Login</title>
</head>

<body>
    <div class="loggin-message">
        <div class="message-container">
            <div class="message">Sign up successfully !</div>
            <input id="confirm-button" type="button" value="Confirm">
        </div>
    </div>
    <div class="body">
        <div class="back"><a href="index.php"><i class="fa-solid fa-arrow-left"></i></a></div>
        <div class="container" id="container">

            <div class="form-container sign-up-container">
                <form name="signup_form" onsubmit="return sanitizeForm()" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">
                    <h1>Create Account</h1>
                    <input name="signup_name" type="text" placeholder="Name" name="name" />
                    <div style="display:none;" class="input_message" id="name_validate_message"></div>
                    <input name="signup_phone" type="tel" placeholder="Phone" name="phone" />
                    <div style="display:none;" class="input_message" id="phone_validate_message"></div>
                    <input name="signup_mail" type="email" placeholder="Email" name="email" />
                    <div style="display:none;" class="input_message" id="mail_validate_message"></div>
                    <input name="signup_passwd" type="password" placeholder="Password" name="password" require />
                    <input name="signup_passwd_cfm" type="password" placeholder="Confirm password" />
                    <div style="display:none;" class="input_message" id="passwd_cfm_message"></div>
                    <button type="submit">Sign Up</button>
                    <?php
                    if (isset($_POST['signup_name']) || isset($_POST['signup_name'])) {

                        echo "<script>
                        document.querySelector('.loggin-message').style.display = 'flex'
                        document.querySelector('.body').style.display = 'none'
                            </script>";
                    }
                    ?>
                </form>
            </div>
            <div class="form-container sign-in-container">
                <form action="">
                    <h1>Sign in</h1>
                    <input name="mail" type="email" placeholder="Email" />
                    <input name="passwd" type="password" placeholder="Password" />
                    <a href="#">Forgot your password?</a>
                    <button type="submit">Sign In</button>
                </form>
            </div>
            <div class="overlay-container">
                <div class="overlay">
                    <div class="overlay-panel overlay-left">
                        <h1>Welcome Back!</h1>
                        <p>To keep connected with us please login with your personal info</p>
                        <button class="ghost" id="signIn">Sign In</button>
                    </div>
                    <div class="overlay-panel overlay-right">
                        <h1>Hello, Friend!</h1>
                        <p>Enter your personal details and start journey with us</p>
                        <button class="ghost" id="signUp">Sign Up</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
<script src="./assets/js/login.js"></script>
<script src="https://kit.fontawesome.com/f26ba754df.js" crossorigin="anonymous"></script>

</html>