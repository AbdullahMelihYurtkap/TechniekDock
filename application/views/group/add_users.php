<?php echo validation_errors(); ?>

<?php echo form_open('../group/add_users_group'); ?>


<nav class="nav">
  <a class="nav-link active " href="<?php echo site_url('../group') ?>">Home</a>
  <a class="nav-link" <a href="<?php echo site_url('group/info') ?>"> Informatie </a>
  <a class="nav-link" href="#">Link</a>
  <a class="nav-link disabled" href="#">Disabled</a>
</nav>
	<h1>Leerlingen toevoegen</h1>

 <?php echo $this->session->userdata('name'); ?>

<div class="row">
  <div class="col-lg-4">
    <div class="input-group">
      <input type="text" class="form-control" name = "username" placeholder="Leerling naam">
      <span class="input-group-btn">
        <button class="btn btn-default" name="submit" type="submit ">Voeg toe!</button>
      </span>
    </div>
  </div>
</div>
</form>

    <div class="input-group">
        <button class="btn btn-default" name="submit" type="submit ">Voeg nieuwe leerling toe!</button>
    </div>
