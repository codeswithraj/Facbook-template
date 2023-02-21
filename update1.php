<?php
include_once 'connection.php';
if(isset($_POST['save'])){
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

    mysqli_query($conn,"UPDATE `fbdata` SET `id`='$id',`firstname`='$firstname',`lastname`='$lastname',`contact`='$contact',`email`='$email',`pass`='$pass',`dob`='$dob',`gender`='$gender',`pic`='$destinationfile' WHERE id= $id");
    header ("Location:abc.php");
}
}
?>