<?php
error_reporting(0);
if($_COOKIE['dis']==NULL)
    echo '<script>alert("Please, Login with your Username and Password!!!");window.location.href="http://localhost/E-Tourism/index.php";</script>';

?>


<html>
    <head>
        <title>Package Details</title>
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
        <table align="center" width="90%" border="0">
		<tr>
		<td width="100%">
                <center>
                <?php
                    error_reporting(0);
                    $arr = explode(";", $_GET['pack']);
                    setcookie('pack',$arr[0]);
                    setcookie('price',$arr[1]);
                    $unm=$_COOKIE['unm'];
                    echo '<b style="color:black">'.$unm.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;IST:'.date("Y-m-d h:ia").'</b>';
                    /*setcookie("start", $_POST['start'],0);
                    setcookie("destination", $_POST['destination'],0);
                    setcookie("date", $_POST['date'],0);
                    setcookie("seats", $_POST['seats'],0);*/
                ?>
                </center>
                <br><br>
                <div class="login-wrap">
              <div class="login-html">
                  <form action="showpack.php" method="post">
                      <h3 align="center" style="color:black"><?php echo strtoupper($_COOKIE['dis']).' TICKET'; ?></h3>
                                
                        <div class="login-form">
                    <div class="group">
                      <label for="user" class="label">Name</label>
                      <input name="name" type="text" pattern="[A-Za-z].+" class="input" required>
                    </div>
                    <div class="group">
                      <label for="pass" class="label">Email</label>
                      <input name="email" type="email" pattern="[A-Za-z].+" class="input" required>
                    </div>
                    <div class="group">
                                        <table border="0">
                                                <tr>
                                                        <td>
                                                          <label for="user" class="label">date of journey</label>
                                                          <input name="date" type="date" class="input" required>
                                                        </td>
                                                        <td>
                                                          <label for="user" class="label" id="seat">Tickets&nbsp;&nbsp;[1-9]</label>
                                                          <input name="seats" type="text" id="seat" maxlength="1" pattern="[1-9]" class="input" required>
                                                        </td>
                                                </tr>
                                        </table>
                    </div>
                            <br><br>
                    <div class="buttn">
                        <center>
                        <button class="button button2" id="btclr" type="submit"><span>Submit</span></button>						
						</center>
                    </div><br>

                  </div>
				  </form>
              </div>
    </div>
                </td>
                <td width="1%">
                    <div style="margin-left: 100px;margin-top: -100px">
                    <?php
                    /*echo '<table border="1" width="80%"><tr><td><h3 style="color:black">Booking Details:</h3></td></tr>';
                   $amu=rand(100,500);
                   $tamu=$amu*$_POST['seats'];
                   $ttamu=$tamu+7;
                   setcookie("ttamu", $ttamu,0);
                    
                    echo "<td><table border='1' width='200px'><tr><td><b>Price:(1 Ticket)</b></td><td>".$amu.' Rs.</td></tr><br>';
                    echo "<tr><td><b>Price:(".$_POST['seats']."Ticket)</b></td><td>".$tamu.' Rs.</td></tr><br>';
                    echo '<tr><td><b>Taxes:</b></td><td>7 Rs.</td></tr><br>';
                    echo "<tr><td><b>Total Amount:</b></td><td>".$ttamu.' Rs.</td></tr><br></table></td></tr></table>';
                    */
                    ?>
                    </div>
                </td>
                </tr>
        </table>
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