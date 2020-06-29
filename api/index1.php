    <!DOCTYPE html>
	<?php
	error_reporting(0);
        
        
	if($_COOKIE['unm']!=NULL){
			$arr = explode(";", $_COOKIE['unm']);
		$id=$_COOKIE['uid'];
		$msg=$arr[0];
		if($_GET['msg']=='feed')
                    header("Location:http://localhost/E-Tourism/api/feedback.php?Message=".$id.";".$msg);
                elseif($_GET['msg']!="package")
                    header("Location:http://localhost/E-Tourism/api/Ticketing/book.php?Message=".$id.";".$msg);
                if($_GET['msg']=='package')
                    header("Location:http://localhost/E-Tourism/api/Ticketing/packagelist.php?Message=".$id.";".$msg);
                
            }
	?>
    <html lang="en" >
    <head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
      <title>Login</title>
          <link rel="stylesheet" href="../css/style1.css">
          <link rel="stylesheet" href="../css/style.css">
    </head>
    <body class="desboard" onpageshow="generateCaptcha()">
	<div class="container">
		<img style="width:100%;" alt="Snow" src="../src/logo.png"/>
			<nav class="btn">
				<ul>
					<li><a href="http://localhost/E-Tourism/index.php" target="_blank">Home</a></li>
				</ul>
			</nav>
	</div>
    <table align="center" width="90%" border="0">
		<tr>
		<td width="45%">
		<div class="ntmrgn">
			<h3>Notes:</h3>
			1.Username must start with first latter capital and ends with digits
				<p id="nt">Eg.:Abc123</p>	
			2.Password must start with first latter capital then any special character<br>and ends with digits
				<p id="nt">Eg.:Abc@123</p><br><br>
		</div>
		</td>
		<td width="45%">
      
	  <?php
          error_reporting(0);
          //session_start('a1');
          //echo "sdasd".$_COOKIE["dis"];
          $dis=$_GET['msg'];
//		  setcookie('dis',$_COOKIE['dis'],time()-3600);
          setcookie("dis", $dis,0);
          if($_GET['Message']=="Login with new Username/Password")
            echo '<center><p style="color:green;">'.$_GET['Message'].'</p></center>';
          else
              echo '<center><p style="color:red;">'.$_GET['Message'].'</p></center><br>';
          if($_GET['msgc']=="IncorrectCaptcha!!")
              echo '<center><p style="color:red;">'.$_GET['Message'].'</p></center><br>';
	  ?><br>
	  <div class="login-wrap">
      <div class="login-html"><br>
        <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
        <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
        <div class="login-form">
            <form onsubmit="return CheckValidCaptcha()" name="myform" id="myForm" class="sign-in-htm" action="./user/login.php" method="GET">
            <div class="group">
              <label for="user" class="label">Username</label>
              <input id="username" name="username" type="text" class="input" required>
            </div>
            <div class="group">
              <label for="pass" class="label">Password</label>
              <input id="password" name="password" type="password" class="input" data-type="password" required>
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
                <div class="group">
              <input id="check" type="checkbox" class="check" checked>
              <label for="check"><span class="icon"></span> Keep me Signed in</label>
            </div>
                
           <div class="buttn">
                <label for="tab-2">Forgot Password?</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<button class="button button2" id="btclr" type="submit"><span>Sign In</span></button>
            </div><br>
          </form>
          <form class="sign-up-htm" action="./user/signup.php" method="POST">
            <div class="group">
              <label for="user" class="label">Username</label>
              <input id="username" name="username" minlength="5" type="text" pattern="[A-Z].+[0-9].+" class="input" required>
            </div>
            <div class="group">
              <label for="user" class="label">Email</label>
              <input id="email" name="email" type="email" class="input" required>
            </div>
            <div class="group">
              <label for="pass" class="label">Password</label>
              <input id="password" name="password" minlength="5" type="password" pattern="[A-Z].+[!@#$%^&*_][0-9].+" class="input" data-type="password" required>
            </div>
            <div class="group">
              <label for="pass" class="label">Confirm Password</label>
              <input id="pass" type="password" minlength="5" class="input" pattern="[A-Z].+[!@#$%^&*_][0-9].+" data-type="password" required>
            </div>
            <div class="buttn">
                <label for="tab-1">Already Member?</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<button class="button button2" id="btclr" type="submit"><span>Sign Up</span></button>
            </div><br>
          </form>
        </div>
      </div>
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
				<img src="../src/fb.png">
			</a>
			<a href="http://www.instagram.com/incre_devendra/?hl=en" target="_blank">
				<img src="../src/ist.png" style="margin-left:8px;">
			</a>
			<a href="https://www.youtube.com/channel/UC_LumxyJ8qANtNx_p79fFSQ?view_as=subscriber" target="_blank">
				<img src="../src/yt.png" style="margin-left:8px;">
			</a>
		</div>
    </div>
	</div>
	<div>
	</div>
</footer>
    </body>
    </html>