<?php
    include("./connect_db.php");
    include("./functions.php");

    $email = sanitize($_POST["email"]);
    $password = sanitize($_POST["password"]);

    if (empty($email) || empty($password)) {
        header("Location: ./index.php?content=message&alert=loginform-empty");
    }
    else {
        $sql = "SELECT * FROM `register` WHERE `email` = '$email'";

        $result = mysqli_query($conn, $sql);

        if (!mysqli_num_rows($result)) {
            header("Location: ./index.php?content=message&alert=email-unknown");
        }
        else {
            $record = mysqli_fetch_assoc($result);

            if (!$record["activated"]) {
                header("Location: ./index.php?content=message&alert=not-activated&email=$email");
            }
            else if (!password_verify($password, $record["password"])) {
                header("Location: ./index.php?content=message&alert=no-pw-match&email=$email");
            }
            else {
                
                switch($record["userrole"]) {
                    case 'customer':
                        header("Location: ./index.php?content=c-home");
                    break;
                    case 'root':
                        header("Location: ./index.php?content=r-home");
                    break;
                    case 'admin':
                        header("Location: ./index.php?content=a-home");
                    break;
                    case 'moderator':
                        header("Location: ./index.php?content=m-home");
                    break;
                    default:
                        header("Location: ./index.php?content=m-home");
                    break;
                }

            }
        }
    }
?>