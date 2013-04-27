<?php
	class a
	{	
		function operation1()
		{
			echo"The First Function called.<br/>";
		}
	}

	class b extends a
	{
		function operation2()
		{
			echo"The Second Function called.<br/>";
		}
	}

	$b1 = new b();
	$b1->operation1();
	$b1->operation2();

?>