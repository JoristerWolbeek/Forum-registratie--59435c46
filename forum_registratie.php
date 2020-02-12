<?php
session_start();
?>

<style>
html{
    font-family: "Comic Sans MS", cursive, sans-serif
}

span{
    font-size:larger;
}

</style>

<html>
    <h1>Forum Registratie</h1>
    <form method="post" action="registratie_handler.php">
        <input type="text" name="username" placeholder="Your Username" required></input><span>Username</span><br>
        <input type="text" name="email" placeholder="Your Email" required></input><span>Email</span><br>
        <input type="number" name="age" placeholder="Your Age" required></input><span>Age</span><br>
        <input type="submit" name="submit" value="Submit"></input><br>
    </form>
</html>
<?php




