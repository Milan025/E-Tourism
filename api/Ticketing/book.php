<?php
error_reporting(0);
if($_COOKIE['dis']==NULL)
    echo '<script>alert("Please,select your trip mode and then Login with your Username and Password!!!");window.location.href="http://localhost/E-Tourism/index.php";</script>';

?>


<html>
    <head>
        <title>Ticket</title>
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
                <center>
                <?php
                    error_reporting(0);
                    $arr = explode(";", $_GET['Message']);
                    echo '<b style="color:black">'.$arr[1].'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;IST:'.date("Y-m-d h:ia").'</b>';
                    setcookie("unm", $arr[1], 0);
                    setcookie("id", $arr[0], 0);
                ?>
                </center>
                <br><br>
                <div class="login-wrap">
              <div class="login-html">
			  <form action="show.php" method="post">
                              <h3 align="center" style="color:black"><?php echo strtoupper($_COOKIE['dis']).' TICKET'; ?></h3>
                        <div class="login-form">
                    <div class="group">
                      <label for="user" class="label">From</label>
                      <input name="start" type="text" pattern="[A-Za-z].+" class="input" required>
                    </div>
                    <div class="group">
                      <label for="pass" class="label">to</label>
                      <input name="destination" type="text" pattern="[A-Za-z].+" class="input" required>
                    </div>
                    <div class="group">
                                        <table border="0">
                                                <tr>
                                                        <td>
                                                          <label for="user" class="label">date of journey</label>
                                                          <input name="date" type="date" class="input" required>
                                                        </td>
                                                        <td>
                                                          <label for="user" class="label" id="seat">Seats&nbsp;&nbsp;[1-9]</label>
                                                          <input name="seats" type="text" id="seat" maxlength="1" pattern="[1-9]" class="input" required>
                                                        </td>
                                                </tr>
                                        </table>
                    </div>
                   <div class="buttn">
                        <center>
                        <button class="button button2" id="btclr" type="submit"><span>Submit</span></button>						
						</center>
                    </div><br>

                  </div>
				  </form>
              </div>
    </div>
                
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