<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        .main {
            background: url(https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/i/2327ffa4-20e9-41b6-b77c-462d26f7bfea/d3ecbzg-045f95bb-8610-4dbb-84ab-e1d08fb037d7.jpg);
            height: 100vh;
            width: 100vw;
        }

        .login {
            background: transparent;
            background-color: black;
            color: white;
            border: 2px solid white;
            height: 80vh;
            width: 30vw;
            display: inline-block;
            margin-left: 35%;
            margin-top: 2%;
        }

        .user {
            height: 5%;
            width: 75%;
            font-size: larger;
            margin-left: 10%;
            margin-top: 10%;
            margin-bottom: 2%;
            padding: 5px;
        }

        .pass {
            height: 5%;
            width: 75%;
            font-size: larger;
            margin-left: 10%;
            margin-bottom: 2%;
            padding: 5px;
        }
        .selectuser{
            height: 8%;
            width: 35%;
            font-size: large;
            margin-left: 10%;
            margin-bottom: 2%;
            padding: 5px;
        }
        .selectBranch{
            height: 8%;
            width: 35%;
            font-size: large;
            margin-left: 8%;
            margin-bottom: 2%;
            padding: 5px;
        }
        .log {
            height: 8%;
            width: 35%;
            font-size: larger;
            margin-left: 10%;
            background-color: yellow;
        }

        .image {
            margin-left: 35%;
            width: 25%;
            height: 25%;
            border-radius: 20%;
            margin-top: 3%;
        }
        @media only screen and (max-width: 800px) {
            .login{
                margin-left: 0%;
                width: 100%;
            }
}
    </style>
</head>

<body>
    <form action="loginCheck.php" method="POST">
        <div class="main">
            <div class="login">
                <h1 style="text-align: center; margin-top: 15px; color: red;">Login page</h1>
                <img src="https://www.seekpng.com/png/full/138-1387775_login-to-do-whatever-you-want-login-icon.png" alt="login Image" class="image">
                <input type="email" placeholder="Username" class="user" name="username"><br>
                <input type="password" placeholder="password" class="pass" name="password"><br>
                <select name="selectuser" id="select" class="selectuser">
                <option value="opt1">user type</option>    
                <option value="opt1">Admin</option>
                <option value="opt2">User</option>
                </select>
                <select name="selectbranch" id="select" class="selectBranch">
                <option value="opt1">Branch</option>    
                <option value="opt1">Technical</option>
                <option value="opt2">Non-Technical</option>
                </select><br>
                <button type="submit" class="log" name="submit">Login</button>
                <a href="#">Forgot password</a>
            </div>
        </div>
    </form>

</body>

</html>