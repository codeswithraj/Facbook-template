<?php
$server = "localhost";
$user = "root";
$password = "";
$dbname = "fb";

$conn =mysqli_connect($server,$user,$password,$dbname);

$id =$_POST["id"];
$firstname =$_POST["firstname"];
$lastname =$_POST["lastname"];
$contact =$_POST["contact"];
$email =$_POST["email"];
$pass =$_POST["pass"];
$dob =$_POST["dob"];
$gender =$_POST["gender"];
$files= $_FILES['pic'];

$filename=$files['name'];
$fileerror=$files['error'];
$filetmp=$files['tmp_name'];

$fileext=explode('.',$filename);
$filecheck=strtolower(end($fileext));
$fileextstored=array('png','jpg','jpeg');

if(in_array($filecheck,$fileextstored)){

    $destinationfile='upload/'.$filename;
    move_uploaded_file($filetmp,$destinationfile);

    $row= "INSERT INTO fbdata VALUES('$id','$firstname','$lastname','$contact','$email','$pass','$dob','$gender','$destinationfile')";
    $result=mysqli_query($conn,$row);

    if($result){
        header ("Location:home.php");
    }
}

?>