<?php
require "check.php";
?>
<!DOCTYPE html>
<html lang="cs">
<link type="text/css" rel="stylesheet" id="dark-mode-general-link">
<link type="text/css" rel="stylesheet" id="dark-mode-custom-link">
<style lang="cz" type="text/css" id="dark-mode-custom-style"></style
<head>
<meta charset="UTF-8">
    <title>„Obchod“</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>

<div class="flex-container">

    <div class="flex-head"><h1>„Obchod“</h1>
    </div>
    <div class="flex-nav"> <a href="login.php">Login   </a></div>

    <div class="flex-section">
        <div>
    <?php if (isset($failed)) { ?>
    <div id="bad-login">Zadali jste špatné údaje.</div>
    <?php } ?>
    <form id="login-form" method="post" target="_self">
      <h1>PLEASE SIGN IN</h1>
      <label for="user">User</label>
      <input type="text" name="user" required/>
      <?php 
     echo "<br>";
?>
      <label for="password">Password</label>
      <input type="password" name="password" required/>
            <?php 
     echo "<br>";
?>
      <input type="submit" value="Sign In"/>
            </form>
        </div>
    </div>
    <div class="flex-foot">
            <p>©0ndra_m_ 2020-<?php echo date("Y");?>
    </div>

</body>
</html>