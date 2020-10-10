<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <style>
        *{
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body{
            height: 100vh;
            width: 100vw;
            display: flex;
        }

        .container{
            height: 100vh;
            width: 100vw;
            background: rgb(22, 175, 162);
            display: flex;

        }

        .form{
            margin: auto;
            height: 250px;
            width: 300px;
            display: flex;
            align-items: center;
            justify-content: space-around;
            flex-direction: column;
            padding: 10px;
            border: 1px solid greenyellow;
            border-radius: 5px;
            background: #215b63b8;
            color: white;
        }


        .error{
            color: #ffb715;
        }

        .error.hide{
            display: none;
        }


        .email_pass{
            width: 100%;
            display: flex;
            justify-content: space-between;
            flex-direction: column;
        }
            .email_pass .email,
            .email_pass .password{
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 50px;
            width: 100%;
        }

        .email_pass .email input,
        .email_pass .password input{
            padding: 7px 10px;
            border: none;
            border-radius: 5px;
            outline: none;
        }

        .buttons{
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        button{
            width: 48%;
            height: 30px;
            border: none;
            outline: none;
            border-radius: 3px;
            cursor: pointer;
        }

        #login_btn{
            background: #b2ff1b;
        }

        #forgot_btn{
            background: #79786b5c;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form" id="login_form">
            <div class="header">
                <h3>Login to Your Account</h3>
            </div>
            <div class="error hide">
                Email or password does not matched!
            </div>
            <div class="email_pass">
                <div class="email">
                    <label for="">E-mail : </label>
                    <input type="text" id = "login-email" placeholder="Enter your email....">
                </div>
                <div class="password">
                    <label for="">Password : </label>
                    <input type="password" id="password" placeholder="Password">
                </div>
            </div>
            <div class="buttons">
                <button id="login_btn" onclick="login()">Login</button>
                <button id="forgot_btn">Forgot Password?</button>
            </div>
        </div>
    </div>
    <script src="login.js"></script>
</body>
</html>