<?php
    unset($_SESSION["id"]);
    unset($_SESSION["userrole"]);

    session_destroy();

    header("Location: ./index.php?content=message&alert=logout");
?>