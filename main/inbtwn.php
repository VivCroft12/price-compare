<?php      
    session_start();
    include('connection.php');

    if(isset($_POST['username'], $_POST['password'])) 
{   
    $username = $_POST['user'];  
    $password = $_POST['pass'];  
      
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select *from login where username = '$username' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result); 
	 function function_alert($message) {
   	 echo $message;
	}
        if($count == 1){  
	function_alert("Login successful! Welcome ".$username." !!");
	
        }  
        else{ 
	function_alert("Login unsuccessful please try again!"); 
        }
}
?> 