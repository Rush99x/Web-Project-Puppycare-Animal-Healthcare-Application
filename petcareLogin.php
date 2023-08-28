//Login
<?php
session_start();

if(isset($_POST["btnLogin"]))
{
	$email=$_POST["txtUserEmail"];
    $password=$_POST["txtPassword"]; 
	if(empty($email))
	{
		echo '<script>alert("UserEmail Filed cannot be blank")</script>';
	}
	else
	{
		
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
		{
			echo '<script>alert("Please Enter Valid UserEmail")</script>';
              
		}
		else
		{
				
        //connection
        $con = mysqli_connect("localhost:3306", "dse","12345" );

        //select the database 
        mysqli_select_db($con,"dmwcw");

        //perform sql
        $sql = "SELECT * FROM user WHERE  Password='$password' and Email='$email'";
        $ret= mysqli_query($con, $sql);
        $num_row 	= mysqli_num_rows($ret);
	         if ($num_row >0) 
				{			
					$_SESSION['user_id']=$row['user_id'];
					header('location:index.html');	
				}
			else
				{
					echo '<script>alert("Invalid Username and Password Combination")</script>';
				}

        //disconnect 
         mysqli_close($con);

		
	    }
    }
}



//signup

//session_start();

if(isset($_POST["btnsubmit"]))
{
	$email=$_POST["txtUserEmail"];
    $name=$_POST["txtName"]; 
    $ContactNo=$_POST["txtContactNo"];
    $address=$_POST["txtaddress"]; 
    $Password=$_POST["txtPassword"];
    $ConfirmPassword=$_POST["txtConfirmPassword"]; 


	if(empty($email))
	{
		echo '<script>alert("UserEmail Filed cannot be blank")</script>';
	}
	else
	{
		if($Password==$ConfirmPassword)
		{
          //connection
       $con = mysqli_connect("localhost:3306", "dse","12345" );

        //select the database 
       mysqli_select_db($con,"dmwcw");

     //perform sql
     $sql = "INSERT INTO user (	Email,Name,ContactNo,Address,Password) VALUES ('$email','$name',$ContactNo,'$address','$Password')";

     $ret= mysqli_query($con, $sql);
     header('location:index.html');

     //disconnect 
      mysqli_close($con);
		}
		else
		{
			echo '<script>alert("Please Enter correct Password")</script>';
		}
	}
}

//Appointment

if(isset($_POST["btnAsubmit"]))
{
	$breed=$_POST["txtbreed"];
    $name=$_POST["txtPName"]; 
    $age=$_POST["txtage"];
    $ContactNo=$_POST["txtContactNo"]; 
    $email=$_POST["txtEmail"];
   

	if(empty($email))
	{
		echo '<script>alert("UserEmail Filed cannot be blank")</script>';
	}
	else
	{
		  //connection
     $con = mysqli_connect("localhost:3306", "dse","12345" );

     //select the database 
     mysqli_select_db($con,"dmwcw");

     //perform sql
     $sql = "INSERT INTO appointment (	breed,Name,age,ContactNo,email) VALUES ('$breed','$name',$age,$ContactNo,'$email')";

     $ret= mysqli_query($con, $sql);
     header('location:doctor.html');
    

     //disconnect 
      mysqli_close($con);
	}
}

	
//Tranners
	
if(isset($_POST["btnTsubmit"]))
{
	$name=$_POST["txtName"];
    $RegNo=$_POST["txtRegNo"]; 
    $ContactNo=$_POST["txtContactNo"];
    $Email=$_POST["txtEmail"]; 
    $Address=$_POST["txtaddress"];
   

	if(empty($Email))
	{
		echo '<script>alert("UserEmail Filed cannot be blank")</script>';
	}
	else
	{
		  //connection
     $con = mysqli_connect("localhost:3306", "dse","12345" );

     //select the database 
     mysqli_select_db($con,"dmwcw");

     //perform sql
     $sql = "INSERT INTO tranner (	RegNo,ContactNo,Address,Email,name) VALUES ('$RegNo',$ContactNo,'$Address','$Email','$name')";

     $ret= mysqli_query($con, $sql);
     header('location:trainers.html');
    

     //disconnect 
      mysqli_close($con);
	}
}


	
//Crossing
	
if(isset($_POST["btnCsubmit"]))
{
	$Breed=$_POST["txtbreed"];
    $Name=$_POST["txtPName"]; 
    $Age=$_POST["txtage"];
    $Price=$_POST["txtPrice"]; 
    $ContactNo=$_POST["txtContactNo"];
    $Email=$_POST["txtEmail"];

	if(empty($Email))
	{
		echo '<script>alert("UserEmail Filed cannot be blank")</script>';
	}
	else
	{
		  //connection
     $con = mysqli_connect("localhost:3306", "dse","12345" );

     //select the database 
     mysqli_select_db($con,"dmwcw");

     //perform sql
     $sql = "INSERT INTO Crossing (	Breed,PetName,Age,Price,ContactNo,Email) VALUES ('$Breed','$Name',$Age,$Price,$ContactNo,'$Email')";

     $ret= mysqli_query($con, $sql);
     header('location:crossing.html');
    

     //disconnect 
      mysqli_close($con);
	}
}

//vetrinary Surgeon
	
if(isset($_POST["btnVsubmit"]))
{
	$Name=$_POST["txtName"];
    $RegNo=$_POST["txtRegNo"]; 
    $ContactNo=$_POST["txtContactNo"];
    $Email=$_POST["txtEmail"]; 
    $Address=$_POST["txtaddress"];
   

	if(empty($Email))
	{
		echo '<script>alert("UserEmail Filed cannot be blank")</script>';
	}
	else
	{
		  //connection
     $con = mysqli_connect("localhost:3306", "dse","12345" );

     //select the database 
     mysqli_select_db($con,"dmwcw");

     //perform sql
     $sql = "INSERT INTO vetrinarysurgeon (	Name,RegNo,ContactNo,Email,Address) VALUES ('$Name','$RegNo',$ContactNo,'$Email','$Address')";

     $ret= mysqli_query($con, $sql);
     header('location:doctor.html');
    
     //disconnect 
      mysqli_close($con);
	}
}

//reivews
if(isset($_POST["btnVsubmit"]))
{
	$Name=$_POST["txtName"];
    $Email=$_POST["txtEmail"]; 
    $ContactNo=$_POST["txtPhoneNo"];
    $Message=$_POST["txtMessage"]; 
  
   

	if(empty($Email))
	{
		echo '<script>alert("UserEmail Filed cannot be blank")</script>';
	}
	else
	{
		  //connection
     $con = mysqli_connect("localhost:3306", "dse","12345" );

     //select the database 
     mysqli_select_db($con,"dmwcw");

     //perform sql
     $sql = "INSERT INTO reviews (	Name,Email,ContactNo,Message) VALUES ('$Name','$Email',$ContactNo,'$Message')";

     $ret= mysqli_query($con, $sql);
     header('location:contact.html');
   

     //disconnect 
      mysqli_close($con);
	}
}



?>
