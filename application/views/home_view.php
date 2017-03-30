<div class="jumbotron">

    <title>Home</title>
        
        <nav class="navbar navbar-default navbar-static-top">

    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href=<?php echo base_url(); ?>index.php/home/>Home</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">  
      <ul class="nav navbar-nav navbar-right">
      <li><a href="<?php echo base_url(); ?>index.php/home/index"<p>Hello <?php echo $this->session->userdata('uname'); ?></p></a>
        <li><a href="<?php echo base_url(); ?>index.php/home/logout">Uitloggen</a></li>
      </ul>

  </div><!-- /.container-fluid -->
  <div class="container"  style="margin-top:20px;">

</div>

          