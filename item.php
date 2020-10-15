<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db1 = mysqli_connect('localhost', 'root', '', 'havi');
if(isset($_POST['submit']))
{
    if(!empty($_POST['ite']))
    {
        echo "ITEM SUBMITTED SUCCESSFULLY";
    }
}
?>