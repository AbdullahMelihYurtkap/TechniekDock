	<div class="jumbotron">
		<title>Play Techniek Dock quiz</title>

	<?php $show_group_name = $this->session->userdata('name'); ?>	

	<div id="container">
		<h2>Welkom, <?php echo $show_group_name ?> is klaar voor de quiz!</h2>

		&nbsp;
		
		<form method="" action="<?php echo base_url();?>index.php/quiz/quizDisplay">

			<input type="submit" value="Laten we beginnen met de quiz!">

		</form>
		
		
	</div>

</body>
</html>