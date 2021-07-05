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
        <?php
        require_once 'student.php';
        require_once 'studenti/ionescu.php';
        require_once 'studenti/popescu.php';
        $popescu=new Popescu();
        $popescu->display();
        echo "</br>";
        $popescu->show_nume();
        $popescu->set_prenume("Bogdan");
        echo " ";
        $popescu->show_prenume();
        echo "<br/>";
        $ionescu=new Ionescu();
        
        $ionescu->set_prenume("Razvan");
        echo " ";
        $ionescu->show_prenume();
        echo "<br/>";
        //$stud=new Student();
        ?>
    </body>
</html>
