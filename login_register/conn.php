<?php
class Database {
    public $con;
    public $error;
    public $count;
    public function __construct()
    {
        try{
            $this->con = new PDO("mysql:host=localhost;dbname=users", "root", "");
            $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $e){
            echo 'cos poszlo nie tak'.$e->getMessage();
        }
    }
    public Function required_validation($field)
    {
    $this->count = 0;
    foreach($field as $k => $v)
    {
        if(empty($v))
        {
            $this->count++;
            $this->error .= "<p>". $k . " is required</p>";

        }
    }
    if($this->count == 0)
    {
        return true;
    }
}
public function can_login($users, $fields)
{
    $login = $fields['username'];
    $password = $fields['password'];
    $stmt = $this->con->prepare("SELECT * FROM $users WHERE uname = :uname AND password = :password" );
    $stmt->bindParam(':uname', $login, PDO::PARAM_STR);
    $stmt->bindParam(':password', $password, PDO::PARAM_STR);
    $stmt->execute();
    if($stmt->rowCount() > 0)
    {
        
        return true;
    }
    else
    {
        $this->error = 'Wrong username or password';  
      }


    }

    public function getUserByEmail($email){
        $stmt = $this->con->prepare("SELECT * FROM users WHERE email=:email");
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->execute();
        if($stmt->rowCount() <= 0){
            return true;
            
        }else{
            return false;
        }
    }


public function can_register($users, $fields)
{
    $email = $fields['email'];
    $login = $fields['username'];
    $password = $fields['password'];
    $repassword = $fields['repassword'];
    if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
    if ($this->getUserByEmail($email)){
    $stmt = $this->con->prepare("INSERT INTO $users values (:uname, :password, '', :email '',3)");
    $stmt->bindParam(':uname', $login, PDO::PARAM_STR);
    $stmt->bindParam(':password', $password, PDO::PARAM_STR);
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    if($password === $repassword){
        $stmt->execute();
        return true;
    }
    else{
        $this->error = 'Passwords are diffrent';
    }
} else{
    $this->error = 'Account is already used';
}
    }else{
        $this->error = 'Wrong email';
    }
    }

public function register($fields)
{   
}
public function checkRoles($login)
{
    $stmt = $this->con->prepare("SELECT roles.role FROM roles JOIN users ON users.role = roles.ID WHERE users.login = :login");
    $stmt->bindParam('login' , $login, PDO::PARAM_STR);
 
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        switch($row['role']) {
            case '1':
                return $_SESSION['admin'] = 'admin';
                break;
            case '2';
                return $_SESSION['editor'] = 'editor';
                break;
            case '3';
            return $_SESSION['user'] = 'user';
                break;
        }
    }
}
}