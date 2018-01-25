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

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>bolbol.am</title>
</head>
<body>
    <h1>Hello Admin</h1>
</body>
</html>
