<?php echo validation_errors(); ?>

<?php echo form_open('measure/co2'); ?>

<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.</p>

 
<div class="jumbotron">
	<title>Meetopdracht</title>
		
		<h1>Waarde co2</h1>

		<?php $task = "co2" ?>

			<div class="row">
			  <div class="col-lg-4">
			    <div class="input-group">
			      <input type="text" class="form-control" name = "answer" placeholder="Waarden">
			      <input type="hidden" name="task" value="<?php echo $task;?>" />
			      <span class="input-group-btn">
			        <button class="btn btn-default" name="submit" type="submit ">Verstuur!</button>
			      </span>
			    </div>
			  </div>
			</div>
		</form>

