<?php
 		for($i = 0; $i < 10; $i++)
   	{
    	if($i < 3)
      		{
    			echo $i;
     		}
	      	elseif($i % 5 == 0 && $i % 3 == 0)
     		{
             		echo "FizzBuzz!";
		}
            	elseif($i % 5 == 0)
   			{
   				echo"Buzz!";
  			}
     			elseif($i % 3 == 0)
		{
			echo"Fizz!";
		}
		else
		{
			echo $i;
		}
			echo "<br>";
	}
    ?>