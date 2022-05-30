 <?php 

$host="localhost";
$user="root";
$password="";
$db="new";
$con=new mysqli($host,$user,$password,$db) ;
if($con->connect_error){
die("Connect failed: %s\n". $con -> error);
}
 


if(isset($_POST['submitMain']))
 {
       $user =$_POST['username'];
       $password=$_POST['password']; 
      // $pass=base64_encode("$password");
	   //$pass=$_POST['pass'];
        $sql = "SELECT * FROM  login WHERE username= '".$user."' 'AND' password= '$".$password."';";
        $result=$con->query($sql);
        $rowCheck = $result->num_rows;
	    $row=$result->fetch_array(MYSQLI_ASSOC);			
        //$_SESSION['id']=	$row['User_Id'];
		$fname = $row['username'];
        $lname = $row['password'];
        // $_SESSION['d']= $fname;	
		// $_SESSION['c']=$lname;
	   // $_SESSION['User_Id']=$user;

		echo "<script>window.location='login.html';</script>";
		// 	} 
		// else if($row['status']==2){ 
		// $_SESSION['User_Id']=$user;	
        // $_SESSION['b']= $account;       		
        // echo "<script>window.location='registrar.php';</script>";
		// 	}
	    // else if($row['status']==3){ 
		// $_SESSION['User_Id']=$user;
        // $_SESSION['b']= $account; 
		// echo "<script>window.location='Coordinator.php';</script>";}
		// else if($row['status']==7){ 
		// $_SESSION['User_Id']=$user;
		// $_SESSION['b']= $account;
		
        // echo "<script>window.location='Instructor.php';</script>";}
		// else if($row['status']==10){ 
		// $_SESSION['User_Id']=$user;
		// $_SESSION['b']= $account;
        // echo "<script>window.location='DeP-Head.php';</script>";}			
		// else if($row['status']==6){ 
		// $_SESSION['User_Id']=$user;
		// $_SESSION['b']= $account;
        // echo'<meta content="6;student.php" http-equiv="refresh" />';}
		 	}
		else {
		
		echo"<p  class='wrong' >User Name & Password is not match try again !!</p>"; 
		//echo'<meta content="3;login.php" http-equiv="refresh" />';
		}

$con->close();
?> 


<!DOCTYPE html>
<html>
<head>
	<title> Login Form in HTML5 and CSS3</title>
	<link rel="stylesheet" a href="style.css">
	<link rel="stylesheet" a href="css\font-awesome.min.css">
</head>
<body>
	<div class="container">
	<img src="../Images/user.png"/>
	<form action="login.php" method="post"align=top >
<table bgcolor=""  style="  background-color:#E5E4E2; border:1px solid #336699;width:450px;height:190px;border-radius:15px;box-shadow:1px 10px 10px gray" align="center">
<center><image src="aa.jpg" width="250" height="80"></center>
<tr>
<td colspan=2 align=center><b><h3 color="green"> <font size='5px' color="black">First Login </font></h3></b></td>

</tr>
<tr>
<td><font>  </font><font size='5px' color="black"><b>Username:</font></td><td><input type="text" name="username" value="" size="20%" id="txt_username" placeholder="Username" display="none"></td>
</tr>
<tr>
<td><font>  </font> <font size='5px' color="black"><b>Password:</font></td><td>
<input type="password" name="password" value="" size="20%" id="txt_password" placeholder="Password"></td>
</tr>
<tr><td colspan=2 align=center><input type='submit' value='login' name='submitMain' Onclick="return check(this.form);" color="white"/>
<input type='reset' value='Reset' color="white"/></td></tr>
</table>	
</form>
	</div>
</body>
</html>
<script>
// validation for empty field  
		function validation()  
		{  
            alert('logged success');
			var userName=document.login.username.value;  
			var password=document.login.password.value;  
			if(userName.length=="" && password.length=="") {  
				alert("User Name and Password fields are empty");  
				return false;  
			}  
			else  
			{  
				if(userName.length=="") {  
					alert("User Name is empty");  
					return false;  
				}   
				if (password.length=="") {  
				alert("Password field is empty");  
				return false;  
				}  
			}                             
		}  
	
 function formValidation(){
//assign the fields     
var txt_username = document.getElementById('txt_username');	
var txt_password = document.getElementById('txt_password');
if(emailValidator(txt_username,"check your e-mail format")){
if(isAlphanumeric(txt_password,"check your passoword format")){	
	return true;
	}
	}
return false;		
}
function emailValidator(){
	var userNameExp = /[a-zA-Z]{2,4}$/;
	if(elem.value.match(userNameExp)){
		return true;
	}else{
		alert('Please fill correct format');
		elem.focus();
		return false;
	}
}


function check()
  {
   if(document.getElementById("txt_username").value == "")
   {
    alert("please Enter User name !!");
    document.getElementById("txt_username").focus();
    return false;
   }
        if(document.getElementById("txt_password").value =="")
   {
    alert('Please Enter your password !!');
    document.getElementById("txt_password").focus();
    return false;
   }
   return true;}

</script>	
<?php
 
?>