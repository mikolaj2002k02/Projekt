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
<div class="forumh">
 

<?php
if (isset($_SESSION['username'])) { ?>
<h1>Witaj na forum użytkowniku <?= $_SESSION['username'] ?> </h1></p>
<a href="https://localhost/project/main_index.php"><button class="buttonf">Powróć na strone główną</button></a>
 <?php
}   else {
    header("location: https://localhost/project/login_register/login.php ");
}
?>
</div>
<div id="clockf">
<button class="buttonc">Napisz nam swój problem</button></a>
<button class="buttonc">Skontaktuj się bezpośrednio z supportem</button></a>
</div>
<div class="questions">
    <h1>Tu bedzie twoja wypowiedz</h2>
</div>
<div class="answers">
    <h1>Tu beda odpowiedzi uzytkownikow</h2>
</div>
<div class="answers">
    <h1>Tu beda odpowiedzi uzytkownikow</h2>
</div>
<div class="answers">
    <h1>Tu beda odpowiedzi uzytkownikow</h2>
</div>
<div class="answers">
    <h1>Tu beda odpowiedzi uzytkownikow</h2>
</div>
<div class="answers">
    <h1>Tu beda odpowiedzi uzytkownikow</h2>
</div>


<script src="https://localhost/project/scripts/script.js"></script>
</thead>
</table>
<body>