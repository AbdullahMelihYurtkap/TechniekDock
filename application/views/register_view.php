<title>Registeren</title>

<body>
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
              echo form_open('login/register','class="myclass"');
              ?>

                <div class="form-group">
                  <?php

                    echo form_label('Naam','fullname');
                    echo form_input('fullname','','class="form-control" id="fullname" placeholder="Volledige naam"')

                  ?>
                </div>
                <div class="form-group">
                  <?php

                    echo form_label('Gebruikersnaam','username');
                    echo form_input('username','','class="form-control" id="username" placeholder="Gebruikersnaam"')

                  ?>
                </div>
                <div class="form-group">
                  <?php

                    echo form_label('Password','password');
                    echo form_password('password','','class="form-control" id="password" placeholder="Password"')
                  ?>
                </div>
                <?php echo form_submit('daftar', 'Registeren', 'class="btn btn-primary"') ?>
               
                <a href="<?php echo site_url('login') ?>" class="btn btn-link">Login</a>
                
                
                

              <?php echo form_close() ?>

            </div>
          </div>
        </div>
        <div class="col-md-4"></div>
      </div>

    </div>
