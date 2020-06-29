

<html>
    <head>
        <title>Feedback</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/style1.css">
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body class="desboard">
	<div class="container">
		<img style="width:100%;" alt="Snow" src="../src/logo.png"/>
			<nav class="btn">
				<ul>
					<li><a href="http://localhost/E-Tourism/index.php" target="_blank">Home</a></li>
				</ul>
			</nav>
	</div>
       
             <center>
                <?php
                    error_reporting(0);
                    $arr = explode(";", $_GET['Message']);
                    setcookie("unm", $arr[1],0);
                    echo '<p style="color:green;margin-top:-20px">'.$arr[0].'</p><b style="color:black">'.$arr[1].'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;IST:'.date("Y-m-d h:ia").'</b>';
                ?>
             </center>
             <br><br>
             <form action="feedb.php" method="post" enctype="multipart/form-data">
              <div class="login-wrap">
              <div class="login-html">
		<center><h3 style="color: black">Share Your Experience...</h3></center>
                        <div class="login-form">
                            <div class="group">
                                    <label for="user" class="label">Star Rating</label>
                                       <br>
                                <b style="color: #000">1</b><input type="radio" name="star" value="1"/>&nbsp;&nbsp;&nbsp;
                                <b style="color: #000">2</b><input type="radio" name="star" value="2"/>&nbsp;&nbsp;&nbsp;
                                <b style="color: #000">3</b><input type="radio" name="star" value="3"/>&nbsp;&nbsp;&nbsp;
                                <b style="color: #000">4</b><input type="radio" name="star" value="4"/>&nbsp;&nbsp;&nbsp;
                                <b style="color: #000">5</b><input type="radio" name="star" value="5"/>&nbsp;&nbsp;&nbsp;
                            </div>
                            <div class="group">
                              <label for="user" class="label">Describe Experience</label>
                              <textarea class="input" name="text"></textarea>
                            </div>
                            <div class="group">
                              <label for="user" class="label">Upload Image(Optional)</label>
                              <input type="file" name="myFile" accept="image/*" class="input" id="myFile">
                            </div>
                    <div class="buttn">
                        <center>
                        <button class="button button2" id="btclr" style="color: black" type="submit"><span>Submit</span></button>						
						</center>
                    </div>
                  </div>
              </div>
            </div>
             
             </form>
                 
             <form action="http://localhost/E-Tourism/index.php">
                 <div class="buttn">
                        <center>
                            <button class="button button2" id="btclr" style="color: black" type="submit"><span>Later</span></button>						
						</center>
                 </div>
             </form>
   
        
         
        
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
				<img src="../src/fb.png">
			</a>
			<a href="http://www.instagram.com/incre_devendra/?hl=en" target="_blank">
				<img src="../src/ist.png" style="margin-left:8px;">
			</a>
			<a href="https://www.youtube.com/channel/UC_LumxyJ8qANtNx_p79fFSQ?view_as=subscriber" target="_blank">
				<img src="../src/yt.png" style="margin-left:8px;">
			</a><br><br>
		</div>
    </div>
	</div>
</footer>
</body>
</html>
   
