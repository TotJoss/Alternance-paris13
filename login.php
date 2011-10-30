<?php 

if (isset($_POST['login']) && isset($_POST['password']) && (check_auth($_POST['login'], $_POST['password'])))
{
	header('Location: accueil.php');
}
?>
<html>
<head><title>Login</title></head>
<body>
<form method="post" action="login.php">
 login:<br>
        Login : <input type="text" name="login"> <br>
        Mot de passe : <input type="password" name="password">
        <input type="submit" value="Login">
</form>
</body>
</html>
