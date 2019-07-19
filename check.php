<?php if(!(isset($_SESSION['loggedin'])) or $_SESSION['username'] == ""){
  header('refresh:2; url=login.php');
        
        die('NOT AN ACTIVE USER !!!!');} 
        
        
        $username=$_SESSION['username'];
        
        
        $sql="SELECT * FROM `notifications` WHERE payer_username='$username' and level='Z'";
        $query= mysqli_query($conn, $sql) or die(mysqli_error($conn));
        $count= mysqli_num_rows($query);
        if ($count>0){
        
        echo "<script>alert('TIME OF PAYMENT ELAPSED!!! KINDLY MESSAGE SUPPORT IF YOU HAVE MADE PAYMENT BEFORE TIME ELAPSED'); 
        window.location.replace('index.php');
        </script>";
        }
        
        
        $che= "SELECT * FROM `notifications` WHERE payer_username='$username'";
        $res= mysqli_query($conn, $sql) or die(mysqli_error($conn));
        $count= mysqli_num_rows($res);
        $row= mysqli_fetch_assoc($res);
        $time = $row['time'] + 6*60*60;
        $now= date("h:i");
        while ($count>0){
        if ($now>=$time){
        $sql ="UPDATE `notifications` SET level='Z' WHERE payer_username='$username'";
        echo "<script>alert('TIME OF PAYMENT ELAPSED!!! KINDLY MESSAGE SUPPORT IF YOU HAVE MADE PAYMENT BEFORE TIME ELAPSED'); 
        window.location.replace('index.php');
        </script>";
        }}
        ?>