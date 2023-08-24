<?php

$servername = "";
$username = "";
$password = "";
$dpname="";
// Create connection
$conn = new mysqli($servername, $username, $password,$dpname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql = "SELECT * FROM customer";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
        	echo "<table class='table table-hover'>";
    while($row = $result->fetch_assoc()) {
    	
    	echo "<tr><td>". $row["name"]."</td><td>". $row["phone"]."</td><td>". $row["orderdish"]."</td><td>". $row["address"]."</td><td>". $row["card"]."</td><td>". $row["time"]."</td></tr>";
    		
    }
    echo "</table>";
} else {
    echo "0 results";
}

  $sql2 = "SELECT orderdish FROM customer";
  $output="";
$result2 = $conn->query($sql);
if ($result2->num_rows > 0) {
	  while($row = $result2->fetch_assoc()) {
	  	$output.=$row["orderdish"].',';
	  }
}

  //echo $output;
  
  $arr=explode(",",$output);
  $piz=$beef=$lamp=$itanlian=$ice=$burger=0;
 foreach ($arr as $value) {
  //  echo "$value <br>";
    switch($value){
    	case "Pizza":
    		$piz++;
    		break;
    	case "Lamb":
    		$piz++;
    		break;
    	case "Chicken":
    		$itanlian++;
    		break;
    	case "Ice-cream":
    		$ice++;
    		break;
    	case "Burger":
    		$burger++;
    		break;
    	case "Beef":
    		$beef++;
    		break;
    	
}
}

$conn->close();

?>
