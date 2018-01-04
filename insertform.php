<html>
<head>
	<title> Device Form </title>
<head>
<style type="text/css">
/* General Styles */
html{
   background:url(inti.jpeg) no-repeat;
   background-size: cover;
   height:100%;
   background-color: #000;
}
* {
   box-sizing:border-box;
   -webkit-box-sizing:border-box;
   -moz-box-sizing:border-box;
   -webkit-font-smoothing:antialiased;
   -moz-font-smoothing:antialiased;
   -o-font-smoothing:antialiased;
   font-smoothing:antialiased;
   text-rendering:optimizeLegibility;
}
body {
   color: #C0C0C0;
   font-family: Arial, san-serif;
}


/* Contact Form Styles */
h1 {
   margin: 10px 0 0 0;
}
h4{
   margin: 0 0 20px 0;
}
#contact-form {
   background-color:rgba(72,72,72,0.7);
   padding: 10px 20px 30px 20px;
   max-width:100%;
   float: left;
   left: 50%;
   position: absolute;
   margin-top:30px;
   margin-left: -260px;
   border-radius:7px;
   -webkit-border-radius:7px;
   -moz-border-radius:7px;
}
#contact-form input,   
#contact-form select,   
#contact-form textarea,   
#contact-form label { 
   font-size: 15px;  
   margin-bottom: 2px;
   font-family: Arial, san-serif;
} 
#contact-form input,   
#contact-form select,   
#contact-form textarea { 
   width:100%;
   background: #fff;
   border: 0; 
   -moz-border-radius: 4px;  
   -webkit-border-radius: 4px;  
   border-radius: 4px;
   margin-bottom: 25px;  
   padding: 5px;  
}  
#contact-form input:focus,   
#contact-form select:focus,   
#contact-form textarea:focus {  
   background-color: #E5E6E7; 
}  
#contact-form textarea {
   width:100%;
   height: 150px;
}
#contact-form button[type="submit"] {
   cursor:pointer;
   width:100%;
   border:none;
   background:#991D57;
   background-image:linear-gradient(bottom, #8C1C50 0%, #991D57 52%);
   background-image:-moz-linear-gradient(bottom, #8C1C50 0%, #991D57 52%);
   background-image:-webkit-linear-gradient(bottom, #8C1C50 0%, #991D57 52%);
   color:#FFF;
   margin:0 0 5px;
   padding:10px;
   border-radius:5px;
}
#contact-form button[type="submit"]:hover {
   background-image:linear-gradient(bottom, #9C215A 0%, #A82767 52%);
   background-image:-moz-linear-gradient(bottom, #9C215A 0%, #A82767 52%);
   background-image:-webkit-linear-gradient(bottom, #9C215A 0%, #A82767 52%);
   -webkit-transition:background 0.3s ease-in-out;
   -moz-transition:background 0.3s ease-in-out;
   transition:background-color 0.3s ease-in-out;
}
#contact-form button[type="submit"]:active {
   box-shadow:inset 0 1px 3px rgba(0,0,0,0.5);
}
input:required, textarea:required {  
   box-shadow: none;
   -moz-box-shadow: none;  
   -webkit-box-shadow: none;  
   -o-box-shadow: none;  
} 
#contact-form .required {  
   font-weight:bold;  
   color: #E5E6E7;      
}

/* Hide success/failure message
   (especially since the php is missing) */
#failure, #success {
   color: #6EA070; 
   display:none;  
}

/* Make form look nice on smaller screens */
@media only screen and (max-width: 580px) {
   #contact-form{
      left: 3%;
      margin-right: 3%;
      width: 88%;
      margin-left: 0;
      padding-left: 3%;
      padding-right: 3%;
   }
}
</style>
</head>
<body>
<div id="contact-form">
	<div>
		<h1>Enter Details of Device</h1> 
	
	</div>
		<p id="failure">Oopsie...message not sent.</p>  
		<p id="success">Your message was sent successfully. Thank you!</p>

		   <form method="post" action="insertform.php">
	<div>

		      <label for="USER">
		      	<span class="required">USER GROUP: *</span> 
		      	<input type="text" id="USER" name="User" value="" placeholder="USER" required="required" tabindex="1" autofocus="autofocus" />
		      </label> 
			</div>
			<div>

		      <label for="ID">
		      	<span class="required">DEVICE ID: *</span> 
		      	<input type="text" id="ID" name="Device_id" value="" placeholder="DEVICE ID" required="required" tabindex="2" autofocus="autofocus" />
		      </label> 
			</div>
			<div>
		      <label for="name">
		      	<span class="required">DEVICE NAME: *</span>
		      	<input type="text" id="name" name="Device_name" value="" placeholder="DEVICE NAME" tabindex="2" required="name" />
		      </label>  
			</div>
         <div>
		      <label for="function">
		      	<span class="function">FUNCTION: *</span>
		      	<input type="text" id="function" name="Function" value="" placeholder="FUNCTION" tabindex="3" required="hours" />
		      </label>  
			</div>
          <div>
		      <label for="status">
		      	<span class="status">STATUS: </span>
		      	<input type="text" id="status" name="Device_status" value="" placeholder="DEVICE STATUS" tabindex="4" required="room" />
		      </label>  
			</div>
			
			<div>		           
		      <button name="submit" type="submit" id="submit" >SUBMIT REQUEST</button> 
			</div>
<br>Click below for updated table<br/>
<a href="disp.php">Device Details</a><br/>
		   </form>

	</div>
</form>
<?php
if (isset($_POST['submit'])){

include('con.php');
$sql = "INSERT INTO Access (User,device_id,device_name,Function,device_status) VALUES ('$_POST[User]','$_POST[Device_id]','$_POST[Device_name]','$_POST[Function]','$_POST[Device_status]')";
$data = mysqli_query($dbcon, $sql) or die('error');
mysql_close($dbcon);
}
?>
</body>
</html>


	
