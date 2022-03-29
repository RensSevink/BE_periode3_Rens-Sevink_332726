<?php
  if (!(isset($_GET["content"]) && isset($_GET["id"]) && isset($_GET["pwh"]))){
    header("Location: ./index.php?content=message&alert=hacker-alert");
  }
?>

<div class="container mt-5">
  <div class="row">
    <div class="col-12 col-sm-6">
      <form action="./index.php?content=activate_script" method="post">
        <div class="mb-3">
          <label for="InputPassword" class="form-label">Vul hier uw wachtwoord in:</label>
          <input name="password" type="password" class="form-control" id="InputPassword" aria-describedby="passwordHelp">
          <div id="passwordHelp" class="form-text">Kies een veilig wachtwoord...</div>
        </div>
        <div class="mb-3">
          <label for="InputPasswordCheck" class="form-label">Type het wachtwoord opnieuw:</label>
          <input name="passwordCheck" type="password" class="form-control" id="InputPasswordCheck" aria-describedby="passwordHelpCheck">
          <div id="passwordHelpCheck" class="form-text">Ter controle voert u nogmaals u wachtwoord in...</div>
        </div>
        <input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>">
        <input type="hidden" name="pwh" value="<?php echo $_GET["pwh"]; ?>">
        <button type="submit" class="btn btn-warning btn-lg w-100">Activeren</button>
      </form>
    </div>
    <div class="col-12 col-sm-6">
      <img src="./img/goro-majima-majima.gif" alt="majima" class="w-75 mx-auto d-block">
    </div>
  </div>
</div>