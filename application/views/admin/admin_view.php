<div class="jumbotron">

  <title>Inlog Pagina</title>
  <div class="container">

    <h1 class="display-5">Inloggen</h1>
     &nbsp;
  <form action= "<?php echo site_url('admin') ?>" method = "post">
    <div class="form-group row">
      <label for="username" name="username" class="col-sm-2 col-form-label">Gebruikernaam</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="name" placeholder="Gebruikersnaam">
      </div>
    </div>
    <div class="form-group row">
      <label for="password" class="col-sm-2 col-form-label">Wachtwoord</label>
      <div class="col-sm-10">
        <input type="password" name ="password" class="form-control" id="password" placeholder="Wachtwoord">
      </div>
    </div>
    <div class="form-group row">
      <div class="offset-sm-2 col-sm-10">
        <button type="submit" class="btn btn-primary">Login</button>
        <a href="<?php echo site_url('admin') ?>" class = "btn btn-link">Registreren</a>
      </div>
    </div>
  </form>
</div>
</div>