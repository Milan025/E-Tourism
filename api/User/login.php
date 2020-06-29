<?php
// include database and object files

        include_once '../config/database.php';
        include_once '../objects/user.php';
        error_reporting(0);
        // get database connection
        $database = new Database();
        $db = $database->getConnection();

        // prepare user object
        $user = new User($db);
        // set ID property of user to be edited
        $user->username = isset($_GET['username']) ? $_GET['username'] : die();
        $user->password = base64_encode(isset($_GET['password']) ? $_GET['password'] : die());
        // read the details of user to be edited
        $stmt = $user->login();
        if($stmt->rowCount() > 0){
            // get retrieved row
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            
            try{
                            $dbhandler = new PDO('mysql:host=127.0.0.1;dbname=e-tourism','root','');
                            //echo "Connection is established...<br/>";
                            $dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                            $query=$dbhandler->query("select * from users where username='".$unm."'");
                            $r=$query->fetch(PDO::FETCH_NUM);
                            setcookie('uid', $r[0]);
                        }
                        catch(PDOException $e){
                                echo $e->getMessage();
                                die();
                        }
            
            $msg=$user->username;
            $id=$row['id'];
			$str=$msg.";".$id;
			setcookie('unm',$msg,0);
//			setcookie("pass", $user->password, 0);
            if($_COOKIE['dis']=='feed')
                    header("Location:http://localhost/E-Tourism/api/feedback.php?Message=".$id.";".$msg);
            elseif($_COOKIE['dis']=='package')
                header("Location:http://localhost/E-Tourism/api/Ticketing/packagelist.php?Message=".$id.";".$msg);
            else
                    header("Location:http://localhost/E-Tourism/api/Ticketing/book.php?Message=".$id.";".$msg);
        }
        else{
           /* $user_arr=array(
                "status" => false,
                "message" => "Invalid Username or Password!",
            );*/

            $msg="Invalid Username/Password";
            header("Location:http://localhost/E-Tourism/api/index1.php?Message=".$msg);
        }
        // make it json format
        //print_r(json_encode($user_arr));

?>