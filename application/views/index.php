<html>
<head>
	<title>GREAT NUMBER GAME</title>
</head>
<style type="text/css">
	.red {
		background-color: red;
		border: 1px solid black;
		width: 100px;
		padding: 50px;
	}

	.green {
		background-color: green;
		border: 1px solid black;
		width: 100px;
		padding: 50px;
	}
</style>
<body>
	<div id="container">
		<?= $this->session->userdata['number']?>

		<h1>Welcome to the Game</h1>
		<p>I am thinking of a number between 1 and 100</p>
		<p>Take a guess!</p>
<?php  
		if($this->session->flashdata('result')){
?>		<p class="red"><?=$this->session->flashdata('result')?></p>			
<?php }		
		if($this->session->flashdata('correct')){
?>		<p class="green"><?=$this->session->flashdata('correct')?></p>
			<form action="reset" method="post">
				<input type="submit" value="Play Again">
			</form>
<?php } 
?>		
		<form action="check" method="post">
			<input type="text" name="guess">
			<input type="submit"	value="submit">
		</form>
	</div>
</body>
</html>