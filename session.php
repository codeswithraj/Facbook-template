<?php
session_start();
$url = "localhost";
$server = "root";
$password = "";
$dbname = "fb";
$conn = mysqli_connect($url, $server, $password, $dbname);
if (!$conn) {
    echo "Database is not connected" ;
}

if(isset($_POST["save"]))
{
    extract($_POST);
    $sql=mysqli_query($conn,"SELECT * FROM fbdata WHERE email='$email' and pass='$pass'");
    $row = mysqli_fetch_array($sql);
    if(is_array($row))
    {
        $_SESSION["id"]=$row["id"];
        $_SESSION["firstname"]=$row["firstname"];
        $_SESSION["lastname"]=$row["lastname"];
        $_SESSION["email"]=$row["email"];
        $_SESSION["pass"]=$row["pass"];
        $_SESSION["pic"]=$row["pic"];
        $_SESSION['IS_LOGIN']='yes';
        $_SESSION['start']=time();
        header("Location:abc.php");

    }
    else{
        echo"Invalid username/password";
    }
}
?>
