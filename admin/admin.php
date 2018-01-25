<?php
session_start();
// login
if (isset($_POST['login']) && isset($_POST['password'])) {

    // login & password
    $login = 'aspar';
    $password = 'Chemasi';

    // check login
    if ($_POST['login'] == $login && $_POST['password'] == $password) {
        $_SESSION['login'] = $login;
        $_SESSION['password'] = $password;
        header('location: index.php');
        exit;
    }
}
?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Admin Space</title>
        <link rel="stylesheet" href="css/main.css">

        <style>
            body {
                position: fixed;
                top: 50%;
                left: 50%;
                margin-right: -50%;
                transform: translate(-50%, -50%)
            }
            h3 {
                margin: 0px auto 30px;
                text-align: center;
                font-weight: 400;
                letter-spacing: 0px;
            }
            form {
                text-align: center;
                display: block;
                width: 252px;
            }
            form div {
                float: left;
            }
            form div input {
                display: block;
                padding-left: 10px;
                margin-bottom: 6px;
                height: 26px;
                width: 170px;
                border: 0px solid #000 !important;
            }
            form div input:focus {
                outline: none;
            }
            form p button {
                display: none;
                float: right;
                height: 58px;
                border: 1px solid #000;
                padding: 7px 16px;
                background-color: #fff;
                font-size: 15px;
            }
            form p button:hover {
                background-color: #4169E1;
                border-color: #4169E1;
                color: #fff;
            }
        </style>

    </head>
    <body>
        <div id="admin" class="white">
<!--            <h3>Ադմինիստրացիոն համակարգ</h3>-->
            <form action="admin.php" method="post">
                <div>
                    <input type="text" name="login" placeholder="Login" autocomplete="off" required>
                    <input type="password" name="password" placeholder="Password"  autocomplete="off" required>
                </div>
                <p><button type="submit">Մուտք</button></p>
            </form>
        </div>
    </body>
</html>
