<!DOCTYPE html>
<html>
<head>
        <title>webchat</title>

        <link rel="stylesheet" type="text/css" href="style.css">

   

</head>
<body>
    <div id="main">
        <div id="info">
            <h2>login here</h2>

            <form action="login.php" method="POST">
                <label><b>Username:</b></label>
                <input type="text" name="uname" placeholder="Username"><br><br>
                <label><b>Password:</b></label>
                <input type="password" name="pass" placeholder="Password"><br><br>
                <button style="background-color: #6495ed; color: white;"class="btn btn-primary" ><br>Login</br>
                </button>
</form> 


                <form action="signup.php" method="POST">
                    <h2>Don't have an account </h2>
                    <label>Username:</label>
                    <input type="text" name="username" placeholder="Username" /> <br><br>
                    <label>Email Add:</label>
                    <input type="text" name="email" placeholder="Email"><br><br>
                    <label>Password:</label>
                    <input type="password" name="Password" placeholder="Password"><br><br>  
                    <button style="background-color: #6495ed; color: white;" class="btn btn-primary" ><br>Signup</br> 
                </form>


            

            <?php
            ?>


            </body>
            </html>
