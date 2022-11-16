<?php
$name =$email = $password = "";
$name_error =$email_error = $password_error = "";

function cleanup(string $data){

    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function checkEmpty($data, &$error_str){
    if (empty($data)){
        $error_str = "this input is required";
    }
}

function DisplayError($error){
    echo "<br><span style='color:red; font-size: 12px'>$error</span>";
}


if ($_SERVER['REQUEST_METHOD'] == "POST"){

    //assign post data to  variables after cleanup
 $name = cleanup($_POST['name']);
 $email = cleanup($_POST['email']);
 $password= cleanup($_POST['password']);

    //check if name is empty
    checkEmpty($name, $name_error);
     //check if email is empty
    checkEmpty($email, $email_error);
     //check if password is empty
    checkEmpty($password, $password_error);

     
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method='post'>
        <label for="name">name</label>
        <br>
        <input type="text" name="name" id="name" >
        <?php echo isset($name_error) && !empty($name_error) ?DisplayError($name_error) :''; ?>
        <br><br>
        <label for="email">email</label>
        <br>
        <input type="email" name="email" id="email" >
        <?php echo isset($email_error) && !empty($email_error) ?DisplayError($email_error) :''; ?>
        <br><br>
        <label for="password">password</label>
        <br>
        <input type="password" name="password" id="password" >
        <?php echo isset($password_error) && !empty($password_error) ?DisplayError($password_error) :''; ?>
        <br><br>
        <input type="submit"  value="Register">
    </form>
    
</body>
</html>