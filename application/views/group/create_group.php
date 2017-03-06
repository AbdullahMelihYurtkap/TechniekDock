<?php echo validation_errors(); ?>

<?php echo form_open('group/create_group'); ?>
<html> 
<head>
		<title>Groep aanmaken</title>

		<link rel="stylesheet" href="<?php echo base_url("style/css/bootstrap.css");?>">
		<script type="text/javascript" src="<?php echo base_url("style/js/bootstrap.js");?>"></script>

		<ul class="nav nav-tabs">
  			<li role="presentation" class="active"><a href="#">Home</a></li>
 		 	<li role="presentation"><a href="#">Profile</a></li>
  			<li role="presentation"><a href="#">Messages</a></li>
		</ul>
</head>
<body>
		<h1>Groep aanmaken</h1>


</body>
</html>
    <label for="name">Groepnaam</label>
     <input type="input" name="name" /><br />

  	<input type="submit" name="submit" value="Registreren" />

</form>

