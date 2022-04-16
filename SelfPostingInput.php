
<?php
session_start();
$input_email = " ";
$input_password = " ";
$passwordErrMsg = " ";
$emailErrMsg = " ";
 $validForm = false;
 if(isset($_POST["submit"]))
	{	
 $input_email = $_POST['input_email'];
 $inPassword = $_POST['input_password'];

    function validateEmail($inEmail)
{
  global $validForm, $EmailErrMsg;	
  $emailErrMsg = "";
  
  if($inEmail == "")
  {
    $validForm = false;
    $EmailErrMsg = "Enter an Email";
  }
}
  
function validatePassword($inPassword)
{
  global $validForm, $passwordErrMsg;	
  $passwordErrMsg = "";
  
  if($inPassword == "")
  {
    $validForm = false;
    $passwordErrMsg = "Enter an Password";
  }
}
validateEmail($input_email );
validatePassword($input_password);
if($validForm){
  $message = "good shot";
  try{
    require "connectPDO.php";
    $sql = "INSERT INTO pit_input(";
				$sql .= "input_email, ";
        $sql .= "input_password, ";
        $sql .= ") VALUES (:email, :password)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':email', $input_email );
        $stmt->bindParam(':password', $input_password);
        $stmt->execute();
        $message = "The input has been registered.";
  }
  catch(PDOException $e)
			{
				$message = "There has been a problem. The system administrator has been contacted. Please try again later.";
	
				error_log($e->getMessage());		
			 error_log(var_dump(debug_backtrace()));
			}
  }
else{
   $message = "Something went wrong";
}
  }
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
  <?php
  if($validForm){
    ?>
     <h1><?php echo $message ?></h1>
     <?php
  }
  else{
    ?>
    <form id="Form" name="Form" method="post" action="SelfPostingInput.php">
<p>
  <label for="input_email">Email: </label> 
  <input type="text" name="input_email" id="input_email" value="<?php echo $input_email;  ?>"/>
  <span class="errMsg"><?php echo $emailErrMsg; ?></span>                
</p>
<p>
  <label for="input_password">Password: </label>  
  <input type="text" name="input_password" id="input_password" value="<?php echo $input_password;  ?>" />
  <span class="errMsg"><?php echo $passwordErrMsg; ?></span>                
</p>
<p>
<input type="submit" name="submit" id="submit" value="Enter" />
<input type="reset" name="button2" id="button2" value="Clear " onClick="clearForm()" />
</p>  
</form>
<?php
  }
   ?>
</body>
</html>