<!DOCTYPE>
<html>
   <head>
   </head>
   <?php include 'header.php';?>
   <body>
      <div data-role="page">
         <?php include 'nav.php';?>
         <div data-role="main" class="" >
            <div class="container-fluid">
               <div class="row">
                  <div class="col-sm-12 " style=" "  >
                     <div id="" class="col-sm-2 "   style=" float: left; "  >
                     </div>
                     <div id="" class="col-sm-6 "   style=" float: left;top:5% ;">
                        <div id="echo" style=" padding-left:0px;float:left;" >
                           <h2> Order Information</h2>
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
                                       	echo "<div class='table-responsive'>";
                                      	echo "<table class='table table-hover' id='allform'>";
                                echo "<tr><th>Name</th><th>Phone</th><th>order</th><th>address</th><th>card</th><th>time</th><th>total</th></tr>";
                                
                                
                                  while($row = $result->fetch_assoc()) {
                                  	
                                  	echo "<tr><td>". $row["name"]."</td><td>". $row["phone"]."</td><td>". $row["orderdish"]."</td><td>". $row["address"]."</td><td>". $row["card"]."</td><td>". $row["time"]."</td><td>". $row["total"]."</td></tr>";
                                  		
                                  }
                                  echo "</table>";
                                  echo "</div>";
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
                                $piz=$beef=$lamp=$chick=$ice=$burger=0;
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
                                  		$chick++;
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
                        </div>
                        <!-- echo -->
                     </div>
                     <div id="Menu3" class="col-sm-4 "   style=" float: left; float:left;">
                     
                     <h2> The most populor dish</h2>
                      <div id="chartContainer"  style="width:100%;height:50%" ></div>
                     </div>
                  </div>
                 
               </div>
            </div>
         </div>
      </div>
      </div>
      <script type="text/javascript" src="canvasjs.min.js"></script>
      <script type="text/javascript">
        window.onload = function () {
        var num1 = <?php echo $piz ?>; 
         	var num2 = <?php echo $beef ?>; 
         	var num3 = <?php echo $lamp ?>; 
         	var num4 = <?php echo $chick ?>; 
         	var num5 = <?php echo $ice ?>; 
         	var num6 = <?php echo $burger ?>; 
         	
         	
	var chart = new CanvasJS.Chart("chartContainer",
	{
	backgroundColor: "#F5DEB3",
		
                animationEnabled: true,
		
		data: [
		{        
			indexLabelFontSize: 15, 
			indexLabelFontFamily: "El Messiri",       
			indexLabelFontColor: "grey", 
			indexLabelLineColor: "darkgrey",        
			indexLabelPlacement: "outside",
			type: "pie",       
			showInLegend: true,
			toolTipContent: "{y} - <strong>#percent%</strong>",
			dataPoints: [
				{  y: num1, legendText:"Pizza", indexLabel: "Pizza" },
				{  y: num2, legendText:"Beef", indexLabel: "Beef" },
				{  y: num3, legendText:"Lamp",exploded: true, indexLabel: "Lamp" },
				{  y: num4, legendText:"Chicken" , indexLabel: "Chicken"},
				{  y: num5, legendText:"Ice-cream", indexLabel: "Ice-cream" },
				{  y: num6, legendText:"Burger" , indexLabel: "Burger"}
			]
		}
		]
	});
	chart.render();
}
         
      </script>
      <?php include 'ft.php';?>
      </div>
   </body>
</html>