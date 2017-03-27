
<div class="jumbotron">

<div class="collapse navbar-collapse" id="navbar1">
      <ul class="nav navbar-nav navbar-right">
        <?php if ($this->session->userdata('logged_in')){ ?>
        
        <?php } else { ?>
        <li><a href="<?php echo base_url(); ?>index.php/login">Login</a></li>
        <li><a href="<?php echo base_url(); ?>index.php/signup">Signup</a></li>
        <?php } ?>
      </ul>
    </div>

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

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
      <li><a href="<?php echo base_url(); ?>index.php/home/index"<p>Hello <?php echo $this->session->userdata('uname'); ?></p></a>
        <li><a href="<?php echo base_url(); ?>index.php/home/logout">Uitloggen</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
  <div class="container"  style="margin-top:20px;">


    <div class="panel panel-default">
    <!-- Default panel contents -->
    <div class="panel-heading">Alle groepen</div>
    <div class="panel-body">
      
    </div>

    <!-- Table -->
    <table class="table">
      <tr>  
          <td><span style="font-weight:bold">Groups</span></td> 
              </tr>     
                <?php  
                 foreach ($getgroup as $row)  
               {  
               ?>
               <tr> 
                <td><?php echo $row->name;?></td>  
                <td><a href="<?php echo base_url();?>index.php/Home/Delete/<?php echo $row->id?>">Delete</a></td>
              </tr>  
               <?php } ?> 
    </table>
  </div>
  </div>

          