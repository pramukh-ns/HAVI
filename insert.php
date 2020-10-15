<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db1 = mysqli_connect('sql206.unaux.com', 'unaux_26963682', 'uuz394ycetj8fht1', 'unaux_26963682_havi');
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