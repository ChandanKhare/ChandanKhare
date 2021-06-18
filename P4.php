<html>

<body>

	<form action="" method="post">
	<label>Enter the Number : </label>
	<input type="text" name="num">
	<button  name="submit">Submit</button>
	</form>
	
</body>
</html>


<?php  
$num=$_POST['num'];
$tot=0;  
$y=$num;  
while($y!=0)  
{  
$rem=$y%10;  
$tot=$tot+$rem*$rem*$rem;  
$y=$y/10;  
}  
if($num==$tot)  
{  
echo "Number $num is an Armstrong Number";  
}  
else  
{  
echo "Number $num is not an Armstrong Number";  
}  
?>