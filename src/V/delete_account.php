<?php require('header.php'); ?>


<form  method="post" action="index.php?controle=param&action=delete_compte">
	<div class="container">
		<input type="password" name="password" placeholder="Passord" required /><br/>
		<button type="submit" class="delete_compte" value="delete">Delete</button>
	</div>
</form>



<?php require('footer.php'); ?>