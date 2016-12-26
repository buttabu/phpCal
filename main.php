<?php
//Checks if all the required data has been acquired
if(isset($_POST['bill'], $_POST['tip_percent'], $_POST['num_people'])){
	//Checks if the data is numeric as it should be
	if(is_numeric($_POST['bill']) && is_numeric($_POST['tip_percent']) && is_numeric($_POST['num_people'])){
		echo "Bill: ".$_POST['bill'];
		if($_POST['tip_percent']<0) // Making sure that percentage doesnt go into negatives
			$_POST['tip_percent'] = 0; //If it does, set it to 0
		echo "<br/>Tip %: ".$_POST['tip_percent'];
		if($_POST['num_people']<1) //Just making sure this number isnt less than 1
			$_POST['num_people'] = 1; //If it is, set it to 1 which is the default
		echo "<br/>People: ".$_POST['num_people'];
		//echo "Tip amount: ".($_POST['bill'] * ('.'.$_POST['tip_percent'])); <- Cool solution but doesnt work with decimal points.
		echo "<br/>Tip amount: ".$tip = number_format($_POST['bill'] * $_POST['tip_percent'] / 100, 2);
		echo "<br/>Total: ".$total = $tip+$_POST['bill'];
		echo "<br/>Total per Person: ".$total/$_POST['num_people'];
	}else echo "At least one of the values was not a number!";
}else echo "At least one of the values was missing!";
?>