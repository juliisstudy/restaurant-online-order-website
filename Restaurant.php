<!DOCTYPE html>
<html>
   
      <?php include 'header.php';?>
   <body>
      <div data-role="page">
		
			<?php include 'nav.php';?>
         <div data-role="main" class="" >
            <div class="container-fluid">
               <div class="row">
                  <div id="welcome" class="col-sm-12  "  style=" float: left;" >
                     <img src="1.jpg" width="100%" >
                     <p>Welcome to Jenny's restaurant</p>
                  </div>
                  
                  <div id="" class="col-sm-12  "  style=" float: left;" >
                  <div id="Menu" class="col-sm-4  "   style=" float: left;" >
                     <p  class="dish">Menu</p></a>
                   	 <a href="menu.php"  class=" food " ><img src="2.png" width="100%"  ></a>

                  </div>
                  <div id="Reservation" class="col-sm-4  "  style=" float: left;">
                     
                     <p class="dish"  >Reservation</p>
                     	 <a href="reservation.php"  class=" food " ><img src="3.png" width="100%"  class=" food " ></a>
                  </div>
                  <div  id="About" class="col-sm-4  "  style=" float: left;" >
                   
                     <p class="dish">Records</p>
                     <a href="all.php"  class=" food " >  <img src="4.png" width="100%"  class=" food " ></a>
                  </div>
                  </div>
               </div>
            </div>
         </div>

         <?php include 'ft.php';?>
      </div>
   </body>
</html>