    <?php
    /*      
    Instructions: chaque page doit inclure: include 'session.inc'; check_login();
     
    Features:
    - If the user is not authenticated, he/she will be automatically redirected to login page.
    - Everything is stored on server-side (we do not trust client-side data, such as cookie expiration)
    - IP addresses are checked on each access to prevent session cookie hijacking (such as Firesheep)
    - Session expires on user inactivity (Session expiration date is automatically updated everytime the user accesses a page.)
    - A unique secret key is generated on server-side for this session (and never sent over the wire) which can be used
      to sign forms (HMAC) or generate form tokens (to prevent XSRF attacks). (See $_SESSION['uid'] )
     
    */
	
    define('INACTIVITY_TIMEOUT',3600); // (in seconds). If the user does not access any page within this time, his/her session is considered expired.
     
    ini_set('session.use_cookies', 1);       // Use cookies to store session.
    ini_set('session.use_only_cookies', 1);  // Force cookies for session (phpsessionID forbidden in URL)
    ini_set('session.use_trans_sid', false); // Prevent php to use sessionID in URL if cookies are disabled.
     
    session_start();
     
    function allIPs()
    // Returns the IP address of the client (Used to prevent session cookie hijacking.)
    {
        $ip = $_SERVER["REMOTE_ADDR"];
        // Then we use more HTTP headers to prevent session hijacking from users behind the same proxy.
        if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) { $ip=$ip.'_'.$_SERVER['HTTP_X_FORWARDED_FOR']; }
        if (isset($_SERVER['HTTP_CLIENT_IP'])) { $ip=$ip.'_'.$_SERVER['HTTP_CLIENT_IP']; }
        return $ip;
    }
     
    function check_auth($login,$password) 
    // Check that user/password is correct.
    {
	$hostname = 'localhost';
	$username = 'root';
	$pass = '';

    if(isset($login) && isset($password)){
	
	try {
	$bdd = new PDO("mysql:host=$hostname;dbname=alternance", $username, $pass);
	}
	catch(PDOException $e) {
	echo $e->getMessage();
	}

	$mdp=sha1($password);
   
   	$query = $bdd->prepare("SELECT statut FROM `alternance.utilisateur`.`utilisateur` WHERE login = '$login' && mdp='$mdp'");
	$nb = $query->rowCount(); 
	if($nb=1){
	$nb = $query->fetch();
		$_SESSION['uid'] = sha1(uniqid('',true).'_'.mt_rand()); // generate unique random number (different than phpsessionid)
                                                                    // which can be used to hmac forms and form token (to prevent XSRF)
            $_SESSION['ip']=allIPs();                // We store IP address(es) of the client to make sure session is not hijacked.
            $_SESSION['username']=$login;
            $_SESSION['expires_on']=time()+INACTIVITY_TIMEOUT;  // Set session expiration.
			$_SESSION['statut']=$nb['statut']; //recuperer le statut de l'utilisateurs
            return True;
        }
	}
   	
   	else{   		
   		return false;   	
	}

    }
     
    function check_login()
    // Make sure user is logged in. Redirect to login page if not.
    {
        // If session does not exist on server side, or IP address has changed, or session has expired, show login screen.
        if (!isset ($_SESSION['uid']) || !$_SESSION['uid'] || $_SESSION['ip']!=allIPs() || time()>=$_SESSION['expires_on'])
        {
            logout();
        }
        $_SESSION['expires_on']=time()+INACTIVITY_TIMEOUT;  // User accessed a page : Update his/her session expiration date.
    }
     
    function logout()
    // Force logout, redirect to login page.
    {
        unset($_SESSION['uid'],$_SESSION['ip'],$_SESSION['expires_on']);   // Delete server-side session info
        header('Location: login.php');
        exit();
        // We do not bother deleting the phpsessionID cookie, because it can't be used anyway (All server-side
        // data attached to this session cookie is deleted. This makes the cookie useless. )
    }
     
	$hostname = 'localhost';
	$username = 'root';
	$password = '';
	
?>

