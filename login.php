<?php
if(isset($_POST['login']) && isset($_POST['password']))
{
    require_once("db.php");
    $login=htmlspecialchars(trim($_POST['login']));
    $password=htmlspecialchars(trim($_POST['password']));
    $result1=mysqli_query($db_con,"SELECT * FROM users WHERE login='$login'");
    $data=mysqli_fetch_array($result1);
    if(empty($data[1]))
    {
        die("This user does not exist!");
    }
    if($password!=$data[2])
    {
        die("The entered password is incorrect!");
    }
    session_start();
    $_SESSION['login']=$data['login'];
    $_SESSION['id']=$data['id'];
    header("location: index.php");
}
?>