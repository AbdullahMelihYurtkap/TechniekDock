<?php echo validation_errors(); ?>

<?php echo form_open('group/create_group'); ?>

    <label for="name">Groepnaam</label>
     <input type="input" name="name" /><br />

  	<input type="submit" name="submit" value="Registreren" />

</form>