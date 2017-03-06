<?php echo validation_errors(); ?>

<?php echo form_open('group/create_group'); ?>

<ul class="nav nav-tabs">
  			<li role="presentation" class="active" ><a href="">Home</a></li>
 		 	<li role="presentation"><a href="<?php echo site_url('group/index') ?>">Informatie</a></li>
  			<li role="presentation"><a href="#">...</a></li>
</ul>

		<h1>Groep aanmaken</h1>

		<label for="name">Groepnaam</label>
	    <input type="input" name="name" /><br />

	  	<input type="submit" name="submit" value="Registreren" />

	  	</form>