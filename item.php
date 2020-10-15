<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('sql206.unaux.com', 'unaux_26963682', 'uuz394ycetj8fht1', 'unaux_26963682_havi');
if(isset($_POST['submit']))
{
    if(!empty($_POST['ite']))
    {
        echo "ITEM SUBMITTED SUCCESSFULLY";
    }
}
?>