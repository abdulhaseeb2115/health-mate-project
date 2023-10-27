<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,900&display=swap" rel="stylesheet">
    <title>Admin Login</title>
</head>

<style>
    body {
        background-color: #a4508b;
        background-image: linear-gradient(326deg, #cf7cb6 0%, #8d1dc3);
        font-family: 'Roboto', sans-serif;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
        width: 100vw;
        overflow: hidden;
    }

    form {
        margin-top: 200px;
    }

    .login-box {
        height: 500px;
        width: 550px;
        background-color: #a4508b;
        background-image: linear-gradient(326deg, #a4508b 0%, #5f0a87 74%);
        text-align: center;
        box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
        border-radius: 20px;
        position: relative;
    }


    .login-key {
        height: 100px;
        font-size: 80px;
        line-height: 100px;
        background-color: #7f5a83;
        background-image: linear-gradient(315deg, #7f5a83 0%, #0d324d 74%);
        -webkit-background-clip: text;
        background-clip: text;
        -webkit-text-fill-color: transparent;
        display: none;
    }

    .login-title {
        position: absolute;
        margin-top: 55px;
        text-align: center;
        font-size: 30px;
        letter-spacing: 2px;
        margin-top: 15px;
        font-family: "Montserrat";
        top: 20%;
        color: white;
        z-index: 999;
    }

    .login-form {
        margin-top: 25px;
        text-align: left;
    }

    input[type=text] {
        border: none;
        border-bottom: 2px solid white;

        border-top: 0px;
        border-radius: 0px;
        font-weight: bold;
        outline: 0;
        margin-bottom: 20px;
        padding-left: 0px;
        color: #ECF0F5;
        background-color: transparent;
    }

    input[type=password] {
        background-color: transparent;
        border: none;
        border-bottom: 2px solid white;
        border-top: 0px;
        border-radius: 0px;
        font-weight: bold;
        outline: 0;
        padding-left: 0px;
        margin-bottom: 20px;
        color: #ECF0F5;
    }

    .form-group {
        margin-bottom: 40px;
        outline: 0px;
    }

    .form-control:focus {
        border-color: inherit;
        -webkit-box-shadow: none;
        box-shadow: none;
        border-bottom: 2px solid #0DB8DE;
        outline: 0;
        background-color: #1A2226;
        color: #ECF0F5;
    }

    input:focus {
        outline: none;
        box-shadow: 0 0 0;
    }

    label {
        margin-bottom: 0px;
        color: white;
    }

    .form-control-label {
        font-size: 10px;
        font-weight: bold;
        letter-spacing: 1px;
        color: white;

    }

    .btn-outline-primary {
        background-color: white;
        letter-spacing: 1px;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
        border-radius: 25px !important;

    }

    .btn-outline-primary:hover {
        background-color: white;
        color: #8d1dc3;
        right: 0px;
    }

    .login-btm {
        float: left;
    }

    .login-button {
        padding-right: 0px;
        text-align: right;
        margin-bottom: 25px;
    }

    .login-text {
        text-align: left;
        padding-left: 0px;
        color: #A2A4A4;
    }

    .loginbttm {
        padding: 0px;
    }

    .logo {
        width: 300px;
        height: 300px;
        position: absolute;
        left: 5%;
        top: 10px;
        z-index: 999;
        display: block;
    }

    .logo img {
        width: 100%;
    }
</style>



<body>


    <div class="login-box">

        <div class="logo"><img src="./images/LogoWhite_00000.png" alt=""></div>

        <div class="col-lg-12 login-key">
            <i class="fa fa-key" aria-hidden="true"></i>
        </div>


        <div class="col-lg-12 login-title">
            ADMIN LOGIN
        </div>

        <div class="col-lg-12 login-form">
            <div class="col-lg-12 login-form">


                <form action="./admin/dashboard.html">

                    <div class="form-group">
                        <label class="form-control-label">USERNAME</label>
                        <input type="text" class="form-control">
                    </div>


                    <div class="form-group">
                        <label class="form-control-label">PASSWORD</label>
                        <input type="password" class="form-control" i>
                    </div>


                    <div class="col-lg-12 loginbttm">
                        <div class="col-lg-6 login-btm login-text">
                            <!-- Error Message -->
                        </div>
                        <div class="col-lg-6 login-btm login-button">
                            <button type="submit" class="btn btn-outline-primary bg-transparent text-white border px-4 mt-3">LOGIN</button>
                        </div>
                    </div>
                </form>


            </div>
        </div>
    </div>





</body>

</html>