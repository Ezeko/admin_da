<?php  //Start the Session
session_start();
 require('connect.php');
//Check If the form is submitted or not.
//Check If the form is submitted
if (isset($_POST["username"]) and isset($_POST["Password"])){


//Assigning posted values to variables.
$username = $_POST["username"];
$password = $_POST["Password"];
$usrname = strtoupper($username);


//Checking the values are existing in the database or not
$query = "SELECT * FROM `users` WHERE username='$username' and password='$password'";
 
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
$count = mysqli_num_rows($result);
//If the posted values are equal to the database values, then session will be created for the user.
if ($count == 1){
$_SESSION['loggedin'] = true;
$_SESSION['username'] = $username;

}else{
// If the login credentials doesn't match, he will be shown with an error message.
echo  "<script>alert('Invalid Login Credentials.!!!'); window.location.replace('login.php');</script>";
}
}
//
if (isset($_SESSION['username'])){
$username = $_SESSION['username'];
//echo "Welcome, " . strtoupper($username);
//echo "<a href='logout.php'> Log out</a>";
header ("location: http://startdown.dx.am/dashboard.php");



}
 
else{
// When the user visits the page first time, simple login form will be displayed.

}
?>