<?php
   $servername = "";
   $username = "";
   $password = "";
   $dpname="";
   $conn = new mysqli($servername, $username, $password,$dpname);

   if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
   } 

     $date = time();
      $da= date("Y-m-d",$date);
   

   $name =  $order=$card=$address=$phone="";
   
   
   //check the data
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
       $name = datainput($_POST["Name"]);
    
       $phone = datainput($_POST["phone"]);
     
       $address = datainput($_POST["address"]);
   
       $card = datainput($_POST["card"]);
   
   }
   
   function datainput($data) {
     $data = trim($data);
     $data = stripslashes($data);
     $data = htmlspecialchars($data);
     return $data;
   }
   
   
   $order=implode(",",$_POST['check_list']);
   $total=0;
   
   
   foreach($_POST['check_list'] as $selected) {
   //echo "<li>".$selected ."</li>";
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
   
   //echo $card;
   
   $sql = "INSERT INTO customer ". "(name,phone,orderdish,address,card,time,total) ". "VALUES('$name','$phone','$order','$address', '$card','$da','$total')";
   
   //echo $sql;

   ?>
<!DOCTYPE>
<html>
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
                     <div id="" class="col-sm-6 "   style=" float: left;top:5% ;    ">
                        <div id="echo" style=" padding-left:0px;float:left;" >
                           <h2> Order Information</h2>
                           <?php
                              $oup="New record created successfully";
                              if ($conn->query($sql) === TRUE) {
                              echo "New record created successfully";
                              } else {
                              echo "Error: " . $sql . "<br>" . $conn->error;
                              }
                             
                              $conn->close();
                              ?><br>
                           <label for="name" class="lab">  Name:</label>&nbsp;&nbsp;&nbsp;<span class="inp"><?php echo $_POST["Name"]; ?></span><br>
                           <label for="name" class="lab"> Phone Number: </label> &nbsp;&nbsp;&nbsp;<span class="inp"><?php echo $_POST["phone"]; ?><br>
                           <label for="name" class="lab"> Order: </label>   <br>
                           <span class="inp"><?php include 'check.php';?></span><br>
                           <label for="name" class="lab"> Deliver Address: </label><br> <span class="inp"><?php echo $_POST["address"]; ?></span><br>
                           <label for="name" class="lab"> credit card:  </label>&nbsp;&nbsp;&nbsp;<span class="inp"><?php echo $_POST["card"]; ?></span><br>
                           <label for="name" class="lab"> Order Time:</label> &nbsp;&nbsp;&nbsp;<span class="inp"><?php echo $da; ?></span>
                        </div>
                        <!-- echo -->
                     </div>
                     <div id="Menu3" class="col-sm-4 "   style=" float: left; float:left;">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      </div>
      <?php include 'ft.php';?>
      </div>
   </body>
</html>