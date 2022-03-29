<?php
    include("./connect_db.php");
    include("./functions.php");

    $id = sanitize($_POST["id"]);
    $pwh = sanitize($_POST["pwh"]);
    $password = sanitize($_POST["password"]);
    $passwordCheck = sanitize($_POST["passwordCheck"]);

    if(empty($_POST["password"]) || empty($_POST["passwordCheck"])) {
        header("Location: ./index.php?content=message&alert=password-empty&id=$id&pwh=$pwh");
    }
    else if(strcmp($password, $passwordCheck)) {
        header("Location: ./index.php?content=message&alert=nomatch-password&id=$id&pwh=$pwh");
    }
    else {

        $sql = "SELECT * FROM `register` WHERE `id` = $id AND `password` = '$pwh'";

        $result = mysqli_query($conn, $sql);

        echo mysqli_num_rows($result);

        if (mysqli_num_rows($result)) {
            // updaten
        }
        else {
            // fout melding
            header("Location: ./index.php?content=message&alert=no-id-pwh-match");
        }
    }
?>