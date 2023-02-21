<?php 
include_once 'connection.php';
if(count($_POST)>0) {
mysqli_query($conn," UPDATE fbdata SET 
    id='".$_POST['id']."', 
    firstname='".$_POST['firstname']."', 
    lastname='".$_POST['lastname']."', 
    contact='".$_POST['contact']."',
    email='".$_POST['email']."',
    pass='".$_POST['pass']. "',
    dob='".$_POST['dob']. "',
    gender='".$_POST['gender']. "',
    pic='".$_Files['pic']. "'

        WHERE id= '".$_GET['id']."'");

$m = header("Location:abc.php");
}
$result = mysqli_query($conn,"SELECT * FROM fbdata WHERE id='".$_GET['id']."'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
	<title>FB Update</title>
	<style>
		* {
  box-sizing: border-box;
  border: none;
  outline: none;
}
.mg {
  margin: 0px auto;
  float: none;
}
.b {
  border: 1px solid red;
}
body {
  background: -webkit-linear-gradient(white, #d3d8e8);
  background: -o-linear-gradient(white, #d3d8e8);
  background: linear-gradient(white, #d3d8e8);
  font-family: sans-serif;
  color: #fff;
  margin: 0px;
}
/*navbar*/
.nav {
  width: 100%;
  height: 82px;
  background: #4867aa;
}
.inner {
  width: 80%;
  height: 100%;
  min-width: 900px;
  max-width: 1200px;
  background: #4867aa;
}
.logo {
  float: left;
  height: 100%;
}
.inner img {
  width: auto;
  height: 80%;
  position: relative;
  top: 10px;
}
.table {
  float: right;
  height: 100%;
  padding: 10px 10px 0px 10px;
  min-width: 320px;
}
.table tr td {
  font-size: 12px;
}
table tr td a:hover {
  text-decoration: underline;
}
a {
  text-decoration: none;
  color: #9cb4d8;
}

#lg {
  padding: 3px;
  border: 1px solid black;
  width: 95%;
}
[value] {
  background: #4267b2;
  border: 1px solid #29487d;
  padding: 3px 6px;
  cursor: pointer;
}
[value]:hover {
  background: #365899;
}
/*main page inner*/
.main {
  color: #000;
  min-width: 900px;
  max-width: 1200px;
  height: 100%;
  color: #000;
  width: 80%;
  position: relative;
  padding: 20px;
}
.left {
  width: 48%;
  float: left;
  padding: 10px;
}
#cimg {
  width: 100%;
}
.right {
  width: 48%;
  float: right;
  padding: 10px;
}
[placeholder] {
  width: 100%;
  font-size: 18px;
  margin-bottom: 10px;
  padding: 10px;
  border-radius: 5px;
  background: #fff;
  border: 1px solid #0000003d;
}
.strong {
  color: #022;
  padding: 5px 10px 5px 1px;
  border-radius: 0px 10px 10px 0px;
  clear: both;
  margin: 0px auto;
  transition: 1s;
}
.strong:hover {
  background: #00005526;
}
aj {
  color: #265aab;
}
[placeholder*="st"] {
  width: 48%;
}
[placeholder="last name"] {
  float: right;
}
.birth * {
  color: #000;
}
.wdth {
  width: 225px;
}
.info_birth {
  font-size: 14px;
}
.pd_birth {
  padding: 8px 10px;
}

.info_birth .wid2 {
  float: left;
  margin-left: 5px;
  width: 100%;
  position: relative;
  top: -15px;
}
#w_a {
  width: 75%;
  cursor: pointer;
  color: #365899;
}
.a_box {
  position: absolute;
}
.a_cont {
  background: #fff;
  background-image: url('https://i.imgur.com/PNiw6aK.png');
  position: relative;
  left: -300px;
  top: -60px;
  width: 300px;
  height: 140px;
  padding: 1px 15px;
  border-radius: 5px;
  font-size: 12px;
  display: none;
}
hr {
  background: #00000026;
  height: 1px;
}
.b_ok {
  background: #4267b2;
  border: 1px solid #29487d;
  color: white;
  cursor: pointer;
  padding: 5px 10px;
  border-radius: 2px;
  margin: 2px;
  float: right;
}
.b_ok:hover {
  background: #365899;
}
.a_box:hover .a_cont {
  display: block;
}
.wid2:hover {
  width: 60%;
}
#male {
  margin-left: 20px;
}
.fs_14 {
  font-size: 12px;
}
.fs_14 a {
  color: green;
}
[value="Update"] {
  background: linear-gradient(#ae559f, #884343);
  background-color: #69a74e;
  box-shadow: inset 0 1px 1px #a4e388;
  border-color: #3b6e22 #3b6e22 #2c5115;
  padding: 10px 20px;
  width: 150px;
  font-size: 16px;
  border-radius: 10px;
}
#cp {
  color: green;
}

	</style>
</head>
<body>
	<!-- navbar -->
	<div class="nav">
		<div class="inner mg">
			<!-- logo area -->
			<div class="logo">
				<img src="https://i.imgur.com/HTTU3R6.png">
			</div>
			<!-- login area -->
			<table class="table">
				<tr>
					<td>Email or Phone</td>
					<td>Password</td>
					<td></td>
				</tr>
				<tr>
					<td><input id="lg"></td>
					<td><input  type="Password" id="lg"></td>
					<td><input type="submit" value="Log in"></td>
				</tr>
				<tr>
					<td></td>
					<td><a href="#">Forgotten account?</a></td>
					<td></td>
				</tr>
			</table>
		</div>
	</div> <!-- end navigation -->
	<!-- main page area -->
	<div class="main mg">
		<div class="left">
			<h3>Facebook helps you connect and share with the people in your life.</h3>
			<img id="cimg" src="https://i.imgur.com/p4acFUi.png">
		</div>
		<!-- signup form -->
		<div class="right">
            <form action="update1.php" method="post" enctype="multipart/form-data">
            <?php if(isset($m))
            { echo $m; } ?>
			<h1>Update</h1>
			<p><strong class="strong">Developed By<aj> Raj Gupta</aj></strong></p>
			<input type="text" name="id" placeholder="id" value="<?php echo $row['id']; ?>">
			<input type="text" name="firstname" placeholder="First name" value="<?php echo $row['firstname']; ?>"/>
			<input type="text" name="lastname" placeholder="last name" value="<?php echo $row['lastname']; ?>"/>
			<input type="text" name="contact" placeholder="Mobile Number" value="<?php echo $row['contact']; ?>"/>
      <input type="text" name="email" placeholder="Email" value="<?php echo $row['email']; ?>"/>
			<input type="password" name="pass" placeholder="New Password" value="<?php echo $row['pass']; ?>"/>
    
			<div class="birth_area"><br>
			<table class="birth">
				<tr>
					<input type="text" name="dob" placeholder="Date of birth" value="<?php echo $row['dob']; ?>"/>
				</tr>
			</table><br>
			</div>
      
			<select name="gender" required placeholder="">
      <optgroup label="Select your gender">
        <option value="Male">Male</option>
        <option value="Female">Female</option>
        <option value="other">Other</option>
      </optgroup>
      </select>
			<label><img src="<?php echo $row['pic']; ?>" height="100px" width="140px"  alt=""><input type="file" name="pic" placeholder="choose an image"  value="<?php echo $row['pic']; ?>"/></label>
			<p class="fs_14">By clicking Sign Up, you agree to our <a href="#">Terms</a>, <a href="">Data Policy</a> and <a href="#">Cookies Policy</a>. You may receive SMS Notifications from us and can opt out any time</p>
			<input type="submit" value="Update" name="save"><hr><br>
		
            </form>
        </div>
	</div>
</body>
</html>
