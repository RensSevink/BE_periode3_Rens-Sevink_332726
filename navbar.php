<?php
  if (isset($_GET["content"])) {
    $active = $_GET["content"];
  }
  else {
    $active = "";
  }


?>




<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Yakuza Fans</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link <?php if( $active == "home") {echo "active";} ?>" aria-current="page" href="./index.php?content=home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if( $active == "games") {echo "active";} ?>" href="./index.php?content=games">Games</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if( $active == "spinoffs") {echo "active";} ?>" href="./index.php?content=spinoffs">Spin-Offs</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Consoles
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>