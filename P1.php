<html>
<head><title>Random</title></head>
<body>
<p>Generated random number is  <?php
    $number = rand(1, 100);
    echo $number;
?>.<br> 
Square Root of the Generated Number <?php echo $number?> is <?php
    echo sqrt($number);
?>.</p>
</body>
</html>