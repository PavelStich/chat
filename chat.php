<?php
require_once 'db.php';
$result = mysqli_query($db_con, "SELECT * FROM messages");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <style>

    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-success">
                <div class="panel-heading">
                    Chat
                </div>
                <div class="panel-body">
                    <?php
                    while ($record = mysqli_fetch_assoc($result)){
                        if ($record['login']==$_SESSION['login'])
                            echo "<p align=\"right\" style='background-color: #dddddd'><b><font color='red'>".$record['login'].
                                "</b><font color='black'> at ".$record['time']."<br>".$record['message']."</p>";
                        else echo "<p><b><font color='black'>".$record['login'].
                            "</b> at ".$record['time']."<br>".$record['message']."</p>";
                    }?>
                    <div class="row_form">
                        <form method="post" class="form-group" action="/post.php">
                            <div class="form-group">
                                <label for="text"></label>
                                <input class="form-control" name="text" title="" placeholder="Your message">
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-success">
                            </div>

                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
</body>
</html>


