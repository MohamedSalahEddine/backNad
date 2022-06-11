<?php
    include('../inc/connection.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta content='text/html; charset=UTF-8' http-equiv='Content-Type'/>
        <link rel="stylesheet" type="text/css" href="../style/style.css" />
        <title>Login Demo</title>
    </head>
    <body>

    <div id="center">
    <div id="center-set"> 
    <h1 >Welcome ,</h1>

    <div id="contentbox">
    <?php
    $sql="SELECT * FROM membre where pseudo='*'";
    $result=mysqli_query($conn,$sql);
    ?>
    <?php
    while($rows=mysqli_fetch_array($result)){
    ?>
    <div id="signup">
    <div id="signup-st">
    <form action="" method="POST" id="signin" id="reg">
    <div id="reg-head" class="headrg">Your Profile</div>
    <table border="0" align="center" cellpadding="2" cellspacing="0">
    <tr id="lg-1">
    <td class="tl-1"> <div align="left" id="tb-name">Reg id:</div> </td>
    <td class="tl-4"><?php echo $rows['id_membre']; ?></td>
    </tr>
    <tr id="lg-1">
    <td class="tl-1"><div align="left" id="tb-name">Username:</div></td>
    <td class="tl-4"><?php echo $rows['pseudo']; ?></td>
    </tr>
    <tr id="lg-1">
    <td class="tl-1"><div align="left" id="tb-name">Name:</div></td>
    <td class="tl-4"><?php echo $rows['prenom']; ?> <?php echo $rows['nom']; ?></td>
    </tr>
    <tr id="lg-1">
    <td class="tl-1"><div align="left" id="tb-name">Email id:</div></td>
    <td class="tl-4"><?php echo $rows['email']; ?></td>
    </tr>
    </table>

    </form>
    </div>
    </div>
    <div id="login">
    <div id="login-sg">
    <div id="st"><a href="logout.php" id="st-btn">Sign Out</a></div>
    <div id="st"><a href="deleteac.php" id="st-btn">Delete Account</a></div>
    </div>
    </div>
    <?php 
    // close while loop 
    }
    ?>
    </div>
    </div>
    </div>
    </br>

    </body>
</html>