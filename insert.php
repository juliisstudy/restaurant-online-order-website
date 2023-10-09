<?php
   $servername = "";
   $username = "";
   $password = "";
   $dpname="";
   $conn = new mysqli($servername, $username, $password,$dpname);

   if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
   } 
     $name = $order=$card=$address=$phone="";
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
   //echo ""<li>".$selected ."</li>";
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
      
   $sql = "INSERT INTO customer ". "(name,phone,orderdish,address,card,time,total) ". "VALUES('$name','$phone','$order','$address', '$card','$da','$total')";

   ?>