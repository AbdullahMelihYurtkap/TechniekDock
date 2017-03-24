<?php echo validation_errors(); ?>
<?php echo form_open('group/add_users_to_group'); ?>

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
    <label>Name:</label>
    <input id="username" placeholder="Your Name" type="text">

    </form>
  </div>
  
<table class="table">
      <tr>  
          <td>Groups</td> 
              </tr>     
                <?php  
                 foreach ($getgroup as $row)  
               {  
               ?>
               <tr> 
                <td><?php echo $row->name;?></td>  
              </tr>  
               <?php } ?> 
</table>




  <style>
/* Dropdown Button */
.dropbtn {
 
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
    position: relative;
    display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
    display: block;
}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {
    background-color: #;
}
</style>