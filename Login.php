<?php 

$user = "g221210045@gmail.com";
$pass ="g221210045";


$username = $_POST['username'];
$password = $_POST['password'];

$mesaj='<p style="color:red;font-family:tahoma;font-weight:bold;font-size:250%;margin:10%;"> Hoşgeldiniz "  '.' '.' '.$password.' "  </p>';

if($username == "g221210045@gmail.com" && $password == "g221210045")
{
    echo $mesaj;

header("Refresh: 3; url=http://webtek.infinityfreeapp.com/index.html");		
}
else{
    header("location:Login.html");
	
}

?>
