<div id="puzzell">
<?php echo validation_errors(); ?>
<script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="refreshform.js"></script>

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
    <label>Name:</label>
    <input id="username" placeholder="Your Name" type="text">

    <div class="dropdown">
  <button class="dropbtn">groepnaam</button>
  <div class="dropdown-content">
              <?php  
                 foreach ($getgroup as $row1)  
               {  
               ?>
      <a href="#"><?php echo $row1->name;?></a>
    <?php } ?> 
  </div>
</div>

    <input id="submit" type="button" value="submit">
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


<script type="text/javascript">

function quiz(){
  jQuery.ajax({
    'url': '<?php echo base_url();?>index.php/Group/ekesh',
    'success': function(data){
      jQuery('#puzzell').html(data);
    }
  })
  
}

</script>


  <button onclick="javascript:quiz();">Start</button>

  </div>


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