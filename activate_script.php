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

        $sql = "SELECT * FROM `register` WHERE `id` = $id";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result)) {
            
            $record = mysqli_fetch_assoc($result);

            if ($record["activated"]) {
                header("Location: ./index.php?content=message&alert=already-active");
            }
            else {

                if ( !strcmp($record["password"], $pwh)) {
                    $password_hash = password_hash($password, PASSWORD_BCRYPT);
        
                    $sql = "UPDATE `register`
                            SET `password` = '$password_hash',
                                `activated` = 1
                            WHERE `id` = $id
                            AND password = '$pwh'";
        
                   if (mysqli_query($conn, $sql)) {
                       header("Location: ./index.php?content=message&alert=update-succes");
                   }
                   else {
                       header("Location: ./index.php?content=message&alert=update-error&id=$id&pwh=$pwh");
                   }
                }
                else {
                    header("Location: ./index.php?content=message&alert=no-match-pwh");
                }
            }


        }
        else {
            header("Location: ./index.php?content=message&alert=no-id-pwh-match");
        }
    }
?>