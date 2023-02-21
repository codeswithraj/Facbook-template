<?php
include_once "newpage.php";
?>
<?php
include 'connection.php';
$sql = mysqli_query($conn, "SELECT * FROM fbdata WHERE id = '".$_SESSION['id']."'");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/74fecec165.js" crossorigin="anonymous"></script>
    <style>
        * {
  margin: 0;
  padding: 0;
  text-decoration:none;
}

.conters {
  width: 100%;
  height: auto;
  position: sticky;
  position: relative;
}
nav {
  display: flex;
  align-items: center;
  justify-self: space-between;

  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
.nav-left {
  display: flex;
  align-items: center;
  position: relative;
  height: 60px;
}
.nav-left ul li {
  display: inline-block;
}
.logo {
  border-radius: 50px;
  background-color: rgba(0, 0, 0, 0.5);
  background-color: #cbdffa;
  opacity: 1;
}
.logo:hover {
  border: 2px solid black;
  background-color: rgba(0, 0, 0, 0.5);
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
.search {
  border-radius: 10px;
  padding: 6px;
  margin: 10px;
  width: 180px;
}
.midel {
  border-radius: 50px;
  margin-left: 120px;
}
.midel li {
  border-radius: 51px;
  margin: 30px;
}

.right {
  border-radius: 50px;
  margin-left: 120px;
}
.right ul li {
  border-radius: 50px;
  margin: 13px;
}
.main {
  display: flex;
  justify-content: space-between;
  padding: 13px 1%;
}
.left-sidebar {
  top: 70%;
  display: flex;
  flex-basis: 23%;
  position: sticky;
  align-self: flex-start;
  height: 100vh;
}
.main-sidebar {
  height: 100%;
  top: 70%;
  height: 100vh;
  flex-basis: 50%;
  position: sticky;
  align-self: flex-start;
  overflow: scroll;
}
.right-sidebar {
  top: 70%;
  height: 100vh;
  flex-basis: 23%;
  position: sticky;
  align-self: flex-start;
}

.status {
  margin-right: 5px;
  padding-top: 25%;
  background-image: url("https://m.media-amazon.com/images/I/81l5M-lvh8L._SL1500_.jpg");
  background-position: center;
  background-size: cover;
  position: relative;
  float: auto;
  width: 130px;
  height: 35px;
  margin-left: 20px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  width: 120px;
}
.status p {
  text-align: center;

  margin-bottom: 24px;
  padding: 0%;
  margin: -10px 0.5%;
}
.status img {
  align-content: center;
}

.all-status {
  display: flex;
}

.status1 {
  margin-right: 5px;
  padding-top: 25%;
  background-image: url("https://w0.peakpx.com/wallpaper/458/1021/HD-wallpaper-lord-ganesh-dagdusheth-ganpati-bappa.jpg");
  background-position: center;
  background-size: cover;
  position: relative;
  float: auto;
  width: 130px;
  height: 35px;
  margin-left: 20px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  width: 120px;
}
.status2 {
  margin-right: 5px;
  padding-top: 25%;
  background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTokguorVsm0dOntp_WKnYtDJWdzhsiExxFAiEIH9QH-n7EVHdZLmyLTlEuuioD5MznM-A&usqp=CAU");
  background-position: center;
  background-size: cover;
  position: relative;
  float: auto;
  width: 130px;
  height: 35px;
  margin-left: 20px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  width: 120px;
  opacity: 1px;
}

.status3 {
  margin-right: 5px;
  padding-top: 25%;
  background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSt58OUtGOnGlG7iLCzrRrhUZ4rgR_PLlfGqA&usqp=CAU");
  background-position: center;
  background-size: cover;
  position: relative;
  float: auto;
  width: 130px;
  height: 35px;
  margin-left: 20px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  width: 120px;
}
.status:hover,
.status1:hover,
.status2:hover,
.status3:hover {
  width: 130px;
  height: 37px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

.wirt {
  width: auto;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  height: 130px;
  border-radius: 20px;
  margin: 10px;
  position: relative;
  margin-left: 20px;
}
.pf-wirt {
}
.pf-wirt img {
  margin: 10px;
  width: 50px;
  height: 50px;
  border-radius: 50px;
  background-color: rgba(0, 0, 0, 0.5);
  background-color: #cbdffa;
  opacity: 1;
}
.pf-wirt input {
  padding: 10px;
  border-radius: 50px;
  width: 580px;
  margin: 10px;
}
.wirt nav {
  background-color: aliceblue;
}
.visal {
}
.visal img {
  margin: 10px;
  padding: 3px;
}
.visal p {
  margin: 10px;
  font-size: 20px;
}
.visal p:hover {
  background-color: whitesmoke;
  font-size: 30px;
}
.visal img:hover {
  padding: 10px;
}
.left-sidebar {
  overflow: scroll;
}
.list-item {
  width: auto;
  margin: 8px;
}
.list-item nav {
  display: flex;
  align-items: center;
  justify-self: space-between;
  background-color: none;
  box-shadow: none;
  margin: 25x;
}
.list-item nav:hover {
  background: #6e6c6c;
}
.list-item img {
  border-radius: 50px;
  background-color: whitesmoke;
}

.list-item p {
  padding: 10px;
  justify-self: space-between;
  margin: 15px;
}

.list-item image :hover {
  padding: 10px;
  background-color: whitesmoke;
}

.right-sidebar {
  overflow: scroll;
}
.ads {
  margin: 10px;
  font-size: 20px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
.ads img {
  margin: 10px;
}
.ads nav,
.birdth nav {
  box-shadow: none;
  background: none;
}

.birdth {
  margin: 10px;
}
.birdth img {
  margin: 10px;
}
.birdth p {
  margin: 9px;
}
.birdth span {
  font-size: 26px;
}

.contacts nav {
  box-shadow: none;
}
.contacts img {
  border-radius: 50px;
  margin: 10px;
  padding: 3px;
  box-shadow: none;
  background: none;
}
.contacts nav:hover {
  background: #6e6c6c;
}
.card {
  border-radius: 10px;
  height: 400px;
  margin: 22px;

  padding: 8px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
.card img {
  border-radius: 50px;
  margin: 1px;
  padding: 3px;
  box-shadow: none;
  background: none;
}
.card p {
  margin: 9px;
}
.card nav {
  box-shadow: none;
}
.mines{
  text-decoration:none;
  outline: none;
  border: none;
  background: gray;
  padding: 0.8rem 1rem;
  border-radius: 0.4rem;
  font-size: 1.1rem;
  color: #fff;
}
.abhi{
  width:60px;
  height:60px;
  border-radius:50px;
  margin:20px;
}
    </style>
    <title>Document</title>
</head>
<body>
<div class="conters" >
    <nav>
        <div class="nav-left">
        <i class="fa-brands fa-facebook" style="font-size:4vh;color:#1877f2;margin-left:5px"></i>
            <input type="text" placeholder="search" class="search">
            <div class="nav-med">
                <div class="midel">
            <ul>
                <li><img src="https://images.pexels.com/photos/2055236/pexels-photo-2055236.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" width="40px" height="40px" class="logo"></li>
                <li><img src="https://images.pexels.com/photos/2055236/pexels-photo-2055236.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" width="40px" height="40px" class="logo"></li>
                <li><img src="https://images.pexels.com/photos/2055236/pexels-photo-2055236.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" width="40px" height="40px" class="logo"></li>
                <li><img src="https://images.pexels.com/photos/2055236/pexels-photo-2055236.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" width="40px" height="40px" class="logo" ></li>
                <li><img src="https://images.pexels.com/photos/2055236/pexels-photo-2055236.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" width="40px" height="40px" class="logo"></li>
                  </ul>
        </div>
        </div>
        <div class="nav-right">
            <div class="right">
        <ul>
            <li><img src="https://images.pexels.com/photos/2055236/pexels-photo-2055236.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" width="40px" height="40px" class="logo"></li>
            
            <li><img src="https://images.pexels.com/photos/2055236/pexels-photo-2055236.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" width="40px" height="40px" class="logo"></li>
            <li><img src="https://images.pexels.com/photos/2055236/pexels-photo-2055236.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" width="40px" height="40px" class="logo"></li>
            <li><img src="https://images.pexels.com/photos/2055236/pexels-photo-2055236.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" width="40px" height="40px" class="logo"></li>
            <li><img src="https://images.pexels.com/photos/2055236/pexels-photo-2055236.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" width="40px" height="40px" class="logo"></li>      
        </ul>
    </div>
    </div>
            </div>
        </nav>
        
</div>
<div class="main">
<div class="left-sidebar">
    
        <div class="list-item">
            <nav >
            <img src="https://images.pexels.com/photos/2055236/pexels-photo-2055236.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" width="40px" height="40px">
        <p>Dasarir Ganesh</p>
            </nav>
            <nav>
            <img src="https://images.pexels.com/photos/2055236/pexels-photo-2055236.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" width="40px" height="40px">
        <p>Friends</p>
            </nav>
            <nav>
            <img src="https://images.pexels.com/photos/2055236/pexels-photo-2055236.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" width="40px" height="40px">
                <p>Groups</p>
                    </nav>
                    <nav>
                    <img src="https://images.pexels.com/photos/2055236/pexels-photo-2055236.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" width="40px" height="40px">
                <p>Marketplace</p>
                    </nav>
                    <nav>
                    <img src="https://images.pexels.com/photos/2055236/pexels-photo-2055236.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" width="40px" height="40px">
                    <p>Watch</p>
                        </nav>
                        <nav>
                        <img src="https://images.pexels.com/photos/2055236/pexels-photo-2055236.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" width="40px" height="40px">
                        <p>Memories</p>
                            </nav>
                            <nav>
                            <img src="https://images.pexels.com/photos/2055236/pexels-photo-2055236.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" width="40px" height="40px">
                            <p>save</p>
                                </nav>
                                <nav>
                                <img src="https://images.pexels.com/photos/2055236/pexels-photo-2055236.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" width="40px" height="40px">
                                <p>Pageh</p>
                                    </nav>
                                    <nav>
            <nav>
                                        <img src="https://images.pexels.com/photos/2055236/pexels-photo-2055236.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" width="40px" height="40px">
                                        <p>Favourites</p>
                                            </nav>

                    
                        

    </div>
   
       






    
</div>
<div class="main-sidebar"> <div class=" all-status">
<div class="status" >
 <img class="logo"  src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSH8qJjb5Aavhbh4DzzkJIjA7_K2OHZ1zZ7H3RJzxgD2yCRUPNispZGZ5a8thO3q4xzeFo&usqp=CAU" width="30px" height="30px" background-position="center" >
 <p style="font-size: 2vh;color:#1877f2"> Create story</p>
    </div>
    <div class="status1" >
    <img class="logo"  src="https://images.pexels.com/photos/2055236/pexels-photo-2055236.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" width="30px" height="30px" background-position="center" >
   
   </div>
   <div class="status2" >
    <img class="logo"  src="https://images.pexels.com/photos/2055236/pexels-photo-2055236.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" width="30px" height="30px" background-position="center" >
    
   </div>
   <div class="status3" >
    <img class="logo"  src="https://images.pexels.com/photos/2055236/pexels-photo-2055236.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" width="30px" height="30px" background-position="center" >
    
   </div>
  
</div>

<div class="wirt">
<div class="pf-wirt">
    <nav >
    <img src="https://images.pexels.com/photos/2055236/pexels-photo-2055236.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500">
    <input type="text" placeholder="What s on your mind,Dasarir">
    </nav>
    <div class=" visal">
<nav>
<i class="fa-regular fa-image" style="font-size:3vh;color:#1877f2"></i>
    <p>Live video</p>
    <i class="fa-solid fa-video" style="font-size:3vh;margin-right:5px;color:#1877f2"></i><i class="fa-regular fa-image" style="font-size:3vh;color:#1877f2"></i><p>Photo/Videos</p>
    <i class="fa-solid fa-face-smile" style="font-size:3vh;color:#1877f2"></i><p>Feeling/Action</p>
</nav>
    </div>
</div>
</div>
    <div class="card" >
        
        <nav>
        <i class="fa-brands fa-youtube" style="color:red;font-size:4vh"></i>
            <p>Youtube</p>
            </nav>
            <p>Tom and Jerry - Push-Button Kitty
                <div class="">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/E9tW8i9eq5c?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </p>


    </div>




</div>


<div class="right-sidebar">

    <div class="ads" >
        <p class="s">Sponsored</p>
        <nav>
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSH8qJjb5Aavhbh4DzzkJIjA7_K2OHZ1zZ7H3RJzxgD2yCRUPNispZGZ5a8thO3q4xzeFo&usqp=CAU" width="130px" height="130px">
            <p>Amzom <br>
                Amazon Brand 
                ₹ 4,040.00 <br>
                <a href="#">Amzom.com</a>
            </p>
         </nav><hr>
         <nav>
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSH8qJjb5Aavhbh4DzzkJIjA7_K2OHZ1zZ7H3RJzxgD2yCRUPNispZGZ5a8thO3q4xzeFo&usqp=CAU" width="130px" height="130px">
            <p>Lenskard<br>
                Blue Block Phone
                ₹ 2,040.00 <br>
                <a href="#">Lenskard.com</a>
            </p>
         </nav><hr>
    </div>
        <div class="birdth">
            <span>Birthday</span>
            <nav>
                
            <i class="fa-solid fa-cake-candles" style="color:red"></i>
            <p>Pavan  birthday is today</p>
            </nav>
            
        </div> <hr>
    <div class="Contacts">
        <h1>Contacts</h1>
        <?php
        $i= 0;
        while($row = mysqli_fetch_array($sql))
    {
    ?>
        <nav> 
        <img src="<?php echo $row["pic"];  ?>"  alt="image" class="abhi" >
        <h4> 
            <?php 
             echo $_SESSION["firstname"]."&nbsp"
            .$_SESSION["lastname"];?>
        </h4>
        </nav>
        <nav>
       
    <a href="update.php ?id=<?php echo $row["id"]; ?>" class="mines">Edit</a>
    <?php
    $i++;
    }
    ?>
        </nav>
        <nav>
        <h5 class="mines"><?php echo "<a href='logout.php'>Log out</a>";?> </h5>
        </nav>
    </div>
</div>
</div>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script>
    setInterval(function(){
   check_user();
   },2000);

  function check_user(){
 jQuery.ajax({
  url:'newpage.php',
  type:'post',
  data:'type=ajax',
  success:function(result){
    if(result=='logout'){window.location.href='logout.php';}}});
 }

</script>

</body>
</html>