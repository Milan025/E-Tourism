<?php
                      error_reporting(0);
                      //session_start();
                      //session_start('sid');
                      if($_POST['username']!=NULL && $_POST['password']!=NULL){

                        $unm=$_POST['username'];
                        $pw=$_POST['password'];
                        $x=0;
                        try{
                            $dbhandler = new PDO('mysql:host=127.0.0.1;dbname=e-tourism','root','');
                            //echo "Connection is established...<br/>";
                            $dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                            $query=$dbhandler->query("select * from admin where username='".$unm."' and password='".$pw."'");
                            //$r=$query->fetch();
                            $r=$query->fetch(PDO::FETCH_NUM);
                            if($r[0]==$unm && $r[1]==$pw){
                                 //setcookie('adminnm', $r[0]);
                                 header("Location:http://localhost/E-Tourism/adminview.php?a=".$unm);
                            }
                            else{
                                $m1="Invalid Username/Password!!";
                                header("Location:http://localhost/E-Tourism/admin.php?msg=".$m1);
                            }        
                            
                        }
                        catch(PDOException $e){
                                echo $e->getMessage();
                                die();
                        }
                      }
                ?>