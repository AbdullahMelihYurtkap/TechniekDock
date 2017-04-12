<div class="jumbotron">

    <title>Home</title>

    <nav class="navbar navbar-default navbar-static-top">
    <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Brand</a>
    </div>

    <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hello, <?php echo $this->session->userdata('uname'); ?> <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <!-- <li><a href="<?php// echo site_url('home/logout') ?>"></a></li> -->
            <li role="separator" class="divider"></li>
            <li><a href="<?php echo site_url('home/logout') ?>">Uitloggen</a></li>
          </ul>
        </li>
      </ul>

    <!-- Collect the nav links, forms, and other content for toggling -->
    
  </div><!-- /.container-fluid -->
  <div class="container"  style="margin-top:20px;">


    <div class="panel panel-default">
    <!-- Default panel contents -->
    <div class="panel-heading">Alle groepen</div>
   
    <div class="panel-body">
        <a href="<?php echo base_url();?>index.php/home/deleteAllGroups/" class="btn btn-default"> Verwijder alle groepen</a>
      &nbsp;
        <a href="<?php echo base_url();?>index.php/home/deleteAllUsers/" class="btn btn-default"> Verwijder alle leerlingen</a>
      &nbsp;
        <a href="<?php echo base_url();?>index.php/home/deleteAllMeasure/" class="btn btn-default">Verwijder alle meet antwoorden</a>
       
    </div>

    <!-- Table -->
    <table class="table">
      <tr>  
        <td><span style="font-weight:bold">Groups</span></td> 
        <td>  </td>
      </tr>     
        <?php  
         foreach ($getgroup as $row)  
       {  
       ?>
        <tr> 
         <td><?php echo $row->name;?></td>  
         <td><a class="btn btn-default" href="<?php echo base_url();?>index.php/home/delete/<?php echo $row->id?>">Delete</a></td>
        </tr>  
       <?php } ?> 
    </table>
  </div>
  </div>