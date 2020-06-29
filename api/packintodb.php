<html>
<head>
	<title>Booking</title>
</head>
<body>
<?php
     // add form data processing code here
     //echo  '<strong>Verification successful.</strong>';
        //error_reporting(0);
        // get database connection
        include_once './config/database.php';
        $database = new Database();
        $db = $database->getConnection();
        // instantiate user object
        //echo "sdasd".$_COOKIE["dis"];
        
      
            include_once './objects/addpackclass.php';
            $user = new Addpackclass($db);
        
        // set user property values
        $user->title =$_POST['title'];
        $user->description = $_POST['text'];
        $user->price = $_POST['price'];
        $user->days = $_POST['days'];
        
        // create the user
        if($user->insertrec()){
            /*$user_arr=array(
                "status" => true,
                "message" => "Successfully inserted!",
                "id" => $user->id,
                "username" => $user->username
            );*/
         $z="Package Successfully Added!";
        }
        else{
            /*$user_arr=array(
                "status" => false,
                "message" => "Username already exists!"
            );*/
         $z="Failed Adding Package!";
        }
        header("Location:http://localhost/E-Tourism/adminview.php?msg=".$z);
        //print_r(json_encode($user_arr));
?>
</body>
</html>