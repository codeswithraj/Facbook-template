<?php
session_start();
if(isset($_POST['type']) && ($_POST['type']=='ajax'))
{
    if((time() - $_SESSION['LAST_ACTIVE_TIME'] )> 20 )
    {
        echo "logout";
    }
}
else{
    
    if (isset($_SESSION['LAST_ACTIVE_TIME'])) 
    {
        if((time() - $_SESSION['LAST_ACTIVE_TIME'] )> 20 )
        {
            header("Location:logout.php");
            die();
        }
  
    }
    $_SESSION['LAST_ACTIVE_TIME']=time();
   
        if(!isset($_SESSION['IS_LOGIN']))
        {
            header("Location:home.php");
            die();
        } 
    }  
?>