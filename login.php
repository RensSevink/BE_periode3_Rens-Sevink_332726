<div class="container mt-5">
  <div class="row">
    <div class="col-12 col-sm-6">

      <form action="./index.php?content=login_script" method="post">
        <div class="mb-3">
          <label for="inputEmail" class="form-label">Vul hier uw e-mailadres in:</label>
          <input name="email" type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text">Uw e-mail...</div>
        </div>
        <div class="mb-3">
          <label for="inputPassword" class="form-label">Vul hier uw wachtwoord in:</label>
          <input name="password" type="password" class="form-control" id="inputPassword" aria-describedby="passwordHelp">
          <div id="passwordHelp" class="form-text">Uw wachtwoord...</div>
        </div>
        <button type="submit" class="btn btn-warning btn-lg w-100">Login</button>
      </form>

    </div>
    <div class="col-12 col-sm-6">
      <img src="./img/yakuza.gif" alt="majima" class="w-75 mx-auto d-block">
    </div>
  </div>
</div>