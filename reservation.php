<!DOCTYPE>
<html>
   <?php include 'header.php';?>
   <script type="text/javascript">

function checkinp() {
    let Name = document.forms["myForm"]["Name"].value;
    if (Name == "") {
        alert("Name is required");
        return false;
    }

    let phone = document.forms["myForm"]["phone"].value;
    if (phone == "") {
        alert("phone is required");
        return false;
    }

    let Address = document.forms["myForm"]["address"].value;
    if (Address == "") {
        alert("Address is required");
        return false;
    }
    let Card = document.forms["myForm"]["card"].value;
    if (Card == "") {
        alert("Card is required");
        return false;
    }

}
  
  </script>
   <body>
      <div data-role="page">
         <?php include 'nav.php';?>
         <div data-role="main" class="" >
            <div class="container-fluid">
               <div class="row">
                  <div class="col-sm-12 "  >
                     <div id="Menu" class="col-sm-2"   style=" float: left; " >
                     </div>
                     <div id="Menu2" class="col-sm-6 "   style=" float: left; " >
                        <div class="form-group"  >
                           <h2 style="font-size:30px; font-weight:200; margin-top:20px">Online Order</h2>
                           <form onsubmit="return checkinp()" name="myForm" action="insert.php" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                              <label for="name" class="lab"> Name:</label><input class="form-control" style="width:50%" type="text" name="Name" id="name">
                               <span></span>                       
                                                         
                              <label for="name" class="lab">  Phone Number: (10 digits)</label> <input type="text" name="phone" pattern="^\d{10}$" required class="form-control" style="width:50%" >                             
                              <label for="name" class="lab">  Order:</label> 
                              <label class="checkbox-inline"><input type="checkbox" name="check_list[]"  value="Lamb">Lamb Chops $20</label>
                              <label class="checkbox-inline"><input type="checkbox" name="check_list[]"  value="Chicken">Chicken $20</label>
                              <label class="checkbox-inline"><input type="checkbox" name="check_list[]"  value="Beef">Sichuan Beef $20</label>
                              <label class="checkbox-inline"><input type="checkbox" name="check_list[]"  value="Ice-cream">Ice-cream $20</label>
                              <label class="checkbox-inline"><input type="checkbox" name="check_list[]"  value="Pizza"> Pizza $20</label>
                              <label class="checkbox-inline"><input type="checkbox" name="check_list[]"  value="Burger">Burger $20</label>
                              <br>
                           
                              <label for="name" class="lab">  Deliver Address: </label>
                              <input type="text" name="address" class="form-control" style="width:50%" >
                             
                              <label for="name" class="lab"> Credit Card:(16 digits) </label>
                              <input type="text" name="card" pattern="^\d{16}$" required  class="form-control" style="width:50%">
                             
                              <input type="submit" name="submit"  class="btn btn-success" value="submit" style="margin-top:20px; border-color:#97733D; background-color:#97733D;">
                           </form>
                        </div>
                        <!-- resForm -->
                     </div>
                     <div id="Menu3" class="col-sm-4 "   style=" float: left; height:50%;float:left;">
                     </div>
                  </div>
                  
               </div>
            </div>
         </div>
      </div>
      </div>
      <?php include 'footer.php';?>
      </div>
   </body>
</html>