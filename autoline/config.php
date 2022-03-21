<?php

session_start();
global $conn ;
$conn = mysqli_connect('localhost','root','', 'autolinefdb');
$con = mysqli_connect('localhost','root');
mysqli_select_db($con,'autolinefdb');
if(mysqli_connect_error())
{
    die("DB Connection Failed");
}
