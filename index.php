<?php session_start(); ?>
<html>
<title>Chat</title>
<head></head>
<body>
<?php   if(!isset($_SESSION['login']) || !isset($_SESSION['id'])){  ?>
    <center>
        <form action="register.php" method="POST">
            <h3>Registration form</h3>
            Login: <br> <input type="text" name="login"><br>
            Password: <br> <input type="password" name="password"><br>
            <input type="submit" value="OK">
        </form>
        <form action="login.php" method="POST">
            <h3>Sign in</h3>
            Login: <br> <input type="text" name="login"><br>
            Password: <br> <input type="password" name="password"><br>
            <input type="submit" value="Sign in">
        </form>
    </center>
<?php   }
if(isset($_SESSION['login']) && isset($_SESSION['id']))
{
    require_once("db.php");
    $user=$_SESSION['login'];
    $result1=mysqli_query($db_con,"SELECT * FROM users WHERE login='$user' ");
    $user_data=mysqli_fetch_array($result1);
    echo "<center>";
    echo "Your login: <b>". $user_data['login']."</b>&nbsp&nbsp&nbsp";
    echo "<a href='exit.php'>Exit</a>";
    echo "</center>";
    include("chat.php");
}   ?>
</body>
</html>