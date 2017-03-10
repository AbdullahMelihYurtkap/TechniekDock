<?php echo validation_errors(); ?>

<?php echo form_open('../group/create_group'); ?>
<div class="jumbotron">

<nav class="nav">
  <a class="nav-link active" href="<?php echo site_url('group') ?>">Home</a>
  <a class="nav-link" <a href="<?php echo site_url('group/info') ?>"> Informatie </a>
  <a class="nav-link" href="#">Link</a>
  <a class="nav-link disabled" href="#">Disabled</a>
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