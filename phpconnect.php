 <?php
if(isset($_POST["username"])){
$servername ="localhost";
$username ="root";
$password="";

$con =mysqli_connect($servername,$username,$password);


if(!$con){
    die("connection to this database failed due to".mysqli_connect_error());
}
$username = $_POST["username"] ;
$password = $_POST["password"] ;

$sql="INSERT INTO  `localuser`.`users` (`username`, `password`) VALUES ('$username', '$password');";

echo$sql;

if($con->query($sql) == true){
    // Redirect browser
header("Location:index.html");

exit;
}
else{
    echo "ERROR :$sql <br>  $conn->error ";

}
$con->close();
}
?>


?>
