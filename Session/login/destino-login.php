<?php
$user = filter_input(INPUT_POST, "user", FILTER_SANITIZE_SPECIAL_CHARS);
$pass = filter_input(INPUT_POST, "pass", FILTER_SANITIZE_SPECIAL_CHARS);

if($user == "rafael"){
    if($pass == "senha123"){
        $_SESSION["user"] = $user;
        header("Location: http://localhost/session/inicio/inicio.php");
    }else{
        unset($_SESSION["user"]);
    }
   }
   else{
        unset($_SESSION["user"]);
    }
?>