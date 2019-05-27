<?php
session_start();
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
        <link rel="stylesheet" type="text/css" href="home.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script type="text/javascript">
        function getStates(value) {
            $.post("PassHome.php", {uname: value}, function (data) {
                $("#results").html(data);
            });
        }
    </script>


    </head>
    <body>
        <div id="main">

            <h1 style="background-color: #6495;color: white;"><?php echo $_SESSION['name'] ?>-online</h1>

            <div class="output">
                
                Name: <input type="text" onkeyup="getStates(this.value)" name="name" value="" />
                    
                    
                <div id="results"></div>
                
               
            </div>

                <form action="send.php" method="POST">
                    <textarea name="msg"  placeholder="Type to send message....." class="form-control"></textarea><br>
                <input type="submit" value="send">
                </form>
               
            <br>
            <form action="logout.php">

                <input style="width: 100%;background-color: #6495; color: white; font-size: 20px; " type="submit" value="Logout">
</form>
                </div>


                </body>
                </html>