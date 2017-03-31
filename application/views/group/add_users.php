<?php echo validation_errors(); ?>

<?php echo form_open('group/add_users_group'); ?>
<?php $show_group_name = $this->session->userdata('name'); ?>

<title>Techniek Dock</title>

<div class="jumbotron">


<nav class="nav">
  <a class="nav-link active " href="<?php echo site_url('group') ?>">Home</a>
  <a class="nav-link" <a href="<?php echo site_url('group/info') ?>"> Informatie </a>
  <a class="nav-link" href="#">Link</a>
  <a class="nav-link disabled" href="#">Disabled</a>
</nav>
	<h1>Leerlingen toevoegen</h1>
  <h2>Groep naam:</h2>
  <h3><b><?php echo $show_group_name ?></b></h3>
  <div class="row">
    <div class="col-lg-4">
      <div class="input-group">
        <input type="text" class="form-control" name = "username" placeholder="Leerlingen naam">
        <span class="input-group-bt">
          <button class="btn btn-default" name="submit" type="submit ">Voegtoe!</button>
        </span>
              

      </div> 
      
      <?php if($this->session->userdata('groupnameisset'))
      {
          ?>
           <?php foreach($getonegroup as $row) { ?>
      <table>

          <tr>
              <td><?php echo $row->username;?></td>


          </tr>
          
      </table>

      <?php } ?>  
          <?php
      }
      else
      {
        redirect("group/create_group");
      } ?>
      
          
    </div>
  </div>
</form>

<form action="<?php echo base_url();?>index.php/Group/Set_Group_Ready/">
    <input type="submit" class="btn btn-success" value="Ready!"/>
</form>











  