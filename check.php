<?php


if(isset($_POST['submit'])){
if(!empty($_POST['check_list'])) {
	$checked_count = count($_POST['check_list']);
	echo "You have selected following ".$checked_count." option(s): <br/>";
	echo "<ul>";

	$total=0;
	foreach($_POST['check_list'] as $selected) {
		echo "<li>".$selected ."</li>";
 	switch($selected){
                case "Pizza":
                	$total+=20;
                    break;
                case "Lamb":
                    $total+=20;
                    break;
                case "Chicken":
                    $total+=20;
                    break;
                case "Ice-cream":
                    $total+=20;
                    break;
                case "Burger":
                    $total+=20;
                    break;
                case "Beef":
                    $total+=20;
                    break;

}


	}
	}
else{
echo "<b>Please Select Atleast One Option.</b>";
}
echo "</ul>";
echo " <label for='name' class='lab'> Total:</label>&nbsp;&nbsp;&nbsp;<span class='inp'>$". $total ."</span>";
}

?>