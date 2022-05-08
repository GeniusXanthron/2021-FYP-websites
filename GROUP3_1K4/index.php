<!DOCTYPE html>
<html lang="en">
 <head>
     <meta charset="UTF-8">
	 <title>Ruru's Tiny Adventure</title>
	 <style>
	 .menu{
		 font-family:Arial;
		 font-weight:bold;
		 background-color:#528A41;
		 color:white;
	 }
	 .submenu{
		 display: inline-block;
		 width:22%;
		 vertical-align:top;
		 text-align:center;
		 margin:10px 5px 10px 5px;
	 }
	 .feedback{
		 display: inline-block;
		 width:33%;
		 vertical-align: top;

	 }
	.footer{
		font-family:Arial;
		font-weight:bold;
		background-color:#528A41;
		color:white;
		text-align:center;
		padding:5px;
		
	}
	.center{
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 50%;
    }
	 </style>
 </head>

 <body style="background-color:#BCFFBA;">
   
   <div class="menu">
         <div class="submenu"><a href="index.php">Home</a></div>
		 <div class="submenu"><a href="about_us.php">About Us</a></div>
		 <div class="submenu"><a href="gallery.php">Gallery<a/></div>
		 <div class="submenu"><a href="contact_us.php">Contact Us</a></div>
   </div>
    
	<div class="header">
	<img src="image/banner.png"class="center"width="1000"></img>
   </div>
    
	 <div class="feedback">
         <div>
		    <h3>Feedback Form</h3>
			<form>
			 Name: <input type="text" maxlength="100"></input><br><br>
			 Email Adress:<input type="text" maxlength="100"></input><br><br>
			 Feedback :<br>
			 <textarea style="height:100px"></textarea>
			
			 <input type="submit" value="Submit">
			</form>
		
		 </div>
   
   </div>
    
	<div class="footer">
	     <div>
		   <p>Copyright@RuRU</p>
		 </div>
	
   </div>
  
  
 </body>

</html>