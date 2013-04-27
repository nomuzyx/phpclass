<?php
	class a
	{
		var $attribute;	
		function __construct($param)
		{
			$this->attribute = $param;
			echo $this->attribute."	attribute <br/>";
			echo"Contructor called with parameter $param <br/>";
		}
	}

	$a1 = new a('Noman');
	$a2 = new a('Budhani');
	echo $a1->attribute." Attribute used Outside class.";
?>