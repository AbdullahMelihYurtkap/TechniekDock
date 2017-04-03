	<div class="jumbotron">

		<title>Inlog Pagina</title>
	
	 <body>
   <a href="<?php echo base_url(); ?>index.php/group" class="btn btn-secondary btn-lg active" role="button" style="float: right;" aria-pressed="true">Terug naar het spel</a>
    <div class="container"  style="margin-top:100px;">

      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
          <div class="panel panel-default">
            <div class="panel-body">

            <?php
              if(validation_errors()){
              ?>
              <div class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong><?php echo validation_errors(); ?></strong>
              </div>
              <?php
              }
              echo form_open('login','class="myclass"');
              ?>

                <div class="form-group">
                  <?php
                    echo form_label('Gebruikersnaam','username');
                    echo form_input('username','','class="form-control" id="username" placeholder="Gebruikersnaam"')
                  ?>
                </div>
                <div class="form-group">
                  <?php
                    echo form_label('Wachtwoord','password');
                    echo form_password('password','','class="form-control" id="password" placeholder="Wachtwoord"')
                  ?>
                </div>
                <?php echo form_submit('login', 'Login', 'class="btn btn-primary"') ?>
                <a href="<?php echo site_url('login/register') ?>" class="btn btn-link">Registeren</a>
              <?php echo form_close() ?>

            </div>
          </div>
        </div>
        <div class="col-md-4"></div>
      </div>

    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url('style/js/jquery.min.js') ?>"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url('style/js/bootstrap.min.js') ?>"></script>
  </body>

