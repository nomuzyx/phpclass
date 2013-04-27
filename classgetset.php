<?php
	class a
	{
		var $attribute;	
		function __get($name)
		{
			return $this->$name;
		}
		function __set($name,$value)
		{	
			if ($name='attribute' && $value>=0 && $value<=100)
			{
				$this->$name=$value;	
			}
			
		}
	}

	$a1 = new a();
	$a1->attribute = 101;
	echo $a1->attribute." Attribute used Outside class.";

	
?>