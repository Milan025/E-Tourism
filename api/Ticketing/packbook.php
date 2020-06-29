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
        include_once '../config/database.php';
        $database = new Database();
        $db = $database->getConnection();
        // instantiate user object
        //echo "sdasd".$_COOKIE["dis"];
        $ckie=$_COOKIE['dis'];
        
        include_once '../objects/package.php';
        $user = new Package($db);
        setcookie("dis", $ckie);
        
        // set user property values
        $un=$_COOKIE['unm'];
        $user->id = $_COOKIE['id'];
        $user->username = $un;
        $user->package_name = $_COOKIE['pack'];
        //$user->destination = strtoupper($_COOKIE['destination']);
        $user->tickets = $_COOKIE['tickets'];
        $user->tripdate = $_COOKIE['date'];
        $user->created = date('Y-m-d H:i:s');
        
        // create the user
        if($user->insertrec()){
            /*$user_arr=array(
                "status" => true,
                "message" => "Successfully inserted!",
                "id" => $user->id,
                "username" => $user->username
            );*/
			setcookie('dis',$_COOKIE['dis'],time()-3600);
         $z="Successfully Booked!";
        }
        else{
            /*$user_arr=array(
                "status" => false,
                "message" => "Username already exists!"
            );*/
         $z="Failed Booking!";
        }
        header("Location:http://localhost/E-Tourism/api/feedback.php?Message=".$z.";".$un);
        //print_r(json_encode($user_arr));
?>
</body>
</html>