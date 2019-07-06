<!DOCTYPE html>
<html>
    
<head>
    <title>Register Page</title>
</head>

<body>
    <!--Those are learned from week5 Self Study materials online -->
<?php
include ("session.php");
include ("db_conn.php");

$username=$_POST["username"];
$account_type=$_POST["account_type"];
$password=$_POST["password"];
$email=$_POST["email"];
$mobile=$_POST["mobile"];
$gender=$_POST["gender"];
$encrypt_password=MD5($password);
    
$sql_u = "SELECT * from users WHERE username = '$username'";
$res_u = mysqli_query($mysqli, $sql_u);
    
    if(mysqli_num_rows($res_u) > 0){
        echo "Sorry... username already taken";
    }else {
        
        $accountnumber=(mt_rand(10000000,99999999));
        $sql_b = "SELECT * from users WHERE accountnumber = $accountnumber";  
        $res_b = mysqli_query($mysqli, $sql_b);
        while (mysqli_num_rows($res_b) > 0){ 
        $accountnumber=(mt_rand(10000000,99999999));}
        
        $bsb=(mt_rand(100000,999999));
        $sql_s = "SELECT * from users WHERE bsb = $bsb";  
        $res_s = mysqli_query($mysqli, $sql_s);
        while (mysqli_num_rows($res_s) > 0){ 
        $bsb=(mt_rand(100000,999999));}
                      
        $query = "INSERT INTO users (username, account_type, password, accountnumber, bsb, balance, email, mobile, gender, access) VALUES ('$username', '$account_type', '$encrypt_password', '$accountnumber', '$bsb', 1000000, '$email', '$mobile', '$gender', 2)";
        
    }


if ($mysqli->query($query) === TRUE) {
    echo "You have successfully registered your account<br>";
    
    echo "Username:" . $username . "<br>";
    echo "Account type:" . $account_type . "<br>";
    echo "Password:" . $password . "<br>";
    echo "BSB number:" . $bsb . "<br>";
    echo "Your original account balance: " . 1000000 . "<br>";
    echo "Account number:" . $accountnumber . "<br>";
    echo "Email:" . $email . "<br>";
    echo "Mobile:" . $mobile . "<br>";
    echo "Gender:" . $gender . "<br>";
    echo "After 5 seconds, it will jump to account page.";
    $_SESSION['session_user']=$username;
    $_SESSION['session_id']=$accountnumber;
    $_SESSION['session_bsb']=$bsb;
    $_SESSION['session_type']=$account_type;
    
    header("refresh:5;url=UserProfile.php");

  } else {
    echo "Error:" . $query . "<br>" . $mysqli->error;
}    
$mysqli->close();
?>
    </body>
</html>
