<?php
    include('session.php');
    unset($_SESSION['login_user']);
    header("location: login.php");
?>