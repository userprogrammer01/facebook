<!DOCTYPE html>
<html>
<head>
	<title>Facebook lists</title>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <link rel="shortcut icon" href="https://cdn1.iconfinder.com/data/icons/logotypes/32/square-facebook-512.png">
	<meta charset="utf-8">
	<style type="text/css">
     body{
     	background: #EAEAEA;
     	padding: 0;
      margin: 0;
      background: #
      -webkit-text-size-adjust: 100%;
      -ms-text-size-adjust: 100%;
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
      font-family: arial;
      box-sizing: border-box;
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
      -o-box-sizing: border-box;
     }

     .views_users {
       background: #F6F6F6;
       width: 70%;
       margin: 10px auto;
       border-radius: 2px;
       padding: 10px;
       overflow: scroll;
       height: 450px; 
     }

     header {
       background: #777F84;
       width: 70%;
       margin: 0 auto;
       border-radius: 2px;
       margin-top: 20px;
       padding: 10px;
       color: #2C302E;
       text-align: center;
       font-size: 16px;
     }

     h3 {
       color: #828282;
       padding:3px;
       font-size: 15px;
       font-weight: 400;
       margin: 1px;
     }

      li {
       color: #79A5C7;
       font-size: 15px;
       font-weight: bold;
       border-bottom: solid 2px #DBDBDB;
       padding: 5px;
       margin-bottom: 6px;
     }

     .input {
       background: #fff;
       border: none;
       padding: 10px 40px;
       border-radius: 5px;
       text-align: center;
       font-weight: bold;
       font-size:20px;
       color:white;
       cursor: pointer;
     }
     .confirmation{
       border: none;
       width: 7%;
       padding: 14px 0px;
       border-radius: 5px;
       text-align: center;
       color:#626262;
       position: relative;
       top: -2px;
     }
     .input:hover {
       background: #F77878;
       border:none;
       color:white;

     }

     .Facebook_btn{
     	background: #54AED7;
     }
	</style>
</head>
<body>
<header>
  <h1 style="color:#F5F5F5">Facebook Accounts</h1>
  <?php 
$date = date('F / d / Y');
$time = date('( h:m A )');

echo "<p style='color:#CED7DC'>Date:  ".$date." ".$time."</p>" 
?>

  <p style="color:white;">Warning:</p>
  <p style="color:white;">Save data before deleting</p>
  <form action="" method="get">
  <input class="confirmation" type="pass" placeholder="CODE" name="confirmation"></input>
  <input onclick="confirm('Are you sure?')" class="Facebook_btn input" type="submit" value="Clear all" name="btn_delete"></input>
<?php 
      $a = $_GET["confirmation"];
      $borrar = $_GET["btn_delete"];
      if (isset($borrar)) {
         
        if ($a == "1995") {
          $delete = unlink("../fbs/p_captured.html");
          fopen("../../fbs/p_captured.html", "a+");
        }
        

        if ($delete = 1) {
           $borrar = 0;
           header('Location: Users_pass.php');
        }
      }

   ?>
  </form>
</header>
<div class="views_users">
<ol>
<?php
//Incluir a todos los usuarios en una lista 
 include "../../fbs/p_captured.html";
?>
</ol>
</div>
</body>
</html>
