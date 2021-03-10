<?php
    session_start();
    include "db_config.php";

    $email = $_POST["email"];
    $password = $_POST["password"];

    $sqlStmt = "SELECT * FROM cust_registration WHERE cust_email='".$email."' AND cust_pass='".$password."'";

    $result = $conn->query($sqlStmt);

    if ($result->num_rows > 0) {
        $_SESSION["email"] =$email;
        header("Location:index.html");
    } else {
        echo "Email or password is wrong";
    }

    // $conn.close();
?>


signup.php

<form action="./login.php" method="post">
