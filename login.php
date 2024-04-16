<?php include "header.php"; ?> 
<body>
	
	<!-- Start All Pages -->
	<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>LOGIN</h1>
				</div>
			</div>
		</div>
	</div>
	
	<div class="contact-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					
				</div>
			</div>

			<div class="row">
				<div class="col-lg-12">
<form action="loginck.php" method="post">

  <table border="0" align="center" cellpadding="5" cellspacing="7">
	
	        <tr align ="right">	
		     <td> <img src="Login.jpg" style="width: 30%"> <br>
		 </tr>
		<tr>
             <td>Enter your user id </td>
        <td> <input type="text" name="uid" placeholder="Enter Your User ID" style="padding: 10px; width: 150%"> <br>  </td>
		
		</tr>

		<tr>
           <td>Enter your password</td>
 <td> <input type="Password" name="pass" placeholder="Enter Your Password" style="padding: 10px; width: 150%"> <br>   </td>
		
		</tr>

		<tr>	    
 <td align="right"> 
	 <a href="registration.php"> New User?</a>&nbsp&nbsp
	 <input type="submit" name="" value="Login Now" style="color: red; background-color: light; font-size: 1.5em; font-family: times new roman;"> </td> 
</tr>
               
              
</form>
		</table>			
				</div>
			</div>
		
		</div>
	</div>
	<!-- End Contact -->
<?php include "footer.php"; ?>