<html>

<body>

	<form action="" method="post">
	<label>Enter the Number</label>
	<input type="text" name="num">
	<button  name="submit">Submit</button>
	</form>
	
</body>
</html>
<?php
	$num=$_POST['num'];
	$rev=0;
	$sum=0;
	$n=$num;
	while($num>1)
	{
		$rem=$num%10;
		$rev=($rev*10)+$rem;
		$sum=$sum+$rem;
		$num=($num/10);
	}
	
	

	echo "Reverse of the Entered Number is : $rev"; echo "<br>";
	echo "Sum of the Entered Number is : $sum"; echo "<br>";
	
	if($n==$rev)
	echo "The Number  $n  is Palindrome";
	else
	echo "The Number  $n  is Not a Palindrome";
?>