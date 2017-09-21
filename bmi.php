<!DOCTYPE html>
<?php error_reporting(0) ?>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <form method="POST" action="">
            <input type="text" id="weight" placeholder="Geef gewicht in kg" name="weight" required>
            <input type="text" id="length" placeholder="Geef lengte in meters" name="length" required>
            <input type="submit" name="calculate" value="Bereken BMI">
        </form>
        
        <?php
        $length = $_POST["length"];
        $weight = $_POST["weight"];
        $bmi = $weight / ($length * $length);
        
        if(isset($_POST["calculate"])){
            echo 'Je BMI is '.number_format($bmi, 2, ',', '');
        }
        
        ?>
    </body>
</html>
