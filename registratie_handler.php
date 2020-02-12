<?php
session_start();
?>

<html>
    <h1>Forum Registratie</h1>

 
</html>

<?php
if(isset($_POST["email"]) && isset($_POST["username"]) && isset($_POST["age"])){
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        echo($_POST['email'] . " is not a valid email address");
        exit();
    }    
    echo("<h2>Uw Email is: " . $_POST['email'])."</h2><br>";
    echo("<h2>Uw gebrukersnaam is: " . $_POST['username']) . "</h2><br>";
    echo("<h2>Uw leeftijd is: " . $_POST['age']) . "</h2><br>";
}

