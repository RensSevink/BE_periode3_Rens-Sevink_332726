<?php
    function sanitize($raw_data) {
        global $conn;
        $data = htmlspecialchars($raw_data);
        $data = mysqli_real_escape_string($conn, $data);
        $data = trim($data);
        return $data;
    }

    function pwh_from_microtime() {
        $mut = microtime();

        $time = explode(" ", $mut);
        $password = $time[1] * $time[0] * 1000000;
        $password_hash = password_hash($password, PASSWORD_BCRYPT);

        $onehour = mktime(1,0,0,1,1,1970);
        $d = date("d-m-y", ($time[1] + $onehour));
        $t = date("H:i:s", ($time[1] + $onehour));

        return array("password_hash" => $password_hash, "date" => $d, "time" => $t);
    }

    function is_authorized($userroles)  {
        if (!isset($_SESSION["id"])) {
            return header("Location: ./index.php?content=message&alert=auth-error");
        }
        else if ( !in_array($_SESSION["userrole"], $userroles)) {
            return header("Location: ./index.php?content=message&alert=auth-error-user");
        }
        else {
            return true;
        }
    }
?>