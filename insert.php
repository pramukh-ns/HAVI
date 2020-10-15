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
    if(!empty($_POST['di']))
    {
        $di=$_POST['di'];
        $query="insert into items(item) values ('$di')";
        $run=mysqli_query($db1,$query);
        if($run)
        echo "ITEM SUBMITTED SUCCESSFULLY";
    }
    else
    echo "All fields required";
}
?>