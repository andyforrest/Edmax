<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php

$link = mysqli_connect('localhost','HNDSOFTSA16','GdPZUFCJ6V','HNDSOFTSA1');

if(!$link){

die('Could not connect to MySQL: ' .mysqli_error());

}
echo 'Connection OK';
?>

