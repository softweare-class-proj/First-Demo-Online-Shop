<?php
echo "<pre>";
print_r($_POST);
echo "</pre>";

function redirect($url)
{
    if (!headers_sent()){
        header("Location: $url");
    }else{
        echo "<script type='text/javascript'>window.location.href='$url'</script>";
        echo "<noscript><meta http-equiv='refresh' content='0;url=$url'/></noscript>";
    }
    exit;
    
    }
    
$servername="localhost";
$username="root";
$pass="";
$db="TestDB";
$connection=new mysqli($servername,$username,$pass,$db);
if($connection->connect_error){
    die("An Error Happened!");
}
else{echo "Success<br>";}
$query="select Username,Password from tblusers where Username='".$_POST['inpUser']. "' and Password='".$_POST['inpPass']."'";
$r=$connection->query($query);
if($r->num_rows>0){
    while($row=$r->fetch_assoc()){
        session_start();
        $_SESSION['userd']=$row['Username'];
        echo "Password: ".$row['Password']." Username: ".$row['Username']."<br>";
    }
    redirect("index.php");
}
else{
    redirect("index.php");
}