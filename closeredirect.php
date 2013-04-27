<?php
class closeredirect
{
	function checkclose($pcon,$psql)
	{
		if (!mysqli_query($pcon,$psql))
		{
			die('Error: ' . mysqli_error($pcon));
		}
		//echo "Record Deleted";	
		mysqli_close($pcon);
	}
		
	function redirect()
	{
		header('Location: index.php');
	}
	
}

?>