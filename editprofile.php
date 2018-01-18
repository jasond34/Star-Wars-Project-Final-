 <?php
 session_start();
include_once 'dbconnect.php';
include_once 'profile.php'

$sql = mysql_query("SELECT * FROM users WHERE user_id='$_SESSION['USERID']' LIMIT 1");
while($row = mysql_fetch_assoc($sql)){
    $email = $row[email];
    //--repeat for each field you want to edit
}
{
 header("Location: profile.php");
}
?>
 