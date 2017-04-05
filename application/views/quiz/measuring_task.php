<div class="jumbotron">

  <style type="text/css">
       a:link {color: #1a1a1a;}      /* unvisited link */
       a:visited {color: #1a1a1a;}   /* visited link */
       a:hover {color: #1a1a1a;}     /* mouse over link */
       a:active {color: #1a1a1a;}    /* selected link */
  </style>

<h1>Meetopdrachten</h1>


<?php if ($this->session->userdata('co2isset')): ?>
		<span class="fa-stack fa-3x">
        	<i class="fa fa-check-square fa-stack-2x" aria-hidden="true"></i><br>
        </span>

<?php else: ?>

        <span class="fa-stack fa-3x">
		<a href="<?php echo base_url(); ?>index.php/measure/co2/"><i class="fa fa-circle-o fa-stack-2x"></i></a>
		<a href="<?php echo base_url(); ?>index.php/measure/co2/"><p class="fa-stack-1x">CO²</p></a>
		</span>

<?php endif; ?>

<br>
<span class="fa-stack fa-3x">
<a href="<?php echo base_url(); ?>index.php/group/"><i class="fa fa-circle-o fa-stack-2x"></i></a>
<a href="<?php echo base_url(); ?>index.php/group/"><strong class="fa-stack-1x">2</strong></a>
</span>
<br>
<span class="fa-stack fa-3x">
<a href="<?php echo base_url(); ?>index.php/group/"><i class="fa fa-circle-o fa-stack-2x"></i></a>
<a href="<?php echo base_url(); ?>index.php/group/"><strong class="fa-stack-1x">3</strong></a>
</span>
<br>
<span class="fa-stack fa-3x">
<a href="<?php echo base_url(); ?>index.php/group/"><i class="fa fa-circle-o fa-stack-2x"></i></a>
<a href="<?php echo base_url(); ?>index.php/group/"><strong class="fa-stack-1x">4</strong></a>
</span>

</form>
	<form action="<?php echo base_url();?>index.php/Quiz/quizdisplay?">
	<input type="submit" value="Ga terug!"> 
</form>

