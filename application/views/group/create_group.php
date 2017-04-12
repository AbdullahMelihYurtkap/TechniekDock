<?php echo validation_errors(); ?>

<?php echo form_open('group/createGroup'); ?>
<div class="jumbotron">
	<title>Techniek Dock</title>
		<nav class="nav">
		  <a class="nav-link active" href="<?php echo site_url('group') ?>">Home</a>
		  <a class="nav-link" <a href="<?php echo site_url('group/help') ?>"> Informatie </a>
		</nav>
			<h1>Groep aanmaken</h1>
			<div class="row">
			  <div class="col-lg-4">
			    <div class="input-group">
			      <input type="text" class="form-control" name = "name" placeholder="Groep naam">
			      <span class="input-group-btn">
			        <button class="btn btn-default" name="submit" type="submit ">Go!</button>
			      </span>
			    </div>
			  </div>
			</div>
		</form>