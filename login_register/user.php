
<body onload="counting();">
<link rel="stylesheet" href="http://localhost/project/view/style.css">
<?php
session_start();
require_once('conn.php');
$data = new Database();
if(!isset($_SESSION['username']));
if($data->checkRoles($_SESSION['username']))
{
    header("location: https://localhost/project/login_register/login.php");
}
?>

<div class="userh">

<p><a href="">twoje zamówienia</a></p>
<p><input type="text" placeholder="Wyszukaj zamowienia" name="search"></p>

<div class="userh-content">
<p><a href="">złóż zamówienie</a></p>
</div>
 
 <a href="https://localhost/project/main_index.php"><button class="buttonu">Wyloguj</button></a>
<?php
if (isset($_SESSION['username'])) { ?>
<p><a class="login"><?= $_SESSION['username'] ?> </a></p>

 <?php
}   else {
    header("location: https://localhost/project/login_register/login.php ");
}
?>
</div>
<div id="clock">


</div>
<div class="termins">
    
    <div class="termins-content">
        <p>Termin 1 </p>
        <p>Wymiana kol</p>
        <p>Status</p>
        <a href="https://localhost/project/main_index.php"><button class="buttont">Weź zlecenie</button></a>
</div>
<div class="termins-content">
<p>Termin 2 </p>
<p>Naprawa</p>
<p>Status</p>
<a href="https://localhost/project/main_index.php"><button class="buttont">Weź zlecenie</button></a>
</div>
<div class="termins-content">
<p>Termin 3 </p>
<p>Wymiana oleju</p>
<p>Status</p>
<a href="https://localhost/project/main_index.php"><button class="buttont">Weź zlecenie</button></a>
</div>
<div class="termins-content">
<p>Termin 4 </p>
<p>Czyszczenie</p>
<p>Status</p>
<a href="https://localhost/project/main_index.php"><button class="buttont">Weź zlecenie</button></a>
</div>
</div>



<script src="https://localhost/project/scripts/script.js"></script>
</thead>
</table>
<body>