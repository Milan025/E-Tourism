<!DOCTYPE html>
<html>
<head>
<title>Admin</title>
<link href="css/style1.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body class="desboard" onpageshow="generateCaptcha()">
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
    <div class="login-wrap">
              <div class="login-html">
                  <?php
                    error_reporting(0);
                    echo '<center><p style="color:red">'.$_GET['msg'].'</p></center>';
                  ?>
                  <form action="./api/admin.php" method="post" onsubmit="return CheckValidCaptcha()" name="myform" id="myForm">
                              <h3 align="center" style="color:black">Admin Panel</h3><br><br>
                        <div class="login-form">
                    <div class="group">
                      <label for="user" class="label">Username</label>
                      <input name="username" type="text" class="input" required>
                    </div>
                    <div class="group">
                      <label for="pass" class="label">Password</label>
                      <input name="password" type="password" class="input" required>
                    </div>
                    <div class="group">
                                        <table border="0">
                                                <tr>
                                                        <td><div class="group">
              <label for="user" class="label" style="margin-top: -5px">captcha:</label>
                      <script type="text/javascript">
         function generateCaptcha()
         {
             var alpha = new Array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z');
             var i;
             for (i=0;i<4;i++){
               var a = alpha[Math.floor(Math.random() * alpha.length)];
               var b = alpha[Math.floor(Math.random() * alpha.length)];
               var c = alpha[Math.floor(Math.random() * alpha.length)];
               var d = alpha[Math.floor(Math.random() * alpha.length)];
              }
            var code = a + '' + b + '' + '' + c + '' + d;
            document.getElementById("mainCaptcha").value = code
          }
          function CheckValidCaptcha(){
              var string1 = removeSpaces(document.getElementById('mainCaptcha').value);
              var string2 = removeSpaces(document.getElementById('txtInput').value);
              if (string1 == string2){
         //document.getElementById('success').innerHTML = "Form is validated Successfully";
         //alert("Form is validated Successfully");
                return true;
              }
              else{
         //document.getElementById('success').innerHTML = "Please enter a valid captcha.";
         alert("Please enter a valid captcha.");
                return false;

              }
          }
          function removeSpaces(string){
            return string.split(' ').join('');
          }
      </script>
              <input type="text" size="2" id="mainCaptcha" class="input" readonly="readonly"/>
            </div>
                                                        </td>
                                                        <td>
                                                          <div class="group">
              <label for="user" class="label" style="margin-left: 150px">Enter Code:</label>
              <input type="text" class="input" style="margin-left: 150px;width: 80px" size="2" id="txtInput"/>
            </div>
                                                        </td>
                                                </tr>
                                        </table>
                    </div>
                   <div class="buttn">
                        <center>
                        <button class="button button2" id="btclr" type="submit"><span>Login</span></button>						
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
