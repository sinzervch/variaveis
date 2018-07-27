<form>

	<input type="text" name="Usuario">
	<input type="password" name="Senha">
	<input type="submit" value="OK">

</form>

<?php

	if(isset($_GET))
	{
		foreach ($_GET as $key => $value) {
			
			echo $key . ": " . $value;

			echo "<hr>";
		}
	}

?>