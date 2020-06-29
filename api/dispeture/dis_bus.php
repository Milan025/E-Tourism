<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//session_start('a1');
$a="bus";
//setcookie("dis", $a, 0);
//session_commit('a1');
header("Location:http://localhost/E-Tourism/api/index1.php?msg=".$a);
?>