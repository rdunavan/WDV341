<?php
$password = " ";
$username = "";
if(isset($_POST ['submit'])){
    echo "Form has been submitted";
    $username = $_POST['username'];
    $password = $_POST['password'];

    //connect to the database
    require 'connectPDO.php';
    $sql = "SELECT count (*) FROM event_user WHERE event_user_name = :username AND event_user_password = :pass";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':username',  $username );
    $stmt->bindParam(':password', $password);
    $stmt->execute();
    $rowCount = $stmt->fetchColumn();

    echo "$rowCount and $username  and  $password";
}
else{
    echo "please enter the form data"

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>
    Please login to access your Admin Functions
</h1>
<form method = "post" action = "login.php">
<p>
<label for= "userName">UserName: </label>
<input type = "text" name = "username" id = "username" placeholder = "UserName">

</p>

<p>
<label for= "password">Password: </label>
<input type = "text" name = "password" id = "password" placeholder = "Password">

</p>
<p>
    <input type = "submit" value = "Sign On" name = "submit" id = "submit">
    <input type = "reset">
</p>
</form>
</body>
<?php
}
?>
</html>