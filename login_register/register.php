<?php
include('conn.php');
session_start();
$data = new Database;
$message = '';
if(isset($_POST['login']))
{
    $field = array(
        'username' => $_POST['username'],
        'password' => $_POST['password'],
        'repassword' => $_POST['repassword'],
        'email' => $_POST['email']
    );
    if($data->required_validation($field))
    {
        if($data->can_register("users", $field))
        {
            $_SESSION['username'] = $_POST['username'];
            header("location: https://localhost/project/login_register/login.php");
        }
        else{
            $message = $data->error;
        }
    }
    else
    {
        $message = $data->error;
    }
}

?>
<link rel="stylesheet" href="http://localhost/project/view/style.css">
<a href="http://localhost/project/main_index.php" class="button">Go back</a>
<div id="panel">
<form method="post">
    <div id="high">
    <img src="http://localhost/project/images/logo.png"></img>  
</div>
<label>Login:</label>
<input type="text" id="username" name="username" class="form-control" />
<label>Password:</label>
<input type="password" name="password" id="password" class="form-control"/>
<label>Repassword:</label>
<input type="password" name="repassword" id="password" class="form-control"/>
<label>Email:</label>
<input type="text" id="email" name="email" class="form-control"/>
<div id="low">
<br/>
<input type="submit" name="login" class="button" value="Register" />
<h4>
------------------------------------------- Zarejestruj się za pomocą  ---------------------------------------
</h4>
<br>
<div class="icons">
<img src="http://localhost/project/images/google.jpg"></img>   

</div>
<div class="icons">
<img src="http://localhost/project/images/android.jpg"></img>   

</div>
<div class="icons">
<img src="http://localhost/project/images/github.jpg"></img>   

</div>
<div class="icons">
<img src="http://localhost/project/images/facebook.png"></img>   

</div>
<div class="login">
<p><a href="https://localhost/project/login_register/login.php">Masz już konto? Zaloguj się<a></p>
</div>
</div>
<?php
if(isset($message))
{
    echo "<p class='text-danger'>$message</p>";
}
?>
</form>
</div>