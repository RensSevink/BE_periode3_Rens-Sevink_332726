<?php
  $active = (isset($_GET["content"]))? $_GET["content"]: "";
?>




<nav class="navbar navbar-expand-md navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="./index.php?content=home">Yakuza Fans</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link <?php echo (in_array($active, ["home", ""]))? "active": "" ?>" aria-current="page" href="./index.php?content=home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo ($active == "games")? "active": "" ?>" href="./index.php?content=games">Games</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo ($active == "spinoffs")? "active": "" ?>" href="./index.php?content=spinoffs">Spin-Offs</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle <?php echo (in_array($active, ["xbox", "playstation", "pc"]))? "active": "" ?>" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Consoles
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item <?php echo ($active == "xbox")? "active": "" ?>" href="./index.php?content=xbox">Xbox</a></li>
            <li><a class="dropdown-item <?php echo ($active == "playstation")? "active": "" ?>" href="./index.php?content=playstation">Playstation</a></li>
            <li><a class="dropdown-item <?php echo ($active == "pc")? "active": "" ?>" href="./index.php?content=pc">PC</a></li>
          </ul>
        </li>
      </ul>
      <ul class="navbar-nav ms-auto">
        <?php
          if (isset($_SESSION["id"])) {
            switch($_SESSION["userrole"]) {
              case 'admin':
                  echo '<li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle '; echo (in_array($active, ["xbox", "playstation", "pc"]))? "active": ""; echo '" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                admin workbench
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item '; echo ($active == "a-users")? "active": ""; echo '" href="./index.php?content=a-users">users</a></li>
                <li><a class="dropdown-item '; echo ($active == "playstation")? "active": ""; echo '" href="./index.php?content=resetpassword">reset password</a></li>
              </ul>
            </li>';
            break;
            case 'root':

            break;
            case 'customer':

            break;
            case 'moderator':

            break;
            default:

            break;
            }
            echo '<li class="nav-item '; echo ($active == "logout") ? "active" : ""; echo '">
            <a class="nav-link" href="./index.php?content=logout">Uitloggen</a>
            </li>';
          }
          else {
            echo '<li class="nav-item '; echo ($active == "register") ? "active" : ""; echo '">
            <a class="nav-link" href="./index.php?content=register">Registreer</a>
            </li>
            <li class="nav-item '; echo ($active == "login") ? "active" : ""; echo '">
            <a class="nav-link" href="./index.php?content=login">Inloggen</a>
            </li>';
          }
        ?>
        
      </ul>
    </div>
  </div>
</nav>