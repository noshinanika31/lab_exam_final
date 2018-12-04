<?php
    session_start();
    require_once('db.php');

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
                        Logged in as <a href="read/profile.html" target="iFrame">Noshin</a>&nbsp;|
                        <a href="php/logout.php">Logout</a>
                    </td>
                </tr>
			</table>
        </td>
    </tr>
    <tr>
        <td width="190" valign="top">
            <b>&nbsp;Account</b><hr/>
            <ul>
                <?php 
                if($_SESSION['type'] == 'admin')
                { ?>
                    <li><a href="home.php" >Home</a></li>
                    <li><a href="profile.html" >View Profile</a></li>
                    <li><a href="viewuser.php" >View all Employee</a></li>
                    <li><a href="search.php" >search employee</a></li>
                    <li><a href="logout.php">Logout</a></li>
            
            
            </ul>  
        </td>
        <td valign="top">
			 <?php

                $conn = getConnection();
                $sql = "select * from user where type='user'";
                $result = mysqli_query($conn, $sql);
                echo "<table>";
                while($row = mysqli_fetch_assoc($result)){

                        echo "<tr>  <td>Name: </td> <td>".$row['name']."</td>
                                    <td>Contactno: </td> <td>".$row['contactno']."</td>
                                    <td></td> <td><a href='deleteUser.php?contactno=".$row['contactno']."'>Delete</a></td>
                                </tr>";
                }
                echo "</table>";

             ?>
		</td>
    </tr>
    
</table>

<?php

}else{
    header("location: login.php");
}
?>