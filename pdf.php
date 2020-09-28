<?php
$con=mysqli_connect("localhost","root","","sanjaymaths");
$q="select * from `pdf` order by `id` DESC";
$run=mysqli_query($con,$q);
$sr=1;
?>


<html>
<head>
    
	<title>Sanjay Maths</title>
  <title>Insitute, SSC, UPSC, General Competition - EDUCATION - Bihar, Bihar</title>
  <meta name="description" content="sanjaymaths" />
  <meta name="description" content="The Best insitute For SSC, UPSC, General Competition in Lalpur Ranchi" />
  <meta name="description" content="best maths teacher in ranchi" />


	<link rel="stylesheet" type="text/css" href="css/styles.css">
  <link rel="stylesheet" type="text/css" href="css/pdf.css">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">






	
        <meta name="viewport" content="width=device-width, initial-scale=1.0; maximum-scale=1">
	
	  <script type="text/javascript">
        function hide_show() {
          var x = document.getElementById("menu");
          if (x.style.display === "block") {
            x.style.display = "none";
          } else {
            x.style.display = "block";
          }
        }
  </script>


</head>
<body>
	<!-- ******************* HEADER *************************-->
   <header>
   	<!-- ******************* TOP BAR *************************-->
   	<div class="top">
   		<ul class="top-1">
   			<li>
   				<a href="#"> <i class="fab fa-twitter"></i> </a>
   				<a href="#"> <i class="fab fa-facebook"></i> </a>
   				<a href="#"> <i class="fab fa-instagram"></i> </a>
   				<a href="#"> <i class="fab fa-youtube"></i> </a>
   				<a href="#"> <i class="fab fa-linkedin"></i> </a>
   			</li>
   		</ul>
   		<ul class="top-2">
   			<li>
   				<a href="#"> Admin Login </a>
   				<a href="#"> FAQ </a>
   			</li>
   		</ul>

   	</div>

   	<!-- ************************* NAV BAR *******************************--->
   	<nav>
   		 <div class="nav-main">
   		 	
            <div class="nav-left">
            	 <a href="#"><img src="assoc/logo.png" alt="LOGO"></a>
            </div>
            <div class="nav-right">
            	<div class="box1">
            		<span>Email</span>
					<h4><i class="fas fa-envelope-open"></i>info@sanjaymaths.in</h4>
            	</div>
            	<div class="box2">
            		<span>Call us at.</span>
            		<h4><i class="fas fa-phone-volume"></i>9905918016</h4>
            	</div>
            	<div class="box3">
            		
            		<a href="#">Student Login</a>
            	</div>


            </div>
   		 </div>
   	</nav>
        <!-- ************************* MENU BAR *******************************--->
	   <div class="icon-menu" onclick="hide_show()">
		   <h3 class="text-menu">MENU</h3>
		   <h3 class="text-icon" ><i class="fas fa-bars"></i></h3>
		   
	   </div>
   	<div class="menu" id="menu">
   		<ul class="menu-bar" id="show">
   			<li><a href="#">HOME</a></li>
   			<li><a href="#">ABOUT</a></li>
   			<li><a href="#">COURSES <i class="fas fa-chevron-down"></i></a>

   				<ol class="under-course">
   					<li><a href="#">SSC</a></li>
   					<li><a href="#">Bank</a></li>
   					<li><a href="#">Railway</a></li>
   				<li><a href="#">JSSC</a></li>
            <li><a href="#">Combined</a></li>
   				</ol>

   			</li>
   			<li><a href="#">GALLERY</a></li>
   			<li class="activee"><a href="#">PAGES <i class="fas fa-chevron-down"></i></a>
   				<ol class="under-course">
   					<li class="activee"><a href="#">PDF</a></li>
   					<li><a href="#">Faculty</a></li>
   					<li><a href="#">Current Affairs</a></li>
   					<li><a href="#">RAILWAY</a></li>
   				</ol>




   			</li>
   			<li><a href="#">CONTACT</a></li>
   		</ul>
   	</div>
   </header>



    <!-- ************************* PDF *******************************--->
      <div class="pdf">
        
        <table border="1">
          <tr><th>Sr.No</th><th>PDF</th><th>DATE</th></tr>
		
		<?php
		  while($f=mysqli_fetch_assoc($run))
		  {
			  ?>
          <tr><td class="sr"><?php echo "$sr.";?></td><td><a href="download.php?id=<?php echo $f['id'];?>"><?php echo $f['title'];?>
		  <?php
		 
		  if($f['new']=="new")
		  {
			  ?>
		  <img src="assoc/new.gif" height="30px" width="50px"></a></td>
		  <?php
		  }
		  ?>
		  
          <td><?php echo $f['date'];?></td>
          </tr>
         <?php
		 $sr++;
		  }
		  
		  ?>
       
	   </table>















      </div>
  













    <!-- =============================Footer===================================================================== -->

  <div class="top-footer">
    <div class="under-footer">
        <center><div class="socail-links">
        <li> <a href="#"> <i class="fab fa-twitter"></i> </a> </li>
        <li> <a href="#"> <i class="fab fa-facebook"></i> </a> </li>
        <li> <a href="#"> <i class="fab fa-instagram"></i> </a> </li>
        <li> <a href="#"> <i class="fab fa-youtube"></i> </a> </li>
        <li> <a href="#"> <i class="fab fa-linkedin"></i> </a> </li>
      </div></center>
    </div>
  </div>
  <div class="main-footer">
    <div class="under-footer"><center>
      <div class="left-top-footer">
          <h2>STAY TUNED!</h2>
        <p>You can do test before Admission SanjayMaths before Deciding on your plans. <br>Just give us your email address, and we'll send you the details.</p>
        <br>
        <input type="text" name="email" placeholder="write your email address here."> <input type="submit" name="submit" value="SUSCRIBE ">
      </div>
      <div class="line-tag"></div>
      </center>
      
    </div>
    <div class="bottom-footer">
      <p class="bottom-left">© 2019 sanjaymaths.in All Rights Reserved.</p>
       <p class="bottom-right"><a href="#">Designed by K-9</a></p>

    </div>
  </div>
  <!-- ================================================== End Footer======================================-->
  </body>
  </html>