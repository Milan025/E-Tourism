<?php
 
// get database connection
include_once '../config/database.php';
 
// instantiate user object
include_once '../objects/user.php';
 
$database = new Database();
$db = $database->getConnection();
 
$user = new User($db);
 
// set user property values
$user->username = $_POST['username'];
$user->email = $_POST['email'];
$user->password = base64_encode($_POST['password']);
$user->created = date('Y-m-d H:i:s');
 
// create the user
if($user->signup()){
    /*$user_arr=array(
        "status" => true,
        "message" => "Successfully Signup!",
        "id" => $user->id,
        "username" => $user->username,
        "email" => $user->email
    );*/
    //$msg="Login with new Username/Password";
    
    
     $stmt = $user->login();
     if($stmt->rowCount() > 0){
         $row = $stmt->fetch(PDO::FETCH_ASSOC);
         $msg=$_POST['username'];
         $id=$row['id'];
         header("Location:http://localhost/E-Tourism/api/Ticketing/book.php?Message=".$id.";".$msg);
    
     }
}
else{
    /*$user_arr=array(
        "status" => false,
        "message" => "Username already exists!"
    );*/
    $msg="User already exists!";
    header("Location:http://localhost/E-Tourism/api/index1.php?Message=".$msg);
}
//print_r(json_encode($user_arr));
?>