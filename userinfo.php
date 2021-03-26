<?php
$con = mysqli_connect('localhost','root');
if($con){
    echo "Connection successful";
}
else{
    echo "Connection unsucceful";
}
mysqli_select_db($con, 'youtubeuserdata');
$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comments = $_POST['comments'];

$query = "insert into userinfo (user, email, mobile, comment)
values ('$user','$email','$mobile','$comments')";
echo "$query";
mysqli_query($con,$query);
header('location:index.php');

?>