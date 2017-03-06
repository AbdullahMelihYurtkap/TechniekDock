<?php echo validation_errors(); ?>

<?php echo form_open('group/add_users_group'); ?>

<ul class="nav nav-tabs">
  			<li role="presentation" class="active" ><a href="#">Home</a></li>
 		 	<li role="presentation"><a href="<?php echo site_url('group/index') ?>">Informatie</a></li>
  			<li role="presentation"><a href="#">...</a></li>
</ul>
	<h1>Leerlingen toevoegen</h1>

<div class="row">
  <div class="col-lg-6">
    <div class="input-group">
      <input type="text" class="form-control" name = "username" placeholder="Leerling naam">
      <span class="input-group-btn">
        <button class="btn btn-default" name="submit" type="submit ">Go!</button>
      </span>
    </div>
  </div>
</div>

</form>