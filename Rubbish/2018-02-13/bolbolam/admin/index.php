<?php
session_start();
// check login & password
if (isset($_SESSION['login']) && isset($_SESSION['password'])) {
    if ($_SESSION['login'] != 'aspar' && $_SESSION['password'] != 'Chemasi') {
        header('location: admin.php');
        exit;
    }
} else {
    header('location: admin.php');
    exit;
}

if (isset($_POST['logout'])) {
    header('location: admin.php');
    session_destroy();
    exit;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>bolbol.am</title>

    <style>
        form div>button {
            position: fixed !important;
            right: 15px;
            top: 15px;
            border: 0;
            font-size: 16px;
            color: #fff;
            background-color: #f34235;
            padding: 7px 14px;
            animation: animateLogout 2s infinite;
        }
        @keyframes animateLogout {
            0% { -webkit-transform: scale(1); transform: scale(1); }
            5% { -webkit-transform: scale(1.2); transform: scale(1.2); }
            10% { -webkit-transform: scale(1.1); transform: scale(1.1); }
            15% { -webkit-transform: scale(1.3); transform: scale(1.3); }
            50% { -webkit-transform: scale(1); transform: scale(1); }
            100% { -webkit-transform: scale(1); transform: scale(1); }}
    </style>
</head>
<body>
   <header>
       <form action="index.php" method="post">
           <div>
               <button type="submit" name="logout">Logout</button>
           </div>
       </form>
   </header>
    <h1>Hello Admin</h1>
</body>
</html>
