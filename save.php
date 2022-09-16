<html>
    <head>
    <link rel='icon' href='instagram.png'>
    </head>
    <body>
<style>
    *
    {
        margin: 0;
        padding: 0;
    }
    body
    {
        width: 100%;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        background: linear-gradient(45deg,darkslateblue,yellow);
    }
    .square
    {
        width: 85vh;
        height: 80vh;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        background-color: white;
        border-radius: 20px;
    }
    h2
    {
        font-size: 50px;
        background: linear-gradient(45deg,red,violet);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }
    h3
    {
        font-size: 44px;
        color: black;
        text-align: center;
        font-family: sans-serif;
    }
    p
    {
        font-size: 24px;
        color: black;
        font-family: sans-serif;
        margin-left: 44px;
    }
    img
    {
        width: 85px;
        height: 83px;
        border: 2px solid white;
        border-radius: 15%;
    }
    #btn
        {
            width: 40vh;
            padding:10px;
            height: 8vh;
            font-family: cursive;
            cursor: pointer;
            color: white;
            margin-left: 65px;
            border: none;
            background: linear-gradient(45deg,violet,red);
            border-radius: 20px;
        }
    input
    {
        width: 5vh;
        height: 5vh;
        text-align: center;
        margin: 8px;
    }


</style>
<?php
$num = $_POST["num"];
if($num == 1)
{// creating data

    echo "<title>Creating Account Confirmation</title>";
$username = $_POST["user"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$location = $_POST["loct"];
$password = $_POST["pass"];

// creating connect
$connect = mysqli_connect("localhost","root","","web");

$sql = " INSERT INTO `login`(`Username`, `Email`, `Phone`, `Location`, `Password`) VALUES ('$username','$email','$phone','$location','$password')";

$query =mysqli_query($connect,$sql);

    if(isset($query))
    {
        echo "<div class='square'>";
        echo "<h2> Congralutions ! </h2>";
        echo "<br>";
        echo "<img src='instagram.png'>";
        echo "<br>";
        echo "<h3> welcome to the world,</h3>";  
        echo "<br>";
        echo "<form action='loginAc.php' >";
        echo "<center>";
        echo "<input type='checkbox' required>";
        echo "</center>";
        echo "<p> I also agree Terms and Conditions </p>";
        echo "<br>";
        echo "<p>Login in your Account to enjoy </p>";
        echo "<br>";
        echo "<input id='btn' type='submit' value='Login Account'>";
        echo "</form>";
        echo "</div>";
    }
    else
    {
        echo "<div class='square'>";
        echo "<h2> Failure ! </h2>";
        echo "<br>";
        echo "<img src='instagram.png'>";
        echo "<br>";
        echo "<h3> welcome to the world,</h3>";  
        echo "<br>";
        echo "<center>";
        echo "<form action='loginAc.php' >";
        echo "<p>Creating account has problem, </p>";
        echo "<br>"; 
        echo "<p>Please recreate Account, information is incorrectx</p>";
        echo "<br>";
        echo "<input id='btn' type='submit' value='Retry'>";
        echo "</center>";
        echo "</form>";
        echo "</div>";
    }

// creating Query
}

else
{
    echo "<title>Login Account Confirmation</title>";
    echo "<link rel='icon' href='instagram.png'> ";

    $username = $_POST["user"];
    $password =$_POST["pass"];

    $connect = mysqli_connect("localhost","root","","web");
    $sql1 = " SELECT `Username`,`Password` FROM `login` WHERE Username='$username' and Password='$password' ";

    $query1 = mysqli_query($connect,$sql1);

    $result = mysqli_fetch_array($query1);
    
    if(isset($result))
    {
        echo "<div class='square'>";
        echo "<h2> Congralutions ! </h2>";
        echo "<br>";
        echo "<img src='instagram.png'>";
        echo "<br>";
        echo "<h3> welcome Back </h3>";  
        echo "<br>";
        echo "<form action='index.html' >";
        echo "<h3> $username </h3>";
        echo "<br>";
        echo "<p> Go to Website Instagram </p>";
        echo "<br>";
        echo "<input id='btn' type='submit' value='enter'>";
        echo "</form>";
        echo "</div>";
    }
    else
    {
        header("location:loginAc.php");
    }
}



?>
</body>
</html>
    