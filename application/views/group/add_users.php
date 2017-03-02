<?php echo validation_errors(); ?>

<?php echo form_open('group/add_users_group'); ?>

    <label for="username">Naam:</label>
     <input type="input" name="username" /><br />

  	<input type="submit" name="submit" value="Registreren" />

</form>