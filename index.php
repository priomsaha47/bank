<html>
<style>


div.margin{
	
	height:350px;
	width:320px;
	margin-top:50px;
	margin-left:600px;
	background-color:gray;
	border:1px solid black;
	
	
	
}
div.padding{
	
	padding-top:50px;
	padding-left:50px;
	
	
	
	
	
}



h1{
	
	text-align:center;
	
}



	
input[type=text]{
	
	padding:5px;
	width:95%;
	
	
	
}
	
	
	
	
input[type=password]{
	
	padding:5px;
	width:95%;
	
	
	
}
	
	
	
	
input[type=submit]{
	
	padding:5px;
    margin-left:60px; 

	
	
	
}
	
	input[type=reset]{
	
	padding:5px;
   

	
	
	
}

	
	
	
	
	input[type=submit]:hover{
		background-color:blue;

	}
	
	
	input[type=reset]:hover{
		background-color:red;

	}
	
	
	
	table,th,td{
		border-collapse:collapse;
		border:4px solid red;
		text-align:center;
		font-size:28px;
		background-color:black;
		color:white;
		
		
		
	}
	
	
	
	
	
	

</style>


<body>

<h1>Here is My personal Bank account</h1>
<div class="margin">
<div class="padding">

<form action="" method="post">



<input type="text" placeholder="Enter text" name="account" required><br>
<br>

<br>

<input type="text" placeholder="Enter your bank name" name="bank_name" required ><br>
<br>

<input type="text" placeholder="Enter username" name="name" required ><br>

<br>









</form>

</div>

</div>

<center>
<table>
<tr>

<th>Account</th>

<th>Bank Name</th>
<th>Username</th>

</tr>

<?php
$connection=mysqli_connect("localhost","root","","priom");
$account="select account,bankname,name from bank  order by id   desc limit 1";
$a=mysqli_query($connection,$account);

while($r=mysqli_fetch_array($a)){
	
	echo "<tr>";
	echo"<form action='index.php' method='post' >";
	echo"$r[account]";
	echo "<br>";
	echo"<input type='radio'name='gender'  value='yes'>$r[bankname]";
	
	echo" <input type='radio' name='gender' value='no'>$r[name]";
	
	echo "</tr>";
	
}






?>


<input type="submit" name="submit" value="Check">

<?php
if(isset($_POST['submit'])){
	
	$gender=$_POST['gender'];
	
	if($gender=="yes"){
		echo "yes";
		
		
		
	}
	else{
		
		echo "female";
		
		
	}
	
	
}


?>

<br>

<br>
<br>


</table>

</center>






</body>



</html>