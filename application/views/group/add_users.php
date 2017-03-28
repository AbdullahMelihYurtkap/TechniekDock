<div id="puzzell">
<?php echo validation_errors(); ?>

<?php $hindik = set_value ('name'); ?>
<nav class="nav">
  <a class="nav-link active " href="<?php echo site_url('group') ?>">Home</a>
  <a class="nav-link" <a href="<?php echo site_url('group/info') ?>"> Informatie </a>
  <a class="nav-link" href="#">Link</a>
  <a class="nav-link disabled" href="#">Disabled</a>
</nav>
	<h1>Leerlingen toevoegen</h1>
  <h2>Groep naam:</h2>
  <h3><b><?php echo $hindik ?></b></h3>
  <div id="mainform">
    <form id="form" name="form">
    <label>Naam:</label>
    <input id="username" placeholder="Naam leerling" type="text">

   
</div>

    <input id="submit" type="button" value="submit">
    </form>
  </div>
  
