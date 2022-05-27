<?php

$host = 'ec2-34-231-177-125.compute-1.amazonaws.com';
$port = '5432';
$user = 'shcelwopgbqvzm'; 
$password = 'a057ab28fbda56efb83c23e75ed7de6f75d825e03edad047a61bbb7b2274d725';
$db   = 'da603ep3gnn6sf';

$connection = pg_connect("host=$host port =$port dbname=$db user=$user password=$password");
session_start();

if($connection){
    
}else{
    
}