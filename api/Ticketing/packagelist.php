<?php
error_reporting(0);
if($_COOKIE['dis']==NULL)
    echo '<script>alert("Please, Login with your Username and Password!!!");window.location.href="http://localhost/E-Tourism/index.php";</script>';

?>


<html>
    <head>
        <title>Package Lists</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../../css/style1.css">
        <link rel="stylesheet" href="../../css/style.css">
    </head>

	
    <body class="desboard">
	<div class="container">
		<img style="width:100%;" alt="Snow" src="../../src/logo.png"/>
			<nav class="btn">
				<ul>
					<li><a href="../../index.php" target="_blank">Home</a></li>
				</ul>
			</nav>
	</div>
        
        <?php
            setcookie('dis','package');
                        try{
                            $dbhandler = new PDO('mysql:host=127.0.0.1;dbname=e-tourism','root','');
                            //echo "Connection is established...<br/>";
                            $dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                            $query=$dbhandler->query("select * from package_list");
                            //$r=$query->fetch();
                            while($r=$query->fetch(PDO::FETCH_NUM)){
                                echo '<center><table border="0" style="margin-top:-80px" width="50%">';
                                //print_r($r);
                                echo '<tr><td colspan="2"><center><h3>'.$r[0].'</h3></center></td><tr><tr><td width="2%">About:</td><td width="50%">'.$r[1].'</td></tr><tr><td>Price:</td><td>'.$r[2].' INR</td></tr><tr><td>Days:</td><td>'.$r[3].'</td></tr>';
                                echo '<tr><td colspan="2"><center><a href="http://localhost/E-Tourism/api/Ticketing/packdetails.php?pack='.$r[0].';'.$r[2].'">Book</a></center></td></tr><br><br><br><br><br><br><br>';
                            
                                echo '</table></center>';
                            }
                        }
                        catch(PDOException $e){
                                echo $e->getMessage();
                                die();
                        }
        ?>
        <br><br>
<footer>
	<div class="container">
	<div class="first">
        <div class="inner">
			<p>Copyright © 2019 E-Voter's Service Portal.<br>Site is designed and maintained by Devendra, Milan and Krinish</p>
		</div>
	</div>
	<div class="first">
        <div class="inner">
			<h1>Follow on</h1>
			<a href="https://www.facebook.com/devendra.raiyani.7" target="_blank">
				<img src="../../src/fb.png">
			</a>
			<a href="http://www.instagram.com/incre_devendra/?hl=en" target="_blank">
				<img src="../../src/ist.png" style="margin-left:8px;">
			</a>
			<a href="https://www.youtube.com/channel/UC_LumxyJ8qANtNx_p79fFSQ?view_as=subscriber" target="_blank">
				<img src="../../src/yt.png" style="margin-left:8px;">
			</a><br><br>
		</div>
    </div>
	</div>
</footer>
</body>
</html>