<?php
error_reporting(0);
/*if($_POST['admin']==NULL)
    echo '<script>alert("Please, Login with your Username and Password!!!");window.location.href="http://localhost/E-Tourism/admin.php";</script>';
*/
?>


<!DOCTYPE html>
<html>
<head>
<title>Admin</title>
<link href="css/style1.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body class="desboard">
<div class="container">
	<img style="width:100%;margin-top: -20px;margin-left: -15px" alt="Snow" src="src/logo.png"/>
        <nav class="btn" style="margin-top: -5px">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="about.html" target="_blank">About As</a></li>
					<li class="dropdown">
							<a href="javascript:void(0)" class="dropbtn">Map</a>
							<div class="dropdown-content">
							  <a href="tourist.html" target="_blank">Tourist Map</a>
							  <a href="transport.html" target="_blank">Transport Map</a>
							</div>
					</li>
					<li class="dropdown">
							<a href="javascript:void(0)" class="dropbtn">Indian States/UT</a>
							<div class="dropdown-content">
                                                            <table>
                                                                <tr>
                                                                    <td>
							  <a href="states.html#1" target="_blank">ANDAMAN & NICOBAR</a>
							  <a href="states.html#2" target="_blank">ANDHRA PRADESH</a>
                                                          <a href="states.html#3" target="_blank">ARUNACHAL PRADESH</a>
							  <a href="states.html#4" target="_blank">ASSAM</a>
                                                          <a href="states.html#5" target="_blank">BIHAR</a>
							  <a href="states.html#6" target="_blank">CHANDIGARH</a>
                                                          <a href="states.html#7" target="_blank">CHHATTISGARH</a>
							  <a href="states.html#8" target="_blank">DADRA & NAGAR HAVELI</a>
							  <a href="states.html#9" target="_blank">DAMAN AND DIU</a>
                                                                    </td>
                                                                    <td>
                                                          <a href="states.html#10" target="_blank">DELHI</a>
							  <a href="states.html#11" target="_blank">GOA</a>
							  <a href="states.html#12" target="_blank">GUJARAT</a>
                                                          <a href="states.html#13" target="_blank">HARYANA</a>
							  <a href="states.html#14" target="_blank">HIMACHAL PRADESH</a>
							  <a href="states.html#16" target="_blank">JAMMU AND KASHMIR</a>
                                                          <a href="states.html#15" target="_blank">JHARKHAND</a>
							  <a href="states.html#17" target="_blank">KARNATAKA</a>
							  <a href="states.html#18" target="_blank">KERALA</a>
                                                                    </td>
                                                                    <td>
                                                          <a href="states.html#19" target="_blank">LAKSHADWEEP</a>
							  <a href="states.html#20" target="_blank">MADHYA PRADESH</a>
							  <a href="states.html#21" target="_blank">MAHARASHTRA</a>
                                                          <a href="states.html#22" target="_blank">MANIPUR</a>
                                                          <a href="states.html#23" target="_blank">MEGHALAYA</a>
                                                          <a href="states.html#24" target="_blank">MIZORAM</a>
                                                          <a href="states.html#25" target="_blank">NAGALAND</a>
                                                          <a href="states.html#26" target="_blank">ODISHA</a>
                                                          <a href="states.html#27" target="_blank">PUDUCHERRY</a>
                                                                    </td>
                                                                    <td>
                                                          <a href="states.html#28" target="_blank">PUNJAB</a>
                                                          <a href="states.html#29" target="_blank">RAJASTHAN</a>
                                                          <a href="states.html#30" target="_blank">SIKKIM</a>
                                                          <a href="states.html#31" target="_blank">TAMIL NADU</a>
                                                          <a href="states.html#32" target="_blank">TELANGANA</a>
                                                          <a href="states.html#33" target="_blank">TRIPURA</a>
                                                          <a href="states.html#34" target="_blank">UTTAR PRADESH</a>
                                                          <a href="states.html#35" target="_blank">UTTARAKHAND</a>
                                                          <a href="states.html#36" target="_blank">WEST BENGAL</a>
                                                                    </td>
                                                          </tr>
                                                            </table>
							  </div>
					</li>
					<li class="dropdown">
							<a href="javascript:void(0)" class="dropbtn">Plan</a>
							<div class="dropdown-content">
                                                            <a href="btvisit.html" target="_blank">Best Time to Visit</a>
                                                            <a href="hands.html" target="_blank">Health and Safety</a>
                                                            <a href="src/hotels.pdf" target="_blank">Hotel Booking</a>
                                                            <a href="./api/dispeture/dis_package.php" target="_blank">Packages</a>
							</div>
					</li>
					<li class="dropdown">
							<a href="javascript:void(0)" class="dropbtn">E-Ticketing</a>
							<div class="dropdown-content">
                                                            <a href="./api/dispeture/dis_bus.php" target="_blank">Bus Ticket</a>
							  <a href="./api/dispeture/dis_train.php" target="_blank">Train Ticket</a>
                                                          <a href="./api/dispeture/dis_air.php" target="_blank">Air Craft</a>
                                                          <a href="./api/dispeture/dis_ship.php" target="_blank">Ship Ticket</a>
							  </div>
					</li>
                                        <li><a href="./api/dispeture/dis_feed.php" target="_blank">Review</a></li>
				</ul>
				
			</nav>
			<nav class="btn" style="margin-top: -5px;margin-left: 1370px;">
				<ul>
					<li><a href="http://localhost/E-Tourism/admin.php" target="_blank">ADMIN</a></li>
				</ul>
			</nav>
</div>
<br><br>
   <?php 
        error_reporting(0);
        setcookie('admin', $_GET['a'],0);
        //echo 'Admin: '.$_COOKIE['name'];
        echo '<center><b style="color:green">'.$_GET['msg'].'</b></center><br>';
        try{
	$dbhandler = new PDO('mysql:host=127.0.0.1;dbname=e-tourism','root','');
	//echo "Connection is established...<br/>";
	$dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        
        echo '<h3 style="margin-left:15px">General Statistics</h3>';
        //total users
        $query=$dbhandler->query('select count(*) from users');
        $users=$query->fetch();
        echo '<table border="0" width="15%" style="margin-left:30px"><tr><td><b>Total Users: </b></td><td>'.$users[0];
        
        //total feedbacks
        $query=$dbhandler->query('select count(*) from feedback');
        $feed=$query->fetch();
        echo '</td></tr><tr><td><b>Total Feedbacks: </b></td><td>'.$feed[0];
        
        //total bus tickets
        $query=$dbhandler->query('select count(*) from bus');
        $bus=$query->fetch();
        echo '</td></tr><tr><td><b>Total Bus Tickets: </b></td><td>'.$bus[0];
        
        //total train tickets
        $query=$dbhandler->query('select count(*) from train');
        $train=$query->fetch();
        echo '</td></tr><tr><td><b>Total Train Tickets: </b></td><td>'.$train[0];
        
        //total air tickets
        $query=$dbhandler->query('select count(*) from air');
        $air=$query->fetch();
        echo '</td></tr><tr><td><b>Total Air Tickets: </b></td><td>'.$air[0];
        
        //total ship tickets
        $query=$dbhandler->query('select count(*) from ship');
        $ship=$query->fetch();
        echo '</td></tr><tr><td><b>Total Ship Tickets: </b></td><td>'.$ship[0];
        
        //total packages
        $query=$dbhandler->query('select count(*) from package');
        $package=$query->fetch();
        echo '</td></tr><tr><td><b>Total Package Tickets: </b></td><td>'.$package[0];
        
        //totla package_list
        $query=$dbhandler->query('select count(*) from package_list');
        $package=$query->fetch();
        echo '</td></tr><tr><td><b>Total Avai. Package: </b></td><td>'.$package[0];
        
        echo '</td></tr></table>';
        
	echo '<center><table border="0" style="margin-left:320px;margin-top:-245px" width="80%"><tr><td></td><td><h3>For Packages:</h3><div class="buttn"><form action="./api/addpack.php">
            <button class="button button2" id="btclr" style="color:black" type="submit"><span>Add Package</span></button>						
		</form><form action="./api/deletepackadminview.php">
            <button class="button button2" id="btclr" style="color:black" type="submit"><span>Delete Package</span></button>						
		</form><form action="./api/adminpacklist.php">
            <button class="button button2" id="btclr" style="color:black" type="submit"><span>View Packages</span></button>						
		</form></div></td></tr><tr><td>';
        
     /*   
        echo '<form action="./api/addpack.php"><div class="buttn">
            <button class="button button2" id="btclr" style="color:black;margin-left:-600px" type="submit"><span>Add Package</span></button>						
		</div></form>';
        
        echo '<form action="./api/addpack.php"><div class="buttn">
            <button class="button button2" id="btclr" style="color:black;margin-left:-600px" type="submit"><span>Add Package</span></button>						
		</div></form></td>';
       */ 
        //feedbacks
        $query=$dbhandler->query('select avg(star) from feedback');
        $r=$query->fetch(PDO::FETCH_NUM);
        $r= number_format($r[0], 1);
        echo '</td><td width="100%"><h2>Feedbacks (Avg.: '.$r.'/5)</h2>';
        $query=$dbhandler->query('select * from feedback where service="feed"');
            while($r=$query->fetch(PDO::FETCH_NUM)){
                $sr='<img style="width:100px;height:100px" alt="(Not Uploaded)" src="uploads/'.$r[4].'"><br>';
		echo '<b>User: </b>'.$r[1].'<br><b>Rating: </b>'.$r[2].'/5<br><b>Description:</b>'.$r[3].'<br><b>Picture:</b><br>'.$sr.'<br>';	
            }
        
        $query=$dbhandler->query('select avg(star) from feedback where service="train"');
        $r=$query->fetch(PDO::FETCH_NUM);
        $r= number_format($r[0], 1);
        echo '</td></tr><tr><td></td><td><h3 style="margin-left:-30px">Feedbacks about Trains (Avg.: '.$r.'/5)</h3>';
        $query=$dbhandler->query('select * from feedback where service="train"');
            while($r=$query->fetch(PDO::FETCH_NUM)){
                $sr='<img style="width:100px;height:100px" alt="(Not Uploaded)" src="uploads/'.$r[4].'"><br>';
		echo '<b>User: </b>'.$r[1].'<br><b>Rating: </b>'.$r[2].'/5<br><b>Description:</b>'.$r[3].'<br><b>Picture:</b><br>'.$sr.'<br>';	
            }
        
        $query=$dbhandler->query('select avg(star) from feedback where service="bus"');
        $r=$query->fetch(PDO::FETCH_NUM);
        $r= number_format($r[0], 1);
        echo '</td></tr><tr><td></td><td><h3 style="margin-left:-30px">Feedbacks about Buses (Avg.: '.$r.'/5)</h3>';
        $query=$dbhandler->query('select * from feedback where service="bus"');
            while($r=$query->fetch(PDO::FETCH_NUM)){
                $sr='<img style="width:100px;height:100px" alt="(Not Uploaded)" src="uploads/'.$r[4].'"><br>';
		echo '<b>User: </b>'.$r[1].'<br><b>Rating: </b>'.$r[2].'/5<br><b>Description:</b>'.$r[3].'<br><b>Picture:</b><br>'.$sr.'<br>';	
            }
            
        $query=$dbhandler->query('select avg(star) from feedback where service="package"');
        $r=$query->fetch(PDO::FETCH_NUM);
        $r= number_format($r[0], 1);
        echo '</td></tr><tr><td></td><td><h3 style="margin-left:-30px">Feedbacks about Packages (Avg.: '.$r.'/5)</h3>';
        $query=$dbhandler->query('select * from feedback where service="package"');
            while($r=$query->fetch(PDO::FETCH_NUM)){
                $sr='<img style="width:100px;height:100px" alt="(Not Uploaded)" src="uploads/'.$r[4].'"><br>';
		echo '<b>User: </b>'.$r[1].'<br><b>Rating: </b>'.$r[2].'/5<br><b>Description:</b>'.$r[3].'<br><b>Picture:</b><br>'.$sr.'<br>';	
            }
        
        $query=$dbhandler->query('select avg(star) from feedback where service="air"');
        $r=$query->fetch(PDO::FETCH_NUM);
        $r= number_format($r[0], 1);
        echo '</td></tr><tr><td></td><td><h3 style="margin-left:-30px">Feedbacks about Air Crafts (Avg.: '.$r.'/5)</h3>';
        $query=$dbhandler->query('select * from feedback where service="air"');
            while($r=$query->fetch(PDO::FETCH_NUM)){
                $sr='<img style="width:100px;height:100px" alt="(Not Uploaded)" src="uploads/'.$r[4].'"><br>';
		echo '<b>User: </b>'.$r[1].'<br><b>Rating: </b>'.$r[2].'/5<br><b>Description:</b>'.$r[3].'<br><b>Picture:</b><br>'.$sr.'<br>';	
            }
        
        $query=$dbhandler->query('select avg(star) from feedback where service="ship"');
        $r=$query->fetch(PDO::FETCH_NUM);
        $r= number_format($r[0], 1);
        echo '</td></tr><tr><td></td><td><h3 style="margin-left:-30px">Feedbacks about Ships (Avg.: '.$r.'/5)</h3>';
        $query=$dbhandler->query('select * from feedback where service="ship"');
            while($r=$query->fetch(PDO::FETCH_NUM)){
                $sr='<img style="width:100px;height:100px" alt="(Not Uploaded)" src="uploads/'.$r[4].'"><br>';
		echo '<b>User: </b>'.$r[1].'<br><b>Rating: </b>'.$r[2].'/5<br><b>Description:</b>'.$r[3].'<br><b>Picture:</b><br>'.$sr.'<br>';	
            }
            
            
            echo '</td></tr></table></center><br><br><br><br>';
        }
        catch(PDOException $e){
                echo $e->getMessage();
                die();
        }

   //<img style="width:100px;height:100px" src="/uploads/'.$sr.'><br>'
   
   
   ?> 

<form action="index.php">
    <div class="buttn">
                        <center>
                            <button class="button button2" id="btclr" style="color: #000" type="submit"><span>Home</span></button>						
						</center>
                    </div>
</form>
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
				<img src="src/fb.png">
			</a>
			<a href="http://www.instagram.com/incre_devendra/?hl=en" target="_blank">
				<img src="src/ist.png" style="margin-left:8px;">
			</a>
			<a href="https://www.youtube.com/channel/UC_LumxyJ8qANtNx_p79fFSQ?view_as=subscriber" target="_blank">
				<img src="src/yt.png" style="margin-left:8px;">
			</a><br><br>
		</div>
    </div>
	</div>
</footer>
</body>
</html>
