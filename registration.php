<?php include "header.php"; ?> 
<body>
	<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1 align = "center"> REGISTRATION </h1>
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
      <table cellpadding="10" cellspacing="12" align = "center">
    <form action="" method="POST"> 
	<tr align = "right">
	<td> <img src="images/reg_logo.jpg" style="width: 60%"> <br>
	</tr>
	
	 <tr align ="right">	
		     <td> <img src="images/registration.jpg" style="width: 30%"> <br>
		 </tr>
		
		 <tr>
        <td>Enter your user id </td>
        <td> <input type="text" name="uid" placeholder="Enter Your User ID" required="" style="padding: 10px; width: 150%"> <br>  
		</td>
		</tr>

		<tr>  
 		<td>Enter your email</td>
		<td> <input type="email" name="email" value="" placeholder="Enter Your Email Address" required="" style="padding: 10px; width: 150%">  <br> 
		</td>
		</tr>

		<tr>
        <td>Enter your password</td>
 		<td> <input type="Password" name="pass" placeholder="Enter Your Password" required="" style="padding: 10px; width: 150%"> <br>   
		</td>
		</tr>

		<tr>	    
 		<td align="right"> 
	 	<input type="submit" name="sb" value="Registration Now" style="color:red; background: light; font-size: 1.3em; font-family: times new roman"></td> 
		</tr> 
              
</form>
		</table>
					<?php
					if(isset($_POST['sb']))
					{
						$uid = $_POST['uid'];
						$email = $_POST['email'];
						$pass = $_POST['pass'];
						include "connect.php";
						mysqli_query($con,"insert into registration(userid, email,password) values('$uid','$email','$pass')");
						echo "<script>alert('Registration SuccessFully');</script>";
						echo "<center>Registration SuccessFully ... Click to <a href='login.php'>login</a></center>";
					}	

					?>
				</div>
			</div>
		
		</div>
	</div>

<?php include "footer.php"; ?>