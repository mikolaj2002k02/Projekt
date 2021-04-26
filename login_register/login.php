<?php
include('conn.php');
session_start();
$data = new Database;
$message = '';
if(isset($_POST['login']))
{
    $field = array(
        'username' => $_POST['username'],
        'password' => $_POST['password']
    );
    if($data->required_validation($field))
    {
        if($data->can_login("users", $field))
        {
            $_SESSION['username'] = $_POST['username'];
            header("location: https://localhost/project/login_register/user.php");
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
 <div id="high">
 <img src="http://localhost/project/images/logo2.png"></img>   
</div>
<form method="post">
<label>Login</label>
<input type="text" id="username" name="username" class="form-control" />
<label>Password</label>
<input type="password" name="password" id="password" class="form-control"/>
<div id="low">
<br />
<input type="submit" name="login" class="button" value="Login" />
</div>
<h4>
---------------------------------------------- Zaloguj się za pomocą  -----------------------------------------
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
<div id="clear"></div>
<div class="register">
<a href="https://localhost/project/login_register/register.php">Stworz darmowe konto<a>
</div>
<div class="support">
    <p>
<a href="https://localhost/project/login_register/forum.php">Nie potrafisz sie zalogowac?<a>
</p>
</div>

</form>
<?php
if(isset($message))
{
    echo "<p class='text-danger'>$message</p>";
}
?>
</div>
</div>
