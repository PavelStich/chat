<?php
if(isset($_POST['login']) && isset($_POST['password']))
{
    $login=htmlspecialchars(trim($_POST['login']));
    $password=htmlspecialchars(trim($_POST['password']));
    if($login=="" || $password=="")
    {
        die("Fill in the fields!");
    }
    require_once("db.php");
    $res_login=("SELECT login FROM users WHERE login='$login' ");
    $result1=mysqli_query($db_con,$res_login);
    $data=mysqli_fetch_array($result1,MYSQLI_ASSOC);
    if(!empty($data['login']))
    {
        die("This login already exists!");
    }
    if(strlen($password)<7)
    {
        die("The password can not be less than 7 characters!");
    }
    $query="INSERT INTO users (login, password) VALUES($login,$password)";
    $result=mysqli_query($db_con, $query);
    if($result==true)
    {
        echo "You are registered! <br><a href='index.php'>Home</a>";
    }
    else
    {
        echo "Error!";
    }}
?>