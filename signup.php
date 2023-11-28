<?php
include('connection.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up </title>
</head>

<body>
    <main>
        <div class="logo">
            <h1>STUDENT LOGIN </h1>
        </div>
        <div class="login">
            <div class="container">
                <div class="titile">
                    SIGNUP
                </div>
                <form action="">
                    First name : 
                    <input type="text" name="first name" id="fname" placeholder="first name">
                    Sure name : 
                    <input type="text" name="surname" id="sname" placeholder="last name">
                    Email : 
                    <input type="email" size="46px" id="email" placeholder="email or phone number">
                    Password : 
                    <input type="password" id="password" size="46px" placeholder="password">
                    Date :
                    <input type="date">
                    <input type="submit">
                </form>
            </div>
        </div>
    </main>
</body>

</html>