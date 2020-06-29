<?php
error_reporting(0);
if($_COOKIE['dis']==NULL)
    echo '<script>alert("Please, Login with your Username and Password!!!");window.location.href="http://localhost/E-Tourism/index.php";</script>';

?>


<html>
    <head>
        <title>Show Package</title>
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
        <h3 align="center" style="color:black;margin-top:-20px">Conform Booking</h3>
        <br><br><br><br><br><br>
        <form action="packbook.php" method="post">
                    <div style="margin-left: 100px;margin-top: -100px">
                    <?php
                    //echo $_COOKIE['pack'];
                       /*try{
                            $dbhandler = new PDO('mysql:host=127.0.0.1;dbname=e-tourism','root','');
                            //echo "Connection is established...<br/>";
                            $dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                            $query=$dbhandler->query("select * from package_list");
                            //$r=$query->fetch();
                            while($r=$query->fetch(PDO::FETCH_NUM)){
                                //echo specific attributes
                                //echo $r['message'], '<br/>';
                                //echo all data in both format: numeric and associative
                                //echo '<pre>',print_r($r),'</pre>';
                                print_r($r);
                                echo '<form action="packdetails.php"><input type="submit" value="book"/></form>';
                            }
                        }
                        catch(PDOException $e){
                                echo $e->getMessage();
                                die();
                        }*/
                    setcookie("date", $_POST['date'],0);
                    setcookie("tickets", $_POST['seats'],0);
                    echo '<table border="1" width="80%"><tr><td><h3 style="color:black">Booking Details:</h3></td><td><h3 style="color:black">Payment Details:</h3></td></tr>';
                    echo "<tr><td><table border='0' width='350px'><tr><td><b>Name:</b></td><td>".$_POST['name']."</td></tr><br>";
                    echo "<tr><td><b>Email:</b></td><td>".$_POST['email'].'</td></tr><br>';
                    echo "<tr><td><b>Package Name:</b></td><td>".$_COOKIE['pack'].'</td></tr><br>';
                    echo "<tr><td><b>Trip Date:</b></td><td>".$_POST['date'].'</td></tr><br>';
                    echo "<tr><td><b>Seats:</b></td><td>".$_POST['seats'].'</td></tr><br></table></td>';
                   $amu=$_COOKIE['price'];
                   $tamu=$amu*$_POST['seats'];
                   $tax=$tamu*0.05;
                   $ttamu=$tamu+$tax;
                   setcookie("ttamu", $ttamu,0);
                   //title,description,fee,days
                    echo "<td><table border='0' width='200px'><tr><td><b>Price:(1 Ticket)</b></td><td>".$amu.' Rs.</td></tr><br>';
                    echo "<tr><td><b>Price:(".$_POST['seats']."Ticket)</b></td><td>".$tamu.' Rs.</td></tr><br>';
                    echo '<tr><td><b>Taxes:</b></td><td>'.$tax.' Rs.</td></tr><br>';
                    echo "<tr><td><b>Total Amount:</b></td><td>".$ttamu.' Rs.</td></tr><br></table></td></tr></table>';
                    ?>
                    </div>
                <br><br><br>
                <div class="buttn">
                        <center>
                            <button class="button button2" id="btclr" type="submit" style="color: #000"><span>Proceed to Book</span></button>						
						</center>
                </div>
        </form>
                <br>
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