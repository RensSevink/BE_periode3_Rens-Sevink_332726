<?php
    $alert = (isset($_GET["alert"]))? $_GET["alert"]: "default";
    $id = (isset($_GET["id"]))? $_GET["id"]: "";
    $pwh = (isset($_GET["pwh"]))? $_GET["pwh"]: "";
    $email = (isset($_GET["email"]))? $_GET["email"]: "";

    switch($alert) {
        case "no-email" :
            echo '<div class="alert alert-info mt-5 w-50 mx-auto" role="alert">
                U heeft geen e-mailadres ingevuld, probeer het opnieuw...
                </div>';
            header("Refresh: 3; ./index.php?content=register");
        break;
        case "emailexists" :
            echo '<div class="alert alert-warning mt-5 w-50 mx-auto" role="alert">
            Het ingevulde e-mailadres bestaat al, probeer het opnieuw met een ander e-mailadres...
            </div>';
        header("Refresh: 3; ./index.php?content=register");
        break;
        case "register-error" :
            echo '<div class="alert alert-danger mt-5 w-50 mx-auto" role="alert">
            Er is iets fout gegaan in het registratieproces... Probeer het nogmaals of neem contact op met admin@yakuzafans.nl
            </div>';
        header("Refresh: 3; ./index.php?content=register");
        break;
        case "register-success" :
            echo '<div class="alert alert-success mt-5 w-50 mx-auto" role="alert">
            Uw account is succesvol aangemaakt, u ontvangt een e-mail met de activatie link...
            </div>';
        header("Refresh: 3; ./index.php?content=login");
        break;
        case "hacker-alert" :
            echo '<div class="alert alert-danger mt-5 w-50 mx-auto" role="alert">
            U heeft geen rechten op deze pagina...
            </div>';
        header("Refresh: 3; ./index.php?content=home");
        break;
        case "password-empty" :
            echo '<div class="alert alert-danger mt-5 w-50 mx-auto" role="alert">
            U heeft een van beide wachtwoordvelden niet ingevoerd...
            </div>';
        header("Refresh: 3; ./index.php?content=activate&id=$id&pwh=$pwh");
        break;
        case "nomatch-password" :
            echo '<div class="alert alert-danger mt-5 w-50 mx-auto" role="alert">
            De twee ingevoerde wachtwoorden komen niet met elkaar over...
            </div>';
        header("Refresh: 3; ./index.php?content=activate&id=$id&pwh=$pwh");
        break;
        case "no-id-pwh-match" :
            echo '<div class="alert alert-danger mt-5 w-50 mx-auto" role="alert">
            U bent niet geregistreerd in de database, u wordt doorgestuurd naar de registratiepagina...
            </div>';
        header("Refresh: 3; ./index.php?content=register");
        break;
        case "update-succes" :
            echo '<div class="alert alert-success mt-5 w-50 mx-auto" role="alert">
            U bent succesvol geregistreerd, u wordt doorgestuurd naar de loginpagina...
            </div>';
        header("Refresh: 3; ./index.php?content=login");
        break;
        case "update-error" :
            echo '<div class="alert alert-danger mt-5 w-50 mx-auto" role="alert">
            U bent niet succesvol geregistreerd, kies een nieuw wachtwoord...
            </div>';
        header("Refresh: 3; ./index.php?content=activate&id=$id&pwh=$pwh");
        break;
        case "already-active" :
            echo '<div class="alert alert-danger mt-5 w-50 mx-auto" role="alert">
            Uw account is al actief, log in met uw zelfgekozen wachtwoord en emailadres...
            </div>';
        header("Refresh: 3; ./index.php?content=login");
        break;
        case "no-match-pwh" :
            echo '<div class="alert alert-danger mt-5 w-50 mx-auto" role="alert">
            Uw activatielinkgegevens zijn niet correct, registreer opnieuw...
            </div>';
        header("Refresh: 3; ./index.php?content=login");
        break;
        case "loginform-empty" :
            echo '<div class="alert alert-danger mt-5 w-50 mx-auto" role="alert">
            U heeft een van beide velden niet ingevuld, probeer opnieuw...
            </div>';
        header("Refresh: 3; ./index.php?content=login");
        break;
        case "email-unknown" :
            echo '<div class="alert alert-danger mt-5 w-50 mx-auto" role="alert">
            Dit e-mail is onbekend, probeer opnieuw...
            </div>';
        header("Refresh: 3; ./index.php?content=login");
        break;
        case "not-activated" :
            echo '<div class="alert alert-danger mt-5 w-50 mx-auto" role="alert">
            Uw account is nog niet geactiveerd, check uw e-mail <span class="badge badge-primary">' . $email . '</span> voor de activatielink van uw account...
            </div>';
        header("Refresh: 3; ./index.php?content=login");
        break;
        case "no-pw-match" :
            echo '<div class="alert alert-danger mt-5 w-50 mx-auto" role="alert">
            Uw ingevulde wachtwoord voor het e-mailadres <span class="badge badge-primary">' . $email . '</span> is niet correct, probeer opnieuw...
            </div>';
        header("Refresh: 3; ./index.php?content=login");
        break;
        case "logout" :
            echo '<div class="alert alert-success mt-5 w-50 mx-auto" role="alert">
            Uw bent succesvol uitgelogd, u wordt nu doorgestuurd naar de home pagina...
            </div>';
        header("Refresh: 3; ./index.php?content=home");
        break;
        default:
            header("Location: ./index.php?content=home");
        break;
    }
?>