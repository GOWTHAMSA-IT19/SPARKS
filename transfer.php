<?php
session_start();
$con=mysqli_connect('localhost','root','','banking_system');
$q="select name from users";
$result=mysqli_query($con,$q);
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Select User</title>
	<link rel="stylesheet" href="button.css">
	<style>
	body{
		text-align:center;
	}
	body{
		background-color: rgb(47,137,158);
		background-image:url("images/9.jpg");
		
		background-repeat: no-repeat;
		background-size:cover;
		object-fit:cover;
	}
	html,body{
		height:100%;
		width:100%;
	}
	html {
    display: table;
    margin: auto;
	}

	body {
    display: table-cell;
    vertical-align: middle;
	}
	.center{
		display:inline-block;
		background-color:;
		padding:50px;
		border:2px ridge white;
	}
	.ho{
		padding-top:50px;
	}
	.button1{
		background-color:;
	}
	.button{
		border-radius:10px;
		border: 1px solid black;
		height: 51px;
		width: 218px;
		margin: auto;
		overflow: hidden;
		cursor: pointer;
		color: #28048a;
		font-size:17px;
		font-weight:bold;
		background:#26abff;
	}
	.button:hover{
		background-color:#26abff;
	}
	</style>
	<script>
		 function random_function()
            {
                var a=document.getElementById("input").value;
				if(a==="Gowriprasath"){
				 var arr=["Logesh","Arshanmano","Zafarullah","Gowtham","Pragathipriya","Jenidurga","Subas","Murali","Siranjivi"];
				 }
				 else if(a==="Logesh"){
					var arr=["Gowriprasath","Arshanmano","Zafarullah","Gowtham","Pragathipriya","Jenidurga","Subas","Murali","Siranjivi"];
				}
				else if(a==="Arshanmano"){
					var arr=["Logesh","Gowriprasath","Zafarullah","Gowtham","Pragathipriya","Jenidurga","Subas","Murali","Siranjivi"];
				}
				else if(a==="Zafarullah"){
					var arr=["Logesh","Arshanmano","Gowriprasath","Gowtham","Pragathipriya","Jenidurga","Subas","Murali","Siranjivi"];
				 }
				 else if(a==="Gowtham"){
					var arr=["Logesh","Arshanmano","Zafarullah","Gowriprasath","Pragathipriya","Jenidurga","Subas","Murali","Siranjivi"];
				 }
				 else if(a==="Pragathipriya"){
					var arr=["Logesh","Arshanmano","Zafarullah","Gowtham","Gowriprasath","Jenidurga","Subas","Murali","Siranjivi"];
				 }
				 else if(a==="Jenidurga"){
					var arr=["Logesh","Arshanmano","Zafarullah","Gowtham","Pragathipriya","Gowriprasath","Subas","Murali","Siranjivi"];
				 }
				 else if(a==="Subas"){
					var arr=["Logesh","Arshanmano","Zafarullah","Gowtham","Pragathipriya","Jenidurga","Gowriprasath","Murali","Siranjivi"];
				 }
				 else if(a==="Murali"){
					var arr=["Logesh","Arshanmano","Zafarullah","Gowtham","Pragathipriya","Jenidurga","Subas","Gowriprasath","Siranjivi"];
				 }
				 else if(a==="Siranjivi"){
				 var arr=["Logesh","Arshanmano","Zafarullah","Gowtham","Pragathipriya","Jenidurga","Subas","Murali","Gowriprasath"];
				 }
                var string="";
             
                for(i=0;i<arr.length;i++)
                {
                    string=string+"<option value="+arr[i]+">"+arr[i]+"</option>";
                }
                document.getElementById("output").innerHTML=string;
            }
	</script>	
</head>
<body>
	<h1 style=" font-size:45px;color:orange;text-shadow: 1.5px 1.5px black;">Transfer Amount</h1><br>
	<div class="center">
	<form action="updatecredit.php" method="post">
		<label for="sender" align="left" style="color:white;">Senders Name: &nbsp;</label>
		<select id="input" name="sender"style="font-size: 12pt; height: 28px; width:290px;" align="middle" onchange="random_function()">
			<option  selected>Select Name</option>
			<option value="Gowriprasath">Gowriprasath</option>
			<option value="Logesh">Logesh</option>
			<option value="Arshanmano">Arshanmano</option>
			<option value="Zafarullah">Zafarullah</option>
			<option value="Gowtham">Gowtham</option>
			<option value="Pragathipriya">Pragathipriya</option>
			<option value="Jenidurga">Jenidurga</option>
			<option value="Subas">Subas</option>
			<option value="Murali">Murali</option>
			<option value="Siranjivi">Siranjivi</option>
		</select><br><br>
		<label for="receiver" align="left" style="color:white;">Receiver Name:&nbsp;</label>
		<select id="output" name="receiver"style="font-size: 12pt; height: 28px; width:290px;" align="middle" onchange="random_function1()" >
			<option>Select Name</option>
		</select><br><br>
		<label for="transfer" align="left" style="color:white;">Amount: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</label>
		<input type="number"  name="transfer" style="font-size: 12pt; height: 20px; width:285px;" align="middle" required><br><br>
		<div class="button1">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="button" onMouseOver="this.style.color='red'"onMouseOut="this.style.color='#28048a'"type="submit" name="submit" value="Transfer" style="height:40px; width:100px; ;">
		</div>
	</form> 
	</div><br><br><br>
	<div class="buttons">
	<a href="index.php">
    <button class="glow-on-hover">HOME</button>
	</a>
</div>
</body>
</html>