<!DOCTYPE html>

<head>
	<title>Electricity Billing System</title>
</head>

<?php

    $units = $_POST['unit'];
   if($units <= 100) {
        $bill = $units *3;
    }
    else if($units > 100 && $units <= 200) {
        $bill = ($units * 4);
    }
    else if($units > 200 && $units <= 300) {
       
        $bill = ($units * 5);
    }
    else {
        
        $bill = ($units * 6);
    }
   ?>

<body>
	<div id="page-wrap">
		<h1>Bill</h1>

		<form action="" method="post" id="quiz-form">
            	<input type="number" name="unit" id="units" placeholder="Enter Number of Units Consumed" />
            	<input type="submit" name="unit-submit" id="unit-submit" value="Submit" />
		</form>

		<div>
		    <?php echo '<br />' . $bill; ?>
		</div>
	</div>
</body>
</html>