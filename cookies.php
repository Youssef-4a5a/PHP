<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php if(!isset($_COOKIE["Monster"])){ ?>
        Maak een cookie aan.
        <form method="POST" action="">
            <input type="submit" name="submit" value="acepteer"/>
        </form>
        <?php } if(isset($_POST["submit"])){
        setcookie("Monster", "true"); } ?>
    </body>
</html>
