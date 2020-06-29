<?php
/*if($_COOKIE['admin']==NULL)
    echo '<script>alert("Please, Login with your Username and Password!!!");window.location.href="http://localhost/E-Tourism/admin.php";</script>';
*/
?>

<html>
    <head>
        <title>Add Package</title>
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
    <center><h3 style="margin-top: -25px">Add New Package</h3></center><br><br>
    <form action="packintodb.php" method="post">
              <div class="login-wrap">
              <div class="login-html"><br>
		        <div class="login-form">
                            <div class="group">
                                <label for="user" class="label">Title</label>
                                <input name="title" type="text" pattern="[A-Za-z].+" class="input" required>
                            </div>
                            <div class="group">
                              <label for="user" class="label">Describe Experience</label>
                              <textarea class="input" name="text"></textarea>
                            </div>
                            
                            <div class="group">
                                        <table border="0">
                                                <tr>
                                                        <td>
                                                          <label for="user" class="label">price</label>
                                                          <input name="price" type="text" class="input" required>
                                                        </td>
                                                        <td>
                                                          <label for="user" class="label" id="seat">Days</label>
                                                          <input name="days" type="text" id="seat" class="input" required>
                                                        </td>
                                                </tr>
                                        </table>
                            </div>
                           
                    <div class="buttn">
                        <center>
                        <button class="button button2" id="btclr" style="color: black" type="submit"><span>Add</span></button>						
						</center>
                    </div>
                  </div>
              </div>
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
   
