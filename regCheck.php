
<?php

error_reporting(0);

if(isset($_REQUEST['submit']))
{
    $name 				= trim($_REQUEST['name']) ;
	$contactno 		    = trim($_REQUEST['contactno'];
	$userName 			= trim($_REQUEST['userName'];
	$password 			= trim($_REQUEST['password'];
	$confirmPassword 	= trim($_REQUEST['confirmPassword'];
	$companyname 	    = trim($_REQUEST['cname'];
	$type = $_REQUEST['type'];
    

     if($name =='' OR $contactno=='' OR $userName=='' OR $password=='' OR $companyname=='' OR $confirmPassword =='' OR $type =='' ){
			echo"<script>alert('please fill all the fields!')</script>";
			exit();
		}
    
    else
    {

        if($password == $confirmPassword)
        {   
            $conn = mysqli_connect('localhost', 'root', '', 'company');
            $sql = "INSERT into adminlogin VALUES('','$name','$contactno','$userName','$password','$companyname','$type)";
            $result = mysqli_query($conn, $sql);
            header('location: index.php?status=success');

		}else
			{
				echo "pass and repass error";
			}
		}

	}else{
		header('location: registration.php');
	}

?>
