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
<?php
        error_reporting(0);
        // add form data processing code here
        //echo  '<strong>Verification successful.</strong>';
        //error_reporting(0);
        // get database connection
        include_once './config/database.php';
        $database = new Database();
        $db = $database->getConnection();
        // instantiate user object
        //echo "sdasd".$_COOKIE["dis"];
      
            include_once './objects/feedback.php';
            $user = new Feedback($db);
  
          // set user property values
        $user->service = $_COOKIE['dis'];
        $user->username = $_COOKIE['unm'];
        $user->star = $_POST['star'];
        $user->discription = $_POST['text'];
        $user->file = $_FILES["myFile"]["name"];
        $user->created = date('Y-m-d H:i:s');

        // create the user
        if($user->insertrec()){
            
            
          if(!empty($_FILES["myFile"]["name"]))
	{
		$target_location="../uploads/".basename($_FILES["myFile"]["name"]);
                
		if(! (move_uploaded_file($_FILES["myFile"]["tmp_name"], $target_location)))
			echo "Error: " . $_FILES["myFile"]["error"] . "<br>";
		else
		{
		       $ext = pathinfo($target_location, PATHINFO_EXTENSION);       
		}
	}  
            
         $z="Successfully Submited!";
        }
        else{
            $z="Failed Submit!";
        }
         //header("Location:http://localhost/E-Tourism/feedback.php?msg1=".$z);            
        //print_r(json_encode($user_arr));

echo '<script>alert("Your Review has been Submited Successfully!!!");window.location.href="http://localhost/E-Tourism/index.php";</script>';
//header("Location:http://localhost/E-Tourism/index.php");
?>
            <form action="index.php">
                 <div class="buttn">
                        <center>
                            <button class="button button2" id="btclr" style="color: black" type="submit"><span>Home</span></button>						
						</center>
                 </div>
             </form>
    <br><br><br><br>
    <br><br><br><br>
    <br><br><br><br>

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