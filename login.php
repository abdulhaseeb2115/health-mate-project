<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- FontAwesome Link -->
    <!--|||||||||||||||||||||||||||||||-->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">


    <title>Login</title>
</head>

<style>
    @import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');

    * {
        box-sizing: border-box;
    }

    body {

        background-color: #a4508b;
        background-image: linear-gradient(326deg, #cf7cb6 0%, #8d1dc3);
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        font-family: 'Montserrat', sans-serif;
        height: 100vh;
        margin: -20px 0 50px;
    }

    h1 {
        font-weight: bold;
        margin: 0;
    }

    h2 {
        text-align: center;
    }

    p {
        font-size: 14px;
        font-weight: 100;
        line-height: 20px;
        letter-spacing: 0.5px;
        margin: 20px 0 30px;
    }

    span {
        font-size: 12px;
    }

    a {
        color: #333;
        font-size: 14px;
        text-decoration: none;
        margin: 15px 0;
    }

    button {
        border-radius: 20px;
        border: 1px solid #FF4B2B;
        background-color: #FF4B2B;
        color: #FFFFFF;
        font-size: 12px;
        font-weight: bold;
        padding: 12px 45px;
        letter-spacing: 1px;
        text-transform: uppercase;
        transition: transform 80ms ease-in;
        margin-top: 10px;
    }

    button:active {
        transform: scale(0.95);
    }

    button:focus {
        outline: none;
    }

    button.ghost {
        background-color: transparent;
        border-color: #FFFFFF;
    }

    form {
        background-color: #FFFFFF;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        padding: 0 50px;
        height: 100%;
        text-align: center;
    }

    input {
        background-color: #eee;
        border: none;
        padding: 12px 15px;
        margin: 8px 0;
        width: 100%;
    }

    .input-container {
        width: 100%;
        background-color: #eee;
        padding: 0px;
        margin: 0px;
        display: flex;
    }

    .input-container input {
        width: 85%;
        margin: 0px;
        display: inline;
    }

    .i-container {
        display: inline;
        width: 15%;
        margin: 0px;
        padding: 10px 22px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: dimgrey;
    }


    .container {
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25),
            0 10px 10px rgba(0, 0, 0, 0.22);
        position: relative;
        overflow: hidden;
        width: 768px;
        max-width: 100%;
        min-height: 480px;
    }

    .form-container {
        position: absolute;
        top: 0;
        height: 100%;
        transition: all 0.6s ease-in-out;
    }

    .sign-in-container {
        left: 0;
        width: 50%;
        z-index: 2;
    }

    .container.right-panel-active .sign-in-container {
        transform: translateX(100%);
    }

    .sign-up-container {
        left: 0;
        width: 50%;
        opacity: 0;
        z-index: 1;
    }

    .container.right-panel-active .sign-up-container {
        transform: translateX(100%);
        opacity: 1;
        z-index: 5;
        animation: show 0.6s;
    }

    @keyframes show {

        0%,
        49.99% {
            opacity: 0;
            z-index: 1;
        }

        50%,
        100% {
            opacity: 1;
            z-index: 5;
        }
    }

    .overlay-container {
        position: absolute;
        top: 0;
        left: 50%;
        width: 50%;
        height: 100%;
        overflow: hidden;
        transition: transform 0.6s ease-in-out;
        z-index: 100;
    }

    .container.right-panel-active .overlay-container {
        transform: translateX(-100%);
    }

    .overlay {
        background-repeat: no-repeat;
        background-size: cover;
        background-position: 0 0;
        color: #FFFFFF;
        position: relative;
        left: -100%;
        height: 100%;
        width: 200%;
        transform: translateX(0);
        transition: transform 0.6s ease-in-out;
    }

    .overlay::before {
        content: '';
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        background-color: #a4508b;
        background-image: linear-gradient(326deg, #a4508b 0%, #5f0a87 74%);
    }

    .container.right-panel-active .overlay {
        transform: translateX(50%);
    }

    .overlay-panel {
        position: absolute;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        padding: 0 40px;
        text-align: center;
        top: 0;
        height: 100%;
        width: 50%;
        transform: translateX(0);
        transition: transform 0.6s ease-in-out;
    }

    .overlay-left {
        transform: translateX(-20%);
    }

    .container.right-panel-active .overlay-left {
        transform: translateX(0);
    }

    .overlay-right {
        right: 0;
        transform: translateX(0);

    }

    .container.right-panel-active .overlay-right {
        transform: translateX(20%);
    }

    .social-container {
        margin: 20px 0;
    }

    .social-container a {
        border: 1px solid #DDDDDD;
        border-radius: 50%;
        display: inline-flex;
        justify-content: center;
        align-items: center;
        margin: 0 5px;
        height: 40px;
        width: 40px;
    }

    footer {
        background-color: #222;
        color: #fff;
        font-size: 14px;
        bottom: 0;
        position: fixed;
        left: 0;
        right: 0;
        text-align: center;
        z-index: 999;
    }

    footer p {
        margin: 10px 0;
    }

    footer i {
        color: red;
    }

    footer a {
        color: #3c97bf;
        text-decoration: none;
    }

    .data-container {
        display: flex;
        justify-content: space-between;
        width: 100%;
        margin-bottom: 8px;
    }

    .data-container input {
        width: 30%;
    }

    .adminLogin {
        margin-top: 220px;
        justify-self: flex-end;
        align-self: flex-end;
    }

    .adminLogin a {
        color: white;
        text-decoration: none;
    }

    .adminLogin a:hover {
        color: black;
    }

    .logo {
        width: 200px;
        height: 200px;
        position: absolute;
        left: 10px;
        top: 10px;
    }

    .logo img {
        width: 100%;
    }

    button {
        background-color: indigo;
        border-color: indigo;
    }
</style>




<body>
    <div class="logo"><img src="./images/LogoWhite_00000.png" alt=""></div>

    <div class="container" id="container">


        <!-- sign up -->
        <div class="form-container sign-up-container">
            <form action="./homePage.php">
                <h1>Create Account</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                </div>
                <span>or use your email for registration</span>
                <input type="text" placeholder="Name" />
                <input type="email" placeholder="Email" />

                <div class="data-container">
                    <input type="text" placeholder="Age" />
                    <input type="text" placeholder="Height" />
                    <input type="text" placeholder="Weight" />
                </div>
                <div class="input-container">
                    <input type="password" id="password" placeholder="Password" />
                    <div id="show-hide" class="i-container">
                        <i class="fa fa-eye-slash eye"></i>
                    </div>
                </div>

                <button type="submit">Sign Up</button>
            </form>
        </div>


        <!-- sign In -->
        <div class="form-container sign-in-container">
            <form action="./homePage.php">
                <h1>Log in</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                </div>
                <span>or use your account</span>
                <input type="email" placeholder="Email" />

                <div class="input-container">
                    <input type="password" id="password1" placeholder="Password" />
                    <div id="show-hide" class="i-container">
                        <i class="fa fa-eye-slash eye1"></i>
                    </div>
                </div>

                <a href="#">Forgot your password?</a>
                <button type="submit">Log In</button>
            </form>
        </div>


        <!-- overlay -->
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>HEALTH MATE!</h1>
                    <p>Please login with your personal info</p>
                    <button class="ghost" id="signIn">Log In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>HEALTH MATE!</h1>
                    <p>Enter your personal details and start your transformation journey with us</p>
                    <button class="ghost" id="signUp">Sign Up</button>
                    <small class="adminLogin"><a href="./adminLogin.php">admin login</a></small>
                </div>
            </div>
        </div>



    </div>




    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" integrity="sha512-RXf+QSDCUQs5uwRKaDoXt55jygZZm2V++WUZduaU/Ui/9EGp3f/2KZVahFZBKGH0s774sd3HmrhUy+SgOFQLVQ==" crossorigin="anonymous">
    </script>



    <!-- toggle password -->
    <script>
        $(".i-container").click(function() {

            $(".eye").toggleClass("fa-eye-slash");
            $(".eye1").toggleClass("fa-eye-slash");
            $(".eye").toggleClass("fa-eye");
            $(".eye1").toggleClass("fa-eye");

            if ($("#password1").attr("type") == "password") {
                $("#password1").attr("type", "text");
            } else if ($("#password1").attr("type") == "text") {
                $("#password1").attr("type", "password");
            }

            if ($("#password").attr("type") == "password") {
                $("#password").attr("type", "text");
            } else if ($("#password").attr("type") == "text") {
                $("#password").attr("type", "password");
            }
        });
    </script>

    <!-- form -->
    <script>
        const signUpButton = document.getElementById('signUp');
        const signInButton = document.getElementById('signIn');
        const container = document.getElementById('container');

        signUpButton.addEventListener('click', () => {
            container.classList.add("right-panel-active");
        });

        signInButton.addEventListener('click', () => {
            container.classList.remove("right-panel-active");
        });
    </script>

</body>

</html>