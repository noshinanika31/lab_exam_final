<?php
	session_start();

    if(isset($_SESSION['name'])){
?>
<table width="50%" align="center" cellspacing="0" cellpadding="10" border="1">
    <tr>
        <td colspan="2" valign="middle" height="70">  
			<table width="100%">
                <tr>
                    <td>
                        
                            <img height="48" src="image/logo.png">
                        </a>
                    </td>
                    <td align="right">
                        Logged in as <a href="read/profile.html" target="iFrame"><?=$_SESSION['name']?></a>&nbsp;|
                        <a href="logout.php">Logout</a>
                    </td>
                </tr>
			</table>
        </td>
    </tr>
    <tr>
        <td width="190" valign="top">
            <b>&nbsp;Account</b><hr/>
            <ul>
              
                    <li><a href="home.php" >Home</a></li>
                    <li><a href="profile.php" >View Profile</a></li>
                    <li><a href="viewuser.php" >View all Employee</a></li>
                    <li><a href="search_user.php" >search employee</a></li>
                    <li><a href="logout.php">Logout</a></li>
            
            
               
            </ul>  

        </td>
        <td valign="top">
			<h1>Welcome Home! <?=$_SESSION['type'] ?></h1>
		</td>
    </tr>
    <tr>
        <td colspan="2" align="center">
            Copyright &copy; 2018
        </td>
    </tr>
</table>

<?php

}else{
    header("location: login.php");
}
?>